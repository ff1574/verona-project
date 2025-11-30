<?php
$basePath = '..';

// Include database configuration
require_once __DIR__ . '/../config/database.php';

$success_message = '';
$error_message = '';
$comments = [];
$db_available = false;

// Try to create database connection
try {
    mysqli_report(MYSQLI_REPORT_OFF); // Disable mysqli exception reporting for graceful error handling
    $conn = new mysqli(DB_HOST, DB_USER, DB_PASS);
    
    // Check connection
    if ($conn->connect_error) {
        $error_message = "Database connection failed. Please ensure MySQL is running and configured correctly.";
    } else {
        $db_available = true;
        // Create database if it doesn't exist
        $conn->query("CREATE DATABASE IF NOT EXISTS " . DB_NAME);
        $conn->select_db(DB_NAME);
    
    // Create comments table if it doesn't exist
    $create_table = "CREATE TABLE IF NOT EXISTS comments (
        id INT AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(100) NOT NULL,
        comment TEXT NOT NULL,
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    )";
    $conn->query($create_table);
    
    // Handle form submission
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Get and sanitize input
        $name = isset($_POST['name']) ? trim($_POST['name']) : '';
        $comment = isset($_POST['comment']) ? trim($_POST['comment']) : '';
        
        // Server-side validation
        $errors = [];
        
        if (empty($name)) {
            $errors[] = "Name is required.";
        } elseif (strlen($name) < 2) {
            $errors[] = "Name must be at least 2 characters long.";
        } elseif (strlen($name) > 100) {
            $errors[] = "Name must be less than 100 characters.";
        }
        
        if (empty($comment)) {
            $errors[] = "Comment is required.";
        } elseif (strlen($comment) < 10) {
            $errors[] = "Comment must be at least 10 characters long.";
        } elseif (strlen($comment) > 1000) {
            $errors[] = "Comment must be less than 1000 characters.";
        }
        
        if (empty($errors)) {
            // Use prepared statement to prevent SQL injection
            // Store raw data in database, sanitize on output only
            $stmt = $conn->prepare("INSERT INTO comments (name, comment) VALUES (?, ?)");
            $stmt->bind_param("ss", $name, $comment);
            
            if ($stmt->execute()) {
                $success_message = "Your comment has been submitted successfully!";
            } else {
                $error_message = "Failed to submit comment. Please try again.";
            }
            $stmt->close();
        } else {
            $error_message = implode(" ", $errors);
        }
    }
    
    // Fetch existing comments
    $result = $conn->query("SELECT * FROM comments ORDER BY created_at DESC");
    if ($result) {
        while ($row = $result->fetch_assoc()) {
            $comments[] = $row;
        }
    }
    
    $conn->close();
}
} catch (Exception $e) {
    $error_message = "Database connection failed. Please ensure MySQL is running and configured correctly.";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Leave your comments about Verona" />
    <title>Comments - Nora in Verona</title>
    <link rel="stylesheet" href="../assets/css/styles.css" />
</head>

<body>
    <?php include __DIR__ . '/../components/navbar.php'; ?>

    <main class="container">
        <div class="page-header">
            <h2>Comments</h2>
        </div>

        <section class="comments-section">
            <div class="comment-form-container">
                <h2>Leave a Comment</h2>
                
                <?php if ($success_message): ?>
                    <div class="form-success"><?php echo $success_message; ?></div>
                <?php endif; ?>
                
                <?php if ($error_message): ?>
                    <div class="form-error"><?php echo $error_message; ?></div>
                <?php endif; ?>
                
                <form class="comment-form" id="commentForm" method="POST" action="" novalidate>
                    <div class="form-group">
                        <label for="name">Your Name *</label>
                        <input type="text" id="name" name="name" maxlength="100" required 
                               placeholder="Enter your name" />
                        <span class="error-message" id="nameError"></span>
                    </div>
                    
                    <div class="form-group">
                        <label for="comment">Your Comment *</label>
                        <textarea id="comment" name="comment" maxlength="1000" required 
                                  placeholder="Share your thoughts about Verona..."></textarea>
                        <span class="error-message" id="commentError"></span>
                    </div>
                    
                    <button type="submit" class="submit-btn" id="submitBtn">Submit Comment</button>
                </form>
            </div>

            <div class="comments-list-container">
                <h2>What Others Say</h2>
                
                <?php if (empty($comments)): ?>
                    <p class="no-comments">No comments yet. Be the first to share your thoughts!</p>
                <?php else: ?>
                    <div class="comments-list">
                        <?php foreach ($comments as $c): ?>
                            <div class="comment-item">
                                <div class="comment-header">
                                    <span class="comment-author"><?php echo htmlspecialchars($c['name'], ENT_QUOTES, 'UTF-8'); ?></span>
                                    <span class="comment-date"><?php echo date('F j, Y', strtotime($c['created_at'])); ?></span>
                                </div>
                                <p class="comment-content"><?php echo nl2br(htmlspecialchars($c['comment'], ENT_QUOTES, 'UTF-8')); ?></p>
                            </div>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
            </div>
        </section>
    </main>

    <?php include __DIR__ . '/../components/footer.php'; ?>

    <script src="../assets/js/script.js"></script>
    <script src="../assets/js/comments-validation.js"></script>
</body>

</html>
