<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>MovieHunter</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
<script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="js/jquery-func.js"></script>
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
    
<?php session_start(); ?>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
    include("connMySQL.php");
    $u_name = $_SESSION['username'];
?>
<?php
$m_id = "";
if($_GET["movie_num"]){
    $m_id= $_GET["movie_num"];
    $_SESSION["m_id"] = $m_id;
    }
else
    $m_id = $_SESSION["m_id"];
?>


<div>
    <?php
    $sql ="SELECT title,release_date,language,website,director,cast,intro,imgsource, film_scr FROM movie WHERE mid='$m_id'";
    $result = $conn->query($sql);
    while($row = $result->fetch_assoc())
        {
                $movie_film=$row["film_scr"];
                echo '<div><iframe width="100%" height="560" src="'.$movie_film.'"frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe><br><br></div>';
                $movie_img=$row["imgsource"];
                echo '<img width="300" height="350" src=' . $movie_img . '>';
                echo '<br><br>';
                $movie_name=$row["title"];
                echo '<br>電影名稱:'.$row["title"];
                echo '<br>上映日期:'.$row["release_date"];
                echo '<br>語言:'.$row["language"];
                echo '<br>相關連結:'.$row["website"];
                echo '<br>導演:'.$row["director"];
                echo '<br>演員:'.$row["cast"];
                echo '<br>電影介紹:'.$row["intro"];            
        }
        
    ?>
</div>

    
<?php
echo '<br><br>';
echo'使用者評論:<br>';
$sql ="SELECT username,m_Rate,m_comment FROM comment WHERE m_id='$m_id'";
        $result = $conn->query($sql);
        while($row = $result->fetch_assoc())
        {

            echo '使用者:'.$row["username"];
            echo '<br>評分:'.$row["m_Rate"];
            echo '<br>評論:'.$row["m_comment"];
            echo '<br>';
        }
    echo '-----------------------------------------------------------------------------------------------------------------------------------<br>';
?>

<?php
    include("connMySQL.php");
    $name=$_SESSION['username'];
    echo '評論者:';
    echo $name;
    echo '<br>';
    echo '評論電影:';
    echo $movie_name;
    $num=$_SESSION["m_id"];
?>
  <form name="form" method="post" action="comment_finish.php">
評分：
<input type="text" name="m_Rate" /> <br><br>
評論：
  <textarea name="m_comment"" style ="width:400px;height:200px;"></textarea><br><br>
<input type="submit" name="re_button" value="確定發表" />
<?php setcookie("movie_num",$_SESSION["m_id"],time()+1000,"/")?>
</form>


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
    
    
