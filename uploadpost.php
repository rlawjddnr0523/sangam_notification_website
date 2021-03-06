<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    sleep(0);
    session_start();
    ?>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>3-9반 공지 사이트 - 게시물 업로기</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div class="top top-0">
    <div class="top-1">
        <div class="title">
            <a href="index.php" class="title-1" style="text-decoration-line: none; color: white; -webkit-user-drag: none">
                모든 게시물 보기 <i class="fa fa-university" aria-hidden="true"></i>
            </a>
        </div>
        <div class="subtitle">
            게시물을 올리고 싶으시다면 로그인해주세요!
        </div>
    </div>
    <div class="top-2">
        <div class="top-nav">
            <?php
            if(isset($_SESSION['sangam_id']) === true) {
                ?>
                <a href="index.php">메인화면</a>
                <a href="allpost.php">게시물 보기</a>
                <a href="logout.php">로그아웃</a>
            <?php
            } else {
            ?>
                <script>
                    alert("로그인 후 이용 가능한 컨텐츠 입니다.");
                    location.href="index.php";
                </script>
                <?php
            }
            ?>
        </div>
    </div>
</div>
<div class="middle">
    <div class="uploadpostfield">
        <form method="post" action="upload.post.php">
            <p><input type="text" name="title" id="title" placeholder="제목을 입력해주세요" ></p>
            <p><textarea name="contents" id="contents" placeholder="내용을 입력해주세요."></textarea></p>
            <p><label>작성자 : </label><input type="text" name="wuser" id="wuser" value="<?php echo $_SESSION['sangam_id']; ?>" readonly></p>
            <p><input type="submit" value="게시물 올리기"/></p>
        </form>
    </div>
</div>
</body>
</html>