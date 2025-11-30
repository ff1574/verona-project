<?php
/**
 * Gallery 2V-H Component
 * 
 * Displays 2 vertical images in a grid on top and 1 horizontal image below.
 * 
 * Usage:
 *   $gallery = [
 *       'grid' => [
 *           ['src' => 'path/img1.jpg', 'alt' => 'Image 1'],
 *           ['src' => 'path/img2.jpg', 'alt' => 'Image 2']
 *       ],
 *       'main' => ['src' => 'path/main.jpg', 'alt' => 'Main image']
 *   ];
 *   include __DIR__ . '/gallery-2v-h.php';
 * 
 * @param array $gallery - Array with 'grid' and 'main' keys
 */

if (!isset($gallery) || !isset($gallery['grid']) || !isset($gallery['main'])) {
    return;
}
?>
<div class="component gallery gallery-2v-h">
    <div class="gallery-row-grid">
        <?php foreach ($gallery['grid'] as $img): ?>
        <img src="<?php echo htmlspecialchars($img['src']); ?>" 
             alt="<?php echo htmlspecialchars($img['alt'] ?? ''); ?>" 
             class="gallery-image" />
        <?php endforeach; ?>
    </div>
    <div class="gallery-row-main">
        <img src="<?php echo htmlspecialchars($gallery['main']['src']); ?>" 
             alt="<?php echo htmlspecialchars($gallery['main']['alt'] ?? ''); ?>" 
             class="gallery-image" />
    </div>
</div>
<?php unset($gallery); ?>
