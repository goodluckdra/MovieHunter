<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<?php
//$_GET["movie_num"];
?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>MovieHunter</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
<script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="js/jquery-func.js"></script>
<!--[if IE 6]><link rel="stylesheet" href="css/ie6.css" type="text/css" media="all" /><![endif]-->
</head>
<body>
<!-- START PAGE SOURCE -->
<div id="shell">
  <div id="header">
    <h1 id="logo"><a href="index.php">MovieHunter</a></h1>
    <!-- é¦–é?å·¦ä¸? -->
    <div id="navigation">
      <ul>
        <?php

            session_start();
            if (isset($_SESSION['user_logged_in'])) {
                echo '<li><a class="active" href="logout.php">Logout</a>, ';

                echo'<a href="member_info.php">'. $_SESSION['username'].'</a></li>';

            } else {
                echo '<li><a class="active" href="login.html">Login</a></li>';


            }
        ?>
        <li><a class="active" href="index.php">HOME</a></li>
      </ul>
    </div>
    <div id="sub-navigation">
      <ul>
        <li><a href="#">SHOW ALL</a></li>
        <li><a href="#">LATEST TRAILERS</a></li>
        <li><a href="#">TOP RATED</a></li>
      </ul>
      <div id="search">
        <form action="#" method="get" accept-charset="utf-8">
          <label for="search-field">SEARCH</label>
          <input type="text" name="search field" value="Enter search here" id="search-field" class="blink search-field"  />
          <input type="submit" value="GO!" class="search-button" />
        </form>
      </div>
    </div>
  </div>
 <div id="main">
	<div calss="box">
		<div class="head">
          <h1>Member information</h1>
        </div>
		<?php 
			include("connMySQL.php");
			echo '<br>';
			$name = $_SESSION['username'];
		   
		   if(isset($name)){
		                   
			   $sql ="SELECT * FROM user WHERE username='$name'";
		       $result = $conn->query($sql);
		           if($result->num_rows > 0){
		               while($row = $result->fetch_assoc()){
		                   if($row["username"]==$name){
								
								$_SESSION['username'] = $name;
								
								
								//echo '<meta http-equiv=REFRESH CONTENT=1;url=member.php>';
								
								echo "username: ";
								echo $row['username']."<br>";
								echo "password: ";
								echo $row['password']."<br>";
								echo "gender:   ";
								echo $row['gender']."<br>";
								echo "email:    ";
								echo $row['email']."<br>";
								echo "phone:    ";
								echo $row['phone']."<br>";
								echo "birthday:    ";
								echo $row['birthday']."<br>";
		                   }else{ 
		                       echo "登入失敗！";
		                   }
		               }
		           }else{
		               echo "資料庫連接失敗";
		           }
		   }else{
		       echo "未輸入帳號密碼";
		   }
		?>
		<form name="form" method="post" action="resetPassword.php">
		<input type="submit" name="button" value="修改密碼" />
		</form>
	</div>
	<div calss="box">
		<div class="head">
          <h1>收藏電影</h1>
        </div>
        <?php 

		?>
	</div>
 </div>


  <div id="footer">
    <p class="lf">Copyright &copy; 2019 <a href="#">SiteName</a> - All Rights Reserved</p>
    <!-- <p class="rf">Design by <a href="http://chocotemplates.com/">ChocoTemplates.com</a></p> -->
    <div style="clear:both;"></div>
  </div>
</div>
<!-- END PAGE SOURCE -->
</body>
</html>