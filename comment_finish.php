<?php session_start(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
    include("connMySQL.php");
    $u_name = $_SESSION['username'];
?>

<?php
	$m_id= $_COOKIE["movie_num"];
    $rating = $_POST['m_Rate'];
    $comment = $_POST['m_comment'];
    if($u_name != null && $rating != null && $comment != null )
    {


        #INSERT INTO `user` (`id`, `username`, `password`, `gender`, `email`) VALUES ('2', 'tony2', '123', '1', '123');
        $sql = "INSERT INTO `comment` ( `username`, `m_id`, `m_Rate`, `m_comment`) VALUES ('$u_name','$m_id','$rating', '$comment')";
        $conn->query($sql);
        $sql2 = "SELECT * FROM comment WHERE username = '$u_name'";
        $result = $conn->query($sql2);
       if($row = $result->fetch_assoc())
        {
                echo '評論新增成功!';
                echo '<meta http-equiv=REFRESH CONTENT=0;url=comment.php>';
        }
        else
        {
            echo '評論新增失敗!';
            echo '<meta http-equiv=REFRESH CONTENT=2;url=comment.php>';

        }
    }

    else
    {
        echo '請聯絡網站維護人員!';
        echo '<meta http-equiv=REFRESH CONTENT=50;url=home.html>';
        echo '<a href="movie.php">返回上一頁</a>  <br><br>';
    }
?>
