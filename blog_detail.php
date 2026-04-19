<?php
// blog_detail.php - Single Blog View Page
require_once 'admin/config/database.php';

if (!isset($_GET['slug']) || empty($_GET['slug'])) {
    header('Location: blog.php');
    exit;
}

$slug = trim($_GET['slug']);

try {
    $stmt = $pdo->prepare("SELECT b.*, u.username as author_name 
            FROM blogs b 
            LEFT JOIN users u ON b.author_id = u.id 
            WHERE b.slug = ? AND b.status = 'published'");
    $stmt->execute([$slug]);
    $blog = $stmt->fetch();

    if (!$blog) {
        die("Blog post not found or it is not published.");
    }

    // Fetch related blogs from same category
    $related = [];
    if (!empty($blog['category'])) {
        $rStmt = $pdo->prepare("SELECT * FROM blogs 
                                WHERE category = ? AND id != ? AND status = 'published' 
                                ORDER BY created_at DESC LIMIT 3");
        $rStmt->execute([$blog['category'], $blog['id']]);
        $related = $rStmt->fetchAll();
    }
} catch (PDOException $e) {
    die("Error loading blog: " . $e->getMessage());
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php echo htmlspecialchars($blog['meta_title'] ?: $blog['title']); ?> - AWDORG
    </title>
    <?php if ($blog['meta_description']): ?>
        <meta name="description" content="<?php echo htmlspecialchars($blog['meta_description']); ?>">
    <?php endif; ?>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <link href="/assets/css/style.css" rel="stylesheet">
    <style>
        .blog-content img,
        .blog-content iframe {
            max-width: 100%;
            height: auto;
            border-radius: 8px;
            margin-bottom: 20px;
        }

        .blog-header-img {
            width: 100%;
            max-height: 400px;
            object-fit: cover;
            border-radius: 12px;
        }
    </style>
</head>

<body class="bg-light">

    
    <?php include 'includes/header.php'; ?>

    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-lg-9">
                <!-- Blog Header -->
                <div class="mb-4">
                    <?php if ($blog['category']): ?>
                        <a href="blog.php?category=<?php echo urlencode($blog['category']); ?>"
                            class="badge bg-primary text-decoration-none mb-3 fs-6 px-3 py-2">
                            <?php echo htmlspecialchars($blog['category']); ?>
                        </a>
                    <?php endif; ?>

                    <h1 class="fw-bold display-5 mb-3">
                        <?php echo htmlspecialchars($blog['title']); ?>
                    </h1>

                    <div class="d-flex align-items-center text-muted mb-4 border-bottom pb-4">
                        <div class="me-4"><i class="bi bi-person-circle fs-5 me-2"></i>
                            <?php echo htmlspecialchars($blog['author_name'] ?? 'Admin'); ?>
                        </div>
                        <div><i class="bi bi-calendar fs-5 me-2"></i>
                            <?php echo date('F d, Y', strtotime($blog['created_at'])); ?>
                        </div>
                    </div>
                </div>

                <!-- Featured Image -->
                <?php if ($blog['featured_image']): ?>
                    <img src="/admin/<?php echo htmlspecialchars($blog['featured_image']); ?>"
                        class="blog-header-img mb-5 shadow-sm" alt="<?php echo htmlspecialchars($blog['title']); ?>">
                <?php endif; ?>

                <!-- Blog Content -->
                <div class="blog-content fs-5 bg-white p-4 p-md-5 shadow-sm rounded-4 mb-5">
                    <?php echo $blog['content']; // Output RAW HTML built via Quill ?>
                </div>
            </div>
        </div>

        <!-- Related Blogs Section -->
        <?php if (!empty($related)): ?>
            <div class="row justify-content-center border-top pt-5 mt-5">
                <div class="col-lg-9">
                    <h3 class="fw-bold mb-4">Related Articles in
                        <?php echo htmlspecialchars($blog['category']); ?>
                    </h3>
                    <div class="row g-4">
                        <?php foreach ($related as $r): ?>
                            <div class="col-md-4">
                                <div class="card h-100 border-0 shadow-sm" style="border-radius: 12px;">
                                    <?php if ($r['featured_image']): ?>
                                        <img src="/admin/<?php echo htmlspecialchars($r['featured_image']); ?>" class="card-img-top"
                                            style="height: 150px; object-fit:cover;">
                                    <?php endif; ?>
                                    <div class="card-body">
                                        <h6 class="fw-bold mb-2">
                                            <a href="blog_detail.php?slug=<?php echo urlencode($r['slug']); ?>"
                                                class="text-dark text-decoration-none">
                                                <?php echo htmlspecialchars($r['title']); ?>
                                            </a>
                                        </h6>
                                        <div class="text-muted small">
                                            <i class="bi bi-calendar me-1"></i>
                                            <?php echo date('M d, Y', strtotime($r['created_at'])); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    </div>
    
    <?php include 'includes/footer.php'; ?>

</body>

</html>