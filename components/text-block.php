<?php
/**
 * Text Block Component
 * 
 * Displays a plain text block without a title.
 * 
 * Usage:
 *   $textBlock = [
 *       'content' => '<p>Your paragraph content here.</p><p>Another paragraph.</p>'
 *   ];
 *   include __DIR__ . '/text-block.php';
 * 
 * @param array $textBlock - Array with 'content' key (HTML content)
 */

if (!isset($textBlock) || !isset($textBlock['content'])) {
    return;
}
?>
<div class="component text-block">
    <?php echo $textBlock['content']; ?>
</div>
<?php unset($textBlock); ?>
