<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="./assets/css/index.css">
</head>

<body>
	<nav class="navbar navbar-light bg-light fixed-top shadow">
		<a class="navbar-brand d-flex align-items-center" href="#">
			<img src="https://s3.nikecdn.com/unite/app/651/images/swoosh_black.png" class="d-inline-block align-top" alt="">
		</a>
	</nav>
	<div>
		<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
			<div class="carousel-inner">
				<div class="carousel-item active">
					<img src="https://c.static-nike.com/a/images/f_auto/w_1920,c_limit/a3f685b9-d275-4aea-93bc-0830d6bd7b02/1129-homepage-apla-xa-in-my-ph.jpg" class="d-block w-100">
				</div>
				<div class="carousel-item">
					<img src="./assets/images/output.jpg" class="d-block w-100">
				</div>
				<div class="carousel-item">
					<img src="https://c.static-nike.com/a/images/f_auto/w_1920,c_limit/3fa140d6-dcc4-4a8b-8ac3-5421c1c1a4f5/nikecom-homepage-na.jpg" class="d-block w-100">
				</div>
			</div>
		</div>

		<h3 class="cust-container mt-5">Men's Running</h3>
		<hr class="cust-container">
		<div id="products-list" class="row cust-container"></div>
	</div>

	<div class="modal fade" id="productModal">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title"></h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form id="productForm">
						<label for="title" class="mb-0">Title:</label>
						<input type="text" name="title" id="title" class="form-control mb-3" placeholder="Title">
						<label for="description" class="mb-0">Description:</label>
						<input type="text" name="description" id="description" class="form-control mb-3" placeholder="Description">
						<label for="img" class="mb-0">Product Image Link:</label>
						<input type="text" name="img" id="img" class="form-control mb-3" placeholder="Product Image Link">
						<label for="price" class="mb-0">Product Price:</label>
						<input type="number" name="price" id="price" class="form-control mb-3" placeholder="Product Price">
					</form>
					<div class="alert alert-success" role="alert">
						Changes applied successfully
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-danger" onclick="deleteProduct()"><span class="fa fa-trash"></span> Remove Product</button>
					<button type="submit" form="productForm" class="btn btn-success"><span class="fa fa-save"></span> Save changes</button>
				</div>
			</div>
		</div>
	</div>

</body>
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="./assets/js/index.js"></script>

</html>