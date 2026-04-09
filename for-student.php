<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AWDORG Foundation - For Students</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="/assets/css/style.css" />
</head>

<body>
    <section class="students-page-container">
        <?php include 'includes/header.php'; ?>

        <!-- Hero Section -->
        <div class="students-hero">
            <div class="hero-overlay"></div>
            <div class="container hero-content text-center">
                <span class="badge bg-danger rounded-pill px-3 py-2 mb-3 shadow-sm">Student Portal</span>
                <h1 class="display-3 fw-bold text-white mb-3">Empowering Your Future</h1>
                <p class="lead text-white fs-4 fw-light mb-4">Discover courses, resources, and opportunities designed
                    just for you.</p>
                <div class="d-flex justify-content-center gap-3">
                    <a href="#admission" class="btn btn-primary btn-lg rounded-pill px-4 shadow-sm"><i
                            class="fas fa-graduation-cap me-2"></i> Join Our Community</a>
                    <a href="#courses" class="btn btn-outline-light btn-lg rounded-pill px-4"
                        style="border-width: 2px;">Explore Programs</a>
                </div>
            </div>
        </div>

        <!-- Latest Announcement / New Course -->
        <section id="courses" class="announcement-section py-5">
            <div class="container">
                <div class="row align-items-center g-5">
                    <div class="col-lg-6">
                        <div class="image-wrapper shadow-lg rounded-4 overflow-hidden position-relative">
                            <span
                                class="badge bg-danger position-absolute top-0 start-0 m-3 z-3 px-3 py-2 rounded-pill fs-6"><i
                                    class="fas fa-bullhorn me-1"></i> New Launch</span>
                            <img src="/assets/img/latest_couse/media-center-ph-gr.png"
                                onerror="this.src='/assets/img/Activity/Gemini_Generated_Image_otq6aeotq6aeotq6-1024x572.png'"
                                class="img-fluid w-100" alt="New Course Launch">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <h2 class="fw-bold mb-3" style="color: #ab0302;">Photography & Videography Training Program</h2>
                        <p class="lead text-muted mb-4">Our program is designed as a 1-month free intensive training
                            cycle, carefully structured into two specialized modules. Participants will begin with 15
                            days of Photography Training, followed by 15 days of Videography Training, equipping them
                            with essential visual storytelling skills and hands-on creative experience.</p>

                        <ul class="list-unstyled mb-4">
                            <li class="mb-3 d-flex align-items-start">
                                <span class="icon-circle bg-danger text-white me-3 mt-1"><i
                                        class="fas fa-check"></i></span>
                                <div>
                                    <strong class="d-block text-dark">Beginner-friendly interactive approach</strong>
                                    <!-- <span class="text-muted">A 1-month intensive training program bridging creativity
                                        and technical skills.</span> -->
                                </div>
                            </li>
                            <li class="mb-3 d-flex align-items-start">
                                <span class="icon-circle bg-danger text-white me-3 mt-1"><i
                                        class="fas fa-check"></i></span>
                                <div>
                                    <strong class="d-block text-dark">100% Free for underprivileged students</strong>
                                    <!-- <span class="text-muted">Comprehensive modules improving reading, writing, and
                                        spoken English for better opportunities.</span> -->
                                </div>
                            </li>
                        </ul>
                        <a href="/admission.php" class="btn btn-outline-danger rounded-pill px-4 py-2 fw-bold">Upcoming
                            Soon - Pre-register yourself <i class="fas fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Upcoming Events -->
        <section class="events-section bg-light py-5">
            <div class="container">
                <div class="text-center mb-5">
                    <h2 class="fw-bold" style="color: #ab0302; font-size: 2.5rem;">Upcoming Events</h2>
                    <p class="text-muted fs-5">Mark your calendars! Join our seminars, workshops, and community gathers.
                    </p>
                    <div
                        style="width: 60px; height: 4px; background-color: #ab0302; margin: 20px auto; border-radius: 2px;">
                    </div>
                </div>

                <div class="row g-4">
                    <div class="col-md-4">
                        <div class="event-card h-100 shadow-sm bg-white rounded-4 overflow-hidden border-0">
                            <div class="event-date bg-danger text-white text-center p-3">
                                <span class="d-block fs-3 fw-bold">15</span>
                                <span class="d-block text-uppercase">Nov</span>
                            </div>
                            <div class="event-body p-4">
                                <h4 class="fw-bold text-dark mb-2">Creative Masterclass</h4>
                                <p class="text-muted mb-3"><i class="fas fa-map-marker-alt text-danger me-2"></i> PEC
                                    Chanakyapuri</p>
                                <p class="text-secondary small">Learn storytelling from industry experts to refine your
                                    digital skills and career outlook.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="event-card h-100 shadow-sm bg-white rounded-4 overflow-hidden border-0">
                            <div class="event-date bg-danger text-white text-center p-3">
                                <span class="d-block fs-3 fw-bold">28</span>
                                <span class="d-block text-uppercase">Nov</span>
                            </div>
                            <div class="event-body p-4">
                                <h4 class="fw-bold text-dark mb-2">Annual Exam Review</h4>
                                <p class="text-muted mb-3"><i class="fas fa-map-marker-alt text-danger me-2"></i> Online
                                    Workshop</p>
                                <p class="text-secondary small">A structured review seminar designed to help all
                                    students prepare confidently.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="event-card h-100 shadow-sm bg-white rounded-4 overflow-hidden border-0">
                            <div class="event-date bg-danger text-white text-center p-3">
                                <span class="d-block fs-3 fw-bold">05</span>
                                <span class="d-block text-uppercase">Dec</span>
                            </div>
                            <div class="event-body p-4">
                                <h4 class="fw-bold text-dark mb-2">Youth Leadership Summit</h4>
                                <p class="text-muted mb-3"><i class="fas fa-map-marker-alt text-danger me-2"></i> New
                                    Delhi HQ</p>
                                <p class="text-secondary small">Connecting upcoming leaders with powerful mentors and
                                    community leaders.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Big Admission CTA -->
        <section id="admission" class="admission-cta text-white py-5 position-relative">
            <div class="admission-overlay position-absolute w-100 h-100 top-0 start-0"
                style="background: linear-gradient(135deg, #ab0302 0%, #700201 100%); z-index: 1;"></div>
            <div class="container position-relative z-2 text-center py-5">
                <i class="fas fa-id-card display-1 mb-4" style="opacity: 0.8;"></i>
                <h2 class="display-4 fw-bold mb-3">Ready to Start Your Journey?</h2>
                <p class="lead mb-5" style="max-width: 700px; margin: 0 auto; opacity: 0.9;">Our centers are always
                    welcoming aspiring learners. Apply for an upcoming batch today and secure your spot in our
                    transformative programs.</p>
                <a href="/admission.php"
                    class="btn btn-light btn-lg rounded-pill text-danger px-5 py-3 fw-bold shadow-lg"
                    style="font-size: 1.2rem;">Go to Admission Portal <i class="fas fa-external-link-alt ms-2"></i></a>
            </div>
        </section>

        <!-- Success Stories & Credentials -->
        <section class="testimonials-stories bg-light py-5">
            <div class="container-fluid px-lg-5">
                <div class="row g-5 align-items-center">

                    <!-- Reviews & Credentials -->
                    <div class="col-lg-6">
                        <div class="pe-lg-4">
                            <span class="text-danger fw-bold text-uppercase tracking-wide">Student Voices</span>
                            <h2 class="display-6 fw-bold mb-5 mt-2">What Our Students Say</h2>

                            <div
                                class="review-box bg-white p-4 rounded-4 shadow-sm mb-4 position-relative border-start border-4 border-danger">
                                <i class="fas fa-quote-left fs-1 text-light position-absolute top-0 end-0 m-3"></i>
                                <div class="d-flex align-items-center mb-3">
                                    <div class="text-warning me-2 fs-5">
                                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                            class="fas fa-star"></i><i class="fas fa-star"></i><i
                                            class="fas fa-star"></i>
                                    </div>
                                </div>
                                <p class="fst-italic text-secondary mb-3">"The digital literacy program literally
                                    changed my life. I went from not knowing how to type to managing data records
                                    securely online."</p>
                                <div class="d-flex align-items-center">
                                    <div class="rounded-circle bg-danger text-white d-flex align-items-center justify-content-center fw-bold me-3"
                                        style="width: 45px; height: 45px;">M</div>
                                    <div>
                                        <h6 class="mb-0 fw-bold">Mahi Joshi</h6>
                                        <small class="text-muted">PEC Kalkaji Student</small>
                                    </div>
                                </div>
                            </div>

                            <div
                                class="review-box bg-white p-4 rounded-4 shadow-sm position-relative border-start border-4 border-danger">
                                <i class="fas fa-quote-left fs-1 text-light position-absolute top-0 end-0 m-3"></i>
                                <div class="d-flex align-items-center mb-3">
                                    <div class="text-warning me-2 fs-5">
                                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                            class="fas fa-star"></i><i class="fas fa-star"></i><i
                                            class="fas fa-star-half-alt"></i>
                                    </div>
                                </div>
                                <p class="fst-italic text-secondary mb-3">"Thanks to Project Educate, my communication
                                    skills skyrocketed, which enabled me to crack my very first corporate interview!"
                                </p>
                                <div class="d-flex align-items-center">
                                    <div class="rounded-circle bg-danger text-white d-flex align-items-center justify-content-center fw-bold me-3"
                                        style="width: 45px; height: 45px;">K</div>
                                    <div>
                                        <h6 class="mb-0 fw-bold">Kritika Sharma</h6>
                                        <small class="text-muted">PEC Gurugram Student</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Video Success Story -->
                    <div class="col-lg-6">
                        <div
                            class="success-video-card bg-white rounded-4 overflow-hidden shadow-lg border-0 position-relative">
                            <div class="img-wrapper position-relative" style="aspect-ratio: 16/9; background: #000;">
                                <img src="/assets/img/Activity/Gemini_Generated_Image_otq6aeotq6aeotq6-1024x572.png"
                                    class="w-100 h-100" style="object-fit: cover; opacity: 0.6;" alt="Success Story">
                                <a href="https://www.youtube.com/watch?v=rfzxOJuSvRI" target="_blank"
                                    class="play-btn position-absolute top-50 start-50 translate-middle bg-danger text-white rounded-circle d-flex align-items-center justify-content-center shadow-lg"
                                    style="width: 80px; height: 80px; text-decoration: none;">
                                    <i class="fas fa-play fs-3" style="margin-left: 5px;"></i>
                                </a>
                            </div>
                            <div class="p-4">
                                <span
                                    class="badge bg-success bg-opacity-10 text-success px-3 py-2 rounded-pill mb-3">Inspiring
                                    Success</span>
                                <h3 class="fw-bold mb-2">Transforming Community Dreams</h3>
                                <p class="text-muted m-0">Watch how access to foundational education enabled entire
                                    families to lift themselves out of poverty.</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- Recommended Library / Links -->
        <section class="resources-section py-5">
            <div class="container">
                <div class="text-center mb-5">
                    <h2 class="fw-bold" style="color: #ab0302; font-size: 2.5rem;">Library & Resources</h2>
                    <p class="text-muted fs-5">Access essential reading materials, books, and helpful links curated for
                        our students.</p>
                    <div
                        style="width: 60px; height: 4px; background-color: #ab0302; margin: 20px auto; border-radius: 2px;">
                    </div>
                </div>

                <div class="row g-4 justify-content-center">

                    <div class="col-md-4 col-sm-6">
                        <div
                            class="resource-card bg-white border rounded-4 p-4 text-center h-100 shadow-sm transition-hover">
                            <div class="resource-icon bg-danger bg-opacity-10 text-danger rounded-circle d-flex align-items-center justify-content-center mx-auto mb-4"
                                style="width: 70px; height: 70px;">
                                <i class="fas fa-book-open fs-2"></i>
                            </div>
                            <h5 class="fw-bold">English Communication Guide</h5>
                            <p class="text-muted small mb-4">A complete PDF handbook for improving day-to-day spoken and
                                written English.</p>
                            <a href="#" class="btn btn-outline-danger btn-sm rounded-pill px-4">Download PDF</a>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                        <div
                            class="resource-card bg-white border rounded-4 p-4 text-center h-100 shadow-sm transition-hover">
                            <div class="resource-icon bg-danger bg-opacity-10 text-danger rounded-circle d-flex align-items-center justify-content-center mx-auto mb-4"
                                style="width: 70px; height: 70px;">
                                <i class="fas fa-laptop-code fs-2"></i>
                            </div>
                            <h5 class="fw-bold">Digital Literacy Textbook</h5>
                            <p class="text-muted small mb-4">Mastering fundamental computer software, internet safety,
                                and essential web tools.</p>
                            <a href="#" class="btn btn-outline-danger btn-sm rounded-pill px-4">Download PDF</a>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                        <div
                            class="resource-card bg-white border rounded-4 p-4 text-center h-100 shadow-sm transition-hover">
                            <div class="resource-icon bg-danger bg-opacity-10 text-danger rounded-circle d-flex align-items-center justify-content-center mx-auto mb-4"
                                style="width: 70px; height: 70px;">
                                <i class="fas fa-link fs-2"></i>
                            </div>
                            <h5 class="fw-bold">Career Reference Board</h5>
                            <p class="text-muted small mb-4">Explore a curated list of reliable educational platforms,
                                scholarship portals, and more.</p>
                            <a href="#" class="btn btn-outline-danger btn-sm rounded-pill px-4">View Links</a>
                        </div>
                    </div>

                </div>
            </div>
        </section>

    </section>

    <?php include 'includes/footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>