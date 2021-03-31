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
        <?php

            session_start();
            if (isset($_SESSION['user_logged_in'])) {
                echo '<li><a class="active" href="logout.php">Logout</a>, ';
                echo'<a href="member.php">'. $_SESSION['username'].'</a></li>';

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
        <form name="form" method="post" action="search_output.php">
          <label for="search-field">SEARCH</label>
          <input type="text" name="search_field" value="Enter search here" id="search-field" class="blink search-field"  />
          <input type="submit" value="GO!" class="search-button" />
        </form>      
      </div>
    </div>
  </div>
  <div id="main">
    <div id="content">
      <div class="box">
        <div class="head">
          <h2>LATEST MOVIES</h2>
          <p class="text-right"><a href="#">See all</a></p>
        </div>
        <div class="movie">
          <span class="play"><span class="name">Batman vs Superman: Dawn of Justice</span></span>
          <a href="<?php echo "comment.php?movie_num=1" ?>"><img src="css/images/movie1.jpg" border="0" title="Batman vs Superman: Dawn of Justice"></a>
          <div class="rating">
            <p>RATING</p>
            <div class="stars">
              <div class="stars-in"> </div>
            </div>
            <span class="comments">12</span> </div>
        </div>
        <div class="movie">
          <span class="play"><span class="name">Spectre</span></span> <a href="<?php echo "comment.php?movie_num=2" ?>"><img src="css/images/movie2.jpg" alt="" /></a>
          <div class="rating">
            <p>RATING</p>
            <div class="stars">
              <div class="stars-in"> </div>
            </div>
            <span class="comments">12</span> </div>
        </div>
        <div class="movie">
           <span class="play"><span class="name">Jurassic World</span></span> <a href="<?php echo "comment.php?movie_num=3" ?>"><img src="css/images/movie3.jpg" alt="" /></a>
          <div class="rating">
            <p>RATING</p>
            <div class="stars">
              <div class="stars-in"> </div>
            </div>
            <span class="comments">12</span> </div>
        </div>
        <div class="movie">
           <span class="play"><span class="name">Avengers: Age of Ultron</span></span> <a href="<?php echo "comment.php?movie_num=4" ?>"><img src="css/images/movie4.jpg" alt="" /></a>
          <div class="rating">
            <p>RATING</p>
            <div class="stars">
              <div class="stars-in"> </div>
            </div>
            <span class="comments">12</span> </div>
        </div>
        <div class="movie">
          <span class="play"><span class="name">The Hobbit: The Battle of the Five Armies</span></span> <a href="<?php echo "comment.php?movie_num=5" ?>"><img src="css/images/movie5.jpg" alt="" /></a>
          <div class="rating">
            <p>RATING</p>
            <div class="stars">
              <div class="stars-in"> </div>
            </div>
            <span class="comments">12</span> </div>
        </div>
        <div class="movie last">
           <span class="play"><span class="name">The Hobbit: The Desolation of Smaug</span></span> <a href="<?php echo "comment.php?movie_num=6" ?>"><img src="css/images/movie6.jpg" alt="" /></a>
          <div class="rating">
            <p>RATING</p>
            <div class="stars">
              <div class="stars-in"> </div>
            </div>
            <span class="comments">12</span> </div>
        </div>
        <div class="cl">&nbsp;</div>
      </div>
      <div class="box">
        <div class="head">
          <h2>TOP RATED</h2>
          <p class="text-right"><a href="#">See all</a></p>
        </div>
        <div class="movie">
           <span class="play"><span class="name">The Lone Ranger</span></span> <a href="<?php echo "comment.php?movie_num=7" ?>"><img src="css/images/movie7.jpg" alt="" /></a>
          <div class="rating">
            <p>RATING</p>
            <div class="stars">
              <div class="stars-in"> </div>
            </div>
            <span class="comments">12</span> </div>
        </div>
        <div class="movie">
           <span class="play"><span class="name">Man of Steel</span></span> <a href="<?php echo "comment.php?movie_num=8" ?>"><img src="css/images/movie8.jpg" alt="" /></a>
          <div class="rating">
            <p>RATING</p>
            <div class="stars">
              <div class="stars-in"> </div>
            </div>
            <span class="comments">12</span> </div>
        </div>
        <div class="movie">
          <span class="play"><span class="name">The Dark Knight Rises</span></span> <a href="<?php echo "comment.php?movie_num=9" ?>"><img src="css/images/movie9.jpg" alt="" /></a>
          <div class="rating">
            <p>RATING</p>
            <div class="stars">
              <div class="stars-in"> </div>
            </div>
            <span class="comments">12</span> </div>
        </div>
        <div class="movie">
           <span class="play"><span class="name">The Amazing Spider-Man</span></span> <a href="<?php echo "comment.php?movie_num=10" ?>"><img src="css/images/movie10.jpg" alt="" /></a>
          <div class="rating">
            <p>RATING</p>
            <div class="stars">
              <div class="stars-in"> </div>
            </div>
            <span class="comments">12</span> </div>
        </div>
        <div class="movie">
           <span class="play"><span class="name">Men in Black 3</span></span> <a href="<?php echo "comment.php?movie_num=11" ?>"><img src="css/images/movie11.jpg" alt="" /></a>
          <div class="rating">
            <p>RATING</p>
            <div class="stars">
              <div class="stars-in"> </div>
            </div>
            <span class="comments">12</span> </div>
        </div>
        <div class="movie last">
          <span class="play"><span class="name">The Avengers</span></span> <a href="<?php echo "comment.php?movie_num=12" ?>"><img src="css/images/movie12.jpg" alt="" /></a>
          <div class="rating">
            <p>RATING</p>
            <div class="stars">
              <div class="stars-in"> </div>
            </div>
            <span class="comments">12</span> </div>
        </div>
        <div class="cl">&nbsp;</div>
      </div>

    <div id="coming">
      <div class="head">
        <h3>COMING SOON<strong>!</strong></h3>
        <p class="text-right"><a href="#">See all</a></p>
      </div>
      <div class="content">
        <h4>Captain America: Civil War </h4>
        <a href="#"><img src="css/images/coming-soon1.jpg" alt="" /></a>
        <p>Marvel's &quot;Captain America: Civil War&quot; finds Steve Rogers leading the newly formed team of Avengers in their continued efforts to safeguard humanity. But after another incident involving the Avengers results in collateral damage, political pressure mounts to install a system of accountability, headed by a governing body to oversee and direct the team...</p>
        <a href="#">Read more</a> </div>
      <div class="cl">&nbsp;</div>
      <div class="content">
        <h4>Star Trek Beyond </h4>
        <a href="#"><img src="css/images/coming-soon2.jpg" alt="" /></a>
        <p>Captain Kirk and the crew of the Enterprise encounter an alien warrior race when marooned on a distant planet after the destruction of their spaceship in this thrilling sequel directed by Fast &amp; Furious director Justin Lin.</p>
        <a href="#">Read more</a> </div>
    </div>
    <div class="cl">&nbsp;</div>
  </div>
  <div id="footer">
    <p class="lf">Copyright &copy; 2019 <a href="#">SiteName</a> - All Rights Reserved</p>
    <!-- <p class="rf">Design by <a href="http://chocotemplates.com/">ChocoTemplates.com</a></p> -->
    <div style="clear:both;"></div>
  </div>
</div>
</body>
</html>