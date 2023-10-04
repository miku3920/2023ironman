<?php

$title = '2023ironman - by miku3920';
$hello = 'Hello PHP-FPM in public directory!!';
$ironman_link = 'https://ithelp.ithome.com.tw/users/20132916/ironman/6281';
$ironman_title = '嘿，稍等一下！別急著開發功能，先來打造 Walking Skeleton 吧！';

?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1 align="center"><?= $title ?></h1>
    <p align="center"><?= $hello ?></p>
    <p align="center"><a href="<?= $ironman_link ?>"><?= $ironman_title ?></a></p>
</body>

</html>