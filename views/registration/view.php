<!DOCTYPE html>
<html lang="en">
	<?php include_once SITE_PATH."views/header/view.php";?>
	<body>
		<div class="container">
			<ul class="nav nav-tabs">
			  <li class="nav-item">
				<a class="nav-link" id="reg_view_rus" href="#">Русский</a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link" id="reg_view_eng" href="#">English</a>
			  </li>
			</ul>
					<!----форма регистрации----->
			<div id="reg_rus" class="col-12 col-sm-12 col-md-12 col-lg-9 col-xl-9">
				<h2 align="center">Регистрация</h2>	
					<p align="center" id="reg_message_rus"></p>
					<p class="col-12 col-sm-12 col-md-12 col-lg-12" align="center" id="reg_return_rus"><a href="index.php">Вернуться на главную</a></p>
					<form enctype="multipart/form-data" method="post" id="form_reg_rus" action="/ajax/handler_reg.php">
					
					<p class="col-12 col-sm-12 col-md-12 col-lg-12" align="center" id="reg_return_rus"><a href="index.php">Вернуться на главную</a></p>
						<div id="block_registration_rus">
							<ul style="list-style-type:none;" class="form_reg_rus">
								<li>
									<div class="form-group row">
										<label for="user_name_rus" class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 col-form-label">Имя</label>
										<div class="col-12 col-sm-12 col-md-8 col-lg-6 col-xl-6">
											<input type="text" class="form-control" name="user_name" id="user_name" placeholder="Имя">
											<small class="form-text text-muted">
												Пожалуйста, укажите свое имя.
											</small> 
										</div>
									</div>
								</li>
								<li>
									<div class="form-group row">
										<label for="user_surname_rus" class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 col-form-label">Фамилия</label>
										<div class="col-12 col-sm-12 col-md-8 col-lg-6 col-xl-6">
											<input type="text" class="form-control" name="user_surname" id="user_surname" placeholder="Имя">
											<small class="form-text text-muted">
												Пожалуйста, укажите свою фамилию.
											</small> 
										</div>
									</div>
								</li>
								<li>
									<div class="form-group row">
										<label for="user_email_rus" class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 col-form-label">Email</label>
										<div class="col-12 col-sm-12 col-md-8 col-lg-6 col-xl-6">
											<input type="text" class="form-control" name="user_email" id="user_email" placeholder="Email">
											<small class="form-text text-muted">
												Пожалуйста, укажите свой email.
											</small> 
										</div>
									</div>
								</li>
								<li>
									<div class="form-group row">
										<label for="user_phone_num_rus" class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 col-form-label">Телефон</label>
										<div class="col-12 col-sm-12 col-md-8 col-lg-6 col-xl-6">
											<input type="text" class="form-control" name="user_phone_num" id="user_phone_num" placeholder="Телефон">
											<small class="form-text text-muted">
												Пожалуйста, укажите свой номер телефона.
											</small> 
										</div>
									</div>
								</li>
								<li>
									<div class="form-group row">
										<label for="user_password_rus" class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 col-form-label">Пароль</label>
										<div class="col-12 col-sm-12 col-md-8 col-lg-6 col-xl-6">
											<input type="text" class="form-control" name="user_password" id="user_password" placeholder="Пароль">
											<small class="form-text text-muted">
												Пароль должен иметь длину 8-20 символов.
											</small>
										</div>
									</div>
								</li>
								<li>
									<div class="form-group row">
										<label for="user_password_repeat_rus" class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 col-form-label">Повторите пароль</label>
										<div class="col-12 col-sm-12 col-md-8 col-lg-6 col-xl-6">
											<input type="text" class="form-control" name="user_password_repeat" id="user_password_repeat" placeholder="Повторите пароль">
											<small class="form-text text-muted">
												Пароль должен иметь длину 8-20 символов.
											</small>
										</div>
									</div>
								</li>
								<li>
									<div class="form-group row">
										<label for="user_image_rus" class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 col-form-label">Изображение(фото)</label>
										<div class="col-12 col-sm-12 col-md-8 col-lg-6 col-xl-6">
											<input type="file" class="form-control-file" multiple accept="image/jpeg,image/png" name="user_image" id="user_image" placeholder="Добавьте фото">
											<small  class="form-text text-muted">
												Добавьте изображение.
											</small>
										</div>
									</div>
								</li>
							</ul>
						</div><br/>
						<p name="reg_submit_rus" id="reg_submit_rus" align="center"><button class="btn btn-outline-info btn-lg" type="submit">Регистрация</button></p>
					</form>
			</div>		
			<div id="reg_eng" class="col-12 col-sm-12 col-md-12 col-lg-9 col-xl-9">
					<h2 align="center">Registration</h2>
					<p align="center" id="reg_message_eng"></p>
					<p class="col-12 col-sm-12 col-md-12 col-lg-12" align="center" id="reg_return_eng"><a href="index.php">Back home</a></p>
					<form enctype="multipart/form-data" method="post" id="form_reg_eng" action="/ajax/handler_reg.php">
						<p class="col-12 col-sm-12 col-md-12 col-lg-12" align="center" id="reg_return_eng"><a href="index.php">Back home</a></p>
						<div id="block_registration_eng">
							<ul style="list-style-type:none;" class="form_reg_eng">
								<li>
									<div class="form-group row">
										<label for="user_name_eng" class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 col-form-label">Name</label>
										<div class="col-12 col-sm-12 col-md-8 col-lg-6 col-xl-6">
											<input type="text" class="form-control" name="user_name" id="user_name" placeholder="Name">
											<small class="form-text text-muted">
											  Please, write your real name.
											</small>
										</div>
									</div>
								</li>
								<li>
									<div class="form-group row">
										<label for="user_surname_eng" class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 col-form-label">Surname</label>
										<div class="col-12 col-sm-12 col-md-8 col-lg-6 col-xl-6">
											<input type="text" class="form-control" name="user_surname" id="user_surname" placeholder="Surname">
											<small class="form-text text-muted">
											  Please, write your real surname.
											</small>
										</div>
									</div>
								</li>
								<li>
									<div class="form-group row">
										<label for="user_email_eng" class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 col-form-label">Email</label>
										<div class="col-12 col-sm-12 col-md-8 col-lg-6 col-xl-6">
											<input type="text" class="form-control" name="user_email" id="user_email" placeholder="Email">
											<small class="form-text text-muted">
											  Please, write your email.
											</small>
										</div>
									</div>
									
								</li>
								<li>
									<div class="form-group row">
										<label for="user_phone_num_eng" class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 col-form-label">Phone</label>
										<div class="col-12 col-sm-12 col-md-8 col-lg-6 col-xl-6">
											<input type="text" class="form-control" name="user_phone_num" id="user_phone_num" placeholder="Phone">
											<small class="form-text text-muted">
											  Please, write your phone number.
											</small>
										</div>
									</div>
									</li>
								<li>
									<div class="form-group row">
										<label for="user_password_eng" class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 col-form-label">Password</label>
										<div class="col-12 col-sm-12 col-md-8 col-lg-6 col-xl-6">
											<input type="text" class="form-control" name="user_password" id="user_password" placeholder="Password">
											<small class="form-text text-muted">
											  Your password must be 8-20 characters long.
											</small>
										</div>
									</div>
								</li>
								<li>
									<div class="form-group row">
										<label for="user_password_repeat_eng" class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 col-form-label">Password repeat</label>
										<div class="col-12 col-sm-12 col-md-8 col-lg-6 col-xl-6">
											<input type="text" class="form-control" name="user_password_repeat" id="user_password_repeatg" placeholder="Password repeat">
											<small class="form-text text-muted">
												Your password must be 8-20 characters long.
											</small>
										</div>
									</div>
								</li>
								<li>
									<div class="form-group row">
										<label for="user_image_eng" class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 col-form-label">Image(photo)</label>
										<div class="col-12 col-sm-12 col-md-8 col-lg-6 col-xl-6">
											<input type="file" class="form-control-file" multiple accept="image/jpeg,image/png" name="user_image" id="user_image" placeholder="Place your photo,please">
											<small class="form-text text-muted">
												Please,put your image.
											</small>
										</div>
									</div>
								</li>
							</ul>
						</div><br/>
						<p name="reg_submit_eng" id="reg_submit_eng" align="center"><button class="btn btn-outline-info btn-lg" type="submit">Registration</button></p>
					</form>
			</div>
		</div>
	</body>
</html>
	