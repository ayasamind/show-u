<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Category $category
 */
?>
<div class="categories form large-9 medium-8 columns content">
    <?= $this->Form->create($category) ?>
        <?= $this->Form->control('name', ['type' => 'text']) ?>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
