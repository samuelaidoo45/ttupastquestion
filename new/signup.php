<?php 
include "./sidebar/config.php";
error_reporting(0);

if (isset($_POST['signup'])){ 
	
	$password = $_POST['password'];
	$email = $_POST['email'];

	$ENTER = "SELECT * FROM login WHERE email='$email'";
	$result = mysqli_query($conn, $ENTER);
  
	if(!$result->num_rows > 0 ){
		$ENTER = "INSERT INTO login(email,password) values('$email' ,'$password')";
	$result= mysqli_query($conn,$ENTER);
		echo mysqli_error($conn);
	if ($result){	
	
		echo "<script>alert('Wow! User Registration Completed.')</script>";
	}
}
	else {
			echo "<script>alert('Woops! Email Already Exists.')</script>";
		}
	
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Sign up</title>
	<link rel="stylesheet" type="text/css" href="style.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
</head>
<body>
	<form class = "container" method="post" action="">
		<div>
			<label class="signup">
				<h1>Sign up</h1>
			</label>
			<p class="signup">Already have an account ?<a href="login.php">Log in</a></p>
		</div>
			
		<label>Email</label>
		<div class="input-group mb-3">
          <input type="email" class="form-control" name = "email"  id="email" required>
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
		
		<button type="submit" class="btn btn-danger btn-block" name="signup" >SIGN UP</button>



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