<?php
    $fullname=$_POST['fullname'];
    $username=$_POST['username'];
    $pwd=$_POST['pwd'];
    $conn=mysqli_connect('127.0.0.1','root','','Diary');
    $sql="INSERT INTO Signup VALUES('$fullname','$username','$pwd');";
    if (mysqli_query($conn,$sql)){
		mkdir($fullname);
        if (mkdir($fullname.'/texts') and mkdir($fullname.'/images') and mkdir($fullname.'/profile')){
			$src='./logos/profile-logo.png';
			$dest='./'.$fullname.'/profile/profile-logo.png';
			if(copy($src,$dest))
            	header('Location:index.html');
			else
				echo "Error";
        }
    }
    else{
        echo "Error: account exists";
    }
    
?>
