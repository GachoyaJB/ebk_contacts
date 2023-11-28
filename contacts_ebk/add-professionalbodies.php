<?php
session_start();
include('includes/config.php');
include('includes/checklogin.php');
check_login();
//code for adding National Govt Entities
if ($_POST['submit']) {
	$name = $_POST['n'];
	$designation = $_POST['d'];
	$entity_postaladdress = $_POST['epa'];
	$city = $_POST['c'];
	$emailaddress = $_POST['ea'];
	$telno = $_POST['t'];
	$website = $_POST['w'];
	$personal_no = $_POST['pn'];
	$sector = $_POST['s'];
	$contact_person = $_POST['cp'];

	$query = "insert into  nationalgovt (name,designation,entity_postaladdress,city,emailaddress,telno,website,personal_no,sector,contact_person) values(?,?,?)";
	$stmt = $mysqli->prepare($query);
	$rc = $stmt->bind_param('ssssssssss', $name, $designation, $entity_postaladdress, $city, $emailaddress, $telno, $website, $personal_no, $sector, $contact_person);
	$stmt->execute();
	echo "<script>alert('National Government Entity has been added successfully');</script>";
}

?>
<!doctype html>
<html lang="en" class="no-js">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="theme-color" content="#3e454c">
	<title>Add Organization</title>
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/dataTables.bootstrap.min.css">>
	<link rel="stylesheet" href="css/bootstrap-social.css">
	<link rel="stylesheet" href="css/bootstrap-select.css">
	<link rel="stylesheet" href="css/fileinput.min.css">
	<link rel="stylesheet" href="css/awesome-bootstrap-checkbox.css">
	<link rel="stylesheet" href="css/style.css">
	<script type="text/javascript" src="js/jquery-1.11.3-jquery.min.js"></script>
	<script type="text/javascript" src="js/validation.min.js"></script>
</head>

<body>
	<?php include('includes/header.php'); ?>
	<div class="ts-main-content">
		<?php include('includes/sidebar.php'); ?>
		<div class="content-wrapper">
			<div class="container-fluid">

				<div class="row">
					<div class="col-md-12">

						<h2 class="page-title">Add National Government Organization </h2>

						<div class="row">
							<div class="col-md-12">
								<div class="panel panel-default">
									<div class="panel-heading">Add National Government Organization</div>
									<div class="panel-body">
										<form method="post" class="form-horizontal">

											<div class="hr-dashed"></div>
											<div class="form-group">
												<label class="col-sm-2 control-label">NAME OF ORGANIZATION</label>
												<div class="col-sm-8">
													<input type="text" value="" name="n" id="n" class="form-control" required="required">
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-2 control-label">DESIGNATION</label>
												<div class="col-sm-8">
													<input type="text" class="form-control" name="d" id="d" value="" required="required">
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-2 control-label">POSTAL ADDRESS</label>
												<div class="col-sm-8">
													<input type="text" class="form-control" name="epa" id="epa" value="" required="required">
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-2 control-label">CITY</label>
												<div class="col-sm-8">
													<input type="text" value="" name="c" class="form-control" id="c" required="required">
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-2 control-label">EMAIL ADDRESS</label>
												<div class="col-sm-8">
													<input type="text" class="form-control" name="ea" id="ea" value="" required="required">

												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-2 control-label">TELEPHONE NUMBER</label>
												<div class="col-sm-8">
													<input type="text" class="form-control" name="t" id="t" value="" required="required">
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-2 control-label">WEBSITE</label>
												<div class="col-sm-8">
													<input type="text" value="" name="w" id="w" class="form-control" required="required">
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-2 control-label">PERSONAL NUMBER</label>
												<div class="col-sm-8">
													<input type="text" class="form-control" name="pn" id="pn" value="" required="required">

												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-2 control-label">SECTOR</label>
												<div class="col-sm-8">
													<input type="text" class="form-control" name="s" id="s" value="" required="required">
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-2 control-label">CONTACT PERSON</label>
												<div class="col-sm-8">
													<input type="text" class="form-control" name="cp" id="cp" value="" required="required">
												</div>
											</div>


											<div class="col-sm-8 col-sm-offset-2">

												<input class="btn btn-primary" type="submit" name="submit" value="Add Organization">
											</div>
									</div>

									</form>

								</div>
							</div>


						</div>




					</div>
				</div>

			</div>
		</div>


	</div>
	</div>
	</div>
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap-select.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.dataTables.min.js"></script>
	<script src="js/dataTables.bootstrap.min.js"></script>
	<script src="js/Chart.min.js"></script>
	<script src="js/fileinput.js"></script>
	<script src="js/chartData.js"></script>
	<script src="js/main.js"></script>

	</script>
</body>

</html>