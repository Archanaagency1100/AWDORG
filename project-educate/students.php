<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>AWDORG Foundation - Our Students</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet" />

  <link rel="stylesheet" href="/assets/css/style.css" />
</head>

<body>
  <?php include '../includes/header.php'; ?>

  <section class="students-section">
    <div class="hero-section"></div>
    <div class="main-card">
      <!-- <div class="container pt-5"> -->
      <div class="header-title">
        <h2>Our Students</h2>
      </div>

      <div id="studentsGrid" class="students-grid">
        <!-- Dynamic Student Cards will be loaded here -->
      </div>

      <div id="pagination" class="pagination-container">
        <!-- Pagination buttons will be loaded here -->
      </div>
    </div>
    <!-- </div> -->
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

  <script src="/assets/js/students.js"></script>
</body>

</html>