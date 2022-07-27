<?php 
include "./sidebar/config.php";
error_reporting(0);
session_start();
if(isset($_POST["login"])){
    $email = $_POST["email"];
    $password = $_POST["password"];
    $result = mysqli_query($conn, "SELECT * FROM login WHERE email = '$email'");
    
    $row = mysqli_fetch_assoc($result);
    
    if(mysqli_num_rows($result) > 0){
      if($password == $row['password']){
        $_SESSION["login"] = true;
       
        $_SESSION["email"] = $row["email"];
        $_SESSION["id"] = $row["id"]; 

        header("Location:../new/sidebar/dash.php");

      }
      else{
        echo
        "<script> alert('Wrong Password'); </script>";
      }
    }
    else{
      echo
      "<script> alert('User Not Registered'); </script>";
    }
 }
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	  
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

</head>
<body>
	<form class = "container" method="post" action="">
		<div>
			<label class="login">
				<h1>Login</h1>
			</label>
			<p>Don't have an account ?<a href="signup.php">Sign up</a></p>
		</div>
			<label>Email</label>
		<div class="input-group mb-3">
          <input type="email" class="form-control" name = "email"  required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
		
		<label>Password</label><br>
		<div class="input-group mb-3">
		<input type="password"  class="form-control" name="password" required id="password">	
		<div class="input-group-append">
            <div class="input-group-text">
		<span class="far fa-eye" id="togglePassword" style=" cursor: pointer;"></span>
		</div>
          </div>
        </div>
				
		<button type="submit" class="btn btn-danger btn-block" name="login" >LOGIN</button>
	</form>
<script type="text/javascript">
	const togglePassword = document.querySelector('#togglePassword');
  const password = document.querySelector('#password');

  togglePassword.addEventListener('click', function (e) {
    // toggle the type attribute
    const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
    password.setAttribute('type', type);
    // toggle the eye slash icon
    this.classList.toggle('fa-eye-slash');
});
</script>
</body>
</html>