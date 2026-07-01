import os
import glob
from typing import List
from dotenv import load_dotenv
from smolagents import CodeAgent, HfApiModel

# Load environment variables from .env file
load_dotenv()

def initialize_agent() -> CodeAgent:
    """
    Initializes the smolagents CodeAgent using Hugging Face's inference API.
    
    Returns:
        CodeAgent: An agent configured with base tools for reading/writing files.
    """
    # Initialize the model (using a strong, free coding/instruct model available via serverless API)
    model = HfApiModel("Qwen/Qwen2.5-Coder-32B-Instruct")
    
    # add_base_tools=True provides built-in tools like file reading/writing
    agent = CodeAgent(tools=[], model=model, add_base_tools=True)
    return agent

def get_markdown_files(directory: str) -> List[str]:
    """
    Retrieves all markdown files from the specified directory.
    
    Args:
        directory (str): The directory to search.
        
    Returns:
        List[str]: A list of file paths.
    """
    return glob.glob(os.path.join(directory, "*.md"))

def migrate_batch(agent: CodeAgent, batch_size: int = 5) -> None:
    """
    Processes legacy markdown project files in batches and converts them to YAML.
    
    Batching is used to prevent rate-limit exhaustion and allow for incremental
    human review. In LLM orchestration, processing large datasets synchronously
    increases the risk of catastrophic failure mid-script. 
    
    Args:
        agent (CodeAgent): The initialized smolagents instance.
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
    print(f"Starting smolagents migration for {len(batch)} files...")

    for file_path in batch:
        yaml_path: str = file_path.replace(".md", ".yaml")
        print(f"Processing: {file_path}")
        
        prompt: str = f"""
        You are an expert data migration architect. 
        Read the contents of the file `{file_path}`.
        Map the unstructured Markdown content and frontmatter into a strictly formatted YAML string that conforms exactly to the following JSON Schema:
        
        {schema}
        
        Rules:
        1. 'quantifiable_engineering_impact' must contain bullet points highlighting technical achievements.
        2. 'core_competencies' must be extracted from the content or tech stack.
        3. 'architectural_context' must be a summary paragraph of the project.
        4. If a field is missing in the markdown, provide a reasonable empty default (e.g., [] or "N/A").
        5. Do NOT use markdown code blocks (```yaml) in the final file output, just the raw text.
        
        Use your tools to read `{file_path}`, generate the YAML string, and then save it to `{yaml_path}`.
        """
        
        try:
            agent.run(prompt)
            print(f"Successfully migrated -> {yaml_path}")
        except Exception as e:
            print(f"Error migrating {file_path}: {e}")

if __name__ == "__main__":
    # Ensure the HF token is available
    if not os.getenv("HF_TOKEN"):
        print("Error: HF_TOKEN not found in .env file.")
        exit(1)
        
    code_agent: CodeAgent = initialize_agent()
    # Execute one file as a pilot to verify the logic
    migrate_batch(agent=code_agent, batch_size=1)
