$(function(){
	//Initialize form validation on the registration form.
	$("form[name='registrarion']").validate({
		//Specify validation rules.
		rules: {
			//The key name on the left side is the name attribute.
			//of an input field. Validation rules are defined.
			//on the rigth side.
			name: "required",
			email: {
				required: true,
				email: true
			},
			password: {
				required: true,
				minlength: 5
			}
			use_login: "required",
			use_cpf: "required",
			use_telefone: "required",
		},
		messages: {
			name: "Por favor cadastre o nome",
			password: {
				required: "Por favor digite uma senha", 
				minlength: "Utilize uma senha com no mínimo 5 caracteres"
			},
			email: "Por favor entre com um email válido"
		},
		submitHandler: function(form){
			form.submit();
		}
	});
});