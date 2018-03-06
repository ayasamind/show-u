<h3>ログイン</h3>
<?= $this->Form->create() ?>
<?= $this->Form->control('username', ['label' => 'ユーザー名']) ?>
<?= $this->Form->control('password', ['type' => 'password', 'label' => 'パスワード']) ?>
<?= $this->Form->button('ログイン', ['class' => 'waves-effect waves-light btn right']) ?>
<?= $this->Form->end() ?>
