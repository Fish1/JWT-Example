function login() {

}

function main() {
	$("#login_button").click(function() {
		var loginInfo = new FormData();
		loginInfo.append("password", $("#password").val());
		loginInfo.append("username", $("#username").val());
		console.log($("#password").val());
		console.log($("#username").val());
		$.ajax({
			url: "/login.php",
			type: "POST",
			data: loginInfo,
			processData: false,
			contentType: false,
			success: function(data) {
				var jsonData = JSON.parse(data);
				console.log(jsonData);
			},
			error: function(e) {
				console.log("error");
			}
		});
	});

	$("#verify_button").click(function() {
		$.ajax({
			url: "/verify.php",
			type: "POST",
			success: function(data) {
				console.log(data);
			},
			error: function(e) {
				console.log(e);
			}
		});
	});
}

main();
