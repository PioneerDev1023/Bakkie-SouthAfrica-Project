$(document).ready(function(){	
	
	var dataRecords = $('#recordListing').DataTable({
		"lengthChange": false,
		"processing":true,
		"serverSide":true,
		'processing': true,
		'serverSide': true,
		'serverMethod': 'post',		
		"order":[],
		"ajax":{
			url:"ajax_action.php",
			type:"POST",
			data:{action:'listRecords'},
			dataType:"json"
		},
		"columnDefs":[
			{
				"targets":[0, 6, 7],
				"orderable":false,
			},
		],
		"pageLength": 10
	});	
	
	
	// $("#recordModal").on('submit','#recordForm', function(event){
	// 	event.preventDefault();
	// 	$('#save').attr('disabled','disabled');
	// 	var formData = $(this).serialize();
	// 	$.ajax({
	// 		url:"ajax_action.php",
	// 		method:"POST",
	// 		data:formData,
	// 		success:function(data){				
	// 			$('#recordForm')[0].reset();
	// 			$('#recordModal').modal('hide');				
	// 			$('#save').attr('disabled', false);
	// 			dataRecords.ajax.reload();
	// 		}
	// 	})
	// });		
	$("#recordListing").on('click', '.delete', function(){
		var id = $(this).attr("id");		
		var action = "deleteRecord";
		if(confirm("Are you sure you want to delete this record?")) {
			$.ajax({
				url:"ajax_action.php",
				method:"POST",
				data:{id:id, action:action},
				success:function(data) {					
					dataRecords.ajax.reload();
				}
			})
		} else {
			return false;
		}
	});	
});