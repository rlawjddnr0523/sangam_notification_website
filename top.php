<?php
    $var = basename($_SERVER["PHP_SELF"]);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    sleep(0);
    session_start();
    ?>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php
        if($var == "index.php"){
            $title = "3-9반 공지 사이트 - 메인페이지";
        }
        if($var == "allpost.php"){
            $title = "3-9반 공지 사이트 - 모든 게시물 보기";
        }
    ?>
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div class="top top-0">
    <div class="top-1">
        <div class="title">
            <a href="index.php" class="title-1" style="text-decoration-line: none; color: white; -webkit-user-drag: none">
                상암중학교 3-9반 공지 웹사이트 <i class="fa fa-university" aria-hidden="true"></i>
            </a>
        </div>
        <div class="subtitle">
            30905 김정욱 제작
        </div>
    </div>
    <div class="top-2">