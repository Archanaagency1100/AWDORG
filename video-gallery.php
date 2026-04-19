<!DOCTYPE php>
<php lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>AWDORG Foundation - Video Gallery</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap"
            rel="stylesheet" />
        <link rel="stylesheet" href="/assets/css/style.css" />
    </head>

    <body>
        <section class="video-gallery-section">
            <?php include 'includes/header.php'; ?>
            <div class="video-gallery-hero-section"></div>

            <div class="main-card">
                <div class="container pt-4 pb-5">

                    <div class="text-center mb-5 mt-2">
                        <h2 class="fw-bold" style="color: #ab0302; font-size: 2.5rem;">Watch Our Impact</h2>
                        <p class="text-muted fs-5">See how Anything Will Do Foundation is transforming lives across
                            India.</p>
                        <div
                            style="width: 60px; height: 4px; background-color: #ab0302; margin: 20px auto; border-radius: 2px;">
                        </div>
                    </div>

                    <div class="content-container row align-items-stretch" style="row-gap: 2rem;"
                        id="content-container">
                        <!-- Dynamic TV Content will be loaded here -->
                    </div>

                </div>
            </div>

            <!-- Video Modal -->
            <div class="modal fade" id="videoModal" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered">
                    <div class="modal-content bg-transparent border-0">
                        <div class="modal-header border-0 p-0 mb-3 justify-content-end">
                            <button type="button" class="btn-close btn-close-white fs-4"
                                style="filter: drop-shadow(0px 0px 3px rgba(0,0,0,0.8));" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body p-0">
                            <div class="ratio ratio-16x9 shadow-lg rounded overflow-hidden border border-secondary">
                                <iframe id="videoIframe" src="" allowfullscreen allow="autoplay"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <?php include 'includes/footer.php'; ?>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- <script src="../js/include.js"></script>
        <script src="../js/header.js"></script> -->
        <script>
            const data = [
                // Currently using newspaper data as placeholder until user provides TV data
                {
                    "url": "https://youtu.be/5KffCCVU8hY",
                    "title": "Trianz and AWDORG Empower India's Underprivileged Children with Digital Literacy Centers",
                    "date": "",
                    "author": ""
                },
                {
                    "url": "https://youtu.be/bZE3vZX3nvs",
                    "title": "Saraswati Shishu Vidya Mandir Rudraprayag Garhwal - Uttarakhand",
                    "date": "",
                    "author": "Tehelka UK"
                },
                {
                    "url": "https://youtu.be/ywLOuxR_UYo",
                    "title": "Tilakdhari Vindhyavasini TBC College Banwaripur, Chhanbey, Mirzapur - Uttar Pradesh",
                    "date": "",
                    "author": "Vande bharat"
                },
                {
                    "url": "https://youtu.be/RfzxOJuSvRI",
                    "title": "Tilakdhari Vindhyavasini TBC College Banwaripur, Chhanbey, Mirzapur - Uttar Pradesh",
                    "date": "",
                    "author": "Lokmanch Bharat"
                },
                {
                    "url": "https://youtu.be/AgCz8kPXD0k",
                    "title": "Shrimati Fuladevi Rajkiye Uchh Madhyamik Vidyalaya, Mahwa, Dausa - Rajasthan",
                    "date": "",
                    "author": "1ST India News"
                },
                {
                    "url": "https://youtu.be/QeGG1l1aRJQ",
                    "title": "Saraswati Shishu Vidya Mandir Sisona, Udham Singh Nagar - Uttarakhand",
                    "date": "",
                    "author": "Sadhna Plus News"
                },
                {
                    "url": "https://youtu.be/eCIwKxTp2iU",
                    "title": "Rajkiya Utkrisht Uchch Prathmik Vidya, Beekroo(Nadbai) – Bharatpur, Rajasthan",
                    "date": "",
                    "author": "Naarad News"
                },
                {
                    "url": "https://youtu.be/yRmmJSWNms0",
                    "title": "Swami Nityananda Saraswati Shishu Mandir – Rishikesh, Uttrakhand",
                    "date": "",
                    "author": "Sadhna Plus News"
                },
                {
                    "url": "https://youtu.be/bWjHEkSieVU",
                    "title": "Saraswati Shishu Vidya Mandir Sisona, Udham Singh Nagar - Uttarakhand",
                    "date": "",
                    "author": "Faiz News"
                }

            ];

            function getYoutubeInfo(url) {
                if (!url) return null;
                let videoId = "";
                if (url.includes("youtube.com/watch?v=")) {
                    videoId = url.split("v=")[1].split("&")[0];
                } else if (url.includes("youtu.be/")) {
                    videoId = url.split("youtu.be/")[1].split("?")[0];
                }
                return videoId ? {
                    id: videoId,
                    embed: `https://www.youtube.com/embed/${videoId}`,
                    thumb: `https://img.youtube.com/vi/${videoId}/hqdefault.jpg`
                } : null;
            }

            document.addEventListener("DOMContentLoaded", () => {
                const container = document.getElementById("content-container");

                data.forEach(item => {
                    const card = document.createElement("div");
                    card.className = "col-12 col-md-6 col-lg-4";

                    const ytInfo = getYoutubeInfo(item.url);

                    let mediaContent = "";
                    if (ytInfo) {
                        mediaContent = `
                        <div class="video-wrapper" data-bs-toggle="modal" data-bs-target="#videoModal" data-video="${ytInfo.embed}">
                            <img src="${ytInfo.thumb}" class="img-fluid video-thumbnail-img" alt="${item.title}">
                            <div class="play-overlay">
                                <i class="fas fa-play"></i>
                            </div>
                        </div>`;
                    } else if (item.image) {
                        mediaContent = `
                        <div class="video-wrapper">
                            <img src="${item.image}" alt="${item.title}" class="img-fluid video-thumbnail-img" style="object-fit:cover;">
                        </div>`;
                    }

                    card.innerHTML = `
                    <div class="print-item-card video-gallery-item h-100">
                        ${mediaContent}
                        <div class="item-details">
                            <h5 class="text-truncate-2" title="${item.title}">${item.title}</h5>
                            <div class="meta">
                                <span class="author"><i class="fas fa-bullhorn me-1"></i> ${item.author || 'AWDORG'}</span>
                                ${item.date ? `<span class="date"><i class="far fa-calendar-alt me-1"></i> ${item.date}</span>` : ''}
                            </div>
                        </div>
                    </div>
                `;
                    container.appendChild(card);
                });

                // Modal video handler
                const videoModal = document.getElementById('videoModal');
                const videoIframe = document.getElementById('videoIframe');

                videoModal.addEventListener('show.bs.modal', function (event) {
                    const button = event.relatedTarget;
                    const videoSrc = button.getAttribute('data-video');
                    // Adding autoplay and modestbranding to the embed URL
                    videoIframe.src = videoSrc + "?autoplay=1&rel=0";
                });

                videoModal.addEventListener('hide.bs.modal', function () {
                    videoIframe.src = "";
                });
            });
        </script>
    </body>

</php>