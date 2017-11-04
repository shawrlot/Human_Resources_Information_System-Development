<?php include 'header.php' ?>


<div class="BeStart">
	<div class="container-fluid">
		<div class="l-center2">
			<div class="sbefore-card shadow col-sm-4 col-md-6 col-lg-3">
				<h3 class="accent pb-2 ">Before we start</h3>
				<hr class="pb-2 border-dark">
				<form method=POST action="/start">
					<div class="form-group">
						<input type="text" name="pin" required maxlength="6" class="form-control" placeholder="Enter your pin">
					</div>
					<a href="#">Don't have a pin?</a>
					<button class="mt-3 btn btn-accent w-100">Verify PIN</button>
				</form>
			</div>
			<div class="text-center pt-5">
				<a href="#" class="evaluate-l text-white">Here to login? </a>
				<h5 class="pt-4 ml-3"><a href="/" class="evaluate-l text-white">Go to login<i class="material-icons align-middle">keyboard_arrow_right</i> </a></h5>
			</div>
		</div>
	</div>
</div>







<?php include 'footer.php' ?>