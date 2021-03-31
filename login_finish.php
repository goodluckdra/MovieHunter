<?php session_start(); ?>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<?php 
   include ("connMySQL.php");
   $name = $_POST['name'];
   $pw = $_POST['pw'];
   if(isset($name) && isset($pw)){
                   
	   $sql ="SELECT * FROM user WHERE username='$name'";
       $result = $conn->query($sql);
           if($result->num_rows > 0){
               while($row = $result->fetch_assoc()){
                   if($row["username"]==$name&&$row["password"]==$pw){
						
						$_SESSION['username'] = $name;
						$_SESSION['user_logged_in'] = true;
						header('location: index.php');

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