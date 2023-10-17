<?php

if (session_status() == PHP_SESSION_NONE) {
	session_start(); //start session if session not start
}

if (isset($_SESSION['departure_date'])) {
?>


	<?php include('/stadium/partials/header.php'); ?>

	<body style="background: url('images/night-ground.jpg') center center no-repeat;background-size:cover; background-attachment: fixed;">

		<nav class="navbar navbar-inverse" style="height: 90px; border-bottom: 6px solid orangered;">
			<div class="container-fluid">
				<div class="navbar-header">
					<a class="navbar-brand" href="#" style="font-size: 30px;"><br><b style="color: orangered;">INEN</b> Online Ticketing</a>
				</div>
				<ul class="nav navbar-nav" style="padding-top:15px;">
					<li class="active">
						<a href="#">Rerservation
							<span class="glyphicon glyphicon-share-alt" aria-hidden="true"></span>
						</a>
					</li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="index.php"><span class="glyphicon glyphicon-backward"></span> Back To Home</a></li>
				</ul>
			</div>
		</nav>


		<div class="container-fluid">
			<div class="col-md-1"></div>
			<div class="col-md-10">
				<div class="panel panel-danger">
					<div class="panel-heading">
						<h3 class="panel-title">STEPS FOR BOOKING</h3>
					</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-md-3">
								<div class="panel panel-default">
									<div class="panel-heading">
										<h3 class="panel-title">1. MATCH
										</h3>
									</div>
									<div class="panel-body">
										SCHEDULE OF MATCHES
									</div>
								</div>
							</div>
							<div class="col-md-3">
								<div class="panel panel-info">
									<div class="panel-heading">
										<h3 class="panel-title">2. SEAT SELECTION
											<span class="glyphicon glyphicon-saved" aria-hidden="true"></span>
										</h3>
									</div>
									<div class="panel-body">
										SEAT TYPE
									</div>
								</div>
							</div>
							<div class="col-md-3">
								<div class="panel panel-success">
									<div class="panel-heading">
										<h3 class="panel-title">3. VISITOR INFO</h3>
									</div>
									<div class="panel-body">
										VISITORS DETAILS
									</div>
								</div>
							</div>
							<div class="col-md-3">
								<div class="panel panel-warning">
									<div class="panel-heading">
										<h3 class="panel-title">4. PAYMENT INFO</h3>
									</div>
									<div class="panel-body">
										TOTAL PAYMENT
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-1"></div>
		</div>

		<div class="container-fluid">
			<div class="col-md-3"></div>
			<div class="col-md-6">
				<div class="panel panel-default">
					<div class="panel-body">
						<h2>
							<center>SEAT SELECTION</center>
						</h2>
						<div class="container-fluid">
							<form class="form-horizontal" role="form" id="form-acc">
								<table id="myTable-party" class="table table-bordered table-hover" cellspacing="0" width="100%">
									<thead>
										<tr>
											<th> <span class="glyphicon glyphicon-record" aria-hidden="true"></span>
												Seat types
											</th>
											<th>
												<center>
													Slots
												</center>
											</th>
											<th>
												<center>
													Price
												</center>
											</th>
										</tr>
									</thead>
									<tbody>
										<?php require_once('data/get_all_accomodations.php'); ?>
										<tr>
											<td>
												<input value="<?= $getSit['acc_id']; ?>" type="radio" name="acc">
												<?= $getSit['acc_type']; ?>
											</td>
											<td align="center">
												<?= $getSit['acc_slot'] - $totalSit['sit']; ?>
											</td>
											<td align="center"><?= $getSit['acc_price']; ?></td>
										</tr>
										<tr>
											<td>
												<input value="<?= $getEcoA['acc_id']; ?>" type="radio" name="acc">
												<?= $getEcoA['acc_type']; ?>
											</td>
											<td align="center">
												<?= $getEcoA['acc_slot'] - $totalEcoA['ecoA']; ?>
											</td>
											<td align="center"><?= $getEcoA['acc_price']; ?></td>
										</tr>
										<tr>
											<td>
												<input value="<?= $getEcoB['acc_id']; ?>" type="radio" name="acc">
												<?= $getEcoB['acc_type']; ?>
											</td>
											<td align="center">
												<?= $getEcoB['acc_slot'] - $totalEcoB['ecoB']; ?>
											</td>
											<td align="center"><?= $getEcoB['acc_price']; ?></td>
										</tr>
										<tr>
											<td>
												<input value="<?= $getTour['acc_id']; ?>" type="radio" name="acc">
												<?= $getTour['acc_type']; ?>
											</td>
											<td align="center">
												<?= $getTour['acc_slot'] - $totalTour['ecoT']; ?>
											</td>
											<td align="center"><?= $getTour['acc_price']; ?></td>
										</tr>
										<tr>
											<td>
												<input value="<?= $getCab['acc_id']; ?>" type="radio" name="acc">
												<?= $getCab['acc_type']; ?>
											</td>
											<td align="center">
												<?= $getCab['acc_slot'] - $totalCab['ecoC']; ?>
											</td>
											<td align="center"><?= $getCab['acc_price']; ?></td>
										</tr>
										<tr>
											<td>
												<input value="<?= $getDel['acc_id']; ?>" type="radio" name="acc">
												<?= $getDel['acc_type']; ?>
											</td>
											<td align="center">
												<?= $getDel['acc_slot'] - $totalDel['ecoD']; ?>
											</td>
											<td align="center"><?= $getDel['acc_price']; ?></td>
										</tr>
									</tbody>
								</table>
								<div class="form-group">
									<label for="">Total # of Visitor's:</label>
									<input type="number" min="1" class="form-control" name="totalPass" plactreholder="Total # of Passenger" autocomplete="off">
								</div>
								<button type="submit" class="btn btn-success">NEXT
									<span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span>
								</button>
							</form>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-3"></div>
		</div>

		<script type="text/javascript" src="assets/js/jquery-3.1.1.min.js"></script>
		<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>


		<script type="text/javascript">
			$(document).on('submit', '#form-acc', function(event) {
				event.preventDefault();
				/* Act on the event */
				var acc = $('input[name="acc"]:checked').val();
				var totalPass = $('input[name="totalPass"]').val();

				if (acc == null) {
					alert('Please Select Accomodation!');
				} else {
					// console.log(acc);
					if (totalPass.length == 0) {
						alert('Please Enter Number of Passenger!');
					} else {
						$.ajax({
							url: 'data/session_accomodation.php',
							type: 'post',
							dataType: 'json',
							data: {
								acc: acc,
								tp: totalPass
							},
							success: function(data) {
								console.log(data.slot);
								// 	window.location = "passenger.php";
								if (data.slot >= 0) {
									window.location = "passenger.php";
								} else {
									alert('Not Enough Slot!');
								}
							},
							error: function() {
								alert('Error: L175+');
							}
						});
					} //end totalPass
				} //end acc == null
			});
		</script>

	</body>

	</html>


<?php
} else {
	echo '<strong>';
	echo 'Page Not Exist';
	echo '</strong>';
} //end if else isset

?>