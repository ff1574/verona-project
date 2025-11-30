<?php
/**
 * Gallery 2H Component
 * 
 * Displays 2 horizontal images in a grid.
 * 
 * Usage:
 *   $gallery = [
 *       'images' => [
 *           ['src' => 'path/img1.jpg', 'alt' => 'Image 1'],
 *           ['src' => 'path/img2.jpg', 'alt' => 'Image 2']
 *       ]
 *   ];
 *   include __DIR__ . '/gallery-2h.php';
 * 
 * @param array $gallery - Array with 'images' key containing 2 images
 */

if (!isset($gallery) || !isset($gallery['images'])) {
    return;
}
?>
<div class="component gallery gallery-2h">
    <div class="gallery-row-grid">
        <?php foreach ($gallery['images'] as $img): ?>
        <img src="<?php echo htmlspecialchars($img['src']); ?>" 
             alt="<?php echo htmlspecialchars($img['alt'] ?? ''); ?>" 
             class="gallery-image" />
        <?php endforeach; ?>
    </div>
</div>
<?php unset($gallery); ?>
