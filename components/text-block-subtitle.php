<?php
/**
 * Text Block Subtitle Component
 * 
 * Displays a text block with an h3 subtitle, optional badges, and paragraph content.
 * 
 * Usage:
 *   $textBlock = [
 *       'id' => 'section-id',  // optional
 *       'subtitle' => 'Section Subtitle',
 *       'badges' => [          // optional
 *           ['type' => 'badge', 'text' => 'Visited'],
 *           ['type' => 'badge-outline', 'text' => 'not Visited']
 *       ],
 *       'content' => '<p>Your paragraph content here.</p>'
 *   ];
 *   include __DIR__ . '/text-block-subtitle.php';
 * 
 * @param array $textBlock - Array with 'subtitle' and 'content' keys, optional 'id' and 'badges'
 */

if (!isset($textBlock) || !isset($textBlock['content'])) {
    return;
}

$id = isset($textBlock['id']) ? ' id="' . htmlspecialchars($textBlock['id']) . '"' : '';
?>
<div<?php echo $id; ?> class="component text-block-subtitle">
    <?php if (isset($textBlock['subtitle'])): ?>
    <h3><?php echo htmlspecialchars($textBlock['subtitle']); ?>
        <?php if (isset($textBlock['badges'])): ?>
            <?php foreach ($textBlock['badges'] as $badge): ?>
                <span class="<?php echo htmlspecialchars($badge['type']); ?>"><?php echo htmlspecialchars($badge['text']); ?></span>
            <?php endforeach; ?>
        <?php endif; ?>
    </h3>
    <?php endif; ?>
    <?php echo $textBlock['content']; ?>
</div>
<?php unset($textBlock); ?>
