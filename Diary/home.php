<!DOCTYPE html>
<html>
    <head>
        <title>Home</title>
        
        <link rel="stylesheet" href="bootstrap.css">
        <script src="bootstrap.bundle.js"></script>
		<link rel="stylesheet" href="home.css">
        <link rel="stylesheet" href="home-nav-bar.css">
    </head>
    <body>
		<?php
            session_start();
        ?>
        <div class="nav-bar">
            <div class="logo">
                <a href="home.php">
                    <img src=" logos/My-Diary-LOGO.png">
                </a>
            </div>
            <div class="home-button">
                <a href="cards-page.php"><img src="logos/memories-logo.png"> Read Memories</a>
            </div>
            <div class="memories-button">
                <a href="writedairy.php"><img src="logos/pen-logo.png"> writediary</a>
            </div>
            <div class="profile">
                <span id="text"></span><button type='submit' data-bs-toggle="modal" data-bs-target="#exampleModal" style="background-color:transparent;border:0px;"><img src="<?php echo $_SESSION['profileimg']; ?>" width="40px" height="40px" style="border-radius:50%;"></button>
            </div>
			<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="opacity:0.8;">
			  <div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
				  <div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Account Settings</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				  </div>
				  <div class="modal-body">
					<ol>
					<li style="font-size:20px;color:black;">Update Profile pic:
					<form action="profile.php" method="post" enctype="multipart/form-data">
						<label><input type='file' name='profile' hidden><img src="logos/upload-logo.png"></label>
						<button type='submit' style="width:80px;height:30px;margin-left:20px;margin-top:15px;border-radius:5px;font-size:18px;background-color:aqua;"> Update</button>
					</form></li>
					<li style="margin-top:20px;font-size:20px;"><a href="index.html" style="text-decoration:none;color:black;">Log out</a></li>
				  </div>
				  <div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
				  </div>
				</div>
			  </div>
			</div>
        </div>
		
        <script>
            var profile=document.getElementById('text');
            profile.innerText="<?php echo $_SESSION['name']; ?>";
        </script> 

        <div class="content">
            <h1>Welcome to our Website</h1>
            <h2>100% Free to use.</h2>

            <br>
            <h3>Aim of our Website:</h3>
            <p>This Website provides you to write,read your memories,Experience the wonderful moments of your past along with your memorable clicks.....<br>
                We also have feature to add memorial pics to your diary,which makes more convenient to remember those days more quickly..
            </p>
        </div>

        <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>

            </div>
            <div class="carousel-inner">
              <div class="carousel-item active" data-bs-interval="5000">
                <img src="caroselimgs/img1.png" class="d-block w-100" alt="..." id="image">
                <div class="carousel-caption d-none d-md-block">
                </div>
              </div>
              <div class="carousel-item active" data-bs-interval="5000">
                <img src="caroselimgs/img2.png" class="d-block w-100" alt="..." id="image">
                <div class="carousel-caption d-none d-md-block">
                </div>
              </div>
            <div class="carousel-item" data-bs-interval="5000">
            <img src="caroselimgs/img3.png" class="d-block w-100" alt="..." id="image">
            <div class="carousel-caption d-none d-md-block">
            </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
        </div>
    </body>
</html>
