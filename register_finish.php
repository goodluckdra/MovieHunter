<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php

include ("connMySQL.php");

$name = $_POST['name'];
$password = $_POST['password'];
$pw2 = $_POST['pw2'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$birthday = $_POST['birthday'];

if($name != null && $password != null && $pw2 != null && $password == $pw2)
{		
        //新增資料進資料庫語法
        $sql = "insert into user(id,username,password,gender,email,phone,birthday) values (null,'$name','$password','$gender','$email','$phone', '$birthday')";
		
        if(mysqli_query($conn,$sql))
        {
                echo '新增成功!';
                echo '<meta http-equiv=REFRESH CONTENT=2;url=login.html>';
        }
        else
        {
                echo '新增失敗!';
                echo '<meta http-equiv=REFRESH CONTENT=2;url=index.php>';
        }
}
else
{
        echo '您無權限觀看此頁面!';
        echo '<meta http-equiv=REFRESH CONTENT=2;url=index.php>';
}

//header('location:home.html');
?>