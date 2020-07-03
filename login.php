<?php 
	include('server.php') 
?>
<!DOCTYPE html>
<html>
<head>
  	<title>
    	Sign In
  	</title>
  	<link rel="stylesheet" href="assets/css/login.css?v=<?php echo time(); ?>">
	  <?php 
	  	echo time(); 
	  ?>"
	>
</head>
        <div class="imgcontainer">
            <img src="https://ae01.alicdn.com/kf/HTB1if8sXSf2gK0jSZFPq6xsopXag/Anime-Himouto-Umaru-chan-Badge-Fashion-Japanese-Cartoon-Figure-Round-Metal-Brooch-Pin-Bag-Decoration-Collections.jpg_50x50.jpg"
                alt="Avatar" class="avatar">
        </div>
        <h2>
            Welcome to Online Shopping
        </h2>
<body>
  <form method="post" action="login.php">
	  	<?php 
			include('errors.php'); 
		?>
  	<div class="input-group">
  		<label>
			  Username
		</label>
  		<input type="text" name="username" >
  	</div>
  	<div class="input-group">
  		<label>
			  Password
		</label>
  		<input type="password" name="password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">
			Login
		</button>
  	</div>
  		<a href="signup.php">
			<button type="button" class="btn">
				Sign up
			</button>			
		</a>
  </form>
</body>
</html>