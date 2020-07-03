<?php 
    include('server.php') 
?>
<!DOCTYPE html>
<html>
<head>
  <title>
    Sign Up
  </title>
  <link rel="stylesheet" href="assets/css/login.css?v=<?php echo time(); ?>">
</head>
<body>
        <div class="imgcontainer">
            <img src="https://ae01.alicdn.com/kf/HTB1if8sXSf2gK0jSZFPq6xsopXag/Anime-Himouto-Umaru-chan-Badge-Fashion-Japanese-Cartoon-Figure-Round-Metal-Brooch-Pin-Bag-Decoration-Collections.jpg_50x50.jpg"
                alt="Avatar" class="avatar">
        </div>
        <h2>
            Welcome to Online Shopping
        </h2>
  <form method="post" action="signup.php">
      <!-- <?php 
            include('errors.php'); 
        ?> -->
  	<div class="input-group">
  	    <label>
            Username
        </label>
  	    <input type="text" name="username" value="<?php echo $username; ?>">
  	</div>
  	<div class="input-group">
  	    <label>
            Email
        </label>
  	  <input type="email" name="email" value="<?php echo $email; ?>">
  	</div>
  	<div class="input-group">
  	    <label>
            Password
        </label>
  	  <input type="password" name="password_1">
  	</div>
  	<div class="input-group">
  	    <label>
            Repeat Password
        </label>
  	  <input type="password" name="password_2">
  	</div>
    <p>
        By creating an account, you agree to our 
        <a href="#" style="color:dodgerblue">
            Terms & Privacy.
        </a>
    </p>
  	<div class="input-group">
  	    <button type="submit" class="btn" name="reg_user">
          Sign Up
        </button>
        <a href="login.php">
          <button type="button" class="btn">
            Cancel
          </button>
        </a>
  	</div>
  </form>
</body>
</html>