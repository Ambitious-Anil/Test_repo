<?php
	session_start();
	$pic_name=$_FILES['profile']['name'];
	$ext=pathinfo($pic_name,PATHINFO_EXTENSION);
	echo $_SESSION['name'];
	$folder=$_SESSION['name']."/profile";
	$files=glob($folder.'/*');
	foreach($files as $file){
		if(is_file($file))
			unlink($file);
	}
	
	if(move_uploaded_file($_FILES['profile']['tmp_name'],'./'.$_SESSION['name']."/profile/".$pic_name)){
		header("Location:prfile_alert.html");
	}
	else{
		echo "some error occured.Try after sometime";
	}

?>
