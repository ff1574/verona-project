<?php
/**
 * Gallery V-2H Component
 * 
 * Displays 1 vertical image on the left and 2 horizontal images stacked on the right.
 * 
 * Usage:
 *   $gallery = [
 *       'vertical' => ['src' => 'path/vertical.jpg', 'alt' => 'Vertical image'],
 *       'horizontal' => [
 *           ['src' => 'path/img1.jpg', 'alt' => 'Image 1'],
 *           ['src' => 'path/img2.jpg', 'alt' => 'Image 2']
 *       ]
 *   ];
 *   include __DIR__ . '/gallery-v-2h.php';
 * 
 * @param array $gallery - Array with 'vertical' and 'horizontal' keys
 */

if (!isset($gallery) || !isset($gallery['vertical']) || !isset($gallery['horizontal'])) {
    return;
}
?>
<div class="component gallery gallery-v-2h">
    <div class="gallery-col-vertical">
        <img src="<?php echo htmlspecialchars($gallery['vertical']['src']); ?>" 
             alt="<?php echo htmlspecialchars($gallery['vertical']['alt'] ?? ''); ?>" 
             class="gallery-image" />
    </div>
    <div class="gallery-col-horizontal">
        <?php foreach ($gallery['horizontal'] as $img): ?>
        <img src="<?php echo htmlspecialchars($img['src']); ?>" 
             alt="<?php echo htmlspecialchars($img['alt'] ?? ''); ?>" 
             class="gallery-image" />
        <?php endforeach; ?>
    </div>
</div>
<?php unset($gallery); ?>
