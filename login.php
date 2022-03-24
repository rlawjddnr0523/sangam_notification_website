<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    sleep(0);
    session_start();
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
                로그인 <i class="fa fa-university" aria-hidden="true"></i>
            </a>
        </div>
        <div class="subtitle">
            게시물을 확인하려면 로그인해주세요.
        </div>
    </div>
    <div class="top-2">
        <div class="top-nav">
            <a href="index.php">메인페이지</a>
            <a href="register.php">회원가입</a>
        </div>
    </div>
</div>
<div class="middle">
    <div class="login-form">
        <form method="post" action="login.post.php">
            <p><input type="text" name="id" id="id" placeholder="아이디를 입력해주세요."/><label> 아이디</label></p>
            <p><input type="password" name="pwd" id="pwd" placeholder="비밀번호를 입력해주세요."/><label> 비밀번호</label></p>
            <p><input type="submit" value="로그인하기"/></p>
        </form>
        <a href="register.php" class="regist-redirect">회원가입하기.</a>
    </div>
</div>
</body>
</html>