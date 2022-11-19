<!DOCTYPE html>
<html>
    <head>
        <title>Memories</title>
        <link rel="stylesheet" href="cards-page.css">
        <link rel="stylesheet" href="nav-bar.css">
    </head>
    <body>
		<?php session_start();
		$n=$_SESSION['name']; 
		?>
        <div class="nav-bar">
            <div class="logo">
                <a href="home.php">
                    <img src=" logos/My-Diary-LOGO.png">
                </a>
            </div>
            <div class="home-button">
                <a href="home.php"><img src="logos/home-logo.png"> Home</a>
            </div>
            <div class="memories-button">
                <a href="writedairy.php"><img src="logos/pen-logo.png"> writedairy</a>
            </div>
            <div class="profile">
                <span id="text"></span><img src="<?php echo $_SESSION['profileimg']; ?>" width="40px" height="40px" style="border-radius:50%;">
            </div>
		
		<script>
			var x='<?php echo $n; ?>';
			document.getElementById('text').innerText=x;
		</script>
        </div>
        <div class="all-cards">
			<div>
            <!--div class="top-cards">
                <div class="card">
                    <div class="text">
                        Hi there!
                    </div>
                    <div class="date">
                        20-20-2022
                    </div>
                    <div class="submit-button">
                        <a href="sign-up.html"><button><span></span> View
                            <img src="logos/view-logo-w.png">
                        </button></a>
                    </div>
                </div>
			</div-->
			<?php 
            $dir=$_SESSION['name'];
            $files=scandir('./'.$dir.'/texts');
            $count=0;
            foreach ($files as $name){
                if ('.' === $name) continue;
                if ('..' === $name) continue;
                $dt=pathinfo($name,PATHINFO_FILENAME);
				$f=fopen("./".$dir."/texts/".$name,'r');
				$content=fread($f,300);
                if ($count % 4 === 0){
                  echo "</div><div class='top-cards'>";
                }
                
                echo "<div class='card'>
                    <div class='text'>
						".$content."
                    </div>
                    <div class='date'>".$dt."
                    </div>
                    <div class='submit-button'>
                        <a href='read-diary.php' onclick='myFunction(".'"'.$name.'"'.")'><button> View
                            <img src='logos/view-logo-w.png'>
                        </button></a>
                    </div>
                </div>";
                $count = $count+1;
                #$_SESSION["'".$count."'"]=$name;
                
            }
          ?>
		<script>
            function myFunction(name){
              document.cookie="fname="+name;
            }
          </script>
        </div>
    </body>
</html>
