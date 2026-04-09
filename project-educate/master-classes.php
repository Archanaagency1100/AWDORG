<!doctype php>
<php lang="en">

  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>AWDORG Foundation - contact</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet" />

    <link rel="stylesheet" href="/assets/css/style.css" />
  </head>

  <body>
    <section class="ration-section">
      <?php include '../includes/header.php'; ?>
      <div class="ration-hero-section"></div>

      <div class="main-card">
        <div class="header-title pt-5">
          <h2>Master Classes</h2>
          <h5 class="">
            This is an initiative to create and spread awareness about basic
            hygiene especially during the difficult phase of COVID pandemic. Under
            this project we counsel people about the importance of clean
            surroundings, personal hygiene and maintaining social distancing to
            ensure safety
          </h5>
        </div>

        <div class="container mt-5">
          <div id="card-container" class="row g-4"></div>
        </div>
      </div>
    </section>

    <!-- ------------- Call to Action Strip--------------- -->
    <section class="cta-strip">
      <div class="container">
        <div class="cta-content">
          <div class="cta-text">
            <h3>Every single penny makes a difference</h3>
            <p>
              Your small contribution can bring big change in someone's life.
            </p>
          </div>

          <div class="cta-action">
            <a href="#" class="btn btn-donate">Donate Now</a>
          </div>
        </div>
      </div>
    </section>

    <?php include '../includes/footer.php'; ?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
      // 1. Your data - Just add more objects here!
      const masterclasses = [
        {
          title: "Ration Distribution",
          location: "noida",
          img: "/assets/img/project_ration/radion.webp",
        },
        {
          title: "Ration Distribution",
          location: "Sarita Vihar, New Delhi",
          img: "/assets/img/project_ration/ration-3-10-23.jpg",
        },
        {
          title: "Flood 2023 (450 individuals)",
          location: "Akshardjham, New Delhi",
          img: "/assets/img/project_ration/food-campaign.jpg",
        },
        {
          title: "Chabeel Campaign (2000 individuals)",
          location: "Akshardjham, New Delhi",
          img: "/assets/img/project_ration/chabeel-campaign.png",
        },
        {
          title: "Ration distribution (300 families)",
          location: "Gurgaon- HR",
          img: "/assets/img/project_ration/chabeel-campaign.png",
        },
      ];

      // 2. The function to build the cards
      const container = document.getElementById("card-container");

      masterclasses.forEach((item) => {
        const cardphp = `
                <div class="col-12 col-sm-6 col-md-4 col-xxl-3 mb-4">
                    <div class="card card-fixed bg-transparent">
                        <div class="img-container shadow-sm">
                            <img src="${item.img}" alt="${item.title}">
                        </div>
                        <div class="card-body p-0 pt-3">
                            <h6 class="class-title">${item.title}</h6>
                            <p class="text-muted mb-0 small">${item.location}</p>
                        </div>
                    </div>
                </div>
            `;
        container.innerHTML += cardphp;
      });
    </script>
  </body>
</php>