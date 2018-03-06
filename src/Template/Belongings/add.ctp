<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $belonging
 */
?>
<div class="belongings form large-9 medium-8 columns content">
    <?= $this->Form->create($belonging) ?>
        <?= $this->Form->control('name', ['type' => 'text']) ?>
        <?= $this->Form->control('category_id', ['type' => 'select', 'option' => $category]);?>
        <?= $this->Form->control('description', ['type' => 'textarea']);?>
        <?= $this->Form->control('photo', ['type' => 'file']);?>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
