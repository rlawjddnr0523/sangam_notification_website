<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    sleep(0);
    session_start();
    if(isset($_SESSION['sangam_id']) === false) {
        ?><script>
        alert("로그인 후 이용 가능한 서비스 입니다.")
        </script>

        }
    ?>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>3-9반 공지 사이트 - 로그인</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div class="top top-0">
    <div class="top-1">
        <div class="title">
            <a href="login.php" class="title-1" style="text-decoration-line: none; color: white; -webkit-user-drag: none">
                게시물 보기 <i class="fa fa-university" aria-hidden="true"></i>
            </a>
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

</div>
</body>
</html>