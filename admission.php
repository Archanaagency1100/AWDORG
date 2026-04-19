<?php
require_once 'admin/config/database.php';

$success = false;
$error = '';

// Fetch Centers for Dropdown
$centers = [];
try {
    if (isset($pdo)) {
        $stmt = $pdo->query("SELECT id, name FROM centers ORDER BY name ASC");
        $centers = $stmt->fetchAll();
    }
} catch (Exception $e) {
    // If table doesn't exist yet, we silently ignore on the form, but in prod log it.
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Basic Validation Strategy
    $center_id = $_POST['center_id'] ?? '';
    $course_id = $_POST['course_id'] ?? '';
    $name = trim($_POST['name'] ?? '');
    $fathers_name = trim($_POST['fathers_name'] ?? '');
    $gender = $_POST['gender'] ?? '';
    $dob = $_POST['dob'] ?? '';
    $present_address = trim($_POST['present_address'] ?? '');
    $permanent_address = trim($_POST['permanent_address'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $mobile = trim($_POST['mobile'] ?? '');
    $id_card_type = $_POST['id_card_type'] ?? '';
    $id_card_number = trim($_POST['id_card_number'] ?? '');
    $qualification = trim($_POST['qualification'] ?? '');
    $other_qualification = trim($_POST['other_qualification'] ?? '');

    // File uploads checking
    if (empty($name) || empty($center_id) || empty($course_id) || empty($mobile)) {
        $error = "Please fill all required fields.";
    } else {
        // Handle File Uploads (Basic example)
        $id_card_path = '';
        $photo_path = '';

        if (isset($_FILES['id_card_file']) && $_FILES['id_card_file']['error'] === UPLOAD_ERR_OK) {
            if (!is_dir('uploads/docs')) {
                mkdir('uploads/docs', 0777, true);
            }
            $id_card_path = 'uploads/docs/' . time() . '_' . basename($_FILES['id_card_file']['name']);
            @move_uploaded_file($_FILES['id_card_file']['tmp_name'], $id_card_path);
        }

        if (isset($_FILES['photo_file']) && $_FILES['photo_file']['error'] === UPLOAD_ERR_OK) {
            if (!is_dir('uploads/photos')) {
                mkdir('uploads/photos', 0777, true);
            }
            $photo_path = 'uploads/photos/' . time() . '_' . basename($_FILES['photo_file']['name']);
            @move_uploaded_file($_FILES['photo_file']['tmp_name'], $photo_path);
        }

        try {
            if (isset($pdo)) {
                $sql = "INSERT INTO admissions 
                (center_id, course_id, name, fathers_name, gender, dob, present_address, permanent_address, email, mobile, id_card_type, id_card_number, id_card_file, qualification, other_qualification, photo_file) 
                VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

                $stmt = $pdo->prepare($sql);
                $stmt->execute([
                    $center_id,
                    $course_id,
                    $name,
                    $fathers_name,
                    $gender,
                    $dob,
                    $present_address,
                    $permanent_address,
                    $email,
                    $mobile,
                    $id_card_type,
                    $id_card_number,
                    $id_card_path,
                    $qualification,
                    $other_qualification,
                    $photo_path
                ]);
            }
            $success = true;
        } catch (Exception $e) {
            $error = "Database Error: " . $e->getMessage();
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AWDORG Foundation - Admission</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="/assets/css/style.css" />
    <style>
        .admission-main-card {
            background: linear-gradient(135deg, #fdfbfb 0%, #ebedee 100%);
            padding-bottom: 5rem;
            min-height: 100vh;
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

        .text-primary,
        .text-danger {
            color: #ab0302 !important;
        }

        .header-banner {
            background: linear-gradient(135deg, #ab0302 0%, #6b0202 100%);
            padding: 40px 0;
            text-align: center;
            color: white;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            position: relative;
        }

        .header-banner::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            height: 5px;
            background: rgba(0, 0, 0, 0.2);
        }
    </style>
</head>

<body>
    <?php include 'includes/header.php'; ?>
    <div class="header-banner py-5">
        <h1 class="fw-bold mb-0 mt-5" style="margin-top: 100px !important;">Project Educate Admission</h1>
        <p class="lead mt-2 mb-0">Join us and start your learning journey today</p>
    </div>

    <div class="admission-main-card pt-5">
        <div class="container" style="max-width: 900px;">
            <div class="premium-form-card p-4 p-md-5">

                <?php if ($success): ?>
                        <div class="alert alert-success text-center pb-4 mb-4" style="border-radius: 12px;">
                            <h4 class="alert-heading"><i class="fas fa-check-circle me-2"></i>Registration Successful!</h4>
                            <p class="mb-3">Thank you for submitting your admission form. Our team will review your application
                                and contact you soon.</p>
                            <a href="/" class="btn btn-outline-success rounded-pill px-4"
                                style="border-color: #ab0302; color: #ab0302;">Back to Home</a>
                            <a href="admission.php" class="btn premium-btn rounded-pill px-4 ms-2">Submit Another</a>
                        </div>
                <?php else: ?>

                        <?php if ($error): ?>
                                <div class="alert alert-danger mb-4" style="border-radius: 12px;">
                                    <i class="fas fa-exclamation-circle me-2"></i><?php echo htmlspecialchars($error); ?>
                                </div>
                        <?php endif; ?>

                        <form action="admission.php" method="POST" enctype="multipart/form-data" class="needs-validation"
                            novalidate>

                            <h4 class="form-section-header"><i class="fas fa-book-open text-primary me-2"></i>1. Course Details
                            </h4>
                            <div class="row mb-5">
                                <div class="col-md-6 mb-4 mb-md-0">
                                    <label class="form-label premium-label">Select Center <span
                                            class="text-danger">*</span></label>
                                    <select name="center_id" id="center_id" class="form-select premium-input" required>
                                        <option value="" disabled selected>-- Choose Center --</option>
                                        <?php foreach ($centers as $center): ?>
                                                <option value="<?php echo $center['id']; ?>">
                                                    <?php echo htmlspecialchars($center['name']); ?>
                                                </option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label premium-label">Select Course <span
                                            class="text-danger">*</span></label>
                                    <select name="course_id" id="course_id" class="form-select premium-input" required>
                                        <option value="" disabled selected>-- Select Center First --</option>
                                        <!-- Populated via AJAX -->
                                    </select>
                                </div>
                            </div>

                            <h4 class="form-section-header"><i class="fas fa-user-circle text-primary me-2"></i>2. Personal
                                Details</h4>
                            <div class="row">
                                <div class="col-md-6 mb-4">
                                    <label class="form-label premium-label">Full Name <span class="text-danger">*</span></label>
                                    <input type="text" name="name" class="form-control premium-input" required>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <label class="form-label premium-label">Father's Name <span
                                            class="text-danger">*</span></label>
                                    <input type="text" name="fathers_name" class="form-control premium-input" required>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 mb-4">
                                    <label class="form-label premium-label">Gender <span class="text-danger">*</span></label>
                                    <select name="gender" class="form-select premium-input" required>
                                        <option value="" disabled selected>Select Gender</option>
                                        <option value="M">Male</option>
                                        <option value="F">Female</option>
                                        <option value="Other">Other</option>
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
                                    <label class="form-label premium-label">Email ID</label>
                                    <input type="email" name="email" class="form-control premium-input"
                                        placeholder="john@example.com">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label premium-label">Mobile No. <span
                                            class="text-danger">*</span></label>
                                    <input type="text" name="mobile" class="form-control premium-input" required
                                        placeholder="+91 XXXXXXXXXX">
                                </div>
                            </div>

                            <h4 class="form-section-header"><i class="fas fa-map-marker-alt text-primary me-2"></i>Address
                                Details</h4>
                            <div class="mb-4">
                                <label class="form-label premium-label">Present Address <span
                                        class="text-danger">*</span></label>
                                <textarea name="present_address" class="form-control premium-input" rows="2"
                                    required></textarea>
                            </div>
                            <div class="mb-5">
                                <label class="form-label premium-label">Permanent Address <span
                                        class="text-danger">*</span></label>
                                <textarea name="permanent_address" class="form-control premium-input" rows="2"
                                    required></textarea>
                            </div>

                            <h4 class="form-section-header"><i class="fas fa-file-invoice text-primary me-2"></i>3. Documents &
                                Qualification</h4>
                            <div class="row mb-4">
                                <div class="col-md-6 mb-4 mb-md-0">
                                    <label class="form-label premium-label">ID Card Type <span
                                            class="text-danger">*</span></label>
                                    <select name="id_card_type" class="form-select premium-input" required>
                                        <option value="" disabled selected>Select ID Type</option>
                                        <option value="Aadhar Card">Aadhar Card</option>
                                        <option value="PAN Card">PAN Card</option>
                                        <option value="Passport">Passport</option>
                                        <option value="Voter Id">Voter Id</option>
                                        <option value="Ration Card">Ration Card</option>
                                        <option value="School Id">School Id</option>
                                        <option value="College Id">College Id</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label premium-label">ID Card No. <span
                                            class="text-danger">*</span></label>
                                    <input type="text" name="id_card_number" class="form-control premium-input" required>
                                </div>
                            </div>

                            <div class="row mb-4">
                                <div class="col-md-6 mb-4 mb-md-0">
                                    <label class="form-label premium-label">Upload ID Card Document <span
                                            class="text-danger">*</span></label>
                                    <div class="input-group">
                                        <input type="file" name="id_card_file" id="id_card_file" class="form-control premium-input"
                                            accept=".jpg,.jpeg,.png,.pdf" required style="border-top-right-radius: 0; border-bottom-right-radius: 0;">
                                        <button type="button" class="btn premium-btn capture-btn" data-target="id_card_file" style="border-top-left-radius: 0; border-bottom-left-radius: 0; padding: 12px 20px;" title="Capture from Camera">
                                            <i class="fas fa-camera"></i>
                                        </button>
                                    </div>
                                    <div id="preview_id_card_file" class="mt-2 d-none">
                                        <img src="" class="img-thumbnail" style="max-height: 150px; border-radius: 10px;">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label premium-label">Upload Photo <span
                                            class="text-danger">*</span></label>
                                    <div class="input-group">
                                        <input type="file" name="photo_file" id="photo_file" class="form-control premium-input"
                                            accept=".jpg,.jpeg,.png" required style="border-top-right-radius: 0; border-bottom-right-radius: 0;">
                                        <button type="button" class="btn premium-btn capture-btn" data-target="photo_file" style="border-top-left-radius: 0; border-bottom-left-radius: 0; padding: 12px 20px;" title="Capture from Camera">
                                            <i class="fas fa-camera"></i>
                                        </button>
                                    </div>
                                    <div id="preview_photo_file" class="mt-2 d-none">
                                        <img src="" class="img-thumbnail" style="max-height: 150px; border-radius: 10px;">
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-5">
                                <div class="col-md-6 mb-4 mb-md-0">
                                    <label class="form-label premium-label">Highest Qualification <span
                                            class="text-danger">*</span></label>
                                    <input type="text" name="qualification" class="form-control premium-input" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label premium-label">Any Other Qualification</label>
                                    <input type="text" name="other_qualification" class="form-control premium-input">
                                </div>
                            </div>

                            <div class="d-grid mt-4">
                                <button type="submit" class="btn premium-btn btn-lg">
                                    <i class="fas fa-paper-plane me-2"></i> Submit Admission
                                </button>
                            </div>
                        </form>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <!-- Camera Modal -->
    <div class="modal fade" id="cameraModal" tabindex="-1" aria-labelledby="cameraModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content premium-form-card" style="border-radius: 20px; overflow: hidden;">
                <div class="modal-header border-0 pb-0">
                    <h5 class="modal-title fw-bold" id="cameraModalLabel" style="color: #2c3e50;">Capture Image</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center">
                    <div class="camera-container position-relative mb-3" style="background: #000; border-radius: 10px; overflow: hidden; min-height: 300px; display: flex; align-items: center; justify-content: center;">
                        <video id="camera_video" autoplay playsinline style="width: 100%; max-height: 400px; object-fit: contain;"></video>
                        <canvas id="camera_canvas" class="d-none"></canvas>
                    </div>
                    <div class="d-flex justify-content-center gap-3">
                        <button type="button" class="btn btn-outline-secondary rounded-pill px-4" id="switch_camera_btn">
                            <i class="fas fa-sync-alt me-2"></i>Switch Camera
                        </button>
                        <button type="button" class="btn premium-btn rounded-pill px-4" id="capture_image_btn">
                            <i class="fas fa-camera me-2"></i>Capture
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include 'includes/footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <!--<script src="/js/include.js"></script>-->
    <script>
        // Camera functionality
        let currentStream = null;
        let currentFacingMode = 'environment';
        let currentTargetInput = null;

        let cameraModalEl = document.getElementById('cameraModal');
        let cameraModalObj = null;
        if (cameraModalEl) {
            cameraModalObj = new bootstrap.Modal(cameraModalEl);
        }

        const video = document.getElementById('camera_video');
        const canvas = document.getElementById('camera_canvas');
        const switchCameraBtn = document.getElementById('switch_camera_btn');
        const captureImageBtn = document.getElementById('capture_image_btn');

        document.querySelectorAll('.capture-btn').forEach(btn => {
            btn.addEventListener('click', function() {
                currentTargetInput = this.getAttribute('data-target');
                startCamera();
                if(cameraModalObj) cameraModalObj.show();
            });
        });

        if (cameraModalEl) {
            cameraModalEl.addEventListener('hidden.bs.modal', function () {
                stopCamera();
            });
        }

        if (switchCameraBtn) {
            switchCameraBtn.addEventListener('click', function() {
                currentFacingMode = currentFacingMode === 'environment' ? 'user' : 'environment';
                startCamera();
            });
        }

        if (captureImageBtn) {
            captureImageBtn.addEventListener('click', function() {
                if (!currentStream || !currentTargetInput) return;
                
                canvas.width = video.videoWidth;
                canvas.height = video.videoHeight;
                const ctx = canvas.getContext('2d');
                ctx.drawImage(video, 0, 0, canvas.width, canvas.height);
                
                canvas.toBlob(function(blob) {
                    if (!blob) return;
                    const file = new File([blob], "captured_image_" + Date.now() + ".jpg", { type: "image/jpeg" });
                    const dataTransfer = new DataTransfer();
                    dataTransfer.items.add(file);
                    
                    const fileInput = document.getElementById(currentTargetInput);
                    fileInput.files = dataTransfer.files;
                    
                    // Show preview
                    const previewContainer = document.getElementById('preview_' + currentTargetInput);
                    if (previewContainer) {
                        const previewImg = previewContainer.querySelector('img');
                        previewImg.src = URL.createObjectURL(blob);
                        previewContainer.classList.remove('d-none');
                    }
                    
                    if(cameraModalObj) cameraModalObj.hide();
                }, 'image/jpeg', 0.8);
            });
        }

        function startCamera() {
            stopCamera();
            const constraints = {
                video: { facingMode: { ideal: currentFacingMode } }
            };

            navigator.mediaDevices.getUserMedia(constraints)
                .then(function(stream) {
                    currentStream = stream;
                    video.srcObject = stream;
                })
                .catch(function(err) {
                    console.error("Error accessing the camera: ", err);
                    // Fallback to any available camera if ideal constraint fails
                    navigator.mediaDevices.getUserMedia({ video: true })
                        .then(function(stream) {
                            currentStream = stream;
                            video.srcObject = stream;
                        })
                        .catch(function(err2) {
                            alert("Could not access the camera. Please allow permissions.");
                        });
                });
        }

        function stopCamera() {
            if (currentStream) {
                currentStream.getTracks().forEach(track => track.stop());
                currentStream = null;
            }
        }

        // Preview manual file uploads
        document.querySelectorAll('input[type="file"]').forEach(input => {
            input.addEventListener('change', function() {
                const previewContainer = document.getElementById('preview_' + this.id);
                if (previewContainer && this.files && this.files[0]) {
                    if (this.files[0].type.includes('image')) {
                        const reader = new FileReader();
                        reader.onload = function(e) {
                            const previewImg = previewContainer.querySelector('img');
                            previewImg.src = e.target.result;
                            previewContainer.classList.remove('d-none');
                        };
                        reader.readAsDataURL(this.files[0]);
                    } else if (this.files[0].type.includes('pdf')) {
                        const previewImg = previewContainer.querySelector('img');
                        // Placeholder for PDF
                        previewImg.src = "data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' width='100' height='100'><rect width='100' height='100' rx='10' fill='%23eee'/><text x='50%' y='50%' font-family='Arial' font-size='20' font-weight='bold' fill='%23ab0302' dominant-baseline='middle' text-anchor='middle'>PDF</text></svg>";
                        previewContainer.classList.remove('d-none');
                    }
                } else if (previewContainer) {
                    previewContainer.classList.add('d-none');
                }
            });
        });

        // Logic to load courses dynamically based on center
        document.getElementById('center_id').addEventListener('change', function () {
            var centerId = this.value;
            var courseSelect = document.getElementById('course_id');

            // Clear current options
            courseSelect.innerHTML = '<option value="" disabled selected>Loading...</option>';

            if (centerId) {
                fetch('/admin/api/api_courses.php?center_id=' + centerId)
                    .then(response => response.json())
                    .then(data => {
                        courseSelect.innerHTML = '<option value="" disabled selected>-- Select Course --</option>';
                        data.forEach(function (course) {
                            var option = document.createElement('option');
                            option.value = course.id;
                            option.textContent = course.course_name;
                            courseSelect.appendChild(option);
                        });
                    })
                    .catch(error => {
                        console.error('Error fetching courses:', error);
                        courseSelect.innerHTML = '<option value="" disabled selected>Error loading courses</option>';
                    });
            } else {
                courseSelect.innerHTML = '<option value="" disabled selected>-- Select Center First --</option>';
            }
        });

        // Bootstrap form validation
        (function () {
            'use strict'
            var forms = document.querySelectorAll('.needs-validation')
            Array.prototype.slice.call(forms).forEach(function (form) {
                form.addEventListener('submit', function (event) {
                    if (!form.checkValidity()) {
                        event.preventDefault()
                        event.stopPropagation()
                    }
                    form.classList.add('was-validated')
                }, false)
            })
        })()
    </script>
</body>

</html>