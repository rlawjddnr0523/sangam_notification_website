<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        sleep(0);
        session_start();
        $mysqli = mysqli_connect("localhost", "kjwook0523", "Kimmark4167*", "kjwook0523");
    ?>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>3-9반 공지 사이트 - 메인페이지</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="top top-0">
        <div class="top-1">
            <div class="title">
                <a href="index.php" class="title-1" style="text-decoration-line: none; color: white; -webkit-user-drag: none">
                    상암중학교 3-9 공지 웹사이트 <i class="fa fa-university" aria-hidden="true"></i>
                </a>
            </div>
            <div class="subtitle">
                2022학년도 30905 김정욱 제작.
            </div>
        </div>
        <div class="top-2">
            <div class="top-nav">
                <?php
                    if(isset($_SESSION['sangam_id']) === true) {
                        ?>
                            <a href="allpost.php">모든 게시물 보기</a>
                            <a href="creator.info.php">개발자 정보</a>
                            <a href="logout.php">로그아웃</a>
                        <?php
                    } else {
                        ?>
                            <a href="login.php">로그인</a>
                            <a href="register.php">회원가입</a>
                        <?php
                    }
                ?>
            </div>
        </div>
    </div>
    <div class="middle">
        <div class="discription">
            <?php
                if(isset($_SESSION['sangam_id']) === true) {
                    ?><div class="date">오늘은 <?php echo date("m-d");?>입니다.</div>
                    <div class="todaypost">오늘의 게시물</div>
                    <div class="todayspost">
                        <?php
                            $sql = "SELECT * FROM sangam_post where writed = current_date";
                            $query = mysqli_query($mysqli, $sql);
                            while($row = mysqli_fetch_array($query)) {
                                ?><a href="postview.php?id=<?php echo "$row[id]"; ?>"><?php echo "$row[title]"; ?></a><?php
                            }
                        ?>
                    </div>
                    <?php
                } else {
                    ?>
                        <div class="loginplz">로그인하고 웹사이트를 이용해주세요!</div>
                    <?php
                }
            ?>
        </div>
    </div>
</body>
</html>