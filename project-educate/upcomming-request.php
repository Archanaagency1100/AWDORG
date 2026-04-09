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
        <div class="header-title">
          <h2>"Upcomming Requests”</h2>
          <h5 class="pt-4">
            Each one teaches one. This is an initiative that strongly believes
            that age is not a limit for those who are willing to teach or learn.
            Each one of us can educate so many around us; we can either teach
            children or help them get an education.
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
    <!-- <script src="/js/include.js"></!-->
    <script>
      // 1. Your data - Just add more objects here!
      const masterclasses = [
        {
          title: "Alipur, Nadbai",
          location: "Akhegadh, Nadbai",
          img: "/assets/img/upcomming-centers/01-akhegadh-nadbai.jpg",
        },
        {
          title: "Alipur, Vair",
          location: "Alipur, Vair",
          img: "/assets/img/upcomming-centers/02-alipur-vair.jpg",
        },
        {
          title: "Rudrapur, Dehradoon",
          location: "Rudrapur, Dehradoon",
          img: "/assets/img/upcomming-centers/03-rudrapur-dehradoon.jpg",
        },
        {
          title: "Rajouri Garden, New Delhi",
          location: "Rajouri Garden, New Delhi",
          img: "/assets/img/upcomming-centers/04-rajouri-garden-new-delhi.jpg",
        },
        {
          title: "Puna, Maharastra",
          location: "Puna, Maharastra",
          img: "/assets/img/upcomming-centers/05-Puna-maharastra.jpg",
        },
        {
          title: "Nanakmatta, Udhamsinghnagar",
          location: "Nanakmatta, Udhamsinghnagar",
          img: "/assets/img/upcomming-centers/06-nanakmatta-udhamsinghnagar.jpg",
        },
        {
          title: "Balabhgarh, Bharatpur",
          location: "Balabhgarh, Bharatpur",
          img: "/assets/img/upcomming-centers/07-balabhgarh-bharatpur.jpg",
        },
        {
          title: "Bhaktram Gochar, Chamoli",
          location: "Bhaktram Gochar, Chamoli",
          img: "/assets/img/upcomming-centers/08-bhaktram-gochar-chamoli.jpg",
        },
        {
          title: "Dhankya, Jaipur",
          location: "Dhankya, Jaipur",
          img: "/assets/img/upcomming-centers/09-dhankya-jaipur.jpg",
        },
        {
          title: "Gagrigol, Bagheshwar",
          location: "Gagrigol, Bagheshwar",
          img: "/assets/img/upcomming-centers/10-gagrigol-bagheshwar.jpg",
        },
        {
          title: "Gochar Chamoli",
          location: "Gochar Chamoli",
          img: "/assets/img/upcomming-centers/11-gochar-chamoli.jpg",
        },
      ];

      // 2. The function to build the cards
      const container = document.getElementById("card-container");

      masterclasses.forEach((item) => {
        const cardphp = `
                <div class="col-12 col-sm-6 col-md-4 col-xxl-3 mb-4">
                    <div class="card card-fixed bg-transparent">
                        <div class="img-container shadow-sm" style="height: auto;">
                            <img src="${item.img}" alt="${item.title}" style="object-fit: contain; height: auto; width: 100%;">
                        </div>
                        <div class="card-body p-0 pt-3 text-center">
                            <h6 class="class-title pb-3">${item.title}</h6>
                        </div>
                    </div>
                </div>
            `;
        container.innerHTML += cardphp;
      });
    </script>
  </body>
</php>