<?php
if (isset($_POST['submit'])) {

	$Username = $_POST['Username'];
	$password = $_POST['password'];
}
?>

<!DOCTYPE html>
<html lang="">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Online Ticket Reservation</title>

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap-theme.min.css">
	<script>
		let passwordMatch = true
	</script>
</head>

<body>

	<nav class="navbar navbar-inverse" style="height: 90px; border-bottom: 6px solid orangered;">
		<div class="container-fluid">
			<a class="navbar-brand" href="#" style="font-size: 30px;"><br><b style="color: orangered;">INEN</b> Online Ticketing</a>

			<ul class="nav navbar-nav">
				<li>
					<a href="#"></a>
				</li>
				<li>
					<a href="#"></a>
				</li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="../"><span class="glyphicon glyphicon-backward"></span> Return Home</a></li>
			</ul>
		</div>
	</nav>



	<div class="col-md-3"></div>
	<div class="col-md-6">
		<div class="panel panel-success">
			<div class="panel-heading">
				<h3 class="panel-title" style="font-size: 35px; margin-left:140px; color:orangered">Create Account Here</h3>
			</div>
			<div class="panel-body">
				<form class="form-horizontal" role="form" method="POST">
					<div class="form-group">
						<label class="control-label col-sm-2" for="un">Username:</label>
						<div class="col-sm-10">
							<input type="text" name="Username" class="form-control" id="un" placeholder="Enter Username" autofocus="" required="">
						</div>
					</div>

					<div class="form-group">
						<label class="control-label col-sm-2" for="pwd">Password:</label>
						<div class="col-sm-10">
							<input type="password" class="form-control" id="pwd" placeholder="Enter password" required="">
						</div>
					</div>

					<div class="form-group">
						<label class="control-label col-sm-2" for="cpwd">Confirm Password: </label>
						<div class="col-sm-10">
							<input type="password" class="form-control" id="cpwd" placeholder="Enter password" required="">
							<br>
							<span class="text-danger" id="match"></span>

						</div>
					</div>


					<div class="form-group">
						<div class="col-sm-offset-2 col-sm-10">
							<button type="submit" id="submit-btn" class="btn btn-default" name="submit">Sign Up
								<span class="glyphicon glyphicon-check" aria-hidden="true"></span>
							</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	<div class="col-md-3"></div>


	<?php require_once('modal/message.php'); ?>

	<script type="text/javascript" src="../assets/js/jquery-3.1.1.min.js"></script>
	<script type="text/javascript" src="../assets/js/bootstrap.min.js"></script>

	<script type="text/javascript">
		$(document).on('submit', '#form-login', function(event) {
			event.preventDefault();
			/* Act on the event */
			// console.log('test');
			var un = $('#un').val();
			var pwd = $('#pwd').val();

			$.ajax({
				url: '../data/login.php',
				type: 'post',
				dataType: 'json',
				data: {
					un: "admin",
					pwd: "admin"
				},
				success: function(data) {
					console.log(data);
					if (data.valid == true) {
						window.location = data.url;
					} else {
						$('#modal-message').find('#body-cont').text(data.msg);
						$('#modal-message').modal('show');
						$('#un').val("");
						$('#pwd').val("");
						$('#un').focus();
					}
				},
				error: function() {
					alert('Error: L99+');
				} //
			});
		});
		document.getElementById('cpwd').addEventListener('keyup', e => {
			const cPassword = e.currentTarget.value
			passwordMatch = cPassword === document.getElementById('pwd').value
			document.getElementById('submit-btn').disabled = !passwordMatch
			if (!passwordMatch) {
				document.getElementById('match').textContent = 'password doesn\'t match'
			} else {

				document.getElementById('match').textContent = ''
			}
		})
	</script>

</body>

</html>