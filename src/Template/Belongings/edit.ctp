<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $belonging
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $belonging->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $belonging->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Belongings'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="belongings form large-9 medium-8 columns content">
    <?= $this->Form->create($belonging) ?>
    <fieldset>
        <legend><?= __('Edit Belonging') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('user_id');
            echo $this->Form->control('category_id');
            echo $this->Form->control('description');
            echo $this->Form->control('photo');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
