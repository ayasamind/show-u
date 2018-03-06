<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $belonging
 */
?>
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
