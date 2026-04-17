<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>AWDORG Foundation - contact</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" />

  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet" />

  <link rel="stylesheet" href="assets/css/style.css" />
</head>

<body>
  <section class="milkyway-section">
    <?php include 'includes/header.php'; ?>
    <div class="milkyway-hero-section"></div>

    <div class="main-card">
      <div class="header-title">
        <h2>"Our Promise to a Child to Have a Day -Milky Way”</h2>
        <h5>ProjectMilkyWay is an initiative dedicated to supporting the nutritional needs of children from underprivileged families, up to the age of 5. Under this program, free milk is provided daily to ensure healthy growth and early development.

To ensure consistency and accessibility, advance monthly payments are made to local milk booths, where registered children are maintained in verified records. Each child can collect milk from their nearest booth on a daily basis.

Through this initiative, ProjectMilkyWay aims to strengthen early childhood nutrition and contribute to building a healthier future for young children.</h5>
      </div>
      <div class="clearfix">
                        <a href="/how-it-works/project-milky-way.php" class="btn btn-submit">How it Works</a>
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
  <script>
    // 1. Your data - Just add more objects here!
    const data = [

      {
        "image": "/assets/img/projectmilkyway/1-1.jpg",
        "title": "27 Children Jungpura-",
        "subtitle": "New Delhi",
        "location": "April- Sep 2020"
      },
      {
        "image": "/assets/img/projectmilkyway/2-1.jpg",
        "title": "12 Children- Jahangirpuri,",
        "subtitle": "Delhi",
        "location": "June- Aug 2020"
      },
      {
        "image": "/assets/img/projectmilkyway/3-1.jpg",
        "title": null,
        "subtitle": "37 Children of migrant-",
        "location": "1week (Dry Milk)"
      },

      {
        "image": "/assets/img/projectmilkyway/4-1.jpg",
        "title": "82 Children, Artisan Colony,",
        "subtitle": "Delhi",
        "location": "April 2020"
      },
      {
        "image": "/assets/img/projectmilkyway/5-1.jpg",
        "title": "10 Children, Shakur Basti-",
        "subtitle": "Delhi",
        "location": "May- Sep 2020"
      },
      {
        "image": "/assets/img/projectmilkyway/6-1.jpg",
        "title": "17 Children of sex workers,",
        "subtitle": "Delhi",
        "location": "April- July 2020"
      },

      {
        "image": "/assets/img/projectmilkyway/7-1.jpg",
        "title": "12 Children, shaheen Bagh,",
        "subtitle": "New Delhi",
        "location": "April  2020"
      },
      {
        "image": "/assets/img/projectmilkyway/8-1.jpg",
        "title": "4 Children of same family,",
        "subtitle": "Rohtak",
        "location": "May- Aug 2020"
      },
      {
        "image": "/assets/img/projectmilkyway/9-1.jpg",
        "title": "5 Children,",
        "subtitle": "June- Sep 2020",
        "location": null
      },

      {
        "image": "/assets/img/projectmilkyway/10-1.jpg",
        "title": "23 Children,",
        "subtitle": "Saharanpur UP",
        "location": "May- July 2020"
      },
      {
        "image": "/assets/img/projectmilkyway/11-1.jpg",
        "title": "50 Children,",
        "subtitle": "Khanpur, New Delhi",
        "location": "May- Sep 2020"
      },
      {
        "image": "/assets/img/projectmilkyway/12-1.jpg",
        "title": null,
        "subtitle": "18 Children  Pataila",
        "location": "April- May 2020"
      },

      {
        "image": "/assets/img/projectmilkyway/13-1.jpg",
        "title": "1 kid",
        "subtitle": "Prakash Mohalla",
        "location": "April- September 2020"
      },
      {
        "image": "/assets/img/projectmilkyway/14-1.jpg",
        "title": "44 Children,",
        "subtitle": "44 Children,",
        "location": "Sep- Oct 2020"
      },
      {
        "image": "/assets/img/projectmilkyway/15-1.jpg",
        "title": "12 Children",
        "subtitle": "200 Children (One Day Activity)",
        "location": null
      },
      {
        "image": "/assets/img/projectmilkyway/16-1.jpg",
        "title": "500 Litres Free Milk Drive",
        "subtitle": "",
        "location": "500 Litres Free Milk Drive"
      },
      {
        "image": "/assets/img/projectmilkyway/17-1.jpg",
        "title": "3 Children",
        "subtitle": "Loni Border",
        "location": "Aug- Oct 2020"
      },
      {
        "image": "/assets/img/projectmilkyway/18-1.jpg",
        "title": null,
        "subtitle": "16 Children from slums   Mayur Vihar",
        "location": "Sep- Oct 2020"
      }
    ];

    // 2. The function to build the cards
    const container = document.getElementById('card-container');

    data.forEach(item => {
      const cardHTML = `
                <div class="col-12 col-sm-6 col-md-4 col-lg-4 mb-4">
                    <div class="card card-fixed bg-transparent">
                        <div class="img-container shadow-sm">
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
</body>

</html>