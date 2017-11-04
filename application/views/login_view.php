<?php include 'header.php' ?>
<div class="Login">
	<div class="container-fluid">
		<div class="l-center2">
			<div class="login-card shadow col-sm-6 col-md-6 col-lg-3">
				<h1 class="accent pb-3">Welcome</h1>
				<hr class="pb-4">
				<form method=POST action="/login">
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Username" name="username">
					</div>
					<div class="form-group">
						<input type="password" class="form-control" placeholder="Password" name="password">
					</div>
					<a href="#">Forgot your password?</a>
					<button class="mt-3 btn btn-accent w-100">Login</button>
				</form>
			</div>
			<div class="text-center pt-5">
				<a href="#" class="evaluate-l">Here to evaluate?</a>
				<h5 class="pt-4 center-text"><a href="/evaluation" class="accent deco-none">Start Now 
					<hr class="border-0">
					<i class="material-icons accent">expand_more</i>
				</a>
				</h5>
			</div>
		</div>
	</div>
</div>
<?php include 'footer.php' ?>