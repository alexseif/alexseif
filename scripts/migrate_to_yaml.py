import os
import glob
from typing import List
from dotenv import load_dotenv
from huggingface_hub import InferenceClient

# Load environment variables from .env file
load_dotenv()

def initialize_client() -> InferenceClient:
    """
    Initializes the Hugging Face InferenceClient.
    
    Returns:
        InferenceClient: A client configured to use the Hugging Face API.
    """
    token = os.getenv("HF_TOKEN")
    if not token:
        raise ValueError("HF_TOKEN not found in environment variables.")
    
    # Initialize the client (using a strong coding/instruct model available via serverless API)
    return InferenceClient(token=token, model="Qwen/Qwen2.5-Coder-32B-Instruct")

def get_markdown_files(directory: str) -> List[str]:
    """
    Retrieves all markdown files from the specified directory.
    
    Args:
        directory (str): The directory to search.
        
    Returns:
        List[str]: A list of file paths.
    """
    return glob.glob(os.path.join(directory, "*.md"))

def migrate_batch(client: InferenceClient, batch_size: int = 5) -> None:
    """
    Processes legacy markdown project files in batches and converts them to YAML.
    
    Args:
        client (InferenceClient): The initialized InferenceClient.
        batch_size (int): Number of files to process per execution run.
    """
    try:
        with open("schemas/project_schema.json", "r", encoding="utf-8") as f:
            schema: str = f.read()
    except FileNotFoundError:
        print("Error: schemas/project_schema.json not found.")
        return

    md_files: List[str] = get_markdown_files("projects")
    
    if not md_files:
        print("No markdown files found to migrate.")
        return

    batch: List[str] = md_files[:batch_size]
    print(f"Starting API migration for {len(batch)} files...")

    for file_path in batch:
        yaml_path: str = file_path.replace(".md", ".yaml")
        print(f"Processing: {file_path}")
        
        try:
            with open(file_path, "r", encoding="utf-8") as f:
                md_content = f.read()
        except Exception as e:
            print(f"Error reading {file_path}: {e}")
            continue
            
        system_prompt: str = "You are an expert data migration architect. Your output must ONLY contain valid YAML matching the requested schema. Do not wrap in ```yaml code blocks. Return ONLY the raw YAML text, no other text."
        
        user_prompt: str = f"""
        Map the following unstructured Markdown content and frontmatter into a strictly formatted YAML string that conforms exactly to the provided JSON Schema.
        
        SCHEMA:
        {schema}
        
        MARKDOWN CONTENT:
        {md_content}
        
        Rules:
        1. 'quantifiable_engineering_impact' must contain bullet points highlighting technical achievements.
        2. 'core_competencies' must be extracted from the content or tech stack.
        3. 'architectural_context' must be a summary paragraph of the project.
        4. If a field is missing in the markdown, provide a reasonable empty default (e.g., [] or "N/A").
        5. Return ONLY the raw YAML text. Do NOT use markdown code blocks (```yaml), do not add any conversational text.
        """
        
        try:
            # We want to use the chat completion API
            response = client.chat_completion(
                messages=[
                    {"role": "system", "content": system_prompt},
                    {"role": "user", "content": user_prompt}
                ],
                max_tokens=2048,
                temperature=0.1
            )
            
            result = response.choices[0].message.content.strip()
            
            # Clean up potential markdown code block artifacts if the model disobeys
            if result.startswith("```yaml"):
                result = result[7:]
            if result.startswith("```"):
                result = result[3:]
            if result.endswith("```"):
                result = result[:-3]
            
            result = result.strip()
            
            # Write the result directly to the file
            with open(yaml_path, "w", encoding="utf-8") as f:
                f.write(result)
                
            print(f"Successfully migrated -> {yaml_path}")
        except Exception as e:
            print(f"Error migrating {file_path}: {e}")

if __name__ == "__main__":
    try:
        hf_client = initialize_client()
        # Execute 5 files as a pilot to verify the logic
        migrate_batch(client=hf_client, batch_size=5)
    except ValueError as e:
        print(f"Configuration Error: {e}")
        exit(1)
