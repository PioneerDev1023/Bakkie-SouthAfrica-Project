<!-- <?php 
include('inc/header.php');	
?> -->

<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

		<title>Find Bakkie</title>
		<script src="js/jquery.dataTables.min.js"></script>
		<script src="js/dataTables.bootstrap.min.js"></script>
		<link rel="stylesheet" href="css/dataTables.bootstrap.min.css" />
		<script>var seltown = "<?php echo $_GET['seltown']; ?>";</script>
		<script src="js/ajax.js"></script>

		<!-- <?php include('inc/container.php');?> -->
	</head>
	<body class="">
		<div role="navigation" class="navbar navbar-default navbar-static-top">
			<div class="container">
				<div class="navbar-header">
				<button data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle" type="button">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<!-- <a href="http://www.phpzag.com" class="navbar-brand">PHPZAG.COM</a> -->
				</div>
				<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav">
					<!-- <li class="active"><a href="http://www.phpzag.com">Home</a></li> -->
				
				</ul>
				
				</div><!--/.nav-collapse -->
			</div>
			</div>
			
			<div class="container" style="min-height:500px;">
		<div class="container contact">	
			<h2>Hire-my-Bakkie</h2>	
			<div class="col-lg-10 col-md-10 col-sm-9 col-xs-12">   		
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
						<!-- <tr>
							<th class="col-md-3 col-sm-12">Driver's Photo</th>
							<div class="col-md-6 col-sm-12">
								<th>Nickname</th>
								<th>Province</th>
								<th>City/Town</th>					
								<th>Daily Rate</th>
								<th>Free km's</th>
								<th>Ad Hoc Rate</th>
								<th>Whatsapp</th>
							</div>
							<th class="">Bakkie's Photo</th>					
						</tr> -->
						<tr>
							<th>#</th>
							<th>Nickname</th>					
							<th>Daily Rate</th>
							<th>Free km's</th>
							<th>Ad Hoc Rate</th>
							<th>Reg-Date</th>					
							<th>Detail</th>
							<th>Contact</th>					
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
								<h4 class="modal-title"><i class="fa fa-plus"></i>Detail Infos</h4>
							</div>
							<div class="modal-body">
								<div class="form-group"
									<label for="name" class="control-label">Nickname</label>
									<input type="text" class="form-control" id="nickname" name="nickname" placeholder="Name" required>			
								</div>
								<div class="form-group">
									<label for="ad hoc rate" class="control-label">Ad hoc rate</label>							
									<input type="number" class="form-control" id="hoc_rate" name="hoc_rate" placeholder="Ad hoc rate">							
								</div>	   	
								<div class="form-group">
									<label for="Free km's" class="control-label">Free km's</label>							
									<input type="number" class="form-control"  id="free_km" name="free_km" placeholder="free_km" required>							
								</div>	 
								<div class="form-group">
									<label for="daily rate" class="control-label">Daily rate</label>
									
									<input type="number" class="form-control"  id="daily_rate" name="daily_rate" placeholder="Daily_rate" required>			
								</div>
								<div class="form-group">
									<label for="photo" class="control-label">Reg-Date</label>							
									<input type="text" class="form-control" id="rdate" name="rdate" placeholder="Registration Date">			
								</div>						
							</div>
							<div class="modal-footer">
								<input type="hidden" name="id" id="id" />
								<input type="hidden" name="action" id="action" value="" />
								<!-- <input type="submit" name="save" id="save" class="btn btn-info" value="Save" /> -->
								<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>

		<!-- <?php include('inc/footer.php');?> -->
		<div class="insert-post-ads1" style="margin-top:20px;">
		</div>
		</div>
	</body>
</html>

