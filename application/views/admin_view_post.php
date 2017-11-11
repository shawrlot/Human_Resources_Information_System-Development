<?php include 'header.php' ?>

<div class="fixed-top">
	<nav class="navbar navbar-expand-lg navbar-light bg-light border border-black pt-2 pb-2 pl-5">
	  <a class="navbar-brand open-sans pl-3 accent f-bold" href="#">
	  	<img src="<?php echo base_url()?>assets/img/brand_logo.png">
	    Human Resource Management System
	  </a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>
	  <div class="collapse navbar-collapse pr-5" id="navbarNavAltMarkup">
	    <div class="navbar-nav ml-auto">
	    	<a href="#" class="nav-item nav-link active">
	  			<i class="medium material-icons float-left text-lgray" style="font-size: 2rem;">notifications_none</i>
	  		</a>
	       <li class="nav-item dropdown  mr-1">
		      <a class="nav-item nav-link active dropdown-toggle" data-toggle="dropdown" href="#">
		      	<img class="responsive-img pr-1" src="<?php echo base_url()?>assets/img/dp.png">
		      </a>
		      <!-- dropdown items here -->
		      <div class="dropdown-menu dropdown-menu-right">
			      <a class="dropdown-item" href="/logout">Logout</a>
		   	  </div>
		      <!-- end of dropdown -->
	  		</li>
	    </div>
	  </div>
	</nav>

</div>

<div class="Home ml-3 mr-3 mt-3 mb-3">
<?php
		if ($view_post[0]['type_name']=='event'){?> 

				<div class=" mb-3 col-11 card pl-0 pr-0 mx-auto shadow-light c-raduis">
					<div class="card-body1 m-0">
						<div class="d-flex p5">
						  <div class="date-box border-top-0 border-left-0 border-bottom-0 border border-black">
						  	<div class="pt-5 pb-5">
						  		<h1 class="text-center accent display-4 "><?php echo date('d', strtotime($view_post[0]['post_when'])) ?></h1>
						  		<h5 class="mt-0"><small><?php echo date('l', strtotime($view_post[0]['post_when'])) ?></small></h5>
						  	</div>
						  </div>
						  <div class="mt-2 pt-3 pb-4 pl-4 pr-2 ml-2">
						  	<h3 class="p-0 m-0 f-bold"><?php echo highlight_phrase(word_limiter($view_post[0]['post_title'], 100), '<span style="font-weight:bold;">', '</span>');?></h3>
						  	<p class="card-text pt-1"><small class="text-muted"><?php echo $view_post[0]['account_username'];?> | Posted at <?php echo $view_post[0]['post_dateCreated'];?></small></p>
								  	<p><?php echo highlight_phrase(word_limiter($view_post[0]['post_body'], 100), '<span style="font-weight:bold;">', '</span>');?></p>
						<a href="javascript:history.back()" class ="btn mt-3 btn-success f-normal c-radius mr-4">Back</a>
						  </div>
						</div>
					</div>
				</div>



		<?php 
		}
		else{

		?>

		<div class="mb-3 col-11 card pl-0 pr-0 mx-auto shadow-light c-raduis pr-2">
		  <div class="card-body pt-5 p-4">
		    <h4 class=""><strong><?php echo highlight_phrase(word_limiter($view_post[0]['post_title'], 100), '<span style="font-weight:bold;">', '</span>');?></strong></h4>
		   <p class="card-text"><small class="text-muted"><em><?php echo $view_post[0]['account_username'];?> | Posted at <?php echo $view_post[0]['post_dateCreated'];?></em></small></p>

		    <p><?php echo highlight_phrase(word_limiter($view_post[0]['post_body'], 100), '<span style="font-weight:bold;">', '</span>');?></p>
		    <a href="javascript:history.back()" class ="btn mt-3 btn-success f-normal c-radius mr-4">Back</a>
		    
		  </div>
		</div>
	<?php }

	?>
</div>
<?php include 'footer.php' ?>

