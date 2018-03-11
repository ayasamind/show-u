<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>
    <?= $this->Html->script('//code.jquery.com/jquery-3.1.1.min.js') ?>
    <?= $this->Html->script("//cdn.jsdelivr.net/npm/vue")?>
    <?= $this->Html->css("//cdn.jsdelivr.net/npm/semantic-ui@2.3.0/dist/semantic.min.css") ?>
    <?= $this->Html->script("//cdn.jsdelivr.net/npm/semantic-ui@2.3.0/dist/semantic.min.js") ?>
    <?= $this->Html->css("header") ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
</head>
<body>
    <div class="ui container">
        <?= $this->Element('header') ?>
        <div class='margin-top'>
            <?= $this->Flash->render() ?>
            <?= $this->fetch('content_header') ?>
            <div class='ui segment'>
                <div class='ui center aligned'>
                    <?= $this->fetch('content') ?>
                </div>
            </div>
        </div>
    </div>
    <?= $this->fetch('script') ?>
</body>
</html>
