<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
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

    <?= $this->Html->css('base.css') ?>
    <?= $this->Html->css('cake.css') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
    <nav class="top-bar expanded" data-topbar role="navigation">
        <section class="top-bar-section">
            <ul class="left">
                <li><?= $this->Html->link("Home", "/pages/home") ?></li>          
                <li><?= $this->Html->link("Emiten", "/emiten") ?></li>
                <li><?= $this->Html->link("User", "/users") ?></li>
            </ul>
        </section>
        <section class="top-bar-section">
            <ul class="right">
                <li class="name">
                <?php 
                    if (is_null($this->request->session()->read('Auth.User.id')))
                        echo "<h1>".$this->Html->link("Signup", "/users/add")."</h1>";
                ?>
                </li>
                <li class="name">
                <?php 
                    if (is_null($this->request->session()->read('Auth.User.id')))
                        echo "<h1>".$this->Html->link("Login", "/users/login")."</h1>";
                    else 
                        echo "<h1>".$this->Html->link("Logout"." (".$this->request->session()->read('Auth.User.email').")", "/users/logout")."</h1>";
                ?>
                </li>             
            </ul>
        </section>
    </nav>
    <?= $this->Flash->render() ?>
    <section class="container clearfix">
        <?= $this->fetch('content') ?>
    </section>
    <footer>
    </footer>
</body>
</html>
