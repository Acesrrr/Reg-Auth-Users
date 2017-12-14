<!DOCTYPE html>
<html lang="en">
	<?php include_once SITE_PATH."views/header/view.php";?>
	<body>
		<div class="container">
			<ul class="nav nav-tabs">
			  <li class="nav-item">
				<a class="nav-link" id="auth_view_rus" href="#">Русский</a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link" id="auth_view_eng" href="#">English</a>
			  </li>
			</ul>
					<!----форма регистрации----->
			<div id="auth_rus" class="col-12 col-sm-12 col-md-12 col-lg-9 col-xl-9">
				<h2 align="center">Авторизация</h2>	
					<p align="center" id="auth_message_rus"></p>
					<form method="post" id="auth_form_rus" action="/ajax/handler_auth.php">
					<p class="col-12 col-sm-12 col-md-12 col-lg-12" align="center" id="auth_return_rus"><a href="index.php">Вернуться на главную</a></p>
						<div id="block_auth_rus">
							<ul style="list-style-type:none;" id="form_auth_rus">
								<li>
									<div class="form-group row">
										<label for="auth_email" class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 col-form-label">Email</label>
										<div class="col-12 col-sm-12 col-md-8 col-lg-6 col-xl-6">
											<input type="text" class="form-control" name="auth_email" id="auth_email" placeholder="Email">
											<small class="form-text text-muted">
												Пожалуйста, введите свой email.
											</small> 
										</div>
									</div>
								</li>
								
									<div class="form-group row">
										<label for="auth_password" class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 col-form-label">Пароль</label>
										<div class="col-12 col-sm-12 col-md-8 col-lg-6 col-xl-6">
											<input type="text" class="form-control" name="auth_password" id="auth_password" placeholder="Пароль">
											<small class="form-text text-muted">
												Пожалуйста, введите свой пароль.
											</small>
										</div>
									</div>
								</li>
							</ul>
						</div><br/>
						<p name="auth_submit_rus" id="auth_submit_rus" align="center"><button class="btn btn-outline-info btn-lg" type="submit">Вход</button></p>
					</form>
			</div>		
			<div id="auth_eng" class="col-12 col-sm-12 col-md-12 col-lg-9 col-xl-9">
					<h2 align="center">Authorization</h2>
					<p align="center" id="auth_message_eng"></p>
					<form method="post" id="auth_form_eng" action="/ajax/handler_auth.php">
						<p class="col-12 col-sm-12 col-md-12 col-lg-12" align="center" id="auth_return_eng"><a href="index.php">Back home</a></p>
						<div id="block_auth_eng">
							<ul style="list-style-type:none;" class="form_auth_eng">
								<li>
									<div class="form-group row">
										<label for="auth_email" class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 col-form-label">Email</label>
										<div class="col-12 col-sm-12 col-md-8 col-lg-6 col-xl-6">
											<input type="text" class="form-control" name="auth_email" id="user_email" placeholder="Email">
											<small class="form-text text-muted">
											  Please, enter your email.
											</small>
										</div>
									</div>
									
								</li>
								<li>
									<div class="form-group row">
										<label for="auth_password" class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 col-form-label">Password</label>
										<div class="col-12 col-sm-12 col-md-8 col-lg-6 col-xl-6">
											<input type="password" class="form-control" name="auth_password" id="auth_password" placeholder="Password">
											<small class="form-text text-muted">
											  Please, enter your password.
											</small>
										</div>
									</div>
								</li>
							</ul>
						</div><br/>
						<p name="auth_submit_eng" id="auth_submit_eng" align="center"><button class="btn btn-outline-info btn-lg" type="submit">Sign in</button></p>
					</form>
			</div>
		</div>
	</body>
</html>
	