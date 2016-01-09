<!DOCTYPE html>
<html>  
	<head>
		
		
		
		<?php include('config/docs.php');?>
		
	
		

	</head>
	<body>
		<?php include ('template/User/home_header.php'); ?>
		
	
		<section class="hero">
			<div class="container-fluid">
			<div class="row">
  				
				<div class="col-md-6">
  					<div class="inner2">
						<div class="embed-responsive embed-responsive-16by9">
							<iframe class="embed-responsive-item" src="Aruba_ 19 Miles of Happiness - 4K.mp4" width = "300px" height ="400px" autoplay ="false"> </iframe>
						</div>
					</div>
  				</div>
  				
				<div class="col-md-6 col-xs-12">
  					<div class="inner" width = "300px" height ="400px" ><br>
  						<?php echo 'The difference between school and life? In school, you’re taught a lesson and then given a test. In life, you’re given a test that teaches you a lessons.<br><div class = "pull-right>"<br> -<i>Tom Bodett</></ i><br>'; ?>
						<br>
						<br>
  						<a class="btn btn-large btn-success" data-toggle="modal" data-target="#register"><strong>Register </strong><br> Now</a>
					</div>
						 <?php include('template/Interfaces/registration.php');?>
				</div>
			</div>
			</div>
			
			<div class ="col-md-12">
				<?php include ('template/User/slidesnavigator.php');?>
			</div>
		</section>
		
		
		<?php include ('template/User/footer.php'); ?>
		
		<?php include('config/js.php');?>
		
	</body>
	

	
	
	
</html>