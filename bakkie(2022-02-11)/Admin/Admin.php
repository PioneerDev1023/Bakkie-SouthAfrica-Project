<?php session_start(); ?>
<?php 
include('inc/header.php');
?>
<title>Admin Panel</title>
<link rel="shortcut icon" type="image/png" href="icon/icon.png"/>
<script src="js/jquery.dataTables.min.js"></script>
<script src="js/dataTables.bootstrap.min.js"></script>		
<link rel="stylesheet" href="css/dataTables.bootstrap.min.css" />
<link rel="stylesheet" href="css/style.css" />
<script src="js/ajax.js"></script>

<?php
/* ------------------------------------------------------- Logout module */
if(isset($_GET['logout']) && $_SESSION['username'] != ''){
    unset($_SESSION['username']);
    session_destroy();
    header("Location: index.php");
}
?>

<?php include('inc/container.php');?>

<div class="container contact">	
	<div class="col-lg-10 col-md-10 col-sm-9 col-xs-12">
		<div class="panel-heading">
			<div class="row panel-header">
				<div class="col-md-6">
					<h2 style="color:orange";>Admin Panel</h2>
					<h3 class="panel-title"></h3>
				</div>
				<div class="col-md-6 button-group">
					<button type="button" name="add" id="addRecord" class="btn btn-success sub-btns">Add New User</button>
					<button type="button" name="reload" id="reload_btn" class="btn btn-primary sub-btns" onClick="window.location.reload();">Reload</button>
					<a href="?logout" class="btn btn-danger btn-block" style="width: 70px;">Logout</a>
				</div>
			</div>
		</div>
		<table id="recordListing" class="table table-bordered table-striped">
			<thead>
				<tr>
					<th>#</th>
					<th>Name</th>					
					<th>Phone</th>					
					<th>Address</th>
					<th>State</th>
                    <th>Message</th>					
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
						<h4 class="modal-title"><i class="fa fa-plus"></i> Edit Message</h4>
    				</div>
    				<div class="modal-body">
						<div class="form-group"
							<label for="name" class="control-label">Name</label>
							<input type="text" class="form-control" id="name" name="name" placeholder="Name" required>			
						</div>
						<div class="form-group">
							<label for="phone" class="control-label">Phone</label>							
							<input type="number" class="form-control" id="phone" name="phone" placeholder="phone" required>							
						</div>	   	
						<div class="form-group">
							<label for="address" class="control-label">Address</label>					
							<input type="text" class="form-control"  id="address" name="address" placeholder="address" required>							
						</div>	 
						<div class="form-group">
							<label for="state" class="control-label">State</label>						
							<input type="text" class="form-control" id="state" name="state" placeholder="state">			
						</div>
                        <div class="form-group">
							<label for="message" class="control-label">Message</label>					
							<textarea class="form-control" rows="5" id="message" name="message"></textarea>							
						</div>						
    				</div>
    				<div class="modal-footer">
    					<input type="hidden" name="id" id="id" />
    					<input type="hidden" name="action" id="action" value="" />
    					<input type="submit" name="save" id="save" class="btn btn-info" value="Send" />
    					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    				</div>
    			</div>
    		</form>
    	</div>
    </div>
</div>

<?php include('inc/footer.php');?>