<?php include 'header.php' ?>
<div class="Evaluate">
	<div class="container-fluid">
		<div class="l-center">
			<div class="evaluate-card shadow col-sm-4 col-md-6 col-lg-3">
				<form action="/evaluation-begin" method=POST>
						<div class="text-center">
							<img class="img-fluid" src="<?php echo base_url()?>assets/img/picture.png">
							<h3 class="pt-2 accent"><?php echo $evaluation['employee_lastName'].", ". $evaluation['employee_firstName'] ?></h3>
							<h5 class="text-gray"><?php echo $evaluation['department_name'] ?></h5>
						</div>
						<hr class="mb-0 pt-1 pb-2 pr-auto w-75">
						<h6 class="pl-5 text-gray"><?php echo $evaluation['subject_code']." | ".$evaluation['load_dayCode']." ".date('g:i A',strtotime($evaluation['load_timeStart']))."-".date('g:i A',strtotime($evaluation['load_timeEnd'])) ?></h6>
						<a href="#" class="pl-5 m-0 accent deco-none">Having a problem?</a>
						<div class="text-center">
							<button class="mt-3 btn btn-accent  w-75" type="submit">Evaluate now</button>
						</div>
						<input type="hidden" name="pin" value="<?php echo $evaluation['pin_id'] ?>">
					</form>
			</div>
		</div>
	</div>
</div>




<?php include 'footer.php' ?>