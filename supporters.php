<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Supporters</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet" />

    <link rel="stylesheet" href="/assets/css/style.css" />
</head>

<body>
    <?php include 'includes/header.php'; ?>
    <section class="supporters-section">

        <div class="hero-section"></div>

        <div class="main-card">
            <!-- <div class="container pt-5 pb-4"> -->
            <div class="header-title">
                <h2>Our Supporters</h2>
            </div>

            <div class="team-grid row g-2 text-center" id="card-container">
                <!-- </div> -->

            </div>

    </section>

    <!-- Call of Action -->
    <section class="cta-strip">
        <div class="container">
            <div class="cta-content">

                <div class="cta-text">
                    <h3>Every single penny makes a difference</h3>
                    <p>Your small contribution can bring big change in someone's life.</p>
                </div>

                <div class="cta-action">
                    <a href="#" class="btn btn-donate">Donate Now</a>
                </div>

            </div>
        </div>
    </section>

    <?php include 'includes/footer.php'; ?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/script.js"></script>
    <!-- <script src="js/include.js"></script>
    <script src="js/header.js"></script> -->
    <script>
        // 1. Your data - Just add more objects here!
        const masterclasses = [
            {
                "image": "/assets/img/supporters/5.png",
                "profileTitle": "Eish Singhal",
                "profileDesignation": "New Delhi"
            },
            {
                "image": "/assets/img/supporters/3.png",
                "profileTitle": "Anjitha Chepyala",
                "profileDesignation": "Telangana"
            },
            {
                "image": "/assets/img/supporters/9.png",
                "profileTitle": "Pragya Anand",
                "profileDesignation": "Delhi"
            },
            {
                "image": "/assets/img/supporters/acp-chanakyapuri.png",
                "profileTitle": "ACP - Shweta k",
                "profileDesignation": "Chanakya Puri, New Delhi"
            },
            {
                "image": "/assets/img/supporters/31.png",
                "profileTitle": "Vartika Srivastava",
                "profileDesignation": "USA"
            },
            {
                "image": "/assets/img/supporters/28.png",
                "profileTitle": "Andrea Syrtash",
                "profileDesignation": "New York"
            },
            {
                "image": "/assets/img/supporters/23.png",
                "profileTitle": "Dr. Prerna Kohli",
                "profileDesignation": "Gurgaon"
            },
            {
                "image": "/assets/img/supporters/22.png",
                "profileTitle": "Rj Simran K Sethi",
                "profileDesignation": "BIG FM"
            },
            {
                "image": "/assets/img/supporters/18.png",
                "profileTitle": "Rj Divya",
                "profileDesignation": "Radio City"
            },
            {
                "image": "/assets/img/supporters/17.png",
                "profileTitle": "Rj Ginnie",
                "profileDesignation": "Radio City"
            },
            {
                "image": "/assets/img/supporters/22.png",
                "profileTitle": "Rj Simran K Sethi",
                "profileDesignation": "BIG FM"
            },
            {
                "image": "/assets/img/supporters/1.png",
                "profileTitle": "Rj Nitin",
                "profileDesignation": "BIG FM"
            },
            {
                "image": "/assets/img/supporters/16.png",
                "profileTitle": "Shibani Kashyap",
                "profileDesignation": "Mumbai"
            },
            {
                "image": "/assets/img/supporters/15.png",
                "profileTitle": "Shreya Narayan",
                "profileDesignation": "Mumbai"
            },
            {
                "image": "/assets/img/supporters/4.png",
                "profileTitle": "Vikrant Prasher",
                "profileDesignation": "Jodhpur IPS deepak yadav"
            },
            {
                "image": "/assets/img/supporters/29.png",
                "profileTitle": "Dr. Kanika Monga",
                "profileDesignation": "USA"
            },

            {
                "image": "/assets/img/supporters/27.png",
                "profileTitle": "Dr. Nilay Nirupam",
                "profileDesignation": "UAE"
            },
           
            {
                "image": "/assets/img/supporters/25.png",
                "profileTitle": "Ajaya Gummadi",
                "profileDesignation": "USA"
            },
          

            {
                "image": "/assets/img/supporters/21.png",
                "profileTitle": "Shara Ashraf",
                "profileDesignation": "New Delhi"
            },
            {
                "image": "/assets/img/supporters/20.png",
                "profileTitle": "Harry Sandhu",
                "profileDesignation": "Melbourne"
            },
            {
                "image": "/assets/img/supporters/19.png",
                "profileTitle": "Bharath Bhaskar",
                "profileDesignation": "North Carolina"
            },
            {
                "image": "/assets/img/supporters/14.png",
                "profileTitle": "Reefat Rasool",
                "profileDesignation": "New Delhi"
            },
            {
                "image": "/assets/img/supporters/13.png",
                "profileTitle": "Kanupriya Dhandharia",
                "profileDesignation": "Gurgaon"
            },
            {
                "image": "/assets/img/supporters/12.png",
                "profileTitle": "Mukul Agarwal",
                "profileDesignation": "Gurgaon"
            },
            {
                "image": "/assets/img/supporters/11.png",
                "profileTitle": "Mrs. Kaur",
                "profileDesignation": "Faridabad"
            },
            {
                "image": "/assets/img/supporters/10.png",
                "profileTitle": "Raj Sharma",
                "profileDesignation": "Gurgaon"
            },

            {
                "image": "/assets/img/supporters/8.png",
                "profileTitle": "Rudrani Chettri",
                "profileDesignation": "Transgender Activist"
            },
            
            {
                "image": "/assets/img/supporters/6.png",
                "profileTitle": "Mani Ratan Singh",
                "profileDesignation": "Pondichery"
            },
            {
                "image": "/assets/img/supporters/31-1.png",
                "profileTitle": "Deepak Yadav",
                "profileDesignation": "New Delhi"
            },
            {
                "image": "/assets/img/supporters/2.png",
                "profileTitle": "Priyal Bhardwaj",
                "profileDesignation": "New Delhi"
            }
        ];

        // 2. The function to build the cards
        const container = document.getElementById('card-container');

        masterclasses.forEach(item => {
            const cardHTML = `
            <div class="supporters col-sm-6 col-md-4 col-xxl-3 p-2">
                <div class="supporters-card p-2">
                    <img class="img-fluid" src="${item.image}">
                </div>
                <div class="supporters-info">
                    <h3>${item.profileTitle}</h3>
                    <p class="role">${item.profileDesignation}</p>
                </div>
            </div>
        `;
            container.innerHTML += cardHTML;
        });
    </script>
</body>

</html>