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
				<img class="text-center" style="width:300px; height:300px; display-block; border-radius:50%" src="img/students/<?php echo $stu_data ->photo; ?>" alt="">
				<h2><?php echo $stu_data -> name ?></h2>
				<h6>Cell: <?php echo $stu_data -> cell ?> </h6>


				<table class="table table-striped">
					<tr>
						<td>Cell</td>
						<td><?php echo $stu_data -> name ?></td>
					</tr>		
					<tr>
						<td>Cell</td>
						<td><?php echo $stu_data -> email ?></td>
					</tr>		
					<tr>
						<td>Cell</td>
						<td><?php echo $stu_data -> cell ?></td>
					</tr>	
					<tr>
						<td>Cell</td>
						<td><?php echo $stu_data -> user ?></td>
					</tr>

				</table>
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