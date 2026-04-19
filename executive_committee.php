<!doctype php>
<php lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Ececutive Committee</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap"
      rel="stylesheet"
    />

    <link rel="stylesheet" href="assets/css/style.css" />
  </head>

  <body>
    <?php include 'includes/header.php'; ?>

    <div class="hero-section"></div>
    <div class="main-card executive-main-card executive-committee-section">
      <div class="container">
        <div class="header-title">
          <h2>Executive Committee</h2>
        </div>
        <div class="row g-0 profile-row">
          <div class="col-md-6">
            <img
              src="assets\executive_committee\charanjeet-dhiman-1024x643.webp"
              alt="Charanjeet"
              class="profile-img"
            />
          </div>
          <div class="col-md-6 info-panel bg-charanjeet">
            <div class="content">
              <h2>Charanjeet Dhiman</h2>
              <div class="role">Founder & President</div>
              <p class="quote">
                "I kept waiting for someone to fix the gaps in education. Then
                it hit me – I could be that someone."
              </p>
            </div>
          </div>
        </div>

        <div class="row g-0 profile-row">
          <div class="col-md-6 info-panel bg-deeksha order-2 order-md-1">
            <div class="content">
              <h2>Deeksha Sati</h2>
              <div class="role">Co-founder, Vice President</div>
              <p class="quote">
                "Not all of us can do groundbreaking things in education but we
                can make a lasting impact by showing up with heart."
              </p>
            </div>
          </div>
          <div class="col-md-6 order-1 order-md-2">
            <img
              src="assets\executive_committee/Deeksha.webp"
              alt="Deeksha"
              class="profile-img"
            />
          </div>
        </div>

        <div class="row g-0 profile-row">
          <div class="col-md-6">
            <img
              src="assets\executive_committee\nimesh-kansal-1024x642.webp"
              alt="Nimesh"
              class="profile-img"
            />
          </div>
          <div class="col-md-6 info-panel bg-nimesh">
            <div class="content">
              <h2>Nimesh Kansal</h2>
              <div class="role">Treasurer</div>
              <p class="quote">
                "Right now, there are children who need your support and on
                educational path only you can help them walk."
              </p>
            </div>
          </div>
        </div>

        <div class="row g-0 profile-row">
          <div class="col-md-6 info-panel bg-krishan order-2 order-md-1">
            <div class="content">
              <h2>Krishan Mangawa</h2>
              <div class="role">Secratery</div>
              <p class="quote">
                "In nurturing young minds, we often find our own growth and the
                joy that comes from making a difference."
              </p>
            </div>
          </div>
          <div class="col-md-6 order-1 order-md-2">
            <img
              src="assets\executive_committee\krishan-mangava-1024x644.webp"
              alt="Deeksha"
              class="profile-img"
            />
          </div>
        </div>

        <div class="row g-0 profile-row">
          <div class="col-md-6">
            <img
              src="assets\executive_committee\nidhi-sati-1024x646.webp"
              alt="Nimesh"
              class="profile-img"
            />
          </div>
          <div class="col-md-6 info-panel bg-nidhi">
            <div class="content">
              <h2>Nidhi Singh Sati ​</h2>
              <div class="role">Projects Head</div>
              <p class="quote">
                "Education doesn’t need superheroes – just ordinary people
                willing to take on the extraordinary task of shaping minds."
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- ------------- Call to Action Strip--------------- -->
    <section class="cta-strip">
      <div class="container">
        <div class="cta-content">
          <div class="cta-text">
            <h3>Every single penny makes a difference</h3>
            <!-- <p>
              Your small contribution can bring big change in someone's life.
            </p> -->
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
  </body>
</php>
