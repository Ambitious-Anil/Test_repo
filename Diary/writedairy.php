<!DOCTYPE html>
<html>
    <head>
        <title>writedairy</title>
        <link rel="stylesheet" href="writedairy.css">
        <link rel="stylesheet" href="nav-bar.css">
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
                    <a href="home.php"><img src="logos/home-logo.png"> Home</a>
                </div>
                <div class="memories-button">
                    <a href="cards-page.php"><img src="logos/memories-logo.png"> Read Memories</a>
                </div>
                <div class="profile">
                    <span id="text" style="color:aqua;"></span><img src="<?php echo $_SESSION['profileimg']; ?>" width="40px" height="40px" style="border-radius:50%;">
                </div>
            </div>
        
        <script>
            var profile=document.getElementById('text');
            profile.innerText="<?php echo $_SESSION['name']; ?>";
        </script> 
		<div class="bdy">
		    <div class="center-contain">
		        <h2 id="date-text"></h2>
				<form action="write-dairy-data.php" method="post" enctype="multipart/form-data">
		        <div class="main-text">
		            <textarea rows="10" cols="20" maxlength="100000000000" placeholder="How is your Day..." name="data"></textarea>
		        </div>
		        
		    </div>
		    <div class="imgslide-contain">
		        <div class="upload-button">
		            <h3>Upload Memorable pics:</h3><br>
		            <input type="file" name="imgs[]" multiple visibility="none">
		        </div>
		    </div>
		</div>
		<div class="submit-button">
	            <button type='submit'> Save
	                <img src="logos/save-logo.png">
	            </button></a>
	    </div>
		</form>
        <script>
            var today=new Date();
            var dt='Date:'+today.getDate()+'-'+(today.getMonth()+1)+'-'+today.getFullYear();
            document.getElementById('date-text').innerText=dt;
        </script>
    </body>
</html>
