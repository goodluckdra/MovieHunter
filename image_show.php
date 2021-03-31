<?php
 include ("connMySQL.php");
    
    $sql ="SELECT * FROM images WHERE id='$name'";
    $result=mysqli_query(("select * from images where id=1"));

    if($row=mysqli_fetch_assoc($result)){
        header("Content-type: image/jpeg");
        print $row['image'];
    }
?>