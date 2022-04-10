<?php if(!class_exists('Rain\Tpl')){exit;}?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../res/_css/index.css">
    <link rel="stylesheet" href="../../res/_css/menu-bar.css">
    <link rel="stylesheet" href="../../res/_css/entity-profile.css">
    <link rel="stylesheet" href="../../res/_css/simple-grid.min.css">
    <link rel="stylesheet" href="../../res/_css/form.css">
    <link rel="stylesheet" href="../../res/_css/entity-list.css">
    <link rel="stylesheet" href="../../res/_css/table.css">
    <link rel="stylesheet" href="../../res/_css/card.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <title>Gremio-app</title>
</head>

<body>
    <div class="header">

        <div class="logo">
            <a href="/admin">
                <img src="../../res/_assets/_contentimg/gremio.png" alt="" srcset="" class="logo-img">
            </a>
        </div>
        <div class="title">
            <h1 class="title-page">Gremio</h1>
            <h3 class="sub-title-page">App</h3>
        </div>
    </div>

    <div class="mobile-nav">
        <?php if( getIsAdmin() ){ ?>
        <div>
            <a href="/admin/users">
                <i class="fas fa-users-gear"></i>
            </a>
        </div>
        <?php } ?>
        <div>
            <a href="/admin/partners">
                <i class="fas fa-users"></i>
            </a>
        </div>
        <div>
            <a href="/admin">
                <i class="fas fa-house"></i>
            </a>
        </div>
        <div>
            <a class="user" href="">
                <i class="fas fa-user"></i>
            </a>
        </div>
        <div>
            <a href="/logout">
                <i class="fas fa-door-open"></i>
            </a>
        </div>
        <?php if( getIsAdmin() ){ ?>
        <div>
            <a href="/admin/logs">
                <i class="fas fa-clock"></i>
            </a>
        </div>
        <?php } ?>
    </div>

    <div class="value" hidden>
        <?php echo getUserId(); ?>
    </div>

    <script>
        let id = document.getElementsByClassName("value");
        let userTag = document.getElementsByClassName("user");
        id = parseInt(id[0].innerHTML);
        userTag[0].href = "/admin/user/profile" + id + ""
    </script>