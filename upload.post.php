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
$mysqli = mysqli_connect("localhost", "kjwook0523", "Kimmark4167*", "kjwook0523");

$title = $_POST['title'];
$contents = $_POST['contents'];
$uploader = $_SESSION['sangam_id'];
$date = date("Y-m-d H:i:s");
$id = GenerateString(10);

$sql = "insert into sangam_post (title, contents, writed, writer, id) value('$title', '$contents', '$date', '$uploader','$id')";

$result = mysqli_query($mysqli, $sql);
if ($result) {
    ?><script>
        alert("업로드에 성공하였습니다.");
        location.href = "allpost.php";
    </script>
    <?php
} else {
    ?><script>
        alert("업로드에 실패햐였습니다.");
        location.href = "uploadpost.php";
    </script>
    <?php
}