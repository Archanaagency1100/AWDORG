<?php
// blog.php - Public Blog Listing Page
require_once 'admin/config/database.php';

// Get current category filter if any
$categoryQuery = $_GET['category'] ?? '';

// Base query for published blogs
$sql = "SELECT b.*, u.username as author_name 
        FROM blogs b 
        LEFT JOIN users u ON b.author_id = u.id 
        WHERE b.status = 'published'";

$params = [];

if (!empty($categoryQuery)) {
    $sql .= " AND b.category = ?";
    $params[] = $categoryQuery;
}

$sql .= " ORDER BY b.created_at DESC";

try {
    $stmt = $pdo->prepare($sql);
    $stmt->execute($params);
    $blogs = $stmt->fetchAll();
} catch (PDOException $e) {
    die("Error loading blogs: " . $e->getMessage());
}

// Fetch all distinct categories for the filter sidebar
$catStmt = $pdo->query("SELECT DISTINCT category FROM blogs WHERE status = 'published' AND category IS NOT NULL AND category != ''");
$categories = $catStmt->fetchAll(PDO::FETCH_COLUMN);

// NOTE: You may want to replace the header/footer includes with your main project's actual header/footer if you are migrating this.
// For now, we manually build a simple public layout that mimics it.
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Blog - AWDORG</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <link href="/assets/css/style.css" rel="stylesheet">
</head>
<body class="bg-light">

    <?php include 'includes/header.php'; ?>
    <div class="container my-5">
        <div class="row">
            
            <!-- Main Content: Blog Listing -->
            <div class="col-lg-8">
                <h2 class="mb-4 fw-bold">Latest Articles <?= !empty($categoryQuery) ? '- <span class="text-primary">' . htmlspecialchars($categoryQuery) . '</span>' : '' ?></h2>
                
                <?php if (empty($blogs)): ?>
                    <div class="alert alert-info">No published articles found in this category.</div>
                <?php else: ?>
                    <div class="row g-4">
                        <?php foreach ($blogs as $blog): ?>
                            <div class="col-md-6">
                                <div class="card h-100 border-0 shadow-sm overflow-hidden" style="border-radius: 12px;">
                                    <?php if ($blog['featured_image']): ?>
                                        <!-- Replace the relative path to properly map to the uploads dir from here -->
                                        <img src="/admin/<?php echo htmlspecialchars($blog['featured_image']); ?>" class="card-img-top" alt="Featured Image" style="height: 200px; object-fit: cover;">
                                    <?php else: ?>
                                        <div class="bg-secondary text-white d-flex align-items-center justify-content-center" style="height: 200px;">
                                            <i class="bi bi-image" style="font-size: 3rem;"></i>
                                        </div>
                                    <?php endif; ?>
                                    
                                    <div class="card-body d-flex flex-column">
                                        <?php if ($blog['category']): ?>
                                            <span class="badge bg-primary text-white align-self-start mb-2"><?php echo htmlspecialchars($blog['category']); ?></span>
                                        <?php endif; ?>
                                        
                                        <h5 class="card-title fw-bold">
                                            <a href="blog_detail.php?slug=<?php echo urlencode($blog['slug']); ?>" class="text-dark text-decoration-none">
                                                <?php echo htmlspecialchars($blog['title']); ?>
                                            </a>
                                        </h5>
                                        
                                        <p class="card-text text-muted small flex-grow-1">
                                            <?php 
                                            if (!empty($blog['short_description'])) {
                                                echo htmlspecialchars(substr($blog['short_description'], 0, 120)) . '...';
                                            } else {
                                                echo htmlspecialchars(substr(strip_tags($blog['content']), 0, 120)) . '...';
                                            }
                                            ?>
                                        </p>
                                        
                                        <div class="text-muted small mt-3 border-top pt-3 d-flex justify-content-between align-items-center">
                                            <span><i class="bi bi-person me-1"></i> <?php echo htmlspecialchars($blog['author_name'] ?? 'Admin'); ?></span>
                                            <span><i class="bi bi-calendar me-1"></i> <?php echo date('M d, Y', strtotime($blog['created_at'])); ?></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
            </div>

            <!-- Sidebar: Categories -->
            <div class="col-lg-4 mt-5 mt-lg-0">
                <div class="card border-0 shadow-sm" style="border-radius: 12px;">
                    <div class="card-body">
                        <h5 class="fw-bold mb-3 border-bottom pb-2">Categories</h5>
                        <ul class="list-unstyled mb-0">
                            <li class="mb-2">
                                <a href="blog.php" class="text-decoration-none <?= empty($categoryQuery) ? 'fw-bold text-primary' : 'text-dark' ?>">All Blogs</a>
                            </li>
                            <?php foreach ($categories as $cat): ?>
                                <li class="mb-2">
                                    <a href="blog.php?category=<?php echo urlencode($cat); ?>" class="text-decoration-none <?= $categoryQuery === $cat ? 'fw-bold text-primary' : 'text-dark' ?>">
                                        <?php echo htmlspecialchars($cat); ?>
                                    </a>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <?php include 'includes/footer.php'; ?>
</body>
</html>
