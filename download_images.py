import json
import os
import requests
from urllib.parse import urlparse

# Define paths
json_file_path = 'project-educate/centers.json'
img_base_dir = 'assets/img/pec_centers_dynamic'

# Ensure base directory exists
os.makedirs(img_base_dir, exist_ok=True)

# Load JSON
with open(json_file_path, 'r', encoding='utf-8') as f:
    centers = json.load(f)

print(f"Loaded {len(centers)} centers.")

for i, center in enumerate(centers):
    images = center.get('images', [])
    if not images:
        continue
    
    # Create folder wise structure
    # Use center_code as folder name if possible, else the index
    folder_name = center.get('center_code') or f"center_{i}"
    # Clean up folder name
    folder_name = folder_name.replace('CODE: ', '').strip()
    if not folder_name:
        folder_name = f"center_{i}"
        
    # Remove any special characters from folder name that aren't path friendly
    folder_name = "".join(c for c in folder_name if c.isalnum() or c in (' ', '-', '_')).strip()
    
    center_dir = os.path.join(img_base_dir, folder_name)
    os.makedirs(center_dir, exist_ok=True)
    
    new_image_paths = []
    
    for idx, img_url in enumerate(images):
        if not img_url.startswith('http'):
            # Already local or a data uri, leave as is
            new_image_paths.append(img_url)
            continue
            
        try:
            parsed_url = urlparse(img_url)
            # Extract just the filename and extension
            path_parts = parsed_url.path.split('/')
            original_filename = path_parts[-1] if path_parts else ''
            
            # Simple fallback if no extension
            ext = os.path.splitext(original_filename)[1]
            if not ext:
                ext = '.jpg'
                
            filename = f"img_{idx+1}{ext}"
            filepath = os.path.join(center_dir, filename)
            
            # Download if not already present
            if not os.path.exists(filepath):
                print(f"Downloading {img_url} to {filepath}...")
                response = requests.get(img_url, timeout=15)
                if response.status_code == 200:
                    with open(filepath, 'wb') as img_file:
                        img_file.write(response.content)
                else:
                    print(f"Failed to download {img_url} - Status Code: {response.status_code}")
                    # If failed, keep the original url
                    new_image_paths.append(img_url)
                    continue
                    
            # For the website, the HTML is in the project-educate folder,
            # so relative paths to assets need a '../' prefix
            relative_html_path = f"../{filepath}"
            new_image_paths.append(relative_html_path)
            
        except Exception as e:
            print(f"Error processing {img_url}: {e}")
            new_image_paths.append(img_url)
            
    center['images'] = new_image_paths

# Write updated JSON back
with open(json_file_path, 'w', encoding='utf-8') as f:
    json.dump(centers, f, indent=2, ensure_ascii=False)

# Also update the root centers.json if it exists, matching the user's recent edit
if os.path.exists('centers.json'):
    with open('centers.json', 'w', encoding='utf-8') as f:
        json.dump(centers, f, indent=2, ensure_ascii=False)

print("Images successfully downloaded and JSON files updated!")
