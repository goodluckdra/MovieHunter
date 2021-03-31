<?php
include ("connMySQL.php");
		$msg="";
       if(isset($_POST['upload'])){
       $target="images/".basename($_FILES['image']['name']);
       	$db=mysqli_connect("127.0.0.1:3308","root","123456789","final_pass");

       	$image=$_FILES['image']['name'];
        $id=$_POST['movie_num'];

       	$sql="INSERT INTO `movie_image` ( `id`, `image`) VALUES ('$id','$image')";

       	if($conn->query($sql))
       	 {echo 'successfully';
       	  echo '<meta http-equiv=REFRESH CONTENT=2;url=image_show.php>';
       	 }
       	else
       	 {echo 'fail';}
       }
       /*
		if(move_uploaded_file($_FILES['image']['tmp_name'], $target))
		   $msg="upload successfully";
		else
			$msg="failed";
      */
?>
