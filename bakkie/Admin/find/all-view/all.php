<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<title>Hire-My-Bakkie</title>
	<link rel="shortcut icon" href="./../../../images/logo.png" type="image/x-icon">
	<!-- <script src="./../../js/jquery.dataTables.min.js"></script> -->
	<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
	<script src="./../../js/dataTables.bootstrap.min.js"></script>		
	<link rel="stylesheet" href="./../../css/dataTables.bootstrap.css" />
	<script src="ajax.js"></script>	

	<?php
    /* ------------------------------------------------------- Logout module */
    if(isset($_GET['logout']) && $_SESSION['username'] != ''){
        unset($_SESSION['username']);
        session_destroy();
        header("Location: ./../../index.php");
    }
    ?>
</head>
<body>
	<div class="contact">	
		<!-- <div style="display: flex; justify-content: end;">
			<a href="./../admin.php"><button class="btn btn-success" style="margin-right: 10px;">To RU page</button></a>
			<a href="?logout" class="btn btn-danger btn-block" style="width: 70px;">Logout</a>    
		</div>	 -->
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">   		
			<div class="panel-heading">
				<div class="row">
					<div class="col-md-10">
						<h3 class="panel-title"></h3>
					</div>
				</div>
			</div>
			<table id="recordListing" class="table table-bordered table-striped">
				<thead>
					<tr>
						<th>#</th>
						<th>Nickname</th>
						<th>Name</th>					
						<th>Surname</th>					
						<th>Email</th>
						<th>Cellnumber</th>
						<th>Reg Date</th>
						<th>Daily rate</th>
						<th>Free kms</th>
						<th>Ad hoc</th>					
						<th></th>					
					</tr>
				</thead>
			</table>
		</div>
	</div>	
	<div class="insert-post-ads1" style="margin-top:20px;">
	</div>
</body>
</html>
