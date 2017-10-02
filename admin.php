<!doctype html>
<html lang="ja" dir="ltr" >
<head>
<meta charset="UTF-8">
<title>管理者画面</title>
</head>
<style type="text/css">
.btn{
	padding: 15px 40px;
    font-size: 1.2em;
    margin: 5em 0em;
	background-color: #ffa8a1;
	box-shadow:2px 2px #555;
	border-style: none;
}
</style>
<body>
   <form action="" method="post">
    <input type="submit" name="reset" value="リセット" class="btn">
  </form>
</body>

<?php
  if(isset($_POST['reset'])){
    $filename = 'counter.dat';
    $count = 0;

    $fp = fopen($filename, "w");
    fseek($fp, 0);
    fputs($fp, $count);
    flock($fp, LOCK_UN);
    fclose($fp);
    echo "resetされました。";
  }
?>
<p><font color="red">(注) 一度resetボタンを押したら、更新しただけでもresetされるよ！！</font></p>