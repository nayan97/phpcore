<?php 

include_once "autoload.php";

$edit_id = $_GET['edit_id'];

$item =find('staff', $edit_id); 
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Add new student</title>
	<!-- ALL CSS FILES  -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="assets/css/responsive.css">
</head>

<body>

		<?php
		
		//form isseting

		if(isset($_POST['add_student'])){
			// get data
			$name = $_POST['name'];
			$email= $_POST['email'];
			$cell= $_POST['cell'];
			$age= $_POST['age'];
			$salary= $_POST['salary'];

		
			//$email= $_POST['email'];
			//$email= $_POST['email'];

			if(empty($name) || empty($email)|| empty($cell)) {
				$msg = validate('All field are required');
			}else if(emailcheck($email) == false){
				$msg = validate('Invalid Email Adrress');
			}else if(cellcheck($cell) == false){
				$msg = validate('Invalid Cell Number');
			}else{
				
				connect()->query("UPDATE staff SET name='$name', email='$email',cell='$cell',age='$age',salary='$salary' WHERE id='$edit_id'");
				$msg = validate('Student updated successfully', 'success');

				header("location:index.php");
			}
		}
		?>    

	<div class="wrap ">
		<a class="btn btn-sm btn-primary" href="index.php">All students</a>
		<br>
		<br>
		<div class="card shadow">
			<div class="card-body">
				<h2>Add new student</h2>
				<?php
				if (isset($msg)) {
					echo $msg;
				}
				?>
				<form action="" method="POST" enctype="multipart/form-data">
					<div class="form-group">
						<label for="">Name</label>
						<input name="name" class="form-control" value="<?php echo $item->name ?>" type="text">
					</div>
					<div class="form-group">
						<label for="">Email</label>
						<input name="email" class="form-control" value="<?php echo $item->email ?>" type="text">
					</div>
					<div class="form-group">
						<label for="">Cell</label>
						<input name="cell" class="form-control" value="<?php echo $item->cell?>" type="text">
					</div>
					<div class="form-group">
						<label for="">Age</label>
						<input name="age" class="form-control" value="<?php echo $item->age; ?>" type="text">
					</div>
					<div class="form-group">
						<label for="">Amount</label>
						<input name="salary" class="form-control" value="<?php echo $item->salary ?>" type="text">
					</div>
					<div class="form-group">
						<input name="add_student" class="btn btn-primary" type="submit" value="Update">
					</div>
				</form>
			</div>
		</div>
	</div>
	<br>
	<br>
	<br>
	<br>







	<!-- JS FILES  -->
	<script src="assets/js/jquery-3.4.1.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/custom.js"></script>
</body>

</html>