<?php
	session_start();
    $date=date('d-m-Y');
    $f=fopen('./'.$_SESSION['name'].'/texts/'.$date.'.txt','w+');
    $data=$_POST['data'];
	$countfiles = count($_FILES['imgs']['name']);
	//print_r ($_FILES['imgs']);
    if (fwrite($f,$data)){
		//header('Location:writedairy.php');
		echo $_FILES['imgs']['name'][0];	
		if ($countfiles > 1){
			if(mkdir('./'.$_SESSION['name'].'/images/'.$date)){
				 for($i=0;$i<$countfiles;$i++){
				   $filename = $_FILES['imgs']['name'][$i];
				   if(move_uploaded_file($_FILES['imgs']['tmp_name'][$i],'./'.$_SESSION['name'].'/images/'.$date.'/'.$_FILES['imgs']['name'][$i])){
						header('Location:home.php');
					}
	 			}
			}
			else{
				$countfiles = count($_FILES['imgs']['name']);
				 for($i=0;$i<$countfiles;$i++){
				   $filename = $_FILES['imgs']['name'][$i];
				   if(move_uploaded_file($_FILES['imgs']['tmp_name'][$i],'./'.$_SESSION['name'].'/images/'.$date.'/'.$_FILES['imgs']['name'][$i])){
						header('Location:home.php');
					}
				}
			}
		}
		else{
			header('Location:home.php');
		}
	}
	else {
		echo "no file";
	}
?>
