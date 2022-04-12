<?php
    include_once("top.php");
?>
<div class="top-nav">
    <?php
    if(isset($_SESSION['sangam_id']) === true) {
        ?>
        <a href="index.php">메인화면</a>
        <a href="uploadpost.php">게시물 올리기</a>
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
    <div class="discription">
        <?php

        ?>
    </div>
</div>
</body>
</html>