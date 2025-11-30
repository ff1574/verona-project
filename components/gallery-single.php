<?php
/**
 * Gallery Single Component
 * 
 * Displays a single horizontal image.
 * 
 * Usage:
 *   $gallery = ['src' => 'path/to/image.jpg', 'alt' => 'Description'];
 *   include __DIR__ . '/gallery-single.php';
 * 
 * @param array $gallery - Array with 'src' and 'alt' keys
 */

if (!isset($gallery) || !isset($gallery['src'])) {
    return;
}
?>
<div class="component gallery gallery-single">
    <img src="<?php echo htmlspecialchars($gallery['src']); ?>" 
         alt="<?php echo htmlspecialchars($gallery['alt'] ?? ''); ?>" 
         class="gallery-image" />
</div>
<?php unset($gallery); ?>
