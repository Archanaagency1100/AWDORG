<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>AWDORG Foundation - contact</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="assets/css/style.css" />
</head>

<body>
  <section class="projectpro-section">
    <?php include 'includes/header.php'; ?>
    <div class="projectpro-hero-section"></div>

    <div class="main-card">
      <div class="header-title">
        <h2>PROJECTpro</h2>
        <h5>Under this initiative, experienced professionals and volunteers from diverse industries and global backgrounds share their expertise through structured online sessions and workshops. ProjectPro aims to empower individuals by enhancing their skills, strengthening their knowledge, and supporting their professional growth in an evolving world.</h5>
      </div>
      <div class="container mt-5">
        <div id="card-container" class="row g-4"></div>
      </div>
    </div>


  </section>

  <?php include 'includes/footer.php'; ?>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <!-- <script src="js/include.js"></script>
  <script src="js/header.js"></script> -->
</body>

</html>


<script>
  // 1. Your data - Just add more objects here!
  const data = [
    {
      "image": "/assets/img/projectpro/14-june-2025.webp",
      "title": "Ms. Smriti Maini & Ms. Kumud Aneja",
      "subtitle": "Public Speaking & Confidence Building Workshop Project Educate Center Online Class 14 June 2025"
    },
    {
      "image": "/assets/img/projectpro/kulpreet-1.jpg",
      "title": "Ms. Kulpreet Vesuna",
      "subtitle": "The Powerful Masterclass Project Educate Center Online Class 18 November 2025"
    },

    {
      "image": "/assets/img/projectpro/8-march-2025.webp",
      "title": "Ms. Deepika",
      "subtitle": "Empowering Women Through Self Defence Project Educate Center Online Class 08 March 2025"
    },
    {
      "image": "/assets/img/projectpro/10-jan-2025.webp",
      "title": "SUN Self Confidence",
      "subtitle": "Project Educate Center Online Class 17 January 2025"
    },
    {
      "image": "/assets/img/projectpro/20-sept-2024.webp",
      "title": "Suneela Kathuria & Smriti Maini",
      "subtitle": "Choose a Right Career Project Educate Center Online Class 20 September 2024"
    },
    {
      "image": "/assets/img/projectpro/jyotirani-10-may-2024.webp",
      "title": "Major Jyoti Rani Singh",
      "subtitle": "Geography vs Environment Project Educate Center Online Class 10 May 2024"
    },

    {
      "image": "/assets/img/projectpro/prachi-rao-16-march.jpg",
      "title": "Prachi Rao",
      "subtitle": "Unlease Your Inner Calm Project Educate Center Online Class 16 March 2024"
    },
    {
      "image": "/assets/img/projectpro/sunita-pandey-2march-2024.jpg",
      "title": "Sunita Pandey",
      "subtitle": "Introducing to Contralateral Movements Project Educate Center Online Class 2 March 2024"
    },
    {
      "image": "/assets/img/projectpro/banpreet-kaur24feb-2024.jpg",
      "title": "Banpreet Kaur",
      "subtitle": "Building Resilience and Coping Skills Project Educate Center Online Class 24 February 2024"
    },
    {
      "image": "/assets/img/projectpro/23-december-2023.jpg",
      "title": "Sujoy Basu",
      "subtitle": "The Essence of Friendship Project Educate Center Online Class 23 December 2023"
    },

    {
      "image": "/assets/img/projectpro/16dec2023.jpeg",
      "title": "Abhi Malhotra",
      "subtitle": "Flameless Cooking Project Educate Center Online Class 16 December 2023"
    },
    {
      "image": "/assets/img/projectpro/anubhuti-9dec-2023.jpg",
      "title": "Anubhuti Sharma",
      "subtitle": "Law & Technology Project Educate Center Online Class 9 December 2023"
    },
    {
      "image": "/assets/img/projectpro/1dec2023.jpg",
      "title": "Akansha Mahalwal",
      "subtitle": "Importance of Self Love Project Educate Center Online Class 01 December 2023"
    },
    {
      "image": "/assets/img/projectpro/25nov2023.jpeg",
      "title": "Neha kaushik",
      "subtitle": "Habit Tracking Project Educate Center Online Class 25 November 2023"
    },

    {
      "image": "/assets/img/projectpro/24nov2023.jpeg",
      "title": "Omeet kaur",
      "subtitle": "Sustainable Development Project Educate Center Online Class 24 November 2023"
    },
    {
      "image": "/assets/img/projectpro/17-november-2023.jpeg",
      "title": "Abhilasha",
      "subtitle": "Story Telling Project Educate Center Online Class 17 November 2023"
    },
    {
      "image": "/assets/img/projectpro/27oct2023.jpeg",
      "title": "Akash Wigh",
      "subtitle": "Law in Daily Lives Project Educate Center Online Class 27 october 2023"
    },
    {
      "image": "/assets/img/projectpro/60ct-2023.jpg",
      "title": "Dimple Mehta",
      "subtitle": "Self Reflection And Emotional Regulaion Project Educate Center Online Class 06 October 2023"
    },

    {
      "image": "/assets/img/projectpro/222-9-2023.jpg",
      "title": "Prerana Chaturvedi",
      "subtitle": "Masterclass for Career Project Educate Center Online Class 22 September 2023"
    },
    {
      "image": "/assets/img/projectpro/15-9-2023.jpeg",
      "title": "Chavee Singh",
      "subtitle": "Career in Hospitality Project Educate Center Online Class 15 September 2023"
    },
    {
      "image": "/assets/img/projectpro/8-sep-2023.jpg",
      "title": "Divyansh Madaan",
      "subtitle": "Confidence & Communication Project Educate Center Online Class 08 September 2023"
    },
    {
      "image": "/assets/img/projectpro/master-class-01-sep.jpg",
      "title": "Kumud Aneja",
      "subtitle": "Communication Project Educate Center Online Class 01 September 2023"
    },

    {
      "image": "/assets/img/projectpro/25-aug-master-class.jpg",
      "title": "Neeru Dewan",
      "subtitle": "Life is a Journey Project Educate Center Online Class 25 August 2023"
    },
    {
      "image": "/assets/img/projectpro/commander-uncle.jpg",
      "title": "Cdr. Raj Kumar Sharma",
      "subtitle": "Career in Navy Project Educate Center Online Class 11 August 2023"
    },
    {
      "image": "/assets/img/projectpro/masterClass-4-august.jpg",
      "title": "Omeet Kaur",
      "subtitle": "Be Future Ready Project Educate Center Online Class 4 August 2023"
    },
    {
      "image": "/assets/img/projectpro/dr.-yashashri-vispute.jpeg",
      "title": "Dr. Yashashri Vispute",
      "subtitle": "Mental health Clrisis Project Educate Center Online Class 28 July 2023"
    },

    {
      "image": "/assets/img/projectpro/kumud-aneja.jpeg",
      "title": "Kumud Aneja",
      "subtitle": "Emotional Regulation Class Project Educate Center Online Class 21 July 2023"
    },
    {
      "image": "/assets/img/projectpro/12-may.jpeg",
      "title": "Dr. Anamika Sharma",
      "subtitle": "Oral Dental Care Class Project Educate Center Online Class 12 May 2023"
    },
    {
      "image": "/assets/img/projectpro/6-5-2023.jpeg",
      "title": "Puneet Ashish",
      "subtitle": "Masterclass About Peer Pressure Project Educate Center Online Class 6 May 2023"
    },
    {
      "image": "/assets/img/projectpro/swati-28-april.jpg",
      "title": "Swati Sharma",
      "subtitle": "Stage Fear and Communication skills Project Educate Center Online Class 28 April 2023"
    },

    {
      "image": "/assets/img/projectpro/06-apr.jpg",
      "title": "Omeet Kaur New Academic year",
      "subtitle": "Project Educate Center Online Class 08 April 2023"
    },
    {
      "image": "/assets/img/projectpro/awd-workshop-25-feb-2023.jpg",
      "title": "Aastha Bhatia",
      "subtitle": "Class About Exam Phobia Project Educate Center Online Class 25 February 2023"
    },
    {
      "image": "/assets/img/projectpro/11-02-2023.jpeg",
      "title": "Omeet Kaur Fear of Exam",
      "subtitle": "Project Educate Center Online Class 11 February 2023"
    },
    {
      "image": "/assets/img/projectpro/24-dec.jpeg",
      "title": "Abhishek jha",
      "subtitle": "TDA Academy Project Educate Center Online Class 24 December 2022"
    },

    {
      "image": "/assets/img/projectpro/17dec.jpeg",
      "title": "Shyam Prashad Photography & Film Production Class",
      "subtitle": "Project Educate Center Online Class 17 December 2022"
    },
    {
      "image": "/assets/img/projectpro/17-dec-22-2.jpg",
      "title": "Omeet Kaur",
      "subtitle": "Master About Confidence Building Project Educate Center Online Class 17 December 2022"
    },
    {
      "image": "/assets/img/projectpro/smita01.jpg",
      "title": "Smita",
      "subtitle": "Storytelling For Project Educate Center Online Class 10 December 2022"
    },
    {
      "image": "/assets/img/projectpro/3rddecomneet.jpeg",
      "title": "Omeet Kaur Overthinking Class",
      "subtitle": "Project Educate Center Online Class 3 December 2022"
    },

    {
      "image": "/assets/img/projectpro/3dec.jpeg",
      "title": "Riya Arora",
      "subtitle": "Media & Entertainment Class Project Educate Center Online Class 3 December 2022"
    },
    {
      "image": "/assets/img/projectpro/3reddec.jpeg",
      "title": "Riya Arora Media And Entertainment Class",
      "subtitle": "Project Educate Center Online Class 03 December 2022"
    },
    {
      "image": "/assets/img/projectpro/26-nov-22.jpg",
      "title": "Mr. Abhishek Jha",
      "subtitle": "Motivator for children attending Project Educate Center Online Class 26 November 2022"
    },
    {
      "image": "/assets/img/projectpro/26nov.jpeg",
      "title": "Ms. Abhilasha",
      "subtitle": "Motivation Class For Children Project Educate Center Online Class 26 November 2022"
    },

    {
      "image": "/assets/img/projectpro/19nov.jpeg",
      "title": "Mr. Sudhir Rana",
      "subtitle": "Motivation Class For Children Project Educate Center Online Class 19 November 2022"
    },
    {
      "image": "/assets/img/projectpro/24-sep-22.jpg",
      "title": "Veena Gupta Motivation Class For Children",
      "subtitle": "Project Educate Center Online Class 24 September 2022"
    },
    {
      "image": "/assets/img/projectpro/samar-toor.jpg",
      "title": "Major Samar Toor(Retired)",
      "subtitle": "Motivation Class For Children Project Educate Center Online Class 10 September 2022"
    },
    {
      "image": "/assets/img/projectpro/jatin-sarna-live.jpg",
      "title": "Jatin Sarna Fund Raising Request",
      "subtitle": "Project Educate Center Online Class 25 August 2022"
    },

    {
      "image": "/assets/img/projectpro/p3.jpg",
      "title": "Meet The Man behind fitness of Indian cricket team",
      "subtitle": "“Manoj Kumar” 21 June 2020"
    },
    {
      "image": "/assets/img/projectpro/p1.jpg",
      "title": "ART DIY by Divya Singh Devgan",
      "subtitle": "23 June 2020"
    },
    {
      "image": "/assets/img/projectpro/p2.jpg",
      "title": "Live Yoga on International Yoga Day with Nidhi",
      "subtitle": "21 June 2020"
    },
    {
      "image": "/assets/img/projectpro/p4.jpg",
      "title": "Live performance with Shivangi Sharma",
      "subtitle": "19 June 2020"
    },

    {
      "image": "/assets/img/projectpro/p5.jpg",
      "title": "Dilli Gharana Live with",
      "subtitle": "Vusat Iqbal Khan 17 June 2020"
    },
    {
      "image": "/assets/img/projectpro/p6.jpg",
      "title": "Live music with Abhideep Singh",
      "subtitle": "6 June 2020"
    },
    {
      "image": "/assets/img/projectpro/p7.jpg",
      "title": "Live Q&A session on health & weight by",
      "subtitle": "Dr. Shweta Diwan 3 June 2020"
    },
    {
      "image": "/assets/img/projectpro/p8.jpg",
      "title": "It's 31st By Dinero Ash",
      "subtitle": "31 May 2020"
    },

    {
      "image": "/assets/img/projectpro/p9.jpg",
      "title": "Live Music with Harpreet",
      "subtitle": "30 May 2020"
    },
    {
      "image": "/assets/img/projectpro/p10.jpg",
      "title": "Live with Sumitra Iyer “Singer & Lactation Consultant”",
      "subtitle": "29 May 2020"
    },
    {
      "image": "/assets/img/projectpro/p11.jpg",
      "title": "Live Q&A on Covid19 with",
      "subtitle": "Dr. Nilay Nirupam 29 May 2020"
    },
    {
      "image": "/assets/img/projectpro/p12.jpg",
      "title": "Live session on Mental Well Being",
      "subtitle": "During & Post COVID19 by Arouba Kabir Pathan 28 May 2020"
    },

    {
      "image": "/assets/img/projectpro/p13.jpg",
      "title": "DJ Rinaa Live",
      "subtitle": "20 May 2020"
    },
    {
      "image": "/assets/img/projectpro/p15.jpg",
      "title": "\"Who will crumble who will thrive?\"",
      "subtitle": "by Vandana Vadehra 13 May 2020"
    },
    {
      "image": "/assets/img/projectpro/p14.jpg",
      "title": "Shibani Kashyap Live",
      "subtitle": "17 May 2020"
    },
    {
      "image": "/assets/img/projectpro/p16.jpg",
      "title": "\"Transform Your Life\"",
      "subtitle": "by Deepali Narula 11 May 2020"
    },

    {
      "image": "/assets/img/projectpro/L17-1.jpg",
      "title": "Bhangra Tutorial",
      "subtitle": "by Ashmeet Singh 10 May 2020"
    },
    {
      "image": "/assets/img/projectpro/p17.jpg",
      "title": "\"UNBOX YOURSELF\"",
      "subtitle": "by Tunvey Gogia 6 May 2020"
    },
    {
      "image": "/assets/img/projectpro/p1-1.jpg",
      "title": "Karona...Wedding",
      "subtitle": "by Punita Nagpal 4 May 2020"
    },
    {
      "image": "/assets/img/projectpro/p2-1.jpg",
      "title": "An evening of melodious music",
      "subtitle": "by narayana's 6 May 2020"
    },

    {
      "image": "/assets/img/projectpro/p3-1.jpg",
      "title": "\"Thinking about Thinking\"",
      "subtitle": "by Rahi Kachole 3 May 2020"
    },
    {
      "image": "/assets/img/projectpro/p5-1.jpg",
      "title": "How to speak on camera",
      "subtitle": "by Richa Khandelwal 30 April 2020"
    },
    {
      "image": "/assets/img/projectpro/p4-1.jpg",
      "title": "Bhangra Tutorial by Ashmeet Singh",
      "subtitle": "1 May 2020"
    },
    {
      "image": "/assets/img/projectpro/p6-1.jpg",
      "title": "Live session workout at home",
      "subtitle": "@ lockdown by Mr. Akhil & Kapil"
    },

    {
      "image": "/assets/img/projectpro/p7-1.jpg",
      "title": "Smokey eye makeup",
      "subtitle": "by Shikha Oberoi Karlal 28 April 2020"
    },
    {
      "image": "/assets/img/projectpro/p8-1.jpg",
      "title": "Unknown facts about insurance",
      "subtitle": "by Mr. Ajay Singhal 28 April 2020"
    },
    {
      "image": "/assets/img/projectpro/p9-1.jpg",
      "title": "LIVE comedy",
      "subtitle": "by Raja Rancho 26 April 2020"
    },
    {
      "image": "/assets/img/projectpro/p10-1.jpg",
      "title": "Online DJ Night",
      "subtitle": "by Dj Tarandeep 25 April 2020"
    },

    {
      "image": "/assets/img/projectpro/p11-1.jpg",
      "title": "Fact vs Myth - Covid19",
      "subtitle": "by Dr. Kanika Monga 25 April 2020 Live from USA"
    },
    {
      "image": "/assets/img/projectpro/p12-1.jpg",
      "title": "Business Valuation",
      "subtitle": "by Mr. Dinesh Kaushal 24 April 2020"
    },
    {
      "image": "/assets/img/projectpro/p13-1.jpg",
      "title": "Art Within",
      "subtitle": "by Ashwani Kumar Prithviwasi 22 March 2020"
    },
    {
      "image": "/assets/img/projectpro/p14-1.jpg",
      "title": "Sky is the limit",
      "subtitle": "by Madhu Kapoor (ALT) 21 April 2020"
    },

    {
      "image": "/assets/img/projectpro/p15-1.jpg",
      "title": "Financial Freedom",
      "subtitle": "by Mr. Krishan Mangawa 20 April 2020"
    },
    {
      "image": "/assets/img/projectpro/p16-1.jpg",
      "title": "Virtual Yoga Session",
      "subtitle": "by Nidhi Bisht 18 April 2020"
    },
    {
      "image": "/assets/img/projectpro/p17-1.jpg",
      "title": "Live Counseling",
      "subtitle": "with Dr. Prerna Kohli 13 April 2020"
    },
    {
      "image": "/assets/img/projectpro/p18.jpg",
      "title": "LIVE Q & A",
      "subtitle": "with Harry Sandhu 7 April 2020"
    },

  ];

  // 2. The function to build the cards
  const container = document.getElementById('card-container');
  data.forEach(item => {
    const cardHTML = `
                <div class="col-12 col-md-6 col-xxl-4 mb-4">
                    <div class="card card-fixed bg-transparent">
                        <div class="img-container ">
                            <img src="${item.image}" alt="${item.title}">
                        </div>
                        <div class="card-body p-0 pt-3">
                            <h6 class="class-title">${item.title} ${item.subtitle || ''}</h6>
                            <p class="text-muted mb-0 small">${item.location || 'Pan India'}</p>
                        </div>
                    </div>
                </div>
            `;
    container.innerHTML += cardHTML;
  });
</script>
</script>