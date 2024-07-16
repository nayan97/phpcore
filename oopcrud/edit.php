<?php 

	use App\Controllers\StudentController;


	require_once "vendor/autoload.php";

	$stu = new StudentController;

	if (isset($_GET['id'])) {
		$id = $_GET['id'];

		$stu_data = $stu -> singalePageShow($id);
	}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Development Area</title>
	<!-- ALL CSS FILES  -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="assets/css/responsive.css">
</head>
<body>
	
	

	<div class="wrap shadow">
		<a class="btn btn-primary" href="index.php">Back</a>
		<br>
		<br>
		<div class="card">
			<div class="card-body">
            <form action="" method="POST" enctype="multipart/form-data">
						<div class="form-group">
							<label for="">Name</label>
							<input name="name" class="form-control" type="text">
						</div>
						<div class="form-group">
							<label for="">Email</label>
							<input name="email" class="form-control" type="text">
						</div>
						<div class="form-group">
							<label for="">Cell</label>
							<input name="cell" class="form-control" type="text">
						</div>
						<div class="form-group">
							<label for="">Username</label>
							<input name="uname" class="form-control" type="text">
						</div>
						<div class="form-group">
							<label for="">Photo</label><br>
							<input name="photo" class="" type="file">
						</div>
						<div class="form-group">
							<input name="add" class="btn btn-primary" type="submit" value="add">
						</div>
					</form>


			</div>
		</div>
	</div>
	







	<!-- JS FILES  -->
	<script src="assets/js/jquery-3.4.1.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/custom.js"></script>
</body>
</html>