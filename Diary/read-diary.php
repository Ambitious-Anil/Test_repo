<!DOCTYPE html>
<html>
    <head>
        <title>Memory</title>
        <link rel="stylesheet" href="read-diary.css">
        <link rel="stylesheet" href="home-nav-bar.css">
        <link rel="stylesheet" href="bootstrap.css">
        <script src="bootstrap.bundle.js"></script>
    </head>
    <body>
		<?php session_start();
		$n=$_SESSION['name']; 
		?>
        <div class="nav-bar">
            <div class="logo">
                <a href="home.php">
                    <img src="logos/My-Diary-LOGO.png">
                </a>
            </div>
            <div class="home-button">
                <a href="home.php"><img src="logos/home-logo.png"> Home</a>
            </div>
            <div class="memories-button">
                <a href="cards-page.php"><img src="logos/memories-logo.png"> Memories</a>
            </div>
            <div class="profile">
                <span id="text"></span><img src="<?php echo $_SESSION['profileimg']; ?>" width="40px" height="40px" style="border-radius:50%;" style="margin-bottom:25px;">
            </div>
        </div>
		
		<script>
			var x='<?php echo $n; ?>';
			document.getElementById('text').innerText=x;
		</script>
		<?php
        $fn=$_COOKIE['fname'];
        $f=fopen('./'.$_SESSION['name'].'/texts/'.$fn,'r');
        if (filesize('./'.$_SESSION['name'].'/texts/'.$fn)){
          $content=fread($f,filesize('./'.$_SESSION['name'].'/texts/'.$fn));
        }
        else{
          $content="No data";
        }
        #clearstatcache();
        $dt=pathinfo($fn,PATHINFO_FILENAME);
		?>
        <div class="content">
            <div class="date"><h4><?php echo $dt;?></h4>
            </div>
            <div class="text">
                <textarea cols="30" rows="23" disabled><?php echo $content;?></textarea>
            </div>
        </div>
		<?php
			$dir=$_SESSION['name'];
			
		    if(is_dir('./'.$dir.'/images/'.$dt)){
				$files=scandir('./'.$dir.'/images/'.$dt);
				$count=0;
				if($files){?>
					<div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">


						<div class="carousel-inner">
						  <!--div class="carousel-item active" data-bs-interval="2000">
						    <img src="caroselimgs/img1.png" class="d-block w-100" alt="..." id="image">
						  </div>
						  <div class="carousel-item active" data-bs-interval="2000">
						    <img src="caroselimgs/img2.png" class="d-block w-100" alt="..." id="image">
						  </div>
						<div class="carousel-item" data-bs-interval="2000">
						<img src="caroselimgs/img3.png" class="d-block w-100" alt="..." id="image">
						</div-->
						<?php 
						
						//print_r($files);
						foreach ($files as $name){
						    if ('.' === $name) continue;
						    if ('..' === $name) continue;
							if ($count === 0){
								echo "<div class='carousel-item active' data-bs-interval='2000'>
								<img src=".'"'.'./'.$dir.'/images/'.$dt.'/'.$name.'"'." class='d-block w-100' alt='...' id='image'>
							  	</div>";
								//echo $name;
						    	$count = $count+1;
							}
							else{
								echo "<div class='carousel-item' data-bs-interval='2000'>
								<img src=".'"'.'./'.$dir.'/images/'.$dt.'/'.$name.'"'." class='d-block w-100' alt='...' id='image'>
							  	</div>";
							}
						    
						}
					  ?>
					</div>
					<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="visually">P</span>
					</button>
					<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
						<span class="visually">N</span><span class="carousel-control-next-icon" aria-hidden="true"></span>   
					</button>
					</div>
				<?php
			}
		}
		?>
    </body>
</html>
