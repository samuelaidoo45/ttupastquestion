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
  	<title>Delete</title>
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
	          <li>
	            <a href="dash.php"><span class="fa fa-dashboard mr-3"></span> Dashboard</a>
	          </li>
	          <li>
	              <a href="#"><span class="fa fa-user mr-3"></span> Users</a>
	          </li>
	          <li >
              <a href="upload.php"><span class="fa fa-upload mr-3"></span> Upload Questions</a>
	          </li>
	          <li class="active">
              <a href="update.php"><span class="fa fa-undo mr-3"></span> Update Questions</a>
	          </li>
	          <li>
              <a href="delete.php"><span class="fa fa-trash mr-3"></span> Delete Questions</a>
	          </li>
	          <li>
              <a href="#"><span class="fa fa-pencil mr-3"></span> Create Admin</a>
	          </li>
	        </ul>			
    	</nav>

        <!-- Page Content  -->
      <div id="content" class=" p-md-5 pt-5" >
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
     

     	<li class="nav-item ">
        	
          <a class="navbar-brand" href="#">Admin</a>
        </li>
      </ul>

    </div>
  </div>
</nav>


<!-- Content -->
<div class="card-header" >
                <h1 >Delete Questions</h1>  
            <div class="input-group"><input  type="text" name="valueToSearch"  placeholder="Search">
           <button type="submit" class="btn btn-primary" name="search"><i class="fa fa-search"></i></button></div>
              
<div class="table-responsive">
   <table class="table table-bordered">
    <tr>
      <th>S. No</th>
      <th>Date</th> 
      <th>Course Title</th> 
      <th>Course Code</th> 
      <th>Lecturer</th> 
      <th>Year Of Exams</th>
      <th>ACTION</th>  
    </tr>
    <tr>
      <td>1</td>
      <td>14th Feb </td>
      <td>Computing</td>
      <td>ITC 123</td>
      <td>MR JOHN</td>
      <td><2004/td>
      <td>Delete</td>
    </tr>
  </table>
 </div>            
</div>



<!-- content -->
    </div>
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>