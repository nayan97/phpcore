<?php include_once "autoload.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>All students</title>
	<!-- ALL CSS FILES  -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="assets/css/responsive.css">
</head>

<body>



	<div class="wrap-table ">
		<a class="btn btn-sm btn-primary" href="create.php">Add new student</a>
		<br>
		<br>
		<div class="card shadow">
			<div class="card-body">
				<h2>All Students</h2>
				<table class="table table-striped">
					<thead>
						<tr>
							<th>#</th>
							<th>Name</th>
							<th>Email</th>
							<th>Cell</th>
							<th>Location</th>
							<th>Age</th>
							<th>Gender</th>
							<th>Amount</th>
							<th>Photo</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>

					<?php
						$i=1;
					$data = all('staff');
						
					while ($item = $data->fetch_object()) :
					
					?>

                       <tr>
						<td><?php echo $i;$i++;?></td>
						<td><?php echo $item->name?></td>
						<td><?php echo $item->email?></td>
						<td><?php echo $item->cell?></td>
						<td><img src="media/students/<?php echo $item->photo?>" alt=""></td>
					
					   </tr>

					<?php
					endwhile;
					   ?>
	

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