<?php
  require_once("connMySQL.php");
  //session_start();
  $sql ="SELECT username,email,phone,birthday FROM user WHERE username='".$_SESSION["username"]."'";
  $record =$conn->query($sql);
  $row=$record->fetch_assoc();
?>
<div align="left">
<p>Member name:<strong><?php echo $row["username"];?></strong></p>
<p>email:(g=girl b=boy)   <strong><?php echo $row["email"];?></strong></p>
<p>phone:  <strong><?php echo $row["phone"];?></strong></p>
<p>birthday:   <strong><?php echo $row["birthday"];?></strong></p>


<p align="left">
<a href="">Member center</a><br>
<a href="">CHANGE PASSWORD</a><br>
<a href="index.php">Go back to home page</a><br>
<a href="">Log out</a><br>
</p>
</div>

