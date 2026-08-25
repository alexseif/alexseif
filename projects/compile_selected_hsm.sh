#!/usr/bin/env bash

# Enforce strict error handling
set -euo pipefail
shopt -s nullglob

LOG_FILE="selected/hsm_selected_conversion.log"
EXPORT_DIR="selected/hsm_exports"
MAX_PARALLEL=4

mkdir -p "$EXPORT_DIR"

# Overwrite / truncate log file on script start
exec > >(tee "$LOG_FILE") 2>&1

echo "============================================================"
echo "INITIATING HSM CV COMPILER PIPELINE (PARALLEL - SELECTED)"
echo "Temporal State: $(date '+%Y-%m-%d %H:%M:%S %Z')"
echo "Target Directory: $EXPORT_DIR/"
echo "Log File: $LOG_FILE"
echo "Concurrency Limit: $MAX_PARALLEL jobs"
echo "============================================================"

YAML_FILES=(selected/*.yaml)

# Halt execution if no input files exist
if [ ${#YAML_FILES[@]} -eq 0 ]; then
    echo "[ERROR] No YAML files found in selected/ directory. Halting execution."
    exit 1
fi

process_file() {
    local file="$1"
    local BASENAME
    BASENAME=$(basename "$file" .yaml)
    local EXPORT_PATH="${EXPORT_DIR}/${BASENAME}.md"
    
    echo "[$(date +'%H:%M:%S')] PROCESSING: $file"
    
    local RAW_DATA
    RAW_DATA=$(cat "$file")
    if agy --prompt "You are a Dutch Senior Enterprise Architect CV Formatter (€90,000+ market). Format the raw project data below into a rigorous Enterprise Case Study markdown document.

## Formatting Rules:
1. Header: Strictly use the format \`Lead Software Architect | [Business Name / Independent] | [Date Range]\`.
2. Enterprise Reframe: Focus on engineering logic, infrastructure, database schema, CI/CD, and quantifiable business impact.
3. Mandates & Constraints:
   - NEVER use the word 'WordPress' (use 'Block-Native Ecosystems' or 'Content Management System Architecture').
   - NEVER use 'Freelancer' (use 'Independent Software Architect' or 'Technical Consultant').
   - NO generic buzzwords (passionate, dynamic, results-driven). Use empirical metrics only.
   - Tone: Highly analytical, objective, and authoritative.

## Raw Project Data:
${RAW_DATA}

SYSTEM DIRECTIVE: Output ONLY the final markdown content for the Enterprise Case Study." > "$EXPORT_PATH"; then
        
        if [ -s "$EXPORT_PATH" ]; then
            echo "[SUCCESS] Generated: $EXPORT_PATH ($(wc -c < "$EXPORT_PATH") bytes)"
        else
            echo "[WARNING] $EXPORT_PATH was created but is empty. Check agy execution."
        fi
    else
        echo "[FAILED] Agent execution failed for: $file"
    fi
}

export -f process_file
export EXPORT_DIR

# Run with xargs in parallel
printf "%s\n" "${YAML_FILES[@]}" | xargs -I {} -P "$MAX_PARALLEL" bash -c 'process_file "$@"' _ {}

echo "[$(date +'%H:%M:%S')] Injecting frontmatter into exports..."
python3 ../scripts/inject_frontmatter.py

echo "============================================================"
echo "PIPELINE COMPLETE."
echo "============================================================"
