<?php 

	use App\Controllers\StudentController;


	require_once "vendor/autoload.php";

	$stu = new StudentController;

	if (isset($_GET['id'])) {
		$id = $_GET['id'];

		$stu_data = $stu -> editStudentData($id);
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

use App\Supports\Validate;
	/**
	 * isset add student form
	 */
	$msg = '';

	 if(isset($_POST['update'])){
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
			
		$stu_data->  updateStudentData($name, $email, $cell, $uname);
		}
	 }
	
	?>
	
	

	<div class="wrap shadow">
		<a class="btn btn-primary" href="index.php">Back</a>
		<br>
		<br>
		<div class="card">
			<div class="card-body">
				<h2>Update <span style="color:red"><?php echo $stu_data->name; ?></span>  Data</h2>
            <form action="" method="POST" enctype="multipart/form-data">
						<div class="form-group">
							<label for="">Name</label>
							<input name="name" class="form-control" value="<?php echo $stu_data->name; ?>" type="text">
						</div>
						<div class="form-group">
							<label for="">Email</label>
							<input name="email" class="form-control" value="<?php echo $stu_data->email; ?>" type="text">
						</div>
						<div class="form-group">
							<label for="">Cell</label>
							<input name="cell" class="form-control" value="<?php echo $stu_data->cell; ?>" type="text">
						</div>
						<div class="form-group">
							<label for="">Username</label>
							<input name="uname" class="form-control" value="<?php echo $stu_data->user; ?>" type="text">
						</div>
						<div class="form-group">
							<label for="">Photo</label><br>
							<img class="text-center" style="width:100px; height:100px; display-block;" src="img/students/<?php echo $stu_data ->photo; ?>" alt=""><br>
							
							<input name="photo" class="" type="file">
						</div>
						<div class="form-group">
							<input name="update" class="btn btn-primary" type="submit" value="Update">
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