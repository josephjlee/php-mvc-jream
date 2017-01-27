<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?=$title;?></title>
    <link rel="stylesheet" href="<?=URL;?>view/themplate/css/theme.css">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
          crossorigin="anonymous">

</head>
<?php Session::init()?>
<body>
<div id="header">
    <div class="navbar">
        <ul class="nav navbar-nav">


            <?php
                if (Session::get('loggedIn')): ?>
                    <?php if(Session::get('role') == 'owner'): ?>
                        <li><a href="<?=URL;?>user">Users</a></li>
                    <?php else: ?>
                        <?php if(Session::get('role') == 'admin'): ?>
                            <li><a href="<?=URL;?>admin">Admin</a></li>
                            <?php endif; ?>
                    <?php endif; ?>
                    <li><a href="<?=URL;?>dashboard">Dashboard</a></li>
                    <li><a href="<?=URL;?>dashboard/logout">Выход</a></li>
            <?php else:  ?>
                    <li><a href="<?=URL;?>index">Шаблон</a></li>
                    <li><a href="<?=URL;?>help">Клинеты</a></li>
                    <li><a href="<?=URL;?>login">Вход</a></li>
            <?php endif; ?>

            <li><a href="<?=URL;?>mails">Рассылка</a></li>
        </ul>
    </div>
</div>
