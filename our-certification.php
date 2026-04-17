<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Our Certificates — AWDORG Foundation</title>

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Fonts & Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" />

  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet" />

  <!-- CSS -->
  <link rel="stylesheet" href="assets/css/style.css" />
</head>

<body>

  <section class="our-certificate-section">

    <?php include 'includes/header.php'; ?>
    <div class="hero-section"></div>

    <div class="container my-5">
      <div class="main-card">

        <div class="header-title mb-4">
          <h2>Our Certificates</h2>
        </div>

        <!-- GRID -->
        <div id="certcontainer" class="row g-4"></div>

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


  <!-- JS -->
  <script>
    const certificates = [
      {
        title: "FCRA Certificate",
        number: "231662112",
        date: "30/07/2025 - 30/07/2030",
        link: "/assets/pdf/FCRA%20Registration-Certificate-AWDORG.pdf"
      },
      {
        title: "CSR1 Certificate",
        number: "CSR00056633",
        date: "No Expiry",
        link: "/assets/pdf/CSR1-AWDORG.pdf"
      },
      {
        title: "80G Certificate",
        number: "AATCA8551C23DL02",
        date: "(2027-28) - (2031-32)",
        link: "/assets/pdf/80G.pdf"
      },
      {
        title: "12A Certificate",
        number: "AATCA8551C23DL02",
        date: "(2027-28) - (2036-37)",
        link: "/assets/pdf/12A.pdf"
      },
      {
        title: "MCA Certificate",
        number: "367989",
        date: "30/09/2022 - No Expiry",
        link: "/assets/pdf/Ministry%20Of%20Corporate%20Affairs%20-%20MCA%20Services.pdf"
      },
      {
        title: "MSME Certificate",
        number: "UDYAM-DL-03-0017033",
        date: "26/04/2022 - No Expiry",
        link: "/assets/pdf/msmeAWDORG.PDF"
      },
      {
        title: "10AC Certificate",
        number: "AATCA8551CF2021401",
        date: "28/05/2021 - 2025",
        link: "/assets/pdf/10AC%20Form.pdf"
      },
      {
        title: "Incorporation Certificate",
        number: "U85300DL2020NPL367989",
        date: "14/08/2020 - No Expiry",
        link: "/assets/pdf/CERTIFICATE%20OF%20INCORPORATION-%20AWDORG.pdf"
      }
    ];

    const container = document.getElementById("certcontainer");

    certificates.forEach(cert => {
      container.innerHTML += `
    <div class="col-md-6 col-lg-4">
      <div class="cert-card h-100">
        <div class="cert-left">
          <h5>${cert.title}</h5>
          <p class="cert-no">No: ${cert.number}</p>
          <p class="cert-date">${cert.date}</p>
        </div>
        <div class="cert-right mt-3">
          <a href="${cert.link}" target="_blank" class="btn btn-open">
            <i class="fa fa-file-pdf me-1"></i> View
          </a>
        </div>
      </div>
    </div>
  `;
    });
  </script>

  <!-- Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

  <!-- Include Header/Footer -->
  <!-- <script src="js/include.js"></script>
  <script src="js/header.js"></script> -->
</body>

</html>