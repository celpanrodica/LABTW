<?php

$msg = "";


if($_SERVER['REQUEST_METHOD'] == 'POST') {
  if (empty($_POST['username']) || empty($_POST['email']) || empty($_POST['password'])){
    echo "<div class='alert-nosucces'>Completeaza campurile!</div>";
  }

  else {    
    echo "<div class='alert-succes'>
    <br>
    <br>
    <br>
    <br>
    Ati introdus datele:<br>
    Username:$_POST[username]<br>Password: $_POST[password]<br>Email: $_POST[email]</div>";
 
  }
}


?>


<!DOCTYPE html>
<head>
    <title>Inregistrare</title>
    <meta charset="utf-8">
    <meta name= "viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <link rel="stylesheet" href="css\null.css">
	<link rel="stylesheet" href="css\prichindel.css">
  <link rel="stylesheet" href="css\signin.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</head>

<body>
<header class="header">
		<nav class="header__nav container">
			<ul class="header__nav-list">
				<li class="header__nav-item">
					<a href="Untitled-1.html" class="header__nav-link butt">
						Principala
					</a>
				</li>
				<li class="header__nav-item">
					<a href="rezumat.html" target="_blank" class="header__nav-link butt">
						Rezumat
					</a>
				</li>
				<li class="header__nav-item">
					<a href="autor.html" target="_blank"  class="header__nav-link butt">
						Autor
					</a>
				</li>
				<li class="header__nav-item">
					<a href="Login.php" target="_blank"  class="header__nav-link butt">
						Sign In
					</a>
				</li>
				<li class="header__nav-item">
					<a href="Register.php" target="_blank"  class="header__nav-link butt">
						Sign Up
					</a>
				</li>
				<li class="header__nav-item">
					<a href="ContactUs.php" target="_blank"  class="header__nav-link butt">
						Contact Us
					</a>
				</li>
			</ul>
		</nav>
	</header>
</div>
   <div class="message"></div>
<div class="register">
<div class= "text1">
        REGISTRATION
    </div>

    <form class="form" id="form" name="regForm" action="" method="post">
      <div class="form-control">
        <label> Username</label>
        <input type="text" placeholder="UserName" name="username" id="username" maxlength="30">
        
        <small>Error message</small>
      </div>

     
   
      <div class="form-control">
        <label> Email</label>
        <input type="email" placeholder="UserName@gmail.com" name="email" id="email" maxlength="30">
      
        <small>Error message</small>
      </div>

  
      <div class="form-control">
        <label> Password</label>
        <input type="password" placeholder="Password" name="password" id="password" maxlength="30">
        
        <small>Error message</small>
      </div>

      
   
      <div class="form-control">
        <label> Password check</label>
        <input type="password" placeholder="Repeat Password" name="password2" id="password2">
      
        <small>Error message</small>
      </div>

    
      <button type ="submit" id="submitBtn">Submit</button>
      
      <script src="register.js"></script>
     
    </form>
</div>
    
</body>