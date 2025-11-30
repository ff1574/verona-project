<?php
/**
 * Text Block Title Component
 * 
 * Displays a text block with an h2 title, optional badges, and paragraph content.
 * 
 * Usage:
 *   $textBlock = [
 *       'id' => 'section-id',  // optional
 *       'title' => 'Section Title',
 *       'badges' => [          // optional
 *           ['type' => 'badge', 'text' => 'Visited'],
 *           ['type' => 'badge-outline', 'text' => 'not Visited']
 *       ],
 *       'content' => '<p>Your paragraph content here.</p>'
 *   ];
 *   include __DIR__ . '/text-block-title.php';
 * 
 * @param array $textBlock - Array with 'title' and 'content' keys, optional 'id' and 'badges'
 */

if (!isset($textBlock) || !isset($textBlock['title']) || !isset($textBlock['content'])) {
    return;
}

$id = isset($textBlock['id']) ? ' id="' . htmlspecialchars($textBlock['id']) . '"' : '';
?>
<div<?php echo $id; ?> class="component text-block-title">
    <h2><?php echo htmlspecialchars($textBlock['title']); ?>
        <?php if (isset($textBlock['badges'])): ?>
            <?php foreach ($textBlock['badges'] as $badge): ?>
                <span class="<?php echo htmlspecialchars($badge['type']); ?>"><?php echo htmlspecialchars($badge['text']); ?></span>
            <?php endforeach; ?>
        <?php endif; ?>
    </h2>
    <?php echo $textBlock['content']; ?>
</div>
<?php unset($textBlock); ?>
