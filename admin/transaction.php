<?php
require_once('session_login.php');
?>

<?php include('../partials/header.php'); ?>

<?php include('../partials/nav.php'); ?>
<br />
<div class="container-fluid">
	<div class="col-md-1"></div>
	<div class="col-md-10">
		<div id="trans-table"></div>
	</div>
	<div class="col-md-1"></div>
</div>


<?php require_once('modal/view_passenger.php'); ?>
<?php require_once('modal/message.php'); ?>
<?php require_once('modal/confirmation.php'); ?>

<script type="text/javascript" src="../assets/js/jquery-3.1.1.min.js"></script>
<script type="text/javascript" src="../assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="../assets/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="../assets/js/dataTables.bootstrap.min.js"></script>

<script type="text/javascript">
	function showAllTransaction() {
		$.ajax({
			url: '../data/get_all_transaction.php',
			type: 'post',
			// data: {},
			success: function(data) {
				$('#trans-table').html(data);
			},
			error: function() {
				alert('Error: L70+');
			}
		});
	} //end transaction
	showAllTransaction();

	//20
</script>

</body>

</html>