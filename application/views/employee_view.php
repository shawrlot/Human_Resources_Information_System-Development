<?php include 'header.php' ?>
<?php include'navigation.php' ?>

<div class="Home m3">
	<div class="Home ml-4 pt-4">
		<select class="e-dropdown form-control ml-4 mt-3 shadow-light text-center f-bold">
		  <option class="text-center" seleted disabled>No filter</option>
		  <?php foreach ($filters as $filter) {?>
		 	 <option class="text-center"><a href=""><?php echo $filter['department_name'] ?></a></option>
		 <?php
		  } ?>
		</select>
	</div>
	<div class="row pb-5">
		<div class="col-11 mt-4 p-4 mx-auto card shadow-light">
			<h4 class="m-0 p-0 f-bold">Analytics</h4>
			<hr class="border">
			<h1 class="text-center pb-4">Coming Soon</h1>
		</div>
		<div class="mt-3 pt-1 col-11 p-0 mx-auto">
			<table class="table table-hover shadow-light">
			  <thead>
			    <tr>
			      <th scope="col" class="text-mgray em-f border-0">ID No.</th>
			      <th scope="col" class="text-mgray em-f border-0">Last Name</th>
			      <th scope="col" class="text-mgray em-f border-0">First Name</th>
			      <th scope="col" class="text-mgray em-f border-0">Department</th>
			      <th scope="col" class="text-mgray em-f border-0 text-center">Status</th>
			    </tr>
			  </thead>
			  <tbody>

			  	<?php foreach ($employees as $employee) {?>
			    <tr>
			      <th scope="row" class="f-light em-f"><?php echo $employee['employee_id'] ?></th>
			      <td class="f-light text-mgray em-f"><?php echo $employee['employee_lastName'] ?></td>
			      <td class="f-light text-mgray em-f"><?php echo $employee['employee_firstName'] ?></td>
			      <td class="f-light text-mgray em-f"><?php echo $employee['department_name'] ?></td>
			      <td class="f-light text-mgray em-f text-center"><?php echo $employee['status_name'] ?></td>
			    </tr>
			  <?php } ?>

			  </tbody>
			</table>
		</div>
	</div>
</div>
<form method="post" action="<?php echo base_url('employee/insert_employee')?>">
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title" id="exampleModalLabel">Add Employee</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      <div class="modal-body">
		        
  					<div class="form-group">
  					  <label for="inputsm">ID No.</label>
  					  <input class="form-control input-sm" id="inputsm" type="text" name="idnum">
 					 </div>
 				
  					<div class="form-group">
  					  <label for="inputsm">Last Name</label>
  					  <input class="form-control input-sm" id="inputsm" type="text" name="lname" placeholder="Last Name">
 					 </div>
 				
  					<div class="form-group">
  					  <label for="inputsm">First Name</label>
  					  <input class="form-control input-sm" id="inputsm" type="text" name="fname" placeholder="Last Name">
 					 </div>
 				

  					<div class="form-group">
  					  <label for="inputsm">Middle Name</label>
  					  <input class="form-control input-sm" id="inputsm" type="text" name="mname" placeholder="Middle Name">
 					 </div>

					<div class="form-group">
  					  <label for="inputsm">Date of Birth</label>
  					  <input class="form-control input-sm" id="inputsm" type="date" name="birthdate" placeholder="Birth Date">
 					 </div>

  					<div class="form-group">
  					  <label for="inputsm">Address</label>
  					  <input class="form-control input-sm" id="inputsm" type="text" name="address" placeholder="Home Address">
 					 </div>

 					<div class="form-group">
  					  <label for="inputsm">Email</label>
  					  <input class="form-control input-sm" id="inputsm" type="text" name="email" placeholder="Email">
 					 </div>

				<label for="inputsm">Gender</label>
 					<select class="e-dropdown form-control shadow-light text-center f-bold" name="gender">
		  				<option class="text-center" seleted disabled>
		  				</option>
					  <?php foreach ($genders as $gender) {?>
		 	 			<option value="<?php echo $gender['gender_id'] ?>"> 
		 	 				<?php echo $gender['gender_name'] ?> 
		 	 			</option>
		 				<?php } ?>
					</select> 					

				<label for="inputsm">Civil Status</label>
 					<select class="e-dropdown form-control shadow-light text-center f-bold" name="civilstatus">
		  				<option class="text-center" seleted disabled>
		  				</option>
					  <?php foreach ($cstatus as $civil) {?>
		 	 			<option value="<?php echo $civil['civilStatus_id'] ?>"> 
		 	 				<?php echo $civil['civilStatus_name'] ?> 
		 	 			</option>
		 				<?php } ?>
					</select>

				<label for="inputsm">Religion</label>
 					<select class="e-dropdown form-control shadow-light text-center f-bold" name="religion">
		  				<option class="text-center" seleted disabled>
		  				</option>
					  <?php foreach ($religion as $rel) {?>
		 	 			<option value="<?php echo $rel['religion_id'] ?>"> 
		 	 				<?php echo $rel['religion_name'] ?> 
		 	 			</option>
		 				<?php } ?>
					</select>		

				<label for="inputsm">Employment Status</label>
 					<select class="e-dropdown form-control shadow-light text-center f-bold" name="empstatus">
		  				<option class="text-center" seleted disabled>
		  				</option>
					  <?php foreach ($empstatus as $employment) {?>
		 	 			<option value="<?php echo $employment['employmentStatus_id'] ?>"> 
		 	 				<?php echo $employment['employmentStatus_name'] ?> 
		 	 			</option>
		 				<?php } ?>
					</select> 

				<label for="inputsm">Department</label>
 					<select class="e-dropdown form-control shadow-light text-center f-bold" name="dept">
		  				<option class="text-center" seleted disabled>No filter
		  				</option>
					  	<?php foreach ($filters as $filter) {?>
		 	 			<option value="<?php echo $filter['department_id'] ?>"> 
		 	 				<?php echo $filter['department_name'] ?> 
		 	 			</option>
		 				<?php } ?>
					</select>


				<label for="inputsm">Employee Position</label>
 					<select class="e-dropdown form-control shadow-light text-center f-bold" name="empposition">
		  				<option class="text-center" seleted disabled>
		  				</option>
					  <?php foreach ($empposition as $position) {?>
		 	 			<option value="<?php echo $position['position_id'] ?>"> 
		 	 				<?php echo $position['position_name'] ?> 
		 	 			</option>
		 				<?php } ?>
					</select>

		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		        <button type="submit" class="btn btn-primary">Save changes</button>
		      </div>
		    </div>
		  </div>
		</div>
	</form>
    <footer class="footer fixed-bottom pb-4 pr-3">
      <button type="button" class="btn btn-primary floating-btn float-right" data-toggle="modal" data-target="#exampleModal"><i class="material-icons white-text mx-auto pt-1">add</i></button>
    </footer>
<?php include 'footer.php' ?>