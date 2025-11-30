<?php
/**
 * Navbar Component
 * 
 * This component renders the navigation bar with dynamic paths based on the current page location.
 * 
 * Usage: Include this file in your PHP pages after defining the $basePath variable.
 * 
 * Example:
 *   $basePath = '..';  // For pages in /pages/ directory
 *   $basePath = '../..';  // For pages in /pages/what-to-do/ or /pages/what-to-see/ directories
 *   include __DIR__ . '/../../components/navbar.php';
 */

// Default base path if not set
if (!isset($basePath)) {
    $basePath = '.';
}
?>
<nav class="navbar">
    <div class="navbar-container">
        <a href="<?php echo $basePath; ?>/index.php" class="navbar-brand">
            <span class="brand-main">Nora</span>
            <span class="brand-sub">in Verona</span>
        </a>

        <button class="navbar-toggle" aria-label="Toggle navigation">
            <span class="navbar-toggle-icon"></span>
            <span class="navbar-toggle-icon"></span>
            <span class="navbar-toggle-icon"></span>
        </button>

        <ul class="navbar-menu">
            <li class="navbar-item">
                <a href="<?php echo $basePath; ?>/index.php" class="navbar-link">Home</a>
            </li>
            <li class="navbar-item">
                <a href="<?php echo $basePath; ?>/pages/what-to-do.php" class="navbar-link">What to do?</a>
            </li>
            <li class="navbar-item">
                <a href="<?php echo $basePath; ?>/pages/what-to-see.php" class="navbar-link">What to see?</a>
            </li>
            <li class="navbar-item">
                <a href="<?php echo $basePath; ?>/pages/what-to-know.php" class="navbar-link">What to know?</a>
            </li>
        </ul>
    </div>
</nav>
