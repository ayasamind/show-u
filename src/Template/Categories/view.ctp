<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Category $category
 */
?>
<div class="categories view large-9 medium-8 columns content">
    <h3><?= h($category->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($category->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($category->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($category->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Name') ?></h4>
        <?= $this->Text->autoParagraph(h($category->name)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Belongings') ?></h4>
        <?php if (!empty($category->belongings)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Category Id') ?></th>
                <th scope="col"><?= __('Description') ?></th>
                <th scope="col"><?= __('Photo') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($category->belongings as $belongings): ?>
            <tr>
                <td><?= h($belongings->id) ?></td>
                <td><?= h($belongings->name) ?></td>
                <td><?= h($belongings->user_id) ?></td>
                <td><?= h($belongings->category_id) ?></td>
                <td><?= h($belongings->description) ?></td>
                <td><?= h($belongings->photo) ?></td>
                <td><?= h($belongings->created) ?></td>
                <td><?= h($belongings->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Belongings', 'action' => 'view', $belongings->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Belongings', 'action' => 'edit', $belongings->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Belongings', 'action' => 'delete', $belongings->id], ['confirm' => __('Are you sure you want to delete # {0}?', $belongings->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
