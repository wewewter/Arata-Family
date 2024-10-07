<?php 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    <?php include "layout/nav.html" ?>
    <div class="vertikal-scrollbar">
    <main>
    <div class="wrap">
        <h1>Welcome To Us dashboard</h1>
        <h1><?= $_SESSION['username'] ?></h1>
    </div>
    

    <h2>we are a Small Comunity</h2>

    <h2>Member : </h2>
    <div class="scroll">
        <div class="container">
            <div class="item"><img src="image/Asahi.jpg">
            <div class="item-content">
                <h3>Kazuya</h3>
            </div>
            </div>
            <div class="item"><img src="image/Shiro.jpg">
            <div class="item-content">
                <h3>Shiro</h3>
            </div>
            </div>
            <div class="item"><img src="image/Yustian.jpg">
            <div class="item-content">
                <h3>Yustian</h3>
            </div>
            </div>
            <div class="item"><img src="image/Ray.jpg" alt="">
            <div class="item-content">
                <h3>Ray</h3>
            </div>
            </div>
            <div class="item"><img src="image/Najjiyah.jpg" alt="">
            <div class="item-content">
                <h3>Najjiyah</h3>
            </div>
            </div>
            <div class="item"><img src="image/Kay.jpg" alt="">
            <div class="item-content">
                <h3>Kay</h3>
            </div>
            </div>
            <div class="item"><img src="image/Fanny.jpg" alt="">
            <div class="item-content">
                <h3>Fanny</h3>
            </div>
            </div>
            <div class="item"><img src="image/Ariel.jpg" alt="">
            <div class="item-content">
                <h3>Ariel</h3>
            </div>
            </div>
            <div class="item"><img src="image/Rivan.jpg" alt="">
            <div class="item-content">
                <h3>Rivan</h3>
            </div>
            </div>
            <div class="item"><img src="image/Aya.jpg" alt="">
            <div class="item-content">
                <h3>Aya</h3>
            </div>
            </div>
        </div>
    </div>
    <?php include "layout/Footer.html"?>
    </div>
</body>
</html>