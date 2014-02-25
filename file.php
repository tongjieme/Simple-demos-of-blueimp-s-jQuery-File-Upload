<?php 
	// echo $_FILES["file"]["tmp_name"];
	print_r($_FILES);
	echo $_FILES["file"]["tmp_name"].' upload successfully';
	move_uploaded_file($_FILES["file"]["tmp_name"],
      "upload/" . $_FILES["file"]["name"]);
 ?>