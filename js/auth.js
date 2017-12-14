$(document).ready(function ()
        {
		//скрытие сообщения возврата на главную страницу
		$("#auth_return_rus").hide();  
		$("#auth_return_eng").hide(); 
		//валидация на русском
		$("#auth_form_rus").validate({
					//правила для проверки
			rules:{
				auth_email:{
					required:true,
					email: true,	
				},
				auth_password:{
					required:true,
				},
			},
			//сообщения о нарушении правила
			messages:{
				auth_email:{
					required:"Укажите Email!",
				},
				auth_password:{
					required:"Введите пароль!",
				},
			},
		submitHandler: function(form){
				$(form).ajaxSubmit({
					success: function(data) {
						if (data=='yes_auth') {
							$("#block_auth_rus").hide(function() {
								$("#auth_submit_rus").hide();
								var url = "/index.php";
								$(location).attr('href',url);
							});
						}
						else {
							$("#auth_message_rus").addClass("auth_message_rus_error").fadeIn(400).html(data);
							}
						$("#auth_form_rus")[0].reset();
					}
					
				});
			}
		});
		//валидация на английском
		$("#auth_form_eng").validate({
					//правила для проверки
			rules:{
				auth_email:{
					required:true,
				},
				auth_password:{
					required:true,
				},
			},
				
			//сообщения о нарушении правила
			messages:{
				auth_email:{
					required:"Enter your email,please!",
				},
				auth_password:{
					required:"Enter your password,please!",
				},
			},
		submitHandler: function(form){
				$(form).ajaxSubmit({
					success: function(data) {
						if (data=='yes_auth') {
							$("#block_auth_eng").hide(function() {
								$("#auth_submit_eng").hide();
								var url = "/index.php";
								$(location).attr('href',url);
							});
						}
						else {
							$("#auth_message_eng").addClass("auth_message_eng_error").fadeIn(400).html(data);
							}
						$("#auth_form_eng")[0].reset();
					}
				});
			}
		});
	
	});
		

