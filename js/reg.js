$(document).ready(function ()
        {
			$('.alert').alert();
			$('[data-toggle="popover"]').popover({
				//Установление направления отображения popover
				placement : 'bottom'
				
			  });
			 //скрытие сообщения возврата на главную страницу
			$("#reg_return_rus").hide();  
			$("#reg_return_eng").hide(); 
			//переключение языка на индексной странице
			$("#index_rus").attr('class','nav-link active');
			$("#body_eng").hide();
			$("#index_rus").click(function(){
				$("#body_rus").fadeIn(200);
				$("#body_eng").hide();
				$("#index_rus").attr('class','nav-link active');
				$("#index_eng").attr('class','nav-link');
			})
			$("#index_eng").click(function(){
				$("#body_eng").fadeIn(200);
				$("#body_rus").hide();
				$("#index_eng").attr('class','nav-link active');
				$("#index_rus").attr('class','nav-link');
			})
			//переключение языка на странице регистрации
			$("#reg_view_rus").attr('class','nav-link active');
			$("#reg_eng").hide();
			$("#reg_view_rus").click(function(){
				$("#reg_rus").fadeIn(200);
				$("#reg_eng").hide();
				$("#reg_view_rus").attr('class','nav-link active');
				$("#reg_view_eng").attr('class','nav-link');
			})
			$("#reg_view_eng").click(function(){
				$("#reg_eng").fadeIn(200);
				$("#reg_rus").hide();
				$("#reg_view_eng").attr('class','nav-link active');
				$("#reg_view_rus").attr('class','nav-link');
			})
			//переключение языка на странице авторизации
			$("#auth_view_rus").attr('class','nav-link active');
			$("#auth_eng").hide();
			$("#auth_view_rus").click(function(){
				$("#auth_rus").fadeIn(200);
				$("#auth_eng").hide();
				$("#auth_view_rus").attr('class','nav-link active');
				$("#auth_view_eng").attr('class','nav-link');
			})
			$("#auth_view_eng").click(function(){
				$("#auth_eng").fadeIn(200);
				$("#auth_rus").hide();
				$("#auth_view_eng").attr('class','nav-link active');
				$("#auth_view_rus").attr('class','nav-link');
			})
		//валидация на русском
		$("#form_reg_rus").validate({
					//правила для проверки
			rules:{
				user_name:{
					required:true,	
				},
				user_surname:{
					required:true,	
				},
				user_email:{
					required:true,
					email: true,	
				},
				user_phone_num:{
					required:true,
				},
				user_password:{
					required:true,
					minlength:8,
					maxlength:20,
				},
				user_password_repeat:{
					required:true,
					minlength:8,
					maxlength:20,
					equalTo:"#user_password",
				},
				
			},
				
			//сообщения о нарушении правила
			messages:{
				user_name:{
					required:"Укажите имя!",	
				},
				user_surname:{
					required:"Укажите фамилию!",	
				},
				user_email:{
					required:"Укажите Email!",
					email:"Введите корректный email!",
				},
				user_phone_num:{
					required:"Введите номер телефона!",
				},
				user_password:{
					required:"Введите пароль!",
					minlength:"От 8 до 20 символов!",
					maxlength:"От 8 до 20 символов!",
				},
				user_password_repeat:{
					required:"Введите пароль!",
					minlength:"От 8 до 20 символов!",
					maxlength:"От 8 до 20 символов!",
					equalTo:"Введенные пароли не совпадают!",
				},
				
			},
		submitHandler: function(form){
				$(form).ajaxSubmit({
					success: function(data) {
						if (data=='true') {
							$("#block_registration_rus").fadeOut(300,function() {
								$("#reg_message_rus").addClass("reg_message_rus_good").fadeIn(400).html("Вы успешно зарегистрированы!");
								$("#reg_return_rus").fadeIn(400);
								$("#reg_submit_rus").hide();
							});
						}
						else {
							$("#reg_message_rus").addClass("reg_message_rus_error").fadeIn(400).html(data);
							}
						$("#form_reg_rus")[0].reset();
					}
					
				});
			}
		});
		//валидация на английском
		$("#form_reg_eng").validate({
					//правила для проверки
			rules:{
				user_name:{
					required:true,
					minlength:3,
					maxlength:25,
					},
				user_email:{
					required:true,
					email: true,
					
				},
				user_phone_num:{
					required:true,
				},
				user_password:{
					required:true,
					minlength:8,
					maxlength:20,
				},
				user_password_repeat:{
					required:true,
					minlength:8,
					maxlength:20,
					equalTo:"#user_password",
				},
				
			},
				
			//сообщения о нарушении правила
			messages:{
				user_name:{
					required:"Write your name,please!",	
				},
				user_surname:{
					required:"Write your surname,please!",	
				},
				user_email:{
					required:"Write your email,please!",
					email:"Write your email,please!",
				},
				user_phone_num:{
					required:"Write your phone,please!",
				},
				user_password:{
					required:"Write your password,please!",
					minlength:"8-20 symbols!!",
					maxlength:"8-20 symbols!!",
				},
				user_password_repeat:{
					required:"Repeat your password,please!",
					minlength:"8-20 symbols!!",
					maxlength:"8-20 symbols!",
					equalTo:"The passwords don't match!",
				},
				
			},
		submitHandler: function(form){
				$(form).ajaxSubmit({
					success: function(data) {
						if (data=='true') {
							$("#block_registration_eng").fadeOut(300,function() {
								$("#reg_message_eng").addClass("reg_message_eng_good").fadeIn(400).html("You're successfully registered!");
								$("#reg_return_eng").fadeIn(400); 
								$("#reg_submit_eng").hide();
							});
						}
						else {
							$("#reg_message_eng").addClass("reg_message_eng_error").fadeIn(400).html(data);
							}
						$("#form_reg_eng")[0].reset();
					}
				});
			}
		});
	
	});
		

