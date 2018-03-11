<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<div class="users form large-9 medium-8 columns content">
    <?= $this->Form->create($user) ?>
        <label>ユーザー名</label>
        <?= $this->Form->control('username', [
            'type' => 'text',
            'label' => false
        ]);?>
        <label>パスワード</label>
        <?= $this->Form->control('password', [
            'type' => 'password',
            'label' => false
        ]); ?>
        <label>メールアドレス</label>
        <?= $this->Form->control('email', [
            'type' => 'text',
            'label' => false
        ]);?>
    <?= $this->Form->button('登録', ['class' => 'ui primary button']) ?>
    <?= $this->Form->end() ?>
</div>
