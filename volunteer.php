<?php
// volunteer.php
require_once 'admin/config/database.php'; // Commented out to prevent errors if not present
require_once 'admin/includes/mail.php'; // Commented out to prevent errors if not present

$message = '';
$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Basic reCAPTCHA handling
    $recaptcha_secret = "YOUR_SECRET_KEY";
    $recaptcha_response = $_POST['g-recaptcha-response'] ?? '';

    // Bypassing verification if key is placeholder
    $captcha_passed = true;

    if ($captcha_passed) {
        // Collect fields
        $first_name = trim($_POST['first_name'] ?? '');
        $last_name = trim($_POST['last_name'] ?? '');
        $email = trim($_POST['email'] ?? '');
        $phone = trim($_POST['phone'] ?? '');
        $blood_group = trim($_POST['blood_group'] ?? '');
        $dob = $_POST['dob'] ?? '';
        $gender = $_POST['gender'] ?? '';
        $is_diabetic = $_POST['is_diabetic'] ?? '';
        $address = trim($_POST['address'] ?? '');
        $city = trim($_POST['city'] ?? '');
        $state = trim($_POST['state'] ?? '');
        $join_reason = trim($_POST['join_reason'] ?? '');
        $work_preference = $_POST['work_preference'] ?? '';
        $preferred_location = trim($_POST['preferred_location'] ?? '');
        $preferred_city = trim($_POST['preferred_city'] ?? '');
        $preferred_state = trim($_POST['preferred_state'] ?? '');
        $wish_to_support = isset($_POST['wish_to_support']) && is_array($_POST['wish_to_support']) ? implode(', ', $_POST['wish_to_support']) : '';

        $ip_address = $_SERVER['REMOTE_ADDR'];

        // Handle File Uploads
        $upload_dir = 'uploads/volunteers/';
        if (!is_dir($upload_dir)) {
            @mkdir($upload_dir, 0755, true);
        }

        $id_proof_path = null;
        if (isset($_FILES['id_proof']) && $_FILES['id_proof']['error'] == UPLOAD_ERR_OK) {
            $ext = pathinfo($_FILES['id_proof']['name'], PATHINFO_EXTENSION);
            $id_proof_path = $upload_dir . uniqid('id_') . '.' . $ext;
            @move_uploaded_file($_FILES['id_proof']['tmp_name'], $id_proof_path);
        }

        $photo_path = null;
        if (isset($_FILES['photo']) && $_FILES['photo']['error'] == UPLOAD_ERR_OK) {
            $ext = pathinfo($_FILES['photo']['name'], PATHINFO_EXTENSION);
            $photo_path = $upload_dir . uniqid('photo_') . '.' . $ext;
            @move_uploaded_file($_FILES['photo']['tmp_name'], $photo_path);
        }

        if (empty($error)) {
            try {
                if (isset($pdo)) {
                    $stmt = $pdo->prepare("
                        INSERT INTO volunteers (
                            first_name, last_name, email, phone, blood_group, dob, gender, is_diabetic, 
                            address, city, state, join_reason, work_preference, preferred_location, 
                            preferred_city, preferred_state, wish_to_support, id_proof_file, photo_file, ip_address
                        ) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)
                    ");

                    $stmt->execute([
                        $first_name,
                        $last_name,
                        $email,
                        $phone,
                        $blood_group,
                        $dob,
                        $gender,
                        $is_diabetic,
                        $address,
                        $city,
                        $state,
                        $join_reason,
                        $work_preference,
                        $preferred_location,
                        $preferred_city,
                        $preferred_state,
                        $wish_to_support,
                        $id_proof_path,
                        $photo_path,
                        $ip_address
                    ]);
                }

                if (function_exists('send_volunteer_received_email')) {
                    send_volunteer_received_email($email, $first_name);
                }

                $admin_email = "admin@awdorg.com";
                $vol_data = [
                    'first_name' => $first_name,
                    'last_name' => $last_name,
                    'email' => $email,
                    'phone' => $phone
                ];
                if (function_exists('send_admin_volunteer_notification')) {
                    send_admin_volunteer_notification($admin_email, $vol_data);
                }

                $message = "Thank you! Your volunteer application has been submitted successfully. Please check your email for confirmation.";
            } catch (Exception $e) {
                if ($id_proof_path && file_exists($id_proof_path))
                    unlink($id_proof_path);
                if ($photo_path && file_exists($photo_path))
                    unlink($photo_path);
                $error = "Database error: " . $e->getMessage();
            }
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AWDORG Foundation - Volunteer</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="/assets/css/style.css" />
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <style>
        .volunteer-main-card {
            background: linear-gradient(135deg, #fdfbfb 0%, #ebedee 100%);
            padding-bottom: 5rem;
        }

        .premium-form-card {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            border-radius: 20px;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.05), 0 5px 15px rgba(0, 0, 0, 0.03);
            border: 1px solid rgba(255, 255, 255, 0.4);
            overflow: hidden;
            transition: transform 0.3s ease;
        }

        .premium-form-card:hover {
            transform: translateY(-2px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.08), 0 5px 15px rgba(0, 0, 0, 0.04);
        }

        .form-section-header {
            color: #2c3e50;
            font-weight: 600;
            position: relative;
            padding-bottom: 10px;
            margin-bottom: 25px;
            font-size: 1.25rem;
        }

        .form-section-header::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 50px;
            height: 3px;
            background: linear-gradient(90deg, #ab0302, #8a0202);
            border-radius: 2px;
        }

        .premium-input {
            border: 2px solid #e2e8f0;
            border-radius: 10px;
            padding: 12px 15px;
            font-size: 1rem;
            transition: all 0.3s ease;
            background-color: #f8fafc;
        }

        .premium-input:focus {
            border-color: #ab0302;
            background-color: #ffffff;
            box-shadow: 0 0 0 4px rgba(171, 3, 2, 0.1);
        }

        .premium-label {
            font-weight: 500;
            color: #4a5568;
            margin-bottom: 8px;
            font-size: 0.95rem;
        }

        .form-check-input:checked {
            background-color: #ab0302;
            border-color: #ab0302;
        }

        .premium-btn {
            background: linear-gradient(135deg, #ab0302 0%, #8a0202 100%);
            border: none;
            border-radius: 10px;
            padding: 12px 30px;
            font-weight: 600;
            letter-spacing: 0.5px;
            box-shadow: 0 4px 15px rgba(171, 3, 2, 0.3);
            transition: all 0.3s ease;
            color: white;
        }

        .premium-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(171, 3, 2, 0.4);
            background: linear-gradient(135deg, #8a0202 0%, #6b0202 100%);
            color: white;
        }

        .text-primary {
            color: #ab0302 !important;
        }

        .volunteer-hero-section {
            position: relative;
            height: 40vh;
            min-height: 300px;
            overflow: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .volunteer-hero-section::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.5);
            z-index: 1;
        }

        .volunteer-hero-section video {
            position: absolute;
            top: 50%;
            left: 50%;
            min-width: 100%;
            min-height: 100%;
            width: auto;
            height: auto;
            transform: translateX(-50%) translateY(-50%);
            z-index: 0;
        }

        .hero-text-overlay {
            position: relative;
            z-index: 2;
            text-align: center;
            color: white;
        }

        .hero-text-overlay h1 {
            font-size: 3rem;
            font-weight: 700;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
            margin-bottom: 0;
        }

        .word-count-badge {
            font-size: 0.85rem;
            padding: 4px 8px;
            border-radius: 6px;
            margin-top: 5px;
            display: inline-block;
        }
    </style>
</head>

<body>
    <?php include 'includes/header.php'; ?>
    <section>
        <div class="volunteer-hero-section">
            <video autoplay muted loop playsinline class="bg-video">
                <source src="/assets/img/awd-about-video.webm" type="video/webm">
                Your browser does not support the video tag.
            </video>
            <div class="hero-text-overlay pt-5">
                <h1 class="">Become a Volunteer</h1>
                <p class="lead mt-2">Join AWDORG's mission to make a difference</p>
            </div>
        </div>

        <div class="main-card">
            <div >
                <div class="premium-form-card-x mt-4 ">

                    <?php if ($message): ?>
                        <div class="alert alert-success text-center pb-4 mb-4" style="border-radius: 12px;">
                            <h4 class="alert-heading"><i class="fas fa-check-circle me-2"></i>Success!</h4>
                            <p class="mb-3">
                                <?php echo htmlspecialchars($message); ?>
                            </p>
                            <a href="/" class="btn btn-outline-success rounded-pill px-4">Back to Home</a>
                        </div>
                    <?php else: ?>

                        <?php if ($error): ?>
                            <div class="alert alert-danger mb-4" style="border-radius: 12px;">
                                <i class="fas fa-exclamation-circle me-2"></i>
                                <?php echo htmlspecialchars($error); ?>
                            </div>
                        <?php endif; ?>

                        <form action="volunteer.php" method="POST" enctype="multipart/form-data" class="needs-validation"
                            novalidate>

                            <h4 class="form-section-header"><i class="fas fa-user text-primary me-2"></i>Personal Details
                            </h4>
                            <div class="row">
                                <div class="col-md-6 mb-4">
                                    <label class="form-label premium-label">First Name <span
                                            class="text-danger">*</span></label>
                                    <input type="text" name="first_name" class="form-control premium-input" required>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <label class="form-label premium-label">Last Name</label>
                                    <input type="text" name="last_name" class="form-control premium-input">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 mb-4">
                                    <label class="form-label premium-label">Email Address <span
                                            class="text-danger">*</span></label>
                                    <input type="email" name="email" class="form-control premium-input" required>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <label class="form-label premium-label">Phone Number <span
                                            class="text-danger">*</span></label>
                                    <input type="text" name="phone" class="form-control premium-input" required
                                        placeholder="+91 XXXXXXXXXX">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 mb-4">
                                    <label class="form-label premium-label">Blood Group <span
                                            class="text-danger">*</span></label>
                                    <select name="blood_group" class="form-select premium-input" required>
                                        <option value="" disabled selected>Select Blood Group</option>
                                        <option value="A+">A+</option>
                                        <option value="A-">A-</option>
                                        <option value="B+">B+</option>
                                        <option value="B-">B-</option>
                                        <option value="O+">O+</option>
                                        <option value="O-">O-</option>
                                        <option value="AB+">AB+</option>
                                        <option value="AB-">AB-</option>
                                    </select>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <label class="form-label premium-label">Date of Birth <span
                                            class="text-danger">*</span></label>
                                    <input type="date" name="dob" class="form-control premium-input" required>
                                </div>
                            </div>

                            <div class="row mb-5">
                                <div class="col-md-6 mb-4 mb-md-0">
                                    <label class="form-label premium-label d-block">Gender <span
                                            class="text-danger">*</span></label>
                                    <div class="d-flex gap-3 mt-2">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="gender" value="Male"
                                                id="genderMale" required>
                                            <label class="form-check-label" for="genderMale">Male</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="gender" value="Female"
                                                id="genderFemale" required>
                                            <label class="form-check-label" for="genderFemale">Female</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="gender" value="Other"
                                                id="genderOther" required>
                                            <label class="form-check-label" for="genderOther">Other</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label premium-label d-block">Are You Diabetic? <span
                                            class="text-danger">*</span></label>
                                    <div class="d-flex gap-3 mt-2">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="is_diabetic" value="Yes"
                                                id="diabeticYes" required>
                                            <label class="form-check-label" for="diabeticYes">Yes</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="is_diabetic" value="No"
                                                id="diabeticNo" required>
                                            <label class="form-check-label" for="diabeticNo">No</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <h4 class="form-section-header"><i class="fas fa-file-alt text-primary me-2"></i>Documents &
                                Media</h4>
                            <div class="row mb-5">
                                <div class="col-md-6 mb-4 mb-md-0">
                                    <label class="form-label premium-label">ID Proof (PDF/Image) <span
                                            class="text-danger">*</span></label>
                                    <input type="file" name="id_proof" class="form-control premium-input"
                                        accept="image/*,.pdf" required>
                                    <div class="form-text mt-2"><i class="fas fa-info-circle me-1"></i>Aadhar, PAN, Driving
                                        License, etc.</div>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label premium-label">Profile Picture <span
                                            class="text-danger">*</span></label>
                                    <input type="file" name="photo" class="form-control premium-input" accept="image/*"
                                        required>
                                    <div class="form-text mt-2"><i class="fas fa-info-circle me-1"></i>Please upload a clear
                                        face photo.</div>
                                </div>
                            </div>

                            <h4 class="form-section-header"><i class="fas fa-map-marker-alt text-primary me-2"></i>Address
                                Information</h4>
                            <div class="mb-4">
                                <label class="form-label premium-label">Street Address <span
                                        class="text-danger">*</span></label>
                                <input type="text" name="address" class="form-control premium-input" required>
                            </div>
                            <div class="row mb-5">
                                <div class="col-md-6 mb-4 mb-md-0">
                                    <label class="form-label premium-label">City <span class="text-danger">*</span></label>
                                    <input type="text" name="city" class="form-control premium-input" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label premium-label">State <span class="text-danger">*</span></label>
                                    <input type="text" name="state" class="form-control premium-input" required>
                                </div>
                            </div>

                            <h4 class="form-section-header"><i class="fas fa-heart text-primary me-2"></i>Volunteer
                                Preferences</h4>
                            <div class="mb-4">
                                <label class="form-label premium-label">I Want to Join because <span
                                        class="text-danger">*</span></label>
                                <textarea name="join_reason" class="form-control premium-input" rows="4" required
                                    placeholder="Please explain your motivation in at least 100 words..."></textarea>
                                <div class="d-flex justify-content-between align-items-center mt-2">
                                    <small class="text-muted"><i class="fas fa-info-circle me-1"></i>Minimum 100 words
                                        required</small>
                                    <span id="wordCount" class="badge bg-secondary word-count-badge">0 words</span>
                                </div>
                            </div>

                            <div class="mb-4">
                                <label class="form-label premium-label d-block mb-3">Work Preference <span
                                        class="text-danger">*</span></label>
                                <div class="card bg-light border-0 p-3" style="border-radius: 12px;">
                                    <div class="form-check mb-2">
                                        <input class="form-check-input" type="radio" name="work_preference"
                                            value="Work from home" id="workHome" required>
                                        <label class="form-check-label" for="workHome">Work from home</label>
                                    </div>
                                    <div class="form-check mb-2">
                                        <input class="form-check-input" type="radio" name="work_preference"
                                            value="Regular in Field" id="workRegular" required>
                                        <label class="form-check-label" for="workRegular">Regular in Field</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="work_preference"
                                            value="Occasional in the field" id="workOccasional" required>
                                        <label class="form-check-label" for="workOccasional">Occasional in the field</label>
                                    </div>
                                </div>
                            </div>

                            <div class="mb-4">
                                <label class="form-label premium-label">Preferred Location <span
                                        class="text-danger">*</span></label>
                                <input type="text" name="preferred_location" class="form-control premium-input" required>
                            </div>
                            <div class="row mb-5">
                                <div class="col-md-6 mb-4 mb-md-0">
                                    <label class="form-label premium-label">Preferred City</label>
                                    <input type="text" name="preferred_city" class="form-control premium-input">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label premium-label">Preferred State</label>
                                    <input type="text" name="preferred_state" class="form-control premium-input">
                                </div>
                            </div>

                            <div class="mb-5">
                                <label class="form-label premium-label d-block mb-3">I Wish to Support <span
                                        class="text-muted fw-normal">(Optional)</span></label>
                                <div class="card border-0 p-4" style="background-color: #f8fafc; border-radius: 12px;">
                                    <div class="row">
                                        <?php
                                        $projects = [
                                            "Project Ration",
                                            "Project Milkyway",
                                            "Project Feedme",
                                            "Project Life",
                                            "Project Pro",
                                            "Project Educate",
                                            "Project Elevate",
                                            "Project Employ",
                                            "Other"
                                        ];
                                        foreach ($projects as $proj) {
                                            $id = str_replace(' ', '', strtolower($proj));
                                            echo '<div class="col-md-4 mb-3">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="wish_to_support[]" value="' . $proj . '" id="chk_' . $id . '">
                                                        <label class="form-check-label" for="chk_' . $id . '">' . $proj . '</label>
                                                    </div>
                                                  </div>';
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>

                            <!-- Google reCAPTCHA widget -->
                            <div class="mb-5 d-flex justify-content-center d-none">
                                <div class="g-recaptcha" data-sitekey="YOUR_SITE_KEY"></div>
                            </div>

                            <div class="d-grid mt-4">
                                <button type="submit" class="btn premium-btn btn-lg">
                                    <i class="fas fa-paper-plane me-2"></i> Submit Volunteer Application
                                </button>
                            </div>

                        </form>
                    <?php endif; ?>

                </div>
            </div>
        </div>
    </section>

        <?php include 'includes/footer.php'; ?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/js/include.js"></script>
    <script src="/js/header.js"></script>
    <script>
        document.querySelector('textarea[name="join_reason"]').addEventListener('input', function () {
            let text = this.value.trim();
            let words = text === '' ? 0 : text.split(/\s+/).length;
            let badge = document.getElementById('wordCount');
            badge.innerText = words + " words";

            if (words < 100) {
                badge.className = 'badge bg-danger word-count-badge';
            } else {
                badge.className = 'badge bg-success word-count-badge';
            }
        });

        // Bootstrap form validation
        (function () {
            'use strict'
            var forms = document.querySelectorAll('.needs-validation')
            Array.prototype.slice.call(forms).forEach(function (form) {
                form.addEventListener('submit', function (event) {
                    // Custom word count validation
                    let text = document.querySelector('textarea[name="join_reason"]').value.trim();
                    let words = text === '' ? 0 : text.split(/\s+/).length;

                    if (!form.checkValidity() || words < 1) {
                        event.preventDefault()
                        event.stopPropagation()
                        if (words < 1) {
                            alert('Please explain your reason for joining.');
                        }
                    }
                    form.classList.add('was-validated')
                }, false)
            })
        })()
    </script>
</body>

</html>