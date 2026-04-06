<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Our Partners — AWDORG Foundation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="assets/scss/style.css" />
</head>

<body>

    <?php include 'includes/header.php'; ?>

    <section class="partners-section">
        <!-- Hero Section -->
        <div class="partners-hero-section">
            <div class="container">
                <div class="partners-hero-content">
                    <h1>Our Partners</h1>
                    <p>Building a compassionate world through shared vision and collective impact.</p>
                </div>
            </div>
        </div>

        <!-- Main Card -->
        <div class="main-card">
            <div class="header-title">
                <h2>Collaboration for Change</h2>
                <p>
                    We are immensely grateful to our corporate and community partners. Their unwavering support
                    fuels our mission to empower underprivileged communities and create sustainable transformation
                    across India.
                </p>
            </div>

            <div class="partners-grid row" id="partners-grid-container">
                <!-- Data loaded dynamically -->
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


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/script.js"></script>
    <script src="js/include.js"></script>
    <script src="js/header.js"></script>

    <script>
        const supporter_company = [
            { "src": "/assets/img/partners/Omega.jpg", "name": "Omega Hotel" },
            { "src": "assets/img/partners/Nehru-World-School.png", "name": "Nehru World School" },
            { "src": "assets/img/partners/Taj-hotel-logo.png", "name": "Taj Hotel" },
            { "src": "assets/img/partners/ms.jpg", "name": "Microsoft" },
            { "src": "assets/img/partners/adobe.jpg", "name": "Adobe" },
            { "src": "assets/img/partners/twilio.webp", "name": "Twilio" },
            { "src": "assets/img/partners/premas.webp", "name": "Premas Life Sciences" },
            { "src": "assets/img/partners/awd-appsoleut.jpg", "name": "Appsoleut Games" },
            { "src": "assets/img/partners/jims.png", "name": "Jims Kalkaji" },
            { "src": "assets/img/partners/salescode.png", "name": "Sales Code" },
            { "src": "assets/img/partners/niit-foundation-awd.png", "name": "NIIT Foundation" },
            { "src": "assets/img/partners/dilli-durbar.jpg", "name": "Dilli Durbar" },
            { "src": "assets/img/partners/cashify.jpg", "name": "Cashify" },
            { "src": "assets/img/partners/ezma-awd.jpg", "name": "EZMA" },
            { "src": "assets/img/partners/ipc-awd-logo.jpg", "name": "IPC" },
            { "src": "assets/img/partners/iindopinion.jpg", "name": "IInd Opinion" },
            { "src": "assets/img/partners/brize.jpg", "name": "Brize Air Coolers" },
            { "src": "assets/img/partners/forvia-hella.jpg", "name": "Forvia" },
            { "src": "assets/img/partners/mlnc.jpg", "name": "Motilal Nehru College" },
            { "src": "assets/img/partners/impulse.jpg", "name": "Impulse" },
            { "src": "assets/img/partners/beondx.jpg", "name": "Beondx" },
            { "src": "assets/img/partners/meliorte.jpg", "name": "Meliorate" },
            { "src": "assets/img/partners/voiceforthedeprived.jpg", "name": "Voice For The Deprived" },
            { "src": "assets/img/partners/waltrav-awd.jpg", "name": "Waltrav" },
            { "src": "assets/img/partners/jcbl.jpg", "name": "JCBL Limited" },
            { "src": "assets/img/partners/54airstrorespartgurugram-awd.jpg", "name": "54 Air Stores Park" },
            { "src": "assets/img/partners/10-para.jpg", "name": "10 SF Para (Special Forces)" },
            { "src": "assets/img/partners/Reckweg-1.jpg", "name": "Dr. Reckeweg & Co." },
            { "src": "assets/img/partners/Maitreyi.jpg", "name": "Maitreyi College" },
            { "src": "assets/img/partners/IAC-logo.png", "name": "IAC Technology" },
            { "src": "assets/img/partners/agencyeleven100-awd.jpg", "name": "Agency Eleven 100" },
            { "src": "assets/img/partners/wakalmaartisanjewelry-awd.jpg", "name": "VVAKALMA" },
            { "src": "assets/img/partners/alt-awd.jpg", "name": "Apparel & Leather Pvt Ltd" },
            { "src": "assets/img/partners/arra-awd.jpg", "name": "ARRA" },
            { "src": "assets/img/partners/ashimatheatre-awd.jpg", "name": "Asmita Theatre" },
            { "src": "assets/img/partners/awwa-awd.jpg", "name": "Army Wives Welfare Association" },
            { "src": "assets/img/partners/bacati-awd.jpg", "name": "Bacati" },
            { "src": "assets/img/partners/bestlife-awd.jpg", "name": "Bestlife" },
            { "src": "assets/img/partners/imprint.jpg", "name": "Imprint" },
            { "src": "assets/img/partners/infrasport.jpg", "name": "Infra Sports" },
            { "src": "assets/img/partners/delhipolice-awd.jpg", "name": "Delhi Police" },
            { "src": "assets/img/partners/grace-internation.jpg", "name": "Grace International" },
            { "src": "assets/img/partners/expro-awd.jpg", "name": "Expro Event & Exhibits" },
            { "src": "assets/img/partners/gte-awd.jpg", "name": "Garment Technology Expo" },
            { "src": "assets/img/partners/shaxncafe-awd.jpg", "name": "Shax n Cafe" },
            { "src": "assets/img/partners/hariyanapolice-awd.jpg", "name": "Haryana Police" },
            { "src": "assets/img/partners/indianredcrosssociety-awd.jpg", "name": "Indian Red Cross Society" },
            { "src": "assets/img/partners/perfectbtread-awd.jpg", "name": "Perfect Bread" },
            { "src": "assets/img/partners/triaz-awd.jpg", "name": "Trianz" },
            { "src": "assets/img/partners/punjabifever-awd.jpg", "name": "Punjabi Fever 107.2" },
            { "src": "assets/img/partners/rahiivoyage-awd.jpg", "name": "Rahii Voyage" },
            { "src": "assets/img/partners/slimage-awd.jpg", "name": "Slimage" },
            { "src": "assets/img/partners/srijannaturals.jpg", "name": "Srijan Naturals" },
            { "src": "assets/img/partners/visa-altrav-awd.jpg", "name": "Visa Waltrav" },
            { "src": "assets/img/partners/Siec-logo.png", "name": "Siec india" },
            { "src": "assets/img/partners/Adfactors-PR.png", "name": "Adfactors-PR" }
        ];

        document.addEventListener("DOMContentLoaded", () => {
            const container = document.getElementById("partners-grid-container");
            if (!container) return;

            supporter_company.forEach(partner => {
                const card = document.createElement("div");
                card.className = "partner-card col-6 col-sm-6 col-md-4 col-lg-3 mb-4 w-100";
                card.innerHTML = `
                    <div class="partner-card__image">
                        <img src="${partner.src}" alt="${partner.name}" loading="lazy">
                    </div>
                    <h3>${partner.name}</h3>
                `;
                container.appendChild(card);
            });
        });
    </script>
</body>

</html>