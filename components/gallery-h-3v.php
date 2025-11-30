<?php
/**
 * Gallery H-3V Component
 * 
 * Displays 1 horizontal image on top and 3 vertical images in a grid below.
 * 
 * Usage:
 *   $gallery = [
 *       'main' => ['src' => 'path/main.jpg', 'alt' => 'Main image'],
 *       'grid' => [
 *           ['src' => 'path/img1.jpg', 'alt' => 'Image 1'],
 *           ['src' => 'path/img2.jpg', 'alt' => 'Image 2'],
 *           ['src' => 'path/img3.jpg', 'alt' => 'Image 3']
 *       ]
 *   ];
 *   include __DIR__ . '/gallery-h-3v.php';
 * 
 * @param array $gallery - Array with 'main' and 'grid' keys
 */

if (!isset($gallery) || !isset($gallery['main']) || !isset($gallery['grid'])) {
    return;
}
?>
<div class="component gallery gallery-h-3v">
    <div class="gallery-row-main">
        <img src="<?php echo htmlspecialchars($gallery['main']['src']); ?>" 
             alt="<?php echo htmlspecialchars($gallery['main']['alt'] ?? ''); ?>" 
             class="gallery-image" />
    </div>
    <div class="gallery-row-grid">
        <?php foreach ($gallery['grid'] as $img): ?>
        <img src="<?php echo htmlspecialchars($img['src']); ?>" 
             alt="<?php echo htmlspecialchars($img['alt'] ?? ''); ?>" 
             class="gallery-image" />
        <?php endforeach; ?>
    </div>
</div>
<?php unset($gallery); ?>
