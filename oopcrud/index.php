<?php 

use App\Supports\Validate;
use App\Controllers\StudentController;

require_once "vendor/autoload.php";

$stu = new StudentController;

if (isset($_GET['delete_id'])){
	$delete_id = $_GET['delete_id'];

	$stu ->studentDell($delete_id);

	header('Location:index.php');
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
	<?php 
	/**
	 * isset add student form
	 */
	$msg = '';

	 if(isset($_POST['add'])){
		// get all values

		$name = $_POST['name'];
		$email = $_POST['email'];
		$cell = $_POST['cell'];
		$uname = $_POST['uname'];
		

		if(empty($name) || empty($email) || empty($cell) || empty($uname)){
			$msg = Validate::msg('All filds are required');
		}else if(Validate::email($email) == false){
			$msg = Validate::msg('Email is not valid');
		}else{
			$stu -> addStudent($name, $email, $cell, $uname);
		}
	 }
	
	?>

	<div class="wrap-table shadow">
	<button data-toggle="modal" href="#add_student" class="btn btn-primary">Add New Student</button>
	<br>
	<br>

	<?php
		// if(isset($msg)){
		// 	echo $msg;
		// }


		Validate::show($msg);
	?>
	<div id="add_student" class="modal fade">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-header">
					<h3>Add new student</h3>
					<button class="close" data-dismiss="modal">&times;</button>
				</div>
				<div class="modal-body">
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
	</div>


		<div class="card">
			<div class="card-body">
				<h2>All Data</h2>
				<table class="table table-striped">
					<thead>
						<tr>
							<th>#</th>
							<th>Name</th>
							<th>Email</th>
							<th>Cell</th>
							<th>Photo</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>


					<?php 

                       $datas = $stu -> showAllStudent();
					
						while( $data = $datas -> fetch_object()) :
					
					?>
						<tr>
							<td>1</td>
							<td><?php echo $data -> name; ?></td>
							<td><?php echo $data -> email; ?></td>
							<td><?php echo $data -> cell; ?></td>
							<td><img style="width:60px; height:60px" src="img/students/<?php echo $data ->photo; ?>" alt=""></td>
							<td>
								<a class="btn btn-sm btn-info" href="single.php?id=<?php echo $data -> id; ?>">View</a>
								<a class="btn btn-sm btn-warning"  href="edit.php?id=<?php echo $data -> id; ?>">Edit</a>
								<a class="btn btn-sm btn-danger" href="?delete_id=<?php echo $data -> id; ?>">Delete</a>
							</td>
						</tr>

					<?php endwhile ?>

					</tbody>
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