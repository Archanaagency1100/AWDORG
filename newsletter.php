<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AWDORG Foundation - Newsletter</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="/assets/css/style.css" />
</head>

<body>
    <section class="newsletter-page-wrapper">
        <?php include 'includes/header.php'; ?>

        <!-- Hero Section -->
        <div class="newsletter-hero">
            <div class="hero-overlay"></div>
            <div class="container hero-content text-center">
                <span class="badge bg-danger rounded-pill px-3 py-2 mb-3 shadow-sm"><i
                        class="fas fa-envelope-open-text me-1"></i> Stay Updated</span>
                <h1 class="display-3 fw-bold text-white mb-3">Our Monthly Newsletter</h1>
                <p class="lead text-white fs-4 fw-light mb-4" style="max-width: 700px; margin: 0 auto;">Read our latest
                    stories, track our community impact, and stay informed on upcoming initiatives.</p>
            </div>
        </div>

        <!-- Subscribe Form Section -->
        <section class="subscribe-section text-center py-5 bg-white position-relative" style="z-index: 10;">
            <div class="container">
                <div class="subscribe-card shadow-lg rounded-5 bg-white mx-auto p-4 p-md-5 border-top border-4 border-danger"
                    style="max-width: 800px; margin-top: -100px;">
                    <i class="far fa-envelope display-3 text-danger mb-3 opacity-75"></i>
                    <h2 class="fw-bold text-dark mb-3">Subscribe to Our Community</h2>
                    <p class="text-muted mb-4 fs-5">Get the latest impact reports, volunteer opportunities, and
                        inspiring stories delivered straight to your inbox.</p>

                    <form action="#" method="POST" class="needs-validation" novalidate id="newsletterForm">
                        <div class="row g-3 justify-content-center">
                            <div class="col-md-5">
                                <input type="text" class="form-control form-control-lg rounded-pill px-4"
                                    placeholder="Your Name" required>
                            </div>
                            <div class="col-md-5">
                                <input type="email" class="form-control form-control-lg rounded-pill px-4"
                                    placeholder="Email Address" required>
                            </div>
                            <div class="col-md-10 mt-4 text-center">
                                <button type="submit"
                                    class="btn btn-danger btn-lg rounded-pill px-5 fw-bold w-100 shadow-sm"
                                    style="background-color: #ab0302;">
                                    Subscribe Now <i class="fas fa-paper-plane ms-2"></i>
                                </button>
                                <small class="d-block text-muted mt-3"><i class="fas fa-lock me-1"></i> We respect your
                                    privacy. No spam, ever.</small>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>

        <!-- Previous Highlights -->
        <section class="highlights-section py-5 bg-light">
            <div class="container">
                <div class="text-center mb-5 mt-3">
                    <h2 class="fw-bold" style="color: #ab0302; font-size: 2.5rem;">Recent Highlights</h2>
                    <p class="text-muted fs-5">Catch up on what you might have missed in the past months.</p>
                    <div
                        style="width: 60px; height: 4px; background-color: #ab0302; margin: 20px auto; border-radius: 2px;">
                    </div>
                </div>

                <div class="row g-4 justify-content-center">

                    <!-- Highlight Card -->
                    <div class="col-lg-4 col-md-6">
                        <div
                            class="highlight-card bg-white rounded-4 shadow-sm border overflow-hidden h-100 transition-hover">
                            <div class="highlight-img border-bottom position-relative bg-light" style="height: 220px;">
                                <img src="/assets/img/Activity/blanket-distribution-1-.webp"
                                    class="w-100 h-100 object-fit-cover" alt="Winter Relief">
                                <span
                                    class="badge bg-danger position-absolute top-0 end-0 m-3 px-3 py-2 rounded-pill">March
                                    2026</span>
                            </div>
                            <div class="p-4">
                                <h4 class="fw-bold mb-2">A Season of Giving</h4>
                                <p class="text-muted small mb-3">Our monumental Winter Relief Drive saw thousands of
                                    blankets distributed across Delhi NCR, bringing warmth to those in need.</p>
                                <a href="#" class="text-danger fw-bold text-decoration-none">Read Full Report <i
                                        class="fas fa-arrow-right ms-1"></i></a>
                            </div>
                        </div>
                    </div>

                    <!-- Highlight Card -->
                    <div class="col-lg-4 col-md-6">
                        <div
                            class="highlight-card bg-white rounded-4 shadow-sm border overflow-hidden h-100 transition-hover">
                            <div class="highlight-img border-bottom position-relative bg-light" style="height: 220px;">
                                <img src="/assets/img/Activity/Gemini_Generated_Image_otq6aeotq6aeotq6-1024x572.png"
                                    class="w-100 h-100 object-fit-cover" alt="Digital Expansion">
                                <span
                                    class="badge bg-danger position-absolute top-0 end-0 m-3 px-3 py-2 rounded-pill">February
                                    2026</span>
                            </div>
                            <div class="p-4">
                                <h4 class="fw-bold mb-2">Digital Expansion at PEC</h4>
                                <p class="text-muted small mb-3">We proudly launched two new Project Educate Centers in
                                    remote areas, equipping 200+ kids with laptops and digital learning tools.</p>
                                <a href="#" class="text-danger fw-bold text-decoration-none">Read Full Report <i
                                        class="fas fa-arrow-right ms-1"></i></a>
                            </div>
                        </div>
                    </div>

                    <!-- Highlight Card -->
                    <div class="col-lg-4 col-md-6">
                        <div
                            class="highlight-card bg-white rounded-4 shadow-sm border overflow-hidden h-100 transition-hover">
                            <div class="highlight-img border-bottom position-relative bg-light" style="height: 220px;">
                                <img src="/assets/img/Activity/Free-Madical-Camp-Banner-1024x410.jpeg"
                                    class="w-100 h-100 object-fit-cover" alt="Health Camp">
                                <span
                                    class="badge bg-danger position-absolute top-0 end-0 m-3 px-3 py-2 rounded-pill">January
                                    2026</span>
                            </div>
                            <div class="p-4">
                                <h4 class="fw-bold mb-2">New Year Medical Drive</h4>
                                <p class="text-muted small mb-3">Over 500 individuals received free check-ups and
                                    medicines during our collaborative mega-medical awareness camp.</p>
                                <a href="#" class="text-danger fw-bold text-decoration-none">Read Full Report <i
                                        class="fas fa-arrow-right ms-1"></i></a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

    </section>

    <?php include 'includes/footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Simple Form Validation Feedback
        document.getElementById('newsletterForm').addEventListener('submit', function (e) {
            e.preventDefault();
            if (!this.checkValidity()) {
                this.classList.add('was-validated');
            } else {
                // Mock success message
                const btn = this.querySelector('button');
                const origText = btn.innerHTML;
                btn.innerHTML = 'Subscribed Successfully! <i class="fas fa-check ms-2"></i>';
                btn.classList.add('bg-success', 'border-success');
                setTimeout(() => {
                    btn.innerHTML = origText;
                    btn.classList.remove('bg-success', 'border-success');
                    this.reset();
                    this.classList.remove('was-validated');
                }, 3000);
            }
        });
    </script>
</body>

</html>