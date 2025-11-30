<?php
/**
 * Gallery 3V Component
 * 
 * Displays 3 vertical images in a row.
 * 
 * Usage:
 *   $gallery = [
 *       'images' => [
 *           ['src' => 'path/img1.jpg', 'alt' => 'Image 1'],
 *           ['src' => 'path/img2.jpg', 'alt' => 'Image 2'],
 *           ['src' => 'path/img3.jpg', 'alt' => 'Image 3']
 *       ]
 *   ];
 *   include __DIR__ . '/gallery-3v.php';
 * 
 * @param array $gallery - Array with 'images' key containing 3 images
 */

if (!isset($gallery) || !isset($gallery['images'])) {
    return;
}
?>
<div class="component gallery gallery-3v">
    <?php foreach ($gallery['images'] as $img): ?>
    <img src="<?php echo htmlspecialchars($img['src']); ?>" 
         alt="<?php echo htmlspecialchars($img['alt'] ?? ''); ?>" 
         class="gallery-image" />
    <?php endforeach; ?>
</div>
<?php unset($gallery); ?>
