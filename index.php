<!doctype html>
<html lang="ja" dir="ltr" >
<head>
  <meta charset="UTF-8">
  <title>いいね！！！</title>
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

  <?php
	  $filename = 'counter.dat';
	  $img = 'heart.png';
	  
      $fp = fopen($filename, "r");
      $count = fgets($fp,32);
	  $size = $count*10 + 100;
	  fclose($fp);
	  if($size >= 600){
	      $img = 'heart-max.png';
		  $size = 600;
	  }
    if($_POST['add']){
      $fp = fopen($filename, "w");
      $count++;
      fseek($fp, 0);
      fputs($fp, $count);
      flock($fp, LOCK_UN);
      fclose($fp);
	  
    }
  ?>
   
<body>
  <center>
   <form action="" method="post">
    <input type="submit" name="add" value="いいね！！！" class="btn">
  </form>
   <img src="<?php echo $img;?>" width="<?php echo $size;?>">
 </center>
</body>


