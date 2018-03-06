<?php
    use App\Statics\UserInfo;
    use App\Statics\TagInfo;
?>
<nav>
    <div class="nav-wrapper　blue accent-1">
      <a href="#!" class="brand-logo">SHOW-U</a>
      <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down">
        <?php if (is_null(UserInfo::$id)) : ?>
            <li><?= $this->Html->link('ログイン', ['controller' => 'users', 'action' => 'login']) ?></li>
        <?php else: ?>
            <li><?= $this->Html->link('ログアウト', ['controller' => 'users', 'action' => 'logout']) ?></li>
        <?php endif; ?>
      </ul>
    </div>
  </nav>

  <ul class="sidenav" id="mobile-demo">
    <li><a href="sass.html">Sass</a></li>
    <li><a href="badges.html">Components</a></li>
    <li><a href="collapsible.html">Javascript</a></li>
    <li><a href="mobile.html">Mobile</a></li>
  </ul>

<script>
$(document).ready(function(){
$('.sidenav').sidenav();
});
</script>
