<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    sleep(0);
    session_start();
    ?>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>3-9반 공지 사이트 - 회원가입</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div class="top top-0">
    <div class="top-1">
        <div class="title">
            <a href="register.php" class="title-1" style="text-decoration-line: none; color: white; -webkit-user-drag: none">
                회원가입 <i class="fa fa-university" aria-hidden="true"></i>
            </a>
        </div>
        <div class="subtitle">
            게시물을 보려면 회원가입 또는 로그인을 해주세요.
        </div>
    </div>
    <div class="top-2">
        <div class="top-nav">
            <a href="index.php">메인페이지</a>
            <a href="login.php">로그인</a>
        </div>
    </div>
</div>
<div class="middle">
    <div class="regist-form">
        <form method="post" action="regist.post.php">
            <p><input type="text" name="id" id="id" placeholder="아이디를 입력하세요." required><label> 아이디</label></p>
            <p><input type="text" name="name" id="name" placeholder="이름을 입력하세요." required><label> 이름</label></p>
            <p><input type="number" name="grade" id="grade" min="1" max="3" required>학년 <input type="number" name="class" id="class" min="1" max="12" required>반 <input type="number" name="number" id="number" min="1" max="30" required>번호 </p>
            <p><input type="password" name="pwd" id="pwd" placeholder="비밀번호를 입력하세요" required><label> 비밀번호</label></p>
            <p><input type="submit" value="회원가입하기"> </p>
        </form>
    </div>
    <div class="login-redirect1">
        <a href="login.php">로그인하기.</a>
    </div>
</div>
</body>
</html>