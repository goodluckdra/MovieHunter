<?php session_start(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
    include("connMySQL.php");
    $u_name = $_SESSION['username'];
?>

<?php
    $m_name= $_COOKIE["movie_name"];
?>

<?php
$sql ="SELECT username,m_Rate,m_comment FROM comment WHERE m_Name='$m_name'";
        $result = $conn->query($sql);
        while($row = $result->fetch_assoc())
        {

            echo '使用者:';
            echo $row["username"];
            echo '<br>';
            echo '評分:';
            echo $row["m_Rate"];
            echo '<br>';
            echo '評論:';
            echo $row["m_comment"];
            echo '<br>';
        }
    echo '<a href="index.php">返回電影介紹</a>  <br><br>';

?>