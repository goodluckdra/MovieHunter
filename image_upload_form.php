<html>

<head>
  <title>Image Upload</title>
</head>

<body>



	<div id="content">
		<form method="post" action="image_upload.php" enctype="multipart/form-data">
		<input type="hidden" name="size" value="1000000">
		<input type="text" name="movie_num" value="">
		<input type="file" name="image">
		<input type="submit" name="upload" value="Upload Image">
	</div>
</body>

</html>