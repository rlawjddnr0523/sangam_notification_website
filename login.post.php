<meta charset="utf-8"/>
<?php
    $mysqli = mysqli_connect("localhost", "kjwook0523", "Kimmark4167*", "kjwook0523");
    $id = $_POST['id'];
    $pwd = $_POST['pwd'];

    $query = "SELECT * FROM sangam WHERE id = '{$id}'";
    $result = mysqli_query($mysqli, $query);
    $row = mysqli_fetch_array($result);
    $password = $row['password'];

    foreach($row as $key => $r) {
        echo "{$key} : {$r} <br>";
    }
    $passwordresult = ($pwd == $password);
    if($passwordresult === true) {
        session_start();
        $_SESSION['sangam_id'] = $row['id'];
        $_SESSION['sangam_member_id'] = $row['member_id'];
        print_r($_SESSION);
        echo $_SESSION['sangam_id'];
        ?><script>
            alert("로그인에 성공했습니다.<?php echo $_SESSION['sangam_id']; ?>");
            location.href = "index.php";
        </script><?php
    } else {
        ?><script>
            alert("로그인에 실패하였습니다. 비밀번호나 아이디를 확인하여주십시오. 비밀번호나 아이디를 찾고싶은 경우에는 관리자에게 문의하시기 바랍니다.");
            location.href = "login.php";
        </script><?php
    }
?>