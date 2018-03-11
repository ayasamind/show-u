<?php
    use App\Statics\UserInfo;
?>
<div class="ui top fixed menu">
    <div class="item">
        <!-- <img src="/images/logo.png"> -->
        <h3>Show-U</h3>
    </div>
    <div class='right menu'>
        <?php if (is_null(UserInfo::$id)) : ?>
            <?= $this->Html->link('ログイン', ['controller' => 'users', 'action' => 'login'], ['class' => 'item']) ?>
        <?php else: ?>
            <?= $this->Html->link('ログアウト', ['controller' => 'users', 'action' => 'logout'], ['class' => 'item']) ?>
        <?php endif; ?>
    </div>
</div>
