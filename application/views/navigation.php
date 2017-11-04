<?php 

$home = null;
$application = null;
$employee = null;
$evaluation = null;
$message = null;


switch ($active) {
	case 'home':
		$home = '-active accent ';
		break;
		case 'employee':
		$employee = '-active accent';
		break;
		case 'evaluation':
		$evaluation = '-active accent';
		break;
		case 'message':
		$message = '-active accent';
		break;

	
	default:
		# code...
		break;
}


 ?>
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
<ul class="nav navbar-menu shadow-light -twitter pt-2 pb-0 pl-5 m-0">

  <li class="item <?php echo $home?>"><a class="link no-deco" href="/">Home</a></li>
  <li class="item <?php echo $employee?>"><a class="link no-deco" href='/employee'>Employee</a></li>
  <li class="item <?php echo $evaluation?>"><a class="link no-deco" href="/evaluation">Evaluation</a></li>
  <li class="item <?php echo $message?>"><a class="link no-deco">Message</a></li>

</ul>
</div>
