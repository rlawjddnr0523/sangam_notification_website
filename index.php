<?php
    include_once("top.php");
?>
<div class="top-nav">
                <?php
                $mysqli = mysqli_connect("localhost", "kjwook0523", "Kimmark4167*", "kjwook0523");
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
    <div class="nav-1">

    </div>
    <div class="middle">
        <div class="discription">
            <?php
                if(isset($_SESSION['sangam_id']) === true) {
                    ?><div class="date">오늘은 <?php echo date("m-d");?>입니다.</div>
                    <div class="todaypost">오늘의 공지</div>
                    <p></p>
                    <a href="uploadpost.php" class="uploadpost-redirect">게시물 올리기</a>
                    <p></p>
                    <div class="todayspost">
                        <?php
                            $sql = "SELECT * FROM sangam_post where writed >= current_date";
                            $query = mysqli_query($mysqli, $sql);
                            while($row = mysqli_fetch_array($query)) {
                                ?><a href="postview.php?id=<?php echo "$row[id]"; ?>" class="ok"><?php echo "$row[title]"; ?></a>
                                <div class="ok-1"><?php echo "$row[writed]"; ?></div>
                                <div class="ok-2"><?php echo "$row[writer]"; ?></div><?php
                                if($row['title'] = null){
                                    ?><div class="a-1">조용하네요.. 아무 게시물도 게시 되지 않았습니다.</div><?php
                                }
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