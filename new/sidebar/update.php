<?php 
include "./config.php";
session_start();

if (!isset($_SESSION['email'])) {

     header("Location: ../login.php");
}
?>
<?php 
if (isset($_POST['update'])){ 
  $title = $_POST['title'];
  $code = $_POST['code'];
  $lecturer = $_POST['lecturer'];
  $year = $_POST['year'];
  $filename = $_FILES["file"]["name"];
  $tempname = $_FILES["file"]["tmp_name"];
  $folder = "./pdf/" . $filename;
  
  $user_id = $_SESSION["id"];

$update = mysqli_query($conn, "UPDATE contact_lists SET title = '$title',code = '$code',lecturer = '$lecturer' file =  COALESCE(NULLIF( '$filename' ,''),file),year = '$year'  WHERE id = '$id'");
if ($update){
  echo "<script>alert('Questions Updated successfully') </script>";
}
if (move_uploaded_file($tempname, $folder)) { } 

 ?>
<!doctype html>
<html lang="en">
  <head>
  	<title>Update</title>
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
	          <li>
              <a href="update.php"><span class="fa fa-undo mr-3"></span> Update Questions</a>
	          </li>
	          <li class="active">
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
<h3>Past Questions Portal</h3>
<h5>Dashboard/Update Questions</h5>



<form action="" method="post">
<div class="container-fluid">
  <h5 style="color:royalblue;">Update Questions</h5>
  <div class="row">
       <div class="col-3"> Course Title <input type="text" name="title"></div>
       <div class="col-3">Year of Examination<input type="text" name="year"></div>
    <div class="w-100"></div>
       <div class="col-3"> Course Code<input type="text" name="code"></div>
       <div class="col-3">Course Lecturer<input type="text" name="lecturer"></div>
    <div class="w-100"></div>   
      <div class="col-3">PDF File <input type="file" id="file" name="file" accept=".pdf,.doc"/></div>
      <div class="col-3"><br> <button class="btn btn-primary btn-block" name="update">Update</button>
  </div>
</div>
</form>


<!-- content -->
    </div>
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>