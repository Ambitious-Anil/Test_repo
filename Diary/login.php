<html>
    <body>
        <?php
            session_start();
            $username=$_POST['username'];
            $pwd=$_POST['pwd'];
            $conn=mysqli_connect('127.0.0.1','root','','Diary');
            $sql="SELECT * FROM Signup WHERE username='$username' AND password='$pwd';";
            $res=mysqli_query($conn,$sql);
            $no_of_rows=mysqli_num_rows($res);
            if ($no_of_rows>0){
                while ($row=mysqli_fetch_assoc($res)){
                    $_SESSION['name']=$row['fullname'];
					$dir=$_SESSION['name'];
				    $files=scandir('./'.$dir.'/profile');
				    $count=0;
				    foreach ($files as $name){
				        if ('.' === $name) continue;
				        if ('..' === $name) continue;
						$_SESSION['profileimg']='./'.$dir.'/profile/'.$name;
					//echo $_SESSION['name'];
					}
                }
                header('Location:home.php');
				//echo $_SESSION['profileimg'];
                
            }
            else{
                header('Location:alert.html');
                
            }
        ?>
    </body>
</html>
