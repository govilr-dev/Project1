<html> 
<body>
 <h3>GIF Image File Upload Stats: </h3> 
<?php
	if($_FILES["file"]["error"])
	{
		header("Location: content.html");
		die();
	}
	if($_FILES["file"]["type"] != "image/gif")
	{
		echo "Ahh!! Dont be over smart.Upload a GIF file Only";
	}
	else{
		echo "Name: ".$_FILES["file"]["name"];
		echo "<br>Size: ".$_FILES["file"]["size"];
		echo "<br>Temp File: ".$_FILES["file"]["tmp_name"];
		echo "<br>Type: ".$_FILES["file"]["type"];
		move_uploaded_file($_FILES["file"]["tmp_name"], "uploads/".$_FILES["file"]["name"]);
	}
?> 
</body> 
</html>
