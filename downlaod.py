import os
import requests
from urllib.parse import urlparse
import   json

# data = [json.load(open("students.json"))]
data = [
[
  
  {
    "image": "https://www.anythingwilldo.org/wp-content/uploads/2025/04/haidakhan_PEC.jpeg",
    "title": "Parmananda Kandpaal Saraswati Shishu Mandir Nanakmatta, Udham Singh nagar – Uttarakhand",
    "date": "N/A",
    "author": "by Dausa Bhaskar"
  },
  {
    "image": "https://www.anythingwilldo.org/wp-content/uploads/2024/03/nanakmatta-news-708x1024.jpg",
    "title": "Parmananda Kandpaal Saraswati Shishu Mandir Nanakmatta, Udham Singh nagar – Uttarakhand",
    "date": "N/A",
    "author": "by Uttaranchal Darpan"
  },
  {
    "image": "https://www.anythingwilldo.org/wp-content/uploads/2024/01/sitapur-20-jan-634x1024.jpeg",
    "title": "Mahatma Gandhi Govt. school, sitapurl – Jaipur",
    "date": "N/A",
    "author": "by Dainik Jagran"
  },
  {
    "image": "https://www.anythingwilldo.org/wp-content/uploads/2023/10/30-sep-02.jpg",
    "title": "Hindustan Women Achievers Awards 2023 – Uttarakhand",
    "date": "N/A",
    "author": "by Hindustan"
  },
  {
    "image": "https://www.anythingwilldo.org/wp-content/uploads/2023/10/30-sep-1024x829.jpg",
    "title": "Hindustan Women Achievers Awards 2023 – Uttarakhand",
    "date": "N/A",
    "author": "by Hindustan"
  },
  {
    "image": "https://www.anythingwilldo.org/wp-content/uploads/2023/09/18-Sep-2023-nazaria-khabar-1024x925.jpg",
    "title": "Dehradun – Uttarakhand",
    "date": "N/A",
    "author": "by Nazariya Khabar"
  },
  {
    "image": "https://www.anythingwilldo.org/wp-content/uploads/2023/09/18-Sep-2023-Hindustan-550x1024.jpg",
    "title": "Saraswati Vidya Mandir Manduwala, Dehradun – Uttarakhand",
    "date": "N/A",
    "author": "by Hindustan"
  },
  {
    "image": "https://www.anythingwilldo.org/wp-content/uploads/2023/09/16-sep-2023-02-1-486x1024.jpg",
    "title": "Saraswati Shishu Mandir Gauchar, Chamoli – Uttarakhand",
    "date": "N/A",
    "author": "by Amar Ujala"
  },
  {
    "image": "https://www.anythingwilldo.org/wp-content/uploads/2023/09/16-sep-2023.jpg",
    "title": "District Chamoli – Uttarakhand",
    "date": "N/A",
    "author": "by Dainik Jagran"
  },
  {
    "image": "https://www.anythingwilldo.org/wp-content/uploads/2023/09/janrksha-times1-587x1024.jpg",
    "title": "Pragatisheel Junior High School, Barhaini Village , Bajpur Block , Udam Singh Nagar – Uttarakhand",
    "date": "N/A",
    "author": "by Janraksha Times"
  },
  {
    "image": "https://www.anythingwilldo.org/wp-content/uploads/2023/09/amar-ujala-haldu-news.png",
    "title": "Bhartiya Veer Sainik School, Durgapalpur Parma, Motahaldu, Haldwani(Nainital) – Uttarakhand",
    "date": "N/A",
    "author": "by Amar Ujala"
  },
  {
    "image": "https://www.anythingwilldo.org/wp-content/uploads/2023/08/aj-di-awaaz.jpg",
    "title": "MBBGGGG College Rattewal, Shaheed Bhagat Singh Nagar – Punjab",
    "date": "N/A",
    "author": "by Aj Di Awaaz"
  },
  {
    "image": "https://www.anythingwilldo.org/wp-content/uploads/2023/08/jagran.jpg",
    "title": "MBBGGGG College Rattewal, Shaheed Bhagat Singh Nagar – Punjab",
    "date": "N/A",
    "author": "by Jagran"
  },
  {
    "image": "https://www.anythingwilldo.org/wp-content/uploads/2023/08/dainik-bhaskar.jpg",
    "title": "MBBGGGG College Rattewal, Shaheed Bhagat Singh Nagar – Punjab",
    "date": "N/A",
    "author": "by Dainik Bhaskar"
  },
  {
    "image": "https://www.anythingwilldo.org/wp-content/uploads/2024/02/nazar-ki-nazar.jpg",
    "title": "Sadbhawna Siksha Sadan Patel Chowk Shanti Nagar – Delhi",
    "date": "N/A",
    "author": "by Najar Ki Najar"
  },
  {
    "image": "https://www.anythingwilldo.org/wp-content/uploads/2023/08/nazarkinazarnews2-1024x744.jpg",
    "title": "Sadbhawna Siksha Sadan Patel Chowk Shanti Nagar – Delhi",
    "date": "N/A",
    "author": "by Punjab Kesari"
  },
  {
    "image": "https://www.anythingwilldo.org/wp-content/uploads/2023/08/punjab-school-906x1024.jpeg",
    "title": "Maharaj Brahma Nand Bhuriwale Garibdassi, Gokul Gour Girls College, Rattewal, Shaheed Bhagat Singh Nagar – Punjab",
    "date": "N/A",
    "author": "by Jagran"
  },
  {
    "image": "https://www.anythingwilldo.org/wp-content/uploads/2023/07/amar-ujala-13-july-611x1024.jpg",
    "title": "Tilakdhari Vindhyavasini TBC College Banwaripur, Chhanbey, Mirzapur – Uttar Pradesh",
    "date": "N/A",
    "author": "by Amar Ujala"
  },
  {
    "image": "https://www.anythingwilldo.org/wp-content/uploads/2023/07/dainik-dhara-532x1024.jpg",
    "title": "Uchch Prathamik Vidhyalaya, Sahaleypur kotla – Hapur, Uttarpradesh",
    "date": "N/A",
    "author": "by Dainik Dhara News"
  },
  {
    "image": "https://www.anythingwilldo.org/wp-content/uploads/2023/07/shakun-times.jpg",
    "title": "Uchch Prathamik Vidhyalaya, Sahaleypur kotla – Hapur, Uttarpradesh",
    "date": "N/A",
    "author": "by Shakun Times"
  },
  {
    "image": "https://www.anythingwilldo.org/wp-content/uploads/2023/06/Dausa-Rajesthan-705x1024.jpg",
    "title": "Shrimati Fuladevi Rajkiye Uchh Madhyamik Vidyalaya, Mahwa, Dausa, – Rajasthan",
    "date": "N/A",
    "author": "by Dainik Bhaskar"
  },
  {
    "image": "https://www.anythingwilldo.org/wp-content/uploads/2023/05/garurnews-704x1024.jpg",
    "title": "Saraswati Shishu Mandir, Garur, Bageshwar – Uttarakhand",
    "date": "N/A",
    "author": "by Jagran News"
  },
  {
    "image": "https://www.anythingwilldo.org/wp-content/uploads/2023/05/amat-ujala--704x1024.jpg",
    "title": "Kholiya Vivekanand Inter College Garur, Bageshwar – Uttarakhand",
    "date": "N/A",
    "author": "by Amar Ujala"
  },
  {
    "image": "https://www.anythingwilldo.org/wp-content/uploads/2023/05/tikhi-najar-704x1024.jpg",
    "title": "Saraswati Shishu Vidya Mandir Garampani, Nainital – Uttarakhand",
    "date": "N/A",
    "author": "by Tikhi Najar"
  },
  {
    "image": "https://www.anythingwilldo.org/wp-content/uploads/2023/05/prakritlok-724x1024.jpeg",
    "title": "Saraswati Shishu Mandir Garur, Bageshwar - Uttarakhand",
    "date": "N/A",
    "author": "by Prakrit Lok"
  },
  {
    "image": "https://www.anythingwilldo.org/wp-content/uploads/2023/05/ratriyapahal-784x1024.jpeg",
    "title": "Saraswati Shishu Vidya Mandir Sisona, Sitarganj, Udham Singh Nagar - Uttarakhand",
    "date": "N/A",
    "author": "by Ratriya Pahal"
  },
  {
    "image": "https://www.anythingwilldo.org/wp-content/uploads/2023/05/shahtimes-724x1024.jpeg",
    "title": "Saraswati Shishu Vidya Mandir Sisona, Sitarganj, Udham Singh Nagar - Uttarakhand",
    "date": "N/A",
    "author": "by Shah Times"
  },
  {
    "image": "https://www.anythingwilldo.org/wp-content/uploads/2023/05/uttanchal-darpan-859x1024.jpeg",
    "title": "Saraswati Shishu Vidya Mandir Sisona, Sitarganj, Udham Singh Nagar - Uttarakhand",
    "date": "N/A",
    "author": "by Uttaranchal Darpan"
  },
  {
    "image": "https://www.anythingwilldo.org/wp-content/uploads/2023/04/WhatsApp-Image-2023-04-26-at-17.48.05-700x1024.jpeg",
    "title": "Rajkiya Utkrisht Uchch Prathmik Vidya, Beekroo(Nadbai),Bharatpur – Rajasthan",
    "date": "N/A",
    "author": "by Jaipur Mid-Day Times"
  },
  {
    "image": "https://www.anythingwilldo.org/wp-content/uploads/2023/04/WhatsApp-Image-2023-04-26-at-17.48.04-491x1024.jpeg",
    "title": "Rajkiya Utkrisht Uchch Prathmik Vidya, Beekroo(Nadbai), Bharatpur – Rajasthan",
    "date": "N/A",
    "author": "by Hindustan"
  },
  {
    "image": "https://www.anythingwilldo.org/wp-content/uploads/2023/04/5fe5c250-40b9-45f6-bcb6-dabb90428271.jpg",
    "title": "Rajkiya Utkrisht Uchch Prathmik Vidya, Beekroo(Nadbai), Bharatpur – Rajasthan",
    "date": "N/A",
    "author": "by Jaipur Mid-Day Times"
  },
  {
    "image": "https://www.anythingwilldo.org/wp-content/uploads/2023/04/d4b2d170-b8a5-4e11-afcf-896595f7fcb6-1024x646.jpg",
    "title": "Rajkiya Utkrisht Uchch Prathmik Vidya, Beekroo(Nadbai), Bharatpur – Rajasthan",
    "date": "N/A",
    "author": "by Hindustan"
  },
  {
    "image": "https://www.anythingwilldo.org/wp-content/uploads/2023/04/81d94974-17bd-4fe7-9641-0356c25d0dbc-1024x1024.jpg",
    "title": "Rajkiya Utkrisht Uchch Prathmik Vidya, Beekroo(Nadbai), Bharatpur – Rajasthan",
    "date": "N/A",
    "author": "by ST India News"
  },
  {
    "image": "https://www.anythingwilldo.org/wp-content/uploads/2023/04/24-04-2023-900x1024.jpg",
    "title": "Rajkiya Utkrisht Uchch Prathmik Vidya, Beekroo(Nadbai), Bharatpur – Rajasthan",
    "date": "N/A",
    "author": "by Rajasthan News"
  },
  {
    "image": "https://www.anythingwilldo.org/wp-content/uploads/2023/04/lalsana-center.jpg",
    "title": "Uchch Prathmik Vidyalaya Lalsana, Vikash Chhetra, Rajpura – Meerut",
    "date": "N/A",
    "author": "by Dainik Jagran Meerut"
  },
  {
    "image": "https://www.anythingwilldo.org/wp-content/uploads/2022/12/haridwar-educate-center-25dec-702x1024.jpg",
    "title": "Thakur Ilam Singh Sarswati Shishu Mandir, Bongla, Bahadarabad, Haridwar – Uttrakhand",
    "date": "N/A",
    "author": "by Haridwar Ki Gunj"
  },
  {
    "image": "https://www.anythingwilldo.org/wp-content/uploads/2022/12/haridwar-educate-center-737x1024.jpg",
    "title": "Thakur Ilam Singh Sarswati Shishu Mandir, Bongla, Bahadarabad, Haridwar – Uttrakhand",
    "date": "N/A",
    "author": "by Haridwar Ki Gunj"
  },
  {
    "image": "https://www.anythingwilldo.org/wp-content/uploads/2022/12/hndustan-newsclip.jpg",
    "title": "Swami Nityananda Saraswati Shishu Mandir, Rishikesh – Uttrakhand",
    "date": "N/A",
    "author": "by Hindustan"
  },
  {
    "image": "https://www.anythingwilldo.org/wp-content/uploads/2022/12/manglore-newsclips.jpg",
    "title": "Saraswati Shishu Vidhya Mandir, Manglaur - Uttrakhand",
    "date": "N/A",
    "author": "by Dainik Jagran"
  },
  {
    "image": "https://www.anythingwilldo.org/wp-content/uploads/2022/12/newsclip-rishikesh1-585x1024.jpg",
    "title": "Swami Nityananda Saraswati Shishu Mandir, Rishikesh, – Uttrakhand",
    "date": "N/A",
    "author": "by Amar Ujala"
  },
  {
    "image": "https://www.anythingwilldo.org/wp-content/uploads/2022/12/rishikesh-newclip2-585x1024.jpg",
    "title": "Swami Nityananda Saraswati Shishu Mandir, Rishikesh – Uttrakhand",
    "date": "N/A",
    "author": "by Swatantra Chetna"
  },
  {
    "image": "https://www.anythingwilldo.org/wp-content/uploads/2022/11/jagran-vivekananda-563x1024.jpg",
    "title": "Vivekananda Vidhya Mandir – Danya, Uttrakhand",
    "date": "N/A",
    "author": "by Jagran"
  },
  {
    "image": "https://www.anythingwilldo.org/wp-content/uploads/2022/11/amar-ujala-AWD-pc-dsribution-563x1024.jpg",
    "title": "Saraswati Vidhya Mandir – Chaukhutia, Uttrakhand",
    "date": "N/A",
    "author": "by Amar Ujala"
  },
  {
    "image": "https://www.anythingwilldo.org/wp-content/uploads/2022/11/uttar-ujala-AWD-news-563x1024.jpg",
    "title": "Vivekananda Vidhya Mandir – Danya, Uttrakhand",
    "date": "N/A",
    "author": "by Uttar Ujala"
  },
  {
    "image": "https://www.anythingwilldo.org/wp-content/uploads/2022/11/khatima-times-AWD-563x1024.jpg",
    "title": "Saraswati Shishu Mandir, Khatima – Uttrakhand",
    "date": "N/A",
    "author": "by Khatima Times"
  },
  {
    "image": "https://www.anythingwilldo.org/wp-content/uploads/2022/11/danya-news.png",
    "title": "Vivekananda Vidhya Mandir, Danya, – Uttrakhand",
    "date": "N/A",
    "author": "by Jagran"
  },
  {
    "image": "https://www.anythingwilldo.org/wp-content/uploads/2022/11/tanak.jpeg",
    "title": "Saraswati Shishu Mandir, Tanakpur – Uttrakhand",
    "date": "N/A",
    "author": "by Shah Times"
  },
  {
    "image": "https://www.anythingwilldo.org/wp-content/uploads/2022/11/pec-11-img.jpg",
    "title": "Rajkumari Aggarwal Vidhya Mandir Saraswati Shishu Mandir Inter College , Tanakpur, – Uttrakhand",
    "date": "N/A",
    "author": "by Parvat Prerna"
  },
  {
    "image": "https://www.anythingwilldo.org/wp-content/uploads/2022/11/tanakpur_kuvarganj.jpg",
    "title": "Saraswati Shishu Mandir, Tanakpur – Uttrakhand",
    "date": "N/A",
    "author": "by Hindustan epaper"
  },
  {
    "image": "https://www.anythingwilldo.org/wp-content/uploads/2022/11/tanakpur-saraswati-shishu-mandir-to-the-digital-world-an-ngo-named-anything-willu-do-donated-3-pc-553x1024.jpg",
    "title": "Saraswati Shishu Mandir, Tanakpur – Uttrakhand",
    "date": "N/A",
    "author": "by Tanakpur Times"
  },
  {
    "image": "https://www.anythingwilldo.org/wp-content/uploads/2022/11/tanakpur-ngo-awd-provided-computers-to-shishu-mandir-553x1024.jpg",
    "title": "Saraswati Shishu Mandir, Tanakpur – Uttrakhand",
    "date": "N/A",
    "author": "by Champawat Khabar"
  },
  {
    "image": "https://www.anythingwilldo.org/wp-content/uploads/2022/11/parvatprerna-ngoo-anitung-vilu-doo-donated-five-digital-computers-to-saraswati-shishu-temple-2022-11-22-11_54_18-553x1024.jpg",
    "title": "Saraswati Shishu Mandir, Tanakpur – Uttrakhand",
    "date": "N/A",
    "author": "by Parvat Prerna"
  },
  {
    "image": "https://www.anythingwilldo.org/wp-content/uploads/2022/11/shah-times-17-nov-22.jpg",
    "title": "Saraswati Vidya Mandir – Manduwala, Dehradun",
    "date": "N/A",
    "author": "by Shah Times"
  },
  {
    "image": "https://www.anythingwilldo.org/wp-content/uploads/2022/11/pec-12-img-1.jpg",
    "title": "Saraswati Vidya Mandir – Manduwala, Dehradun",
    "date": "N/A",
    "author": "by Hindustan Times, Uttrakhand"
  },
  {
    "image": "https://www.anythingwilldo.org/wp-content/uploads/2022/10/WhatsApp-Image-2022-09-16-at-13.47.03.jpeg",
    "title": "Saraswati Vidya Mandir – Manduwala, Dehradun",
    "date": "N/A",
    "author": "by Prakrit Lok/ Rashtriya Sahara/ Hindustan"
  },
  {
    "image": "https://www.anythingwilldo.org/wp-content/uploads/2022/07/img_62c27fae981c31-1024x1024.jpg",
    "title": "विवेकानंद विद्या मंदिर और सरस्वती शिशु मंदिर",
    "date": "N/A",
    "author": "by Amarujala, Uttrakhand"
  },
  {
    "image": "https://www.anythingwilldo.org/wp-content/uploads/2022/07/CLC-1.jpg",
    "title": "विवेकानंद विद्या मंदिर और सरस्वती शिशु मंदिर",
    "date": "N/A",
    "author": "by\nPrakrit Lok"
  },
  {
    "image": "https://www.anythingwilldo.org/wp-content/uploads/2022/07/CLC-news-2.jpg",
    "title": "विवेकानंद विद्या मंदिर और सरस्वती शिशु मंदिर",
    "date": "N/A",
    "author": "by\nCreative News Express"
  },
  {
    "image": "https://www.anythingwilldo.org/wp-content/uploads/2022/02/jagran-15-12-2021.jpg",
    "title": "GPS Kainchi Dham",
    "date": "N/A",
    "author": "by Dainik Jagran, Uttrakhand"
  },
  {
    "image": "https://www.anythingwilldo.org/wp-content/uploads/2022/02/hidustan-15-dec-2021a.jpg",
    "title": "GPS Kainchi Dham",
    "date": "N/A",
    "author": "by Hindustan Times, Uttrakhand"
  },
  {
    "image": "https://www.anythingwilldo.org/wp-content/uploads/2022/02/baby-sitara.jpg",
    "title": "Baby Sitara, a harbinger of hope",
    "date": "N/A",
    "author": "by Hindustan Times"
  },
  {
    "image": "https://www.anythingwilldo.org/wp-content/uploads/2022/02/hindustan-times-20-aug-2020.jpg",
    "title": "Changing lives, one stitch at a time",
    "date": "N/A",
    "author": "by Hindustan Times, Uttrakhand"
  }
]
]
folder = "download_images"
os.makedirs(folder, exist_ok=True)

for group in data:
    for item in group:
        url = item["image"]

        # get filename from URL
        filename = os.path.basename(urlparse(url).path)
        filepath = os.path.join(folder, filename)

        try:
            response = requests.get(url, timeout=10)
            response.raise_for_status()

            with open(filepath, "wb") as f:
                f.write(response.content)

            print(f"Downloaded: {filepath}")

        except Exception as e:
            print(f"Failed to download {url}: {e}")