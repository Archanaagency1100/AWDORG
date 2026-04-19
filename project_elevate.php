<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AWDORG Foundation - contact</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="/assets/css/style.css" />
</head>

<body>
    <section class="elevate-section">
        <?php include 'includes/header.php'; ?>
        <div class="elevate-hero-section"></div>

        <div class="main-card">
            <div class="header-title">
                <h2>"Bridging the Gap between Problem and Solution”</h2>

                <h5>Everyone deserves a shot of redemption. Every life matters & we are committed to help everyone around.
                    One stop solution for all issues related to any sort of paperwork that is required during & post
                    lockdown. Our volunteers are working round the clock to help people resettle in the new normal
                    environment by clearing all obstacles related to administrative matters & its paper work. We helped over
                    200 people getting the Ration Card/Adhaar Card made.</h5>

                <h5>PROJECTelevate is all about uplifting the soul, we welcome you all here to bring change in atleast one
                    person’s life.</h5>
            </div>

            <div class="clearfix">
                <button type="submit" class="btn btn-submit">How it Works</button>
            </div>

            <div class="video-wrapper">
                <iframe src="https://www.youtube.com/embed/eH-_P2LcpNg"
                    title="Help Provided to Neha Giri under *Project Elevate*"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>

            <p class="video-caption">Help Provided to Neha Giri for Her Daughter’s Wedding</p>

            <div class="row pt-4" id="card-container"></div>
        </div>

        <div class="cta-banner py-5 px-4 mb-5">
            <div class="container d-flex flex-column flex-md-row justify-content-between align-items-center">
                <h2 class="text-white fw-bold mb-4 mb-md-0">
                    "Every single penny makes a difference"
                </h2>
                <a href="#" class="btn btn-light donate-btn d-flex align-items-center fw-bold text-danger">
                    DONATE NOW <i class="bi bi-heart-fill ms-2"></i>
                </a>
            </div>
        </div>
    </section>

    <!-- ------------- Call to Action Strip--------------- -->
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
    <script src="js/include.js"></script>
    <script src="js/header.js"></script>
    <script>
        // 1. Your data - Just add more objects here!
        const masterclasses = [
            { title: "27 Children Jungpura- New Delhi", date: "April- Sep 2020", img: "assets/img/project_milkyway/1-1.jpg" },
            { title: "12 Children- Jahangirpuri, Delhi", date: "June- Aug 2020", img: "assets/img/project_milkyway/2-1.jpg" },
            { title: "82 Children, Artisan Colony, Delhi", date: "1week (Dry Milk)", img: "assets/img/project_milkyway/3-1.jpg" },
            { title: "10 Children, Shakur Basti- Delhi", date: "April 2020", img: "assets/img/project_milkyway/4-1.jpg" },
            { title: "17 Children of sex workers, Delhi", date: "May- Sep 2020", img: "assets/img/project_milkyway/5-1.jpg" },
            { title: "37 Children of migrant-Faridabad", date: "April- July 2020", img: "assets/img/project_milkyway/6-1.jpg" },
        ];

        // 2. The function to build the cards
        const container = document.getElementById('card-container');

        masterclasses.forEach(item => {
            const cardHTML = `
            <div class="col-12 col-sm-6 col-md-4 mb-4">
                <div class="card card-fixed bg-transparent">
                    <div class="img-container shadow-sm">
                        <img src="${item.img}" alt="${item.title}">
                    </div>
                    <div class="card-body p-0 pt-3">
                        <h6 class="class-title">${item.title}</h6>
                        <p class="text-muted mb-0 small">${item.date}</p>
                    </div>
                </div>
            </div>
        `;
            container.innerHTML += cardHTML;
        });
    </script>
</body>

</html>