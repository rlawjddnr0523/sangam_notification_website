<!DOCTYPE html>
<meta charset="utf-8"/>
<?php
function GenerateString($length)
{
    $characters  = "0123456789";
    $characters .= "abcdefghijklmnopqrstuvwxyz";
    $characters .= "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $characters .= "_";

    $string_generated = "";

    $nmr_loops = $length;
    while ($nmr_loops--)
    {
        $string_generated .= $characters[mt_rand(0, strlen($characters) - 1)];
    }

    return $string_generated;
}
$host = 'localhost';
$user = 'kjwook0523';
$pw = 'Kimmark4167*';
$dbName = 'kjwook0523';
$mysqli = mysqli_connect($host, $user, $pw, $dbName);

$id = $_POST['id'];
$name = $_POST['name'];
$grade = $_POST['grade'];
$class = $_POST['class'];
$number = $_POST['number'];
$pwd = $_POST['pwd'];
$created = date("Y-M-D H:i:s");
$member_id = GenerateString(20);

$sql = "insert into sangam (id, name, grade, class, number, password, created, member_id) values('$id','$name','$grade','$class','$number','$pwd','$created','$member_id')";

$result = mysqli_query($mysqli, $sql);
if ($result) {
    ?><script>
        alert("회원가입에 성공하였습니다.");
        location.href = "index.php";
    </script> <?php
} else {
    ?><script>
        alert("회원가입에 실패하였습니다.");
        location.href = "register.php";
    </script>
    <?php
}