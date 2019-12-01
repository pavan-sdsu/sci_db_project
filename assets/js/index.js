let products, currProductId = null;

const addProductHtml = '<div class="col-lg-4 px-2 mt-3"><div class="card h-100 add text-secondary" onclick="openModal()"><span class="fa fa-plus-circle fa-5x p-4 mb-4"></span><h3>Add New Product</h3></div></div>';

let user;

$(document).ready(() => {

	user = JSON.parse(localStorage.getItem("user"));

	if (user) {
		$("#login span:first-of-type").text("Hello " + user.fname);
		$("#login span.fa").removeClass("fa-user").addClass("fa-sign-out");
	}

	$("form").submit(editProduct);
})

const editProduct = (e) => {
	e.preventDefault();
	const formValues = $("form").serializeArray();
	let values = {};

	formValues.forEach(val => {
		values[val.name] = val.value;
	});

	if (currProductId) {
		$.ajax({
			url: "./server/update.php",
			contentType: "application/json",
			method: "POST",
			data: JSON.stringify({
				productId: Number(currProductId),
				values: values
			}),
			success: (prods) => {
				getProducts();
				$(".modal-body .alert").show();
			}
		})
	} else {
		values["created_by"] = user.userId
		$.ajax({
			url: "./server/insert.php",
			contentType: "application/json",
			method: "POST",
			data: JSON.stringify([values]),
			success: (prods) => {
				getProducts();
				$(".modal-body .alert").show();
			}
		})
	}

}

const getProducts = () => $.ajax({
	url: "./server/products.php",
	contentType: "application/json",
	method: "GET",
	success: (prods) => {

		products = prods;

		let html = "";

		prods.forEach(p => {
			const empStr = (user && user.role == "employee") ? '<i class="fa fa-edit border" class="btn btn-primary" onclick="openModal(' + p.id + ')"></i>' : '';

			html += '<div class="col-lg-4 px-2 mt-3"><div class="card h-100"><img class="w-100" src="' + p.img + '">' + empStr + '<div class="card-body d-flex flex-column"><h5 class="card-title">' + p.title + '</h5><p class="text-secondary mt-auto border-top pt-2">' + p.description + '<br>$' + p.price + '</p><button class="btn btn-success ml-auto">Add to Cart<i class="fa fa-shopping-cart ml-2"></i></button></div></div></div>'
		});

		if (user && user.role == "employee") html = addProductHtml + html;

		document.getElementById("products-list").innerHTML = html;
	}
})

const deleteProduct = () => {
	if (!confirm("You are going to delete a product \nWarning! This cannot be reverted back")) return;
	$.ajax({
		url: "./server/delete.php",
		contentType: "application/json",
		method: "POST",
		data: JSON.stringify({ productId: currProductId }),
		success: (prods) => {
			getProducts();
			$(".modal-body .alert").show();
		}
	})
}

function openModal(id) {
	$(".form-control").each((i, e) => $(e).val(""));
	let modalTitle = "Add New Product";
	currProductId = null;
	$(".modal-body .alert").hide();
	$(".modal-footer .btn-danger").hide();

	if (id) {
		modalTitle = "Edit Product";
		const product = products.find(p => p.id == id);
		$("#title").val(product.title);
		$("#description").val(product.description);
		$("#img").val(product.img);
		$("#price").val(product.price);
		currProductId = product.id;
		$(".modal-footer .btn-danger").show();
	}

	$("#productModal .modal-title").text(modalTitle);
	$('#productModal').modal('show');
}

getProducts();
