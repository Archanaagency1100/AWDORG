<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AWDORG Foundation - Appreciation & Credentials</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="/assets/css/style.css" />
</head>

<body>
    <section class="appreciation-page-wrapper">
        <?php include 'includes/header.php'; ?>

        <!-- Hero Section -->
        <div class="appreciation-hero">
            <div class="hero-overlay"></div>
            <div class="container hero-content text-center">
                <span class="badge bg-danger rounded-pill px-3 py-2 mb-3 shadow-sm">Honors & Recognitions</span>
                <h1 class="display-3 fw-bold text-white mb-3">Appreciation & Credentials</h1>
                <p class="lead text-white fs-4 fw-light mb-4" style="max-width: 800px; margin: 0 auto;">Dedicated impact
                    that earns the trust and grateful recognition of leaders, organizations, and the communities we
                    serve.</p>
            </div>
        </div>

        <!-- Quote / Intro Section -->
        <section class="py-5 bg-white">
            <div class="container text-center py-4">
                <i class="fas fa-award display-2 mb-4" style="color: #ab0302; opacity: 0.15;"></i>
                <h2 class="display-6 fw-bold mb-4">A Legacy Built on Trust</h2>
                <p class="lead text-muted mx-auto" style="max-width: 800px;">Every certificate, award, and letter of
                    appreciation we receive is a testament to the thousands of supporters and volunteers who pour their
                    hearts into AWDORG Foundation. These credentials stand as proof of our ongoing commitment to
                    transparency and social impact.</p>
                <div
                    style="width: 60px; height: 4px; background-color: #ab0302; margin: 30px auto; border-radius: 2px;">
                </div>
            </div>
        </section>

        <!-- Dynamic Credential Gallery -->
        <section class="credential-gallery-section bg-light py-5">
            <div class="container">
                <div class="row g-4 justify-content-center" id="credentials-grid">
                    <!-- Dynamic Items injected by JS -->
                </div>
            </div>
        </section>

        <!-- Testimonials / Quotations from Higher Authorities -->
        <section class="testimonials-section py-5 position-relative text-white">
            <div class="testimonials-overlay position-absolute w-100 h-100 top-0 start-0"
                style="background: linear-gradient(135deg, #ab0302 0%, #680201 100%); z-index: 1;"></div>
            <div class="container position-relative z-2 py-5">
                <div class="text-center mb-5">
                    <span class="text-uppercase tracking-widest text-white-50 fw-bold">Words of Encouragement</span>
                    <h2 class="fw-bold display-5 mt-2">Valued Appreciations</h2>
                </div>

                <div class="row g-4">
                    <div class="col-md-6">
                        <div
                            class="testimonial-card p-4 rounded-4 bg-white text-dark shadow position-relative h-100 border-0">
                            <i class="fas fa-quote-left text-danger position-absolute top-0 end-0 m-3 display-4"
                                style="opacity: 0.1;"></i>
                            <div class="d-flex align-items-center mb-4">
                                <div class="bg-light rounded-circle d-flex align-items-center justify-content-center me-3 border border-danger p-1"
                                    style="width: 60px; height: 60px;">
                                    <img src="/assets/img/partners/delhipolice-awd.jpg"
                                        class="rounded-circle w-100 h-100 object-fit-cover" alt="Delhi Police">
                                </div>
                                <div>
                                    <h5 class="fw-bold mb-0">Delhi Police</h5>
                                    <span class="text-muted small">Administration</span>
                                </div>
                            </div>
                            <p class="fst-italic">"We highly appreciate the efforts of AWDORG Foundation in uplifting
                                underprivileged youth and executing disciplined, impactful social drives across the
                                capital."</p>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div
                            class="testimonial-card p-4 rounded-4 bg-white text-dark shadow position-relative h-100 border-0">
                            <i class="fas fa-quote-left text-danger position-absolute top-0 end-0 m-3 display-4"
                                style="opacity: 0.1;"></i>
                            <div class="d-flex align-items-center mb-4">
                                <div class="bg-light rounded-circle d-flex align-items-center justify-content-center me-3 border border-danger p-1"
                                    style="width: 60px; height: 60px;">
                                    <img src="/assets/img/partners/hariyanapolice-awd.jpg"
                                        class="rounded-circle w-100 h-100 object-fit-cover" alt="Haryana Police">
                                </div>
                                <div>
                                    <h5 class="fw-bold mb-0">Haryana Police</h5>
                                    <span class="text-muted small">Administration</span>
                                </div>
                            </div>
                            <p class="fst-italic">"The foundation has continuously shown their dedication during our
                                joint community outreach programs. Their organized approach is highly commendable."</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Fullscreen Lightbox Modal -->
        <div class="modal fade credential-lightbox" id="credentialModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-fullscreen">
                <div class="modal-content bg-transparent border-0">
                    <div class="modal-header border-0 position-absolute w-100 z-3 p-4">
                        <button type="button" class="btn-close btn-close-white fs-4" data-bs-dismiss="modal"
                            aria-label="Close" style="filter: drop-shadow(0 2px 4px rgba(0,0,0,0.5));"></button>
                    </div>
                    <div class="modal-body p-0 d-flex justify-content-center align-items-center position-relative">
                        <!-- Navigation Arrows -->
                        <button class="nav-btn prev-btn" id="credPrev" aria-label="Previous">
                            <i class="fas fa-chevron-left"></i>
                        </button>

                        <!-- Image -->
                        <div class="text-center">
                            <img id="credImage" src="" class="img-fluid modal-img shadow-lg" alt="Credential Image">
                            <div class="mt-4 bg-dark bg-opacity-75 p-3 rounded-pill d-inline-block text-white"
                                id="credCaption">
                            </div>
                        </div>

                        <button class="nav-btn next-btn" id="credNext" aria-label="Next">
                            <i class="fas fa-chevron-right"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include 'includes/footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        const credentialsData = [
            {
                src: "/assets/img/pec/PECkalkaji-certification5.jpg",
                title: "Student Graduation Certification",
                type: "Certificate",
                issuer: "AWDORG Training Programs"
            },
            {
                src: "/assets/img/compagian/WhatsApp_Image_2025-10-30_at_17.06.0.jpeg",
                title: "Excellence in Relief Support",
                type: "Letter of Appreciation",
                issuer: "Local Administration"
            },
            {
                src: "/assets/img/Activity/Free-Madical-Camp-Banner-1024x410.jpeg",
                title: "Medical Camp Recognition",
                type: "Award",
                issuer: "Health Department"
            },
            {
                src: "/assets/img/Activity/Gemini_Generated_Image_otq6aeotq6aeotq6-1024x572.png",
                title: "Best NGO in Digital Literacy",
                type: "Honor",
                issuer: "Education Ministry Partner"
            },
            {
                src: "/assets/img/pec/gurugram.jpg",
                title: "Community Growth Certificate",
                type: "Certificate",
                issuer: "Gurugram Municipality"
            },
            {
                src: "/assets/img/compagian/Rengi_Village_Campin.jpg",
                title: "Village Restoration Award",
                type: "Award",
                issuer: "State Welfare Board"
            }
        ];

        document.addEventListener("DOMContentLoaded", () => {
            const grid = document.getElementById("credentials-grid");
            const modal = new bootstrap.Modal(document.getElementById("credentialModal"));
            const imgElement = document.getElementById("credImage");
            const captionElement = document.getElementById("credCaption");
            let currentIndex = 0;

            // Generate Grid Items
            credentialsData.forEach((cred, index) => {
                const col = document.createElement("div");
                col.className = "col-sm-6 col-md-4";

                col.innerHTML = `
                    <div class="cred-card h-100 bg-white rounded-3 shadow-sm border overflow-hidden" data-index="${index}">
                        <div class="cred-img-wrapper position-relative text-center p-3 bg-light border-bottom" style="height: 250px;">
                            <img src="${cred.src}" class="mw-100 mh-100 object-fit-contain shadow-sm border" alt="${cred.title}">
                            <div class="cred-overlay absolute-center">
                                <i class="fas fa-expand text-white border border-2 border-white rounded-circle p-3 fs-4 transition"></i>
                            </div>
                        </div>
                        <div class="p-4 text-center">
                            <span class="badge bg-danger bg-opacity-10 text-danger mb-2">${cred.type}</span>
                            <h6 class="fw-bold text-dark mb-1">${cred.title}</h6>
                            <small class="text-muted">By ${cred.issuer}</small>
                        </div>
                    </div>
                `;

                // Modal Trigger Event
                col.querySelector('.cred-card').addEventListener("click", () => {
                    openModal(index);
                });

                grid.appendChild(col);
            });

            // Modal Functionality
            function openModal(index) {
                currentIndex = index;
                updateModalContent();
                modal.show();
            }

            function updateModalContent() {
                const cred = credentialsData[currentIndex];
                imgElement.style.opacity = 0;

                setTimeout(() => {
                    imgElement.src = cred.src;
                    captionElement.innerHTML = `<h5 class="mb-0 fw-bold">${cred.title} <span class="fs-6 fw-normal text-white-50 ms-2">| ${cred.type}</span></h5>`;
                    imgElement.style.opacity = 1;
                }, 200);
            }

            document.getElementById('credPrev').addEventListener('click', () => {
                currentIndex = (currentIndex > 0) ? currentIndex - 1 : credentialsData.length - 1;
                updateModalContent();
            });

            document.getElementById('credNext').addEventListener('click', () => {
                currentIndex = (currentIndex < credentialsData.length - 1) ? currentIndex + 1 : 0;
                updateModalContent();
            });

            document.addEventListener('keydown', (e) => {
                if (!document.getElementById('credentialModal').classList.contains('show')) return;
                if (e.key === 'ArrowLeft') document.getElementById('credPrev').click();
                if (e.key === 'ArrowRight') document.getElementById('credNext').click();
            });
        });
    </script>
</body>

</html>