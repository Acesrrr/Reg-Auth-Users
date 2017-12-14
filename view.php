<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		
		<title><?=SITE_NAME;?></title>
		<!----стили, jquery и ajax----->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
		<script type="text/javascript">
			$(document).ready(function ()

			{
				//Установление направления отображения popover
				$('[data-toggle="popover"]').popover({
					placement : 'bottom'
				});
	  
			});
		</script>
		<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
		<script type="text/javascript" src="js/reg.js"></script>
	</head>
	<body>
		<div class="container">
			<ul class="nav nav-tabs">
			  <li class="nav-item">
				<a class="nav-link" href="view_rus.php">Русский</a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link active" href="view_eng.php">English</a>
			  </li>
			</ul>
					<!----форма регистрации----->
			<div class="row col-12 col-sm-12 col-md-12 col-lg-9 col-xl-9">
				<?php ob_start();?>	
				<p align='center' class='profile_options'><a href='exit' class='profile_links'><span class='glyphicon glyphicon-off' aria-hidden='true'></span>Exit</a></p>			
				<?php $profile_options = ob_get_clean();
					if ($auth_opt=='yes_auth'):?> 
					<div id="auth_exist_block">
						<p id="auth_user_info" align="center"><a class="auth_user_info_url" data-container="body" data-html="true" data-toggle="popover" data-placement="bottom" data-content="<?=$profile_options;?>"><span class="glyphicons glyphicons-user" aria-hidden="true"></span> Hello, <?=$auth_name;?>!</a></p>
					</div>
				<?php else:?>
				<div class="col-6 col-sm-6 col-md-6 offset-lg-4 offset-xl-4 col-lg-4 col-xl-4" style="margin-top:25px;">
					<a href="auth.php" style="cursor:pointer;"><h3>Authorization</h3></a>
				</div>
				<div class="col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4" style="margin-top:25px;">
					<a href="reg.php" style="cursor:pointer;"><h3>Registration</h3></a>
				</div>
				<?php endif;?>
			</div>
		</div>
	</body>
</html>