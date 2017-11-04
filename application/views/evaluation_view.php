<?php include 'header.php' ?>s
<?php include'navigation.php' ?>
<div class="Home m3">
	<div class="Home ml-4 pt-4">
<div class="row pb-5">
		<div class="mt-3 pt-1 col-11 p-0 mx-auto">
			<table class="table table-hover shadow-light">
			  <thead>
			    <tr>
			      <th scope="col" class="text-mgray em-f border-0">Subject Code</th>
			      <th scope="col" class="text-mgray em-f border-0">Last Name</th>
			      <th scope="col" class="text-mgray em-f border-0">First Name</th>
			      <th scope="col" class="text-mgray em-f border-0">PIN</th>
			      <th scope="col" class="text-mgray em-f border-0 text-center">Date</th>
			    </tr>
			  </thead>
			  <tbody>
				<?php foreach ($sessions as $session): ?>
	  				 <tr>
				      <th scope="row" class="f-light em-f"><?php echo $session['subject_code'] ?></th>
				       <th scope="row" class="f-light em-f"><?php echo $session['employee_lastName'] ?></th>
				       <th scope="row" class="f-light em-f"><?php echo $session['employee_firstName'] ?></th>
				       <th scope="row" class="f-light em-f"><?php echo $session['pin_code'] ?></th>
				       <th scope="row" class="f-light em-f"><?php echo $session['session_dateCreated'] ?></th>
				    </tr>
				<?php endforeach ?>
			  </tbody>
			</table>
		</div>
	</div>

<?php include 'footer.php' ?>