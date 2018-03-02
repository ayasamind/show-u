<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Belongings'), ['controller' => 'Belongings', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Belonging'), ['controller' => 'Belongings', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="users view large-9 medium-8 columns content">
    <h3><?= h($user->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($user->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($user->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($user->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Username') ?></h4>
        <?= $this->Text->autoParagraph(h($user->username)); ?>
    </div>
    <div class="row">
        <h4><?= __('Password') ?></h4>
        <?= $this->Text->autoParagraph(h($user->password)); ?>
    </div>
    <div class="row">
        <h4><?= __('Email') ?></h4>
        <?= $this->Text->autoParagraph(h($user->email)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Belongings') ?></h4>
        <?php if (!empty($user->belongings)): ?>
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
            <?php foreach ($user->belongings as $belongings): ?>
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
