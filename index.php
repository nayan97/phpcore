<?php include_once "autoload.php";

if (isset($_GET['delete_id'])){
	$delete_id = $_GET['delete_id'];

	delete('products', $delete_id);
	header('Location:index.php');
}
 ?>
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
		<a class="btn btn-sm btn-primary" href="create.php">Add new product</a>
		<br>
		<br>
		<div class="card shadow">
			<div class="card-body">
				<h2>All Product</h2>
				<table class="table table-striped">
					<thead>
						<tr>
							<td>#</td>
							<td>Title</td>
							<td>Deccription</td>
							<td>Price</td>
							<td>Photo</td>
							<td>Category</td>
							<td>Created at</td>
							<td>Action</td>
						</tr>
					</thead>
					<tbody>
						<?php
							$i = 1;
							$data = all('products');
							while ($product = $data->fetch_object()):

						?>
							<tr>
								<td><?php echo $i; $i++;?></td>
								<td><?php echo $product->name;?></td>
								<td><?php echo $product->description;?></td>
								<td><?php echo $product->price;?></td>
								<td><?php echo $product->category;?></td>
								<td><img src="media/products/<?php echo $product->photo;?>" alt=""></td>
								<td><?php echo $product->created_at;?></td>
								<td>
									<button class="btn btn-sm btn-success">Edit</button>
									<a class="btn btn-sm btn-danger" href="?delete_id=<?php echo $product->id;?>">Delete</a>
								</td>
							</tr>
						<?php endwhile; ?>
						
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