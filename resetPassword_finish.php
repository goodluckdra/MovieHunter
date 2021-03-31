<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
include("connMySQL.php");
$name = $_POST['name'];
$pw = $_POST['pw'];
$pw1 = $_POST['pw1'];
$pw2 = $_POST['pw2'];

if($name != null && $pw1 != null && $pw2 != null && $pw1 == $pw2)
{		
        $sql = "UPDATE user SET password = '$pw1' WHERE username = '$name'";
	//echo $sql;
        if(mysqli_query($conn,$sql))
        {
                echo '修改成功';
                session_start();
                session_destroy();
                echo '<meta http-equiv=REFRESH CONTENT=2;url=login.html>';
        }
        else
        {
                echo '新增失敗!';
                echo '<meta http-equiv=REFRESH CONTENT=2;url=login.html>';
        }
}
else
{
        echo '您無權限觀看此頁面!';
        echo '<meta http-equiv=REFRESH CONTENT=2;url=index.php>';
}

?>
