<?= $this->Form->create() ?>
    <?= $this->Form->input('username', [
        'type' => 'text',
        'label' => 'ユーザー名'
    ]) ?>
    <?= $this->Form->input('password', [
        'type' => 'password',
        'label' => 'パスワード'
    ]) ?>
<?= $this->Form->button('ログイン', ['class' => '']) ?>
<?= $this->Form->end() ?>
