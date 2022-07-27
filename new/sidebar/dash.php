<?php 
include "./config.php";
session_start();

if (!isset($_SESSION['email'])) {

     header("Location: ../login.php");
}
?>
<!doctype html>
<html lang="en">
  <head>
  	<title>Dashboard</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

		<link rel="stylesheet" href="css/style.css">
  </head>
  <body>
		
		<div class="wrapper d-flex align-items-stretch">
			<nav id="sidebar">
				<div class="custom-menu">
					<button type="button" id="sidebarCollapse" class="btn btn-primary">
	          <i class="fa fa-bars"></i>
	          <span class="sr-only"></span>
	        </button>
        </div>
				<div class="p-4">
		  		<h1 style="color: white;">Main</h1>
	        <ul class="list-unstyled components mb-5">
	          <li class="active">
	            <a href="index.php"><span class="fa fa-dashboard mr-3"></span> Dashboard</a>
	          </li>
	          <li>
	              <a href="#"><span class="fa fa-user mr-3"></span> Users</a>
	          </li>
	          <li>
              <a href="upload.php"><span class="fa fa-upload mr-3"></span> Upload Questions</a>
	          </li>
	          <li>
              <a href="update.php"><span class="fa fa-undo mr-3"></span> Update Questions</a>
	          </li>
	          <li>
              <a href="delete.php"><span class="fa fa-trash mr-3"></span> Delete Questions</a>
	          </li>
	          <li>
              <a href="#"><span class="fa fa-pencil mr-3"></span> Create Admin</a>
	          </li>
	          <li>
              <a href="../logout.php"><span class="fa fa-sign-out mr-3"></span> Log Out</a>
	          </li>
	        </ul>			
    	</nav>

        <!-- Page Content  -->
      <div id="content" class="p-4 p-md-5 pt-5" >
        <nav class="navbar navbar-expand-lg navbar-light"  style="background-color: grey;">
  <div class="container-fluid">
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav" style="width: 100%">
        <li class="nav-item">
          <a class="nav-link" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Features</a>
        </li>
        
        
     <div style="flex: 2;"></div>
     
     	<li class="nav-item">
			   <div class="input-group"><input class="form-control" type="text" name="valueToSearch"  >
           <button type="submit" class="btn btn-primary" name="search"><i class="fa fa-search"></i></button></div>
     </li>
     	<li class="nav-item ">
        	
          <a class="navbar-brand" href="#">Admin</a>
        </li>
      </ul>

    </div>
  </div>
</nav>

<nav class="navbar navbar-light bg-light">
  <div class="container">
    
  </div>
</nav>
<!-- cards -->
<div style="display: flex;">
<div class="card" style="width: 12rem; margin: 3rem;height: 12rem;">
  <div class="card-body" >
    <img src="images/user.jpg" class="card-img-top" style="height: 6rem;"><p>800</p>
    <h5 class="card-title" style="color: green; ">Users</h5>
  </div>
</div>
<div class="card" style="width: 12rem;  margin: 3rem; height: 12rem;">
  <div class="card-body">
    <img src="images/user.jpg" class="card-img-top" style="height: 6rem;" ><p>800</p>
    <h5 class="card-title" style="color: green; ">Department</h5>
    
  </div>
</div>
<div class="card" style="width: 12rem;  margin: 3rem;height: 12rem;">
  <div class="card-body">
    <img src="images/user.jpg" class="card-img-top" style="height: 6rem;"><p>800</p>
    <h5 class="card-title" style="color: green; ">Questions</h5>
    
  </div>
</div>

</div>


         </div>
		</div>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>