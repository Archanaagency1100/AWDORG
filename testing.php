<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project Educate Center Layout</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background-color: #f8f9fa; padding: 50px 0; font-family: sans-serif; }
        
        .pec-card {
            border: none;
            background: transparent;
        }

        .img-container {
            position: relative;
            overflow: hidden;
            aspect-ratio: 16 / 9; /* Maintains consistent image height */
        }

        .img-container img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        /* Carousel-style arrows overlay */
        .arrow-btn {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            color: white;
            font-size: 24px;
            text-decoration: none;
            padding: 0 10px;
        }
        .arrow-right { right: 0; }
        .arrow-left { left: 0; }

        .card-body { padding: 15px 0; color: #6c757d; }
        
        .school-name { font-size: 0.95rem; line-height: 1.4; }
        
        .location {
            font-weight: bold;
            font-style: italic;
            color: #495057;
            margin: 5px 0;
        }

        .pec-code {
            font-size: 0.75rem;
            text-transform: uppercase;
            font-weight: 600;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="row g-4">
        
        <div class="col-md-4">
            <div class="card pec-card">
                <div class="img-container">
                    <img src="https://via.placeholder.com/400x250" alt="Computer Lab">
                    <a href="#" class="arrow-left arrow-btn">&#10094;</a>
                    <a href="#" class="arrow-right arrow-btn">&#10095;</a>
                </div>
                <div class="card-body">
                    <div class="text-muted small mb-1">Project Educate Center</div>
                    <div class="school-name">Micro School, Village Ghasola, Near Community center, Sector-49</div>
                    <div class="location">Gurgaon</div>
                    <div class="pec-code">CODE: PEC051</div>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card pec-card">
                <div class="img-container">
                    <img src="https://via.placeholder.com/400x250" alt="Classroom">
                    <a href="#" class="arrow-left arrow-btn">&#10094;</a>
                    <a href="#" class="arrow-right arrow-btn">&#10095;</a>
                </div>
                <div class="card-body">
                    <div class="text-muted small mb-1">Project Educate Center</div>
                    <div class="school-name">Shree 1008 Maharaj Hairakhan Government Inter College</div>
                    <div class="location">Haidakhan - Uttrakhand</div>
                    <div class="pec-code">CODE: PEC050</div>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card pec-card">
                <div class="img-container">
                    <img src="https://via.placeholder.com/400x250" alt="Lab Setup">
                    <a href="#" class="arrow-left arrow-btn">&#10094;</a>
                    <a href="#" class="arrow-right arrow-btn">&#10095;</a>
                </div>
                <div class="card-body">
                    <div class="text-muted small mb-1">Project Educate Center</div>
                    <div class="school-name">Rajkiye Prathmik Vidhyalaya</div>
                    <div class="location">Murukuriya Bhimtal - Uttrakhand</div>
                    <div class="pec-code">CODE: PEC049</div>
                </div>
            </div>
        </div>

    </div>
</div>

</body>
</html>