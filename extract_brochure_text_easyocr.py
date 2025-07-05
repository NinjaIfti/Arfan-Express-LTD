import os
import easyocr
from PIL import Image

# Path to the Broucher folder
BROCHURE_DIR = r'S:/GitHub/Arfan-Express-LTD/Broucher'
OUTPUT_FILE = 'extracted_brochure_text.txt'

def extract_text_from_images(folder):
    # Initialize EasyOCR reader (English language)
    reader = easyocr.Reader(['en'])
    
    print("Initializing EasyOCR reader...")
    
    # Open output file for writing
    with open(OUTPUT_FILE, 'w', encoding='utf-8') as output_file:
        output_file.write("ARFAN EXPRESS LIMITED - BROCHURE TEXT EXTRACTION\n")
        output_file.write("=" * 60 + "\n\n")
        
        for filename in sorted(os.listdir(folder)):
            if filename.lower().endswith('.jpg'):
                img_path = os.path.join(folder, filename)
                print(f'\n--- {filename} ---')
                output_file.write(f"\n--- {filename} ---\n")
                
                try:
                    # Read text from image
                    results = reader.readtext(img_path)
                    
                    # Extract and print the text
                    extracted_text = []
                    for (bbox, text, confidence) in results:
                        if confidence > 0.3:  # Only include text with reasonable confidence
                            extracted_text.append(text)
                    
                    if extracted_text:
                        text_content = '\n'.join(extracted_text)
                        print(text_content)
                        output_file.write(text_content + '\n')
                    else:
                        no_text_msg = "No text detected with sufficient confidence."
                        print(no_text_msg)
                        output_file.write(no_text_msg + '\n')
                        
                except Exception as e:
                    error_msg = f'Error processing {filename}: {e}'
                    print(error_msg)
                    output_file.write(error_msg + '\n')
    
    print(f"\n\nExtraction complete! Text saved to: {OUTPUT_FILE}")

if __name__ == '__main__':
    extract_text_from_images(BROCHURE_DIR) 