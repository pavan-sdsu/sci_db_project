localStorage.removeItem("user");

$("form").submit((e) => {
	e.preventDefault();
	const formArr = $("form").serializeArray();
	let values = {};
	formArr.forEach(el => values[el.name] = el.value);

	$.ajax({
		url: "./server/login",
		contentType: "application/json",
		method: "POST",
		data: JSON.stringify(values),
		success: (response) => {
			if (response.success == 0) return alert("Invalid credentials");
			localStorage.setItem("user", JSON.stringify(response.data));
			window.location.href = "/index";
		}
	})
	
})