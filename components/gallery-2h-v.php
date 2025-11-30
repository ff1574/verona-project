<?php
/**
 * Gallery 2H-V Component
 * 
 * Displays 2 horizontal images stacked on the left and 1 vertical image on the right.
 * 
 * Usage:
 *   $gallery = [
 *       'horizontal' => [
 *           ['src' => 'path/img1.jpg', 'alt' => 'Image 1'],
 *           ['src' => 'path/img2.jpg', 'alt' => 'Image 2']
 *       ],
 *       'vertical' => ['src' => 'path/vertical.jpg', 'alt' => 'Vertical image']
 *   ];
 *   include __DIR__ . '/gallery-2h-v.php';
 * 
 * @param array $gallery - Array with 'horizontal' and 'vertical' keys
 */

if (!isset($gallery) || !isset($gallery['horizontal']) || !isset($gallery['vertical'])) {
    return;
}
?>
<div class="component gallery gallery-2h-v">
    <div class="gallery-col-horizontal">
        <?php foreach ($gallery['horizontal'] as $img): ?>
        <img src="<?php echo htmlspecialchars($img['src']); ?>" 
             alt="<?php echo htmlspecialchars($img['alt'] ?? ''); ?>" 
             class="gallery-image" />
        <?php endforeach; ?>
    </div>
    <div class="gallery-col-vertical">
        <img src="<?php echo htmlspecialchars($gallery['vertical']['src']); ?>" 
             alt="<?php echo htmlspecialchars($gallery['vertical']['alt'] ?? ''); ?>" 
             class="gallery-image" />
    </div>
</div>
<?php unset($gallery); ?>
