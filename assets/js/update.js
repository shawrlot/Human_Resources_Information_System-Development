function update_employee(id){
	$.ajax({
		url: "employee/update_employee/"+id,
		type: "GET", 
		dataType: "JSON",
		success: function (data) {
			console.log(data);
			$('#updateModal').modal('show');
			$('[name="updateidnum"]').val(data.employee_id);
			$('[name="updatelname"]').val(data.employee_lastName);
			$('[name="updatefname"]').val(data.employee_firstName);
			$('[name="updatemname"]').val(data.employee_middleName);
			$('[name="updatebirthdate"]').val(data.employee_dob);
			$('[name="updateaddress"]').val(data.employee_address);
			$('[name="updateemail"]').val(data.employee_email);
			$('[name="updategender"]').val(data.employee_gender);
			$('[name="updatecivilstatus"]').val(data.employee_civilStatus);
			$('[name="updatereligion"]').val(data.employee_religion);
			$('[name="updateempstatus"]').val(data.employee_employmentStatus);
			$('[name="updatedept"]').val(data.employee_department);
			$('[name="updateempposition"]').val(data.employee_position);
			$('[name="updatesss"]').val(data.employee_sss);
			$('[name="updatetin"]').val(data.employee_tin);
		},
			error: function (jqXHR, textStatus, errorThrown) {
			alert('Error get data from ajax');
		}
	});
}

function update_event(id){
	$.ajax({
		url: "post/update_event/"+id,
		type: "GET", 
		dataType: "JSON",
		success: function (data) {
			console.log(data);
			$('#editemodal').modal('show');
			$('[name="eventid"]').val(data.post_id);
			$('[name="editetitle"]').val(data.post_title);
			$('[name="editedate"]').val(data.post_when);
			$('[name="editecontent"]').val(data.post_body);
		},
			error: function (jqXHR, textStatus, errorThrown) {
			alert('Error get data from ajax');
		}
	});
}

function update_announcement(id){
	$.ajax({
		url: "post/update_announcement/"+id,
		type: "GET", 
		dataType: "JSON",
		success: function (data) {
			console.log(data);
			$('#editamodal').modal('show');
			$('[name="announceid"]').val(data.post_id);
			$('[name="editatitle"]').val(data.post_title);
			$('[name="editacontent"]').val(data.post_body);
		},
			error: function (jqXHR, textStatus, errorThrown) {
			alert('Error get data from ajax');
		}
	});
}