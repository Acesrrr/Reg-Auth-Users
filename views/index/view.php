<!DOCTYPE html>
<html lang="en">
	<?php include_once SITE_PATH."views/header/view.php";?>
	<body>
		<div class="container">
			<ul class="nav nav-tabs">
			  <li class="nav-item">
				<a id="index_rus" class="nav-link" href="#">Русский</a>
			  </li>
			  <li class="nav-item">
				<a id="index_eng" class="nav-link" href="#">English</a>
			  </li>
			</ul>
			<div id="body_rus" class="row col-12 col-sm-12 col-md-12 col-lg-9 col-xl-9">
				<?php ob_start();?>	
				<p align='center' class='profile_options'><a href='/controllers/exit.php' class='profile_links'><span class='glyphicon glyphicon-off' aria-hidden='true'></span>Выход</a></p>			
				<?php $profile_options = ob_get_clean();
					if ($auth_opt=='yes_auth'):?> 
					<div id="auth_exist_block">
						<p id="auth_user_info" align="center"><a class="auth_user_info_url" data-container="body" data-html="true" data-toggle="popover" data-placement="bottom" data-content="<?=$profile_options;?>"><h3 class="auth_user_text" align="center">Здравствуйте, <?=$auth_name;?>!</h3></a></p><br/>
						<img width="1000px" height="auto" src="<?=$auth_image;?>"/>
					</div>
				<?php else:?>
				<div class="col-6 col-sm-6 col-md-6 offset-lg-4 offset-xl-4 col-lg-4 col-xl-4" style="margin-top:25px;">
					<a href="/controllers/auth.php" style="cursor:pointer;"><h3>Авторизация</h3></a>
				</div>
				<div class="col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4" style="margin-top:25px;">
					<a href="/controllers/reg.php" style="cursor:pointer;"><h3>Регистрация</h3></a>
				</div>
				<?php endif;?>
			</div>
			
			<div id="body_eng" class="row col-12 col-sm-12 col-md-12 col-lg-9 col-xl-9">
				<?php ob_start();?>	
				<p align='center' class='profile_options'><a href='/controllers/exit.php' class='profile_links'><span class='glyphicon glyphicon-off' aria-hidden='true'></span>Exit</a></p>			
				<?php $profile_options = ob_get_clean();
					if ($auth_opt=='yes_auth'):?> 
					<div id="auth_exist_block">
						<p id="auth_user_info" align="center"><a class="auth_user_info_url" data-container="body" data-html="true" data-toggle="popover" data-placement="bottom" data-content="<?=$profile_options;?>"><h3 class="auth_user_text" align="center">Hello, <?=$auth_name;?>!</h3></a></p>
						<img width="1000px" height="auto" src="<?=$auth_image;?>"/>
					</div>
				<?php else:?>
				<div class="col-6 col-sm-6 col-md-6 offset-lg-4 offset-xl-4 col-lg-4 col-xl-4" style="margin-top:25px;">
					<a href="auth.php" style="cursor:pointer;"><h3>Authorization</h3></a>
				</div>
				<div class="col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4" style="margin-top:25px;">
					<a href="/controllers/reg.php" style="cursor:pointer;"><h3>Registration</h3></a>
				</div>
				<?php endif;?>
			</div>
		</div>
	</body>
</html>