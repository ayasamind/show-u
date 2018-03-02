<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $belonging
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Belonging'), ['action' => 'edit', $belonging->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Belonging'), ['action' => 'delete', $belonging->id], ['confirm' => __('Are you sure you want to delete # {0}?', $belonging->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Belongings'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Belonging'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="belongings view large-9 medium-8 columns content">
    <h3><?= h($belonging->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($belonging->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User Id') ?></th>
            <td><?= $this->Number->format($belonging->user_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Category Id') ?></th>
            <td><?= $this->Number->format($belonging->category_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($belonging->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($belonging->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Name') ?></h4>
        <?= $this->Text->autoParagraph(h($belonging->name)); ?>
    </div>
    <div class="row">
        <h4><?= __('Description') ?></h4>
        <?= $this->Text->autoParagraph(h($belonging->description)); ?>
    </div>
    <div class="row">
        <h4><?= __('Photo') ?></h4>
        <?= $this->Text->autoParagraph(h($belonging->photo)); ?>
    </div>
</div>
