<?php session_start(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
    include("connMySQL.php");
    $u_name = $_SESSION['username'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
    <div id="navigation">
      <ul>
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
    <div id="content">
	<div style="margin:0 auto;width:300px">
       <!--<h1>顯示結果</h1><br> -->
<?php
        echo'<br><br>';
    $symbol='%';
    $search ='%'.$_POST['search_field'].'%';
if($search != null )
    {
      $sql = "SELECT * FROM `movie` WHERE  title Like '$search'";
        $result = $conn->query($sql);
        while($row = $result->fetch_assoc())
        {
                $movie_img=$row["imgsource"];
                echo '<img width="300" height="350" src=' . $movie_img . '>';
                echo '<br><br>';
                $movie_name=$row["title"];
                echo '<br>電影名稱:'.$row["title"];
                echo '<br>上映日期:'.$row["release_date"];
                echo '<br>語言:'.$row["language"];
                echo '<br>導演:'.$row["director"];
                echo '<br>演員:'.$row["cast"];
        }
}
    echo '<br><br> <a href="index.php">上一頁</a>  <br><br>';
?>
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

