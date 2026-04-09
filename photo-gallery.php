<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AWDORG Foundation - Photo Gallery</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="/assets/css/style.css" />
</head>

<body>
    <section class="photo-gallery-section">
        <?php include 'includes/header.php'; ?>

        <!-- Hero Section -->
        <div class="photo-gallery-hero-section">
            <div class="hero-content">
                <h1 class="display-3 fw-bold text-white mb-3">Photo Gallery</h1>
                <p class="lead text-white fs-4">Glimpses of Hope, Compassion, and Change.</p>
            </div>
            <div class="hero-overlay"></div>
        </div>

        <div class="main-card bg-light">
            <div class="container pt-5 pb-5">

                <div class="text-center mb-5 mt-3">
                    <h2 class="fw-bold" style="color: #ab0302; font-size: 2.5rem;">Moments Of Change</h2>
                    <p class="text-muted fs-5 mt-2">A visual journey through the lives we've touched and the communities
                        we've uplifted.</p>
                    <div
                        style="width: 60px; height: 4px; background-color: #ab0302; margin: 20px auto; border-radius: 2px;">
                    </div>
                </div>

                <!-- Gallery Masonry Grid Container -->
                <div class="gallery-grid" id="gallery-grid">
                    <!-- Dynamic Photos will be loaded here -->
                </div>

            </div>
        </div>

        <!-- Fullscreen Lightbox Modal -->
        <div class="modal fade lightbox-modal" id="lightboxModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-fullscreen">
                <div class="modal-content bg-transparent border-0">
                    <div class="modal-header border-0 position-absolute w-100 z-3 p-4">
                        <h5 class="modal-title text-white fw-light" id="lightboxTitle"></h5>
                        <button type="button" class="btn-close btn-close-white fs-4" data-bs-dismiss="modal"
                            aria-label="Close" style="filter: drop-shadow(0 2px 4px rgba(0,0,0,0.5));"></button>
                    </div>
                    <div class="modal-body p-0 d-flex justify-content-center align-items-center position-relative">
                        <!-- Navigation Arrows -->
                        <button class="lightbox-nav lightbox-prev" id="lightboxPrev" aria-label="Previous image">
                            <i class="fas fa-chevron-left"></i>
                        </button>

                        <!-- The Resized Image Image -->
                        <img id="lightboxImage" src="" class="img-fluid lightbox-img" alt="Lightbox Image">

                        <!-- Descriptive Caption placed at bottom -->
                        <div class="lightbox-caption" id="lightboxCaption"></div>

                        <button class="lightbox-nav lightbox-next" id="lightboxNext" aria-label="Next image">
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
        const photoData = [
            {
                src: "/assets/img/Activity/Free-Madical-Camp-Banner-1024x410.jpeg",
                title: "Free Medical Camp",
                description: "Providing essential healthcare services to the community.",
                category: "Healthcare"
            },
            {
                src: "/assets/img/compagian/rakshita_fulara_compaign1.jpg",
                title: "Supporting Education",
                description: "Helping students to continue their college education.",
                category: "Education"
            },
            {
                src: "/assets/img/compagian/Rengi_Village_Campin.jpg",
                title: "Rengi Village Rebuild",
                description: "Assisting families to rebuild hope and shelter.",
                category: "Relief Work"
            },
            {
                src: "/assets/img/Activity/blanket-distribution-1-.webp",
                title: "Winter Relief",
                description: "Distributing warm blankets to those spending cold nights outdoors.",
                category: "Community"
            },
            {
                src: "/assets/img/compagian/WhatsApp_Image_2025-10-30_at_17.06.0.jpeg",
                title: "Empowering Lives",
                description: "A little help brings a major change for young minds.",
                category: "Support"
            },
            {
                src: "/assets/img/pec/gurugram.jpg",
                title: "PEC Gurugram",
                description: "Digital learning environment safely empowering students.",
                category: "Project Educate"
            },
            {
                src: "/assets/img/Activity/Gemini_Generated_Image_otq6aeotq6aeotq6-1024x572.png",
                title: "Digital Literacy Drive",
                description: "Opening up doors to global learning through technology.",
                category: "Education"
            },
            {
                src: "/assets/img/pec/PECkalkaji-certification5.jpg",
                title: "Student Certification",
                description: "Recognizing the efforts of our students on graduation day.",
                category: "Project Educate"
            },
            {
                src: "/assets/img/compagian/Mahi_Joshi_Canpain.jpg",
                title: "Building Futures",
                description: "Educational support ensuring no dream is ignored.",
                category: "Support"
            }
        ];

        document.addEventListener("DOMContentLoaded", () => {
            const grid = document.getElementById("gallery-grid");
            const lightboxModal = new bootstrap.Modal(document.getElementById("lightboxModal"));
            const lightboxImg = document.getElementById("lightboxImage");
            const lightboxTitle = document.getElementById("lightboxTitle");
            const lightboxCaption = document.getElementById("lightboxCaption");
            let currentIndex = 0;

            // Generate Photos in DOM
            photoData.forEach((photo, index) => {
                const item = document.createElement("div");
                item.className = "gallery-item";
                item.setAttribute("data-index", index);

                item.innerHTML = `
                    <div class="gallery-img-wrapper shadow-sm rounded">
                        <img src="${photo.src}" alt="${photo.title}" loading="lazy">
                        <div class="gallery-overlay">
                            <i class="fas fa-search-plus text-white display-4"></i>
                            <div class="gallery-overlay-text">
                                <span class="badge mb-2 d-inline-block">${photo.category}</span>
                                <h4>${photo.title}</h4>
                            </div>
                        </div>
                    </div>
                `;

                // Add Click Event mapped to index
                item.addEventListener("click", () => {
                    openLightbox(index);
                });

                grid.appendChild(item);
            });

            // Lightbox functionality
            function openLightbox(index) {
                currentIndex = index;
                const photo = photoData[currentIndex];
                lightboxImg.src = photo.src;
                lightboxTitle.textContent = photo.category + " - AWDORG";
                lightboxCaption.innerHTML = `<h5>${photo.title}</h5><p class="mb-0 text-white-50">${photo.description}</p>`;
                lightboxModal.show();
            }

            // Keyboard navigation
            document.addEventListener('keydown', (e) => {
                const isModalOpen = document.getElementById('lightboxModal').classList.contains('show');
                if (!isModalOpen) return;
                if (e.key === 'ArrowLeft') showPrev();
                if (e.key === 'ArrowRight') showNext();
            });

            document.getElementById('lightboxPrev').addEventListener('click', showPrev);
            document.getElementById('lightboxNext').addEventListener('click', showNext);

            function showPrev() {
                currentIndex = (currentIndex > 0) ? currentIndex - 1 : photoData.length - 1;
                updateLightboxImage();
            }

            function showNext() {
                currentIndex = (currentIndex < photoData.length - 1) ? currentIndex + 1 : 0;
                updateLightboxImage();
            }

            function updateLightboxImage() {
                const photo = photoData[currentIndex];
                // Smooth fade effect 
                lightboxImg.style.opacity = 0;
                setTimeout(() => {
                    lightboxImg.src = photo.src;
                    lightboxTitle.textContent = photo.category + " - AWDORG";
                    lightboxCaption.innerHTML = `<h5>${photo.title}</h5><p class="mb-0 text-white-50">${photo.description}</p>`;
                    lightboxImg.style.opacity = 1;
                }, 200);
            }
        });
    </script>
</body>

</html>