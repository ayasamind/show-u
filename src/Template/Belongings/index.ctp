<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface[]|\Cake\Collection\CollectionInterface $belongings
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Belonging'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="belongings index large-9 medium-8 columns content">
    <h3><?= __('Belongings') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('category_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($belongings as $belonging): ?>
            <tr>
                <td><?= $this->Number->format($belonging->id) ?></td>
                <td><?= $this->Number->format($belonging->user_id) ?></td>
                <td><?= $this->Number->format($belonging->category_id) ?></td>
                <td><?= h($belonging->created) ?></td>
                <td><?= h($belonging->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $belonging->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $belonging->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $belonging->id], ['confirm' => __('Are you sure you want to delete # {0}?', $belonging->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>