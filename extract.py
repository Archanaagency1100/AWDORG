from bs4 import BeautifulSoup
import json

# Load your HTML file
with open('Computer Learning Center - Anything Will Do ( AWDORG Foundation ) _ Non-Governmental Organization (NGO).htm', 'r', encoding='utf-8') as f:
    soup = BeautifulSoup(f.read(), 'html.parser')

results = []

# Find every column that contains a Project Educate Center
for column in soup.select('.elementor-top-column'):
    text_container = column.select_one('.elementor-widget-text-editor')
    
    if text_container and 'Project Educate Center' in text_container.get_text():
        
        # 1. Extract texts
        h3 = text_container.find('h3')
        h4s = text_container.find_all('h4')
        ps = text_container.find_all('p')
        
        project = h3.get_text(strip=True) if h3 else ""
        center = h4s[0].get_text(strip=True) if len(h4s) > 0 else ""
        location = h4s[1].get_text(strip=True) if len(h4s) > 1 else (ps[0].get_text(strip=True) if ps else "")
        
        center_code = ""
        for p in ps:
            if 'CODE:' in p.get_text():
                center_code = p.get_text(strip=True)
                break
                
        # 2. Extract images
        images = []
        img_tags = column.select('.swiper-slide:not(.swiper-slide-duplicate) img')
        for img in img_tags:
            src = img.get('data-src') or img.get('src')
            if src and src not in images and 'data:image' not in src:
                images.append(src)
                
        # 3. Extract video link
        video_link = None
        video_btn = column.select_one('.ekit-video-popup-btn')
        if video_btn and video_btn.get('href'):
            video_link = video_btn.get('href')
            
        results.append({
            "images": images,
            "project": project,
            "center": center,
            "location": location,
            "center_code": center_code,
            "video_link": video_link
        })

# Save the full array to a JSON file
with open('centers.json', 'w', encoding='utf-8') as outfile:
    json.dump(results, outfile, indent=2, ensure_ascii=False)
    
print(f"Successfully extracted {len(results)} centers!")