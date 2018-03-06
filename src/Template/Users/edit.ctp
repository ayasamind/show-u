<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<div class="users form large-9 medium-8 columns content">
    <?= $this->Form->create($user) ?>
        <h3>ユーザー追加</h3>
        <?php
            echo $this->Form->control('username', [
                'type' => 'text',
            ]);
            echo $this->Form->control('password');
            echo $this->Form->control('email');
        ?>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
