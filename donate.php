<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AWDORG Foundation - Donate</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="/assets/css/style.css" />
</head>

<body>
    <section class="donate-section">
        <?php include 'includes/header.php'; ?>
        
        <!-- Hero Section -->
        <div class="donate-hero-section">
            <div class="hero-overlay"></div>
            <div class="container hero-content text-center">
                <h1 class="display-3 fw-bold text-white mb-3">Empower Change</h1>
                <p class="lead text-white-50 fs-4 fw-light mb-4 text-uppercase tracking-widest">Because you have a desire to donate or volunteer, we will help you fulfill it.</p>
            </div>
        </div>

        <div class="main-card">
            
            <div class="text-center mb-5 mt-4">
                <i class="fas fa-hand-holding-heart display-1 mb-4" style="color: #ab0302; opacity: 0.8;"></i>
                <h2 class="display-6 fw-bold mb-3" style="color: #ab0302;">“Every single penny makes a difference”</h2>
                <p class="lead text-muted mx-auto" style="max-width: 800px; line-height: 1.8;">Let’s come together and support an honourable and noble cause. You can contribute in cash or in kind by choosing our running campaigns.</p>
                <div style="width: 60px; height: 4px; background-color: #ab0302; margin: 30px auto; border-radius: 2px;"></div>
                
                <!-- Main Donate CTA -->
                <a href="https://razorpay.com/payment-button/pl_JP6l5x2NnbnlmP/view/?utm_source=payment_button&utm_medium=button&utm_campaign=payment_button" target="_blank" class="btn btn-donate-lg rounded-pill px-5 py-3 shadow-lg fw-bold mt-2">
                    <i class="fas fa-heart me-2"></i> Donate Now
                </a>
            </div>

            <!-- Donation Options Container -->
            <div class="container pb-5">
                <div class="row g-5 align-items-stretch justify-content-center">
                    
                    <!-- Scan to Donate (QR) -->
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="donate-card h-100 bg-white border rounded-4 text-center p-5 shadow-sm transition-hover">
                            <h4 class="fw-bold mb-4 border-bottom pb-3">Scan <span class="text-danger">&</span> Donate</h4>
                            <div class="qr-wrapper mb-4 p-2 border rounded shadow-sm d-inline-block">
                                <img src="/assets/img/paytm-1-raj7mhkr2r7dff5vfidhv0hudby18ptftk7inlwcbg.jpg" alt="AWDORG QR Code" class="img-fluid" style="max-width: 200px;">
                            </div>
                            <p class="fw-bold mb-1">AWDORG Foundation</p>
                            <span class="text-muted"><i class="fas fa-phone-alt me-2 text-success"></i>+91 98113 01101</span>
                        </div>
                    </div>

                    <!-- Domestic Bank Details -->
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="donate-card h-100 bg-white border border-danger border-opacity-25 rounded-4 text-center p-4 shadow-sm transition-hover position-relative overflow-hidden">
                            <div class="card-top-accent bg-danger"></div>
                            <h4 class="fw-bold mb-3 mt-3">Bank Details <span class="badge bg-danger rounded-pill fs-6 align-middle ms-2">CSR</span></h4>
                            <span class="d-block text-danger fw-bold small text-uppercase letter-spacing-1 mb-4"><i class="fas fa-info-circle me-1"></i> Donation from Indians Only</span>
                            
                            <ul class="list-unstyled text-start mx-auto fs-6 p-3 bg-light rounded-3 font-monospace shadow-inner" style="max-width: 320px;">
                                <li class="mb-2"><strong class="text-dark">Bank Name:</strong> STATE BANK OF INDIA</li>
                                <li class="mb-2"><strong class="text-dark">Account Name:</strong> AWDORG FOUNDATION</li>
                                <li class="mb-2"><strong class="text-dark">Branch:</strong> Sushant Lok-1, Gurgaon</li>
                                <li class="mb-2"><strong class="text-dark">Account No:</strong> 39744031467</li>
                                <li class="mb-2"><strong class="text-dark">IFSC Code:</strong> SBIN0004449</li>
                                <li><strong class="text-dark">MICR Code:</strong> 110002411</li>
                            </ul>
                            
                            <hr class="my-4">
                            <div class="paypal-info">
                                <h6 class="fw-bold text-muted mb-2">You Can Donate Through Paypal:</h6>
                                <a href="mailto:info@anythingwilldo.org" class="text-decoration-none text-primary fw-bold"><i class="fab fa-paypal me-1"></i> info@anythingwilldo.org</a>
                            </div>
                        </div>
                    </div>

                    <!-- Foreign/FCRA Bank Details -->
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="donate-card h-100 bg-white border border-primary border-opacity-25 rounded-4 text-center p-4 shadow-sm transition-hover position-relative overflow-hidden">
                            <div class="card-top-accent bg-primary"></div>
                            <h4 class="fw-bold mb-3 mt-3">Bank Details <span class="badge bg-primary rounded-pill fs-6 align-middle ms-2">FCRA</span></h4>
                            <span class="d-block text-primary fw-bold small text-uppercase letter-spacing-1 mb-4"><i class="fas fa-globe me-1"></i> Donation from Foreigners Only</span>
                            
                            <ul class="list-unstyled text-start mx-auto fs-6 p-3 bg-light rounded-3 font-monospace shadow-inner" style="max-width: 320px;">
                                <li class="mb-2"><strong class="text-dark">Bank Name:</strong> STATE BANK OF INDIA</li>
                                <li class="mb-2"><strong class="text-dark">Account Name:</strong> AWDORG FOUNDATION</li>
                                <li class="mb-2"><strong class="text-dark">Branch:</strong> Sansad Marg, New Delhi 110001</li>
                                <li class="mb-2"><strong class="text-dark">Account No:</strong> 41569179177</li>
                                <li class="mb-2"><strong class="text-dark">IFSC Code:</strong> SBIN0000691</li>
                                <li class="mb-2"><strong class="text-dark">SWIFT Code:</strong> SBININBB104</li>
                                <li><strong class="text-dark">FCRA No:</strong> 231662112</li>
                            </ul>
                            
                            <div class="mt-4 pt-2">
                                <span class="badge bg-primary bg-opacity-10 text-primary border border-primary p-2 w-100"><i class="fas fa-shield-alt me-1"></i> Certified FCRA Account</span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            
            <div class="tax-exemption-notice bg-light rounded-4 p-4 text-center border mt-2 mx-auto" style="max-width: 900px;">
                <p class="mb-1 fw-bold text-dark"><i class="fas fa-file-invoice-dollar text-success me-2 fs-5"></i> Tax Exemption</p>
                <p class="small text-muted mb-0">Your donation qualifies for tax exemption under Section 80G of the Income Tax Act, 1961. AWDORG Foundation is a registered non-profit organization with 12A, 80G, and FCRA certifications.</p>
            </div>
            
        </div>
    </section>

    <?php include 'includes/footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>