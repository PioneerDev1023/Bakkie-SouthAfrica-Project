<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<title>EU view</title>
	<link rel="shortcut icon" href="./../images/logo.png" type="image/x-icon">
	<script src="js/jquery.dataTables.min.js"></script>
	<script src="js/dataTables.bootstrap.min.js"></script>		
	<link rel="stylesheet" href="css/dataTables.bootstrap.min.css" />
	<script src="js/ajax.js"></script>	

	<?php
    /* ------------------------------------------------------- Logout module */
    if(isset($_GET['logout']) && $_SESSION['username'] != ''){
        unset($_SESSION['username']);
        session_destroy();
        header("Location: ./../index.php");
    }
    ?>
</head>
<body>
	<div class="container contact">	
		<h2>EU view</h2>
		<div style="display: flex; justify-content: end;">
			<!-- <button class="btn btn-primary" style="margin-right: 10px;" onClick="window.location.reload();">Reload</button> -->
			<a href="./find/index.php"><button class="btn btn-success" style="margin-right: 10px;">To RU page</button></a>
			<a href="?logout" class="btn btn-danger btn-block" style="width: 70px;">Logout</a>    
		</div>	
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">   		
			<div class="panel-heading">
				<div class="row">
					<div class="col-md-10">
						<h3 class="panel-title"></h3>
					</div>
					<!-- <div class="col-md-2" align="right">
						<button type="button" name="add" id="addRecord" class="btn btn-success">Add New Record</button>
					</div> -->
				</div>
			</div>
			<table id="recordListing" class="table table-bordered table-striped">
				<thead>
					<tr>
						<th>#</th>
						<th>Name</th>					
						<th>Surname</th>					
						<th>Email</th>
						<th>Cellnumber</th>
						<th>Reg Date</th>					
						<th></th>
						<th></th>					
					</tr>
				</thead>
			</table>
		</div>
		<div id="recordModal" class="modal fade">
			<div class="modal-dialog">
				<form method="post" id="recordForm">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal">&times;</button>
							<h4 class="modal-title"><i class="fa fa-plus"></i> Edit Record</h4>
						</div>
						<div class="modal-body">
							<div class="form-group"
								<label for="name" class="control-label">Name</label>
								<input type="text" class="form-control" id="name" name="name" placeholder="Name" required>			
							</div>
							<div class="form-group">
								<label for="surname" class="control-label">Surname</label>							
								<input type="text" class="form-control" id="surname" name="surname" placeholder="Surname">							
							</div>	   	
							<div class="form-group">
								<label for="lastname" class="control-label">Email</label>							
								<input type="email" class="form-control"  id="email" name="email" placeholder="Email" required>							
							</div>	 
							<div class="form-group">
								<label for="cell_number" class="control-label">Cell Number</label>		<input type="number" class="form-control" id="cell_number" name="cell_number" placeholder="Cell Number">					
							</div>
							<div class="form-group">
								<label for="regdate" class="control-label">Reg Date</label>							
								<input type="text" class="form-control" id="regdate" name="regdate" placeholder="Reg Date">			
							</div>						
						</div>
						<div class="modal-footer">
							<input type="hidden" name="id" id="id" />
							<input type="hidden" name="action" id="action" value="" />
							<input type="submit" name="save" id="save" class="btn btn-info" value="Save" />
							<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>	
	<div class="insert-post-ads1" style="margin-top:20px;">
	</div>
</body>
</html>
