<?php include_once "autoload.php"; ?>
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

		if(isset($_POST['add_product'])){
			// get data
			$name = $_POST['name'];
			$slug = slug($name);
			$price= $_POST['price'];
			$s_price= $_POST['s_price'];
			$description = $_POST['description'];
			$category = $_POST['category'];

			if(empty($name) || empty($price) || empty($category) || empty($description)) {
				$msg = validate('All field are required');
			
			}else{
				$file_name = move($_FILES['photo'], 'media/products/');

				create("INSERT INTO products(name, slug, price,s_price, description, category, photo)VALUES('$name', '$slug', '$price', '$s_price','$description', '$category','$file_name')");
				$msg = validate('Student added successfully', 'success');
				formClean();
			}
		}
		?>    

	<div class="wrap ">
		<a class="btn btn-sm btn-primary" href="index.php">All Products</a>
		<br>
		<br>
		<div class="card shadow">
			<div class="card-body">
				<h2>Add New Products</h2>
				<?php
				if (isset($msg)) {
					echo $msg;
				}
				?>
				<form action="" method="POST" enctype="multipart/form-data">
					<div class="form-group">
						<label for="">Name</label>
						<input name="name" class="form-control" value="<?php old('name'); ?>" type="text">
					</div>
					<div class="form-group">
						<label for="">price</label>
						<input name="price" class="form-control" value="<?php old('price'); ?>" type="text">
					</div>
					<div class="form-group">
						<label for="">Sell price</label>
						<input name="s_price" class="form-control" value="<?php old('s_price'); ?>" type="text">
					</div>
					<div class="form-group">
						<label for="">Decription</label>
						<input name="description" class="form-control" value="<?php old('description'); ?>" type="text">
					</div>
					<div class="form-group">
						<label for="">Category</label>
						<select class="form-control" name="category" id="">
							<option value="">-select-</option>
							<option value="electronic">Electronic</option>
							<option value="fassion">Fassion</option>
							<option value="home&living">Home&living</option>
							<option value="toyes">Toyes</option>>
						</select>
					</div>
					<div class="form-group">
						<label for="">Quantity</label>
						<input name="quantity" class="form-control" value="<?php old('quantity'); ?>" type="number">
					</div>
					<div class="form-group">
						<label for="">photo</label>
						<input name="photo" class="" value="<?php old('photo'); ?>" type="file">
					</div>
					<div class="form-group">
						<input name="add_product" class="btn btn-primary" type="submit" value="Add">
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