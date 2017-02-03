function formatar(mascara, documento){
	var i = documento.value.length;
	var saida = mascara.substring(0,1);
	var texto = mascara.substring(i);

	if(texto.substring(0,1) != saida){
		documento.value += texto.substring(0,1);
	}
}

$("#use_data_reg").on("change", function() {
    this.setAttribute(
        "data-date",
        moment(this.value, "YYYY-MM-DD")
        .format( this.getAttribute("data-date-format") )
    )
}).trigger("change")

$(function(){
	$("name_error_message").hide();
	$("email_error_message").hide();
	$("password_error_message").hide();
	$("login_error_message").hide();
	$("matricula_error_message").hide();
	$("cpf_error_message").hide();
	$("telefone_error_message").hide();
	$("data_error_message").hide();

	var error_name = false;
	var error_email = false;
	var error_password = false;
	var error_login = false;
	var error_matricula = false;
	var error_cpf = false;
	var error_telefone = false;
	var error_data = false;


	$("#name").focusout(function(){

		check_name();

	});

	$("#email").focusout(function(){

		check_email();

	});

	$("#password").focusout(function(){

		check_password();

	});

	$("#use_login").focusout(function(){

		check_login();

	});

	$("#use_matricula").focusout(function(){

		check_matricula();

	});

	$("#use_cpf").focusout(function(){

		check_cpf();

	});

	$("#use_data_reg").focusout(function(){

		check_data_reg();

	});

	function check_name(){

		var name_length = $("#name").val().length;

		if(name_length < 5 || name_length > 20){
			$("#name_error_message").html("O nome tem que conter de 5 a 20 caracteres");
			$("#name_error_message").show();
			error_name = true;
		} else {
			$("#name_error_message").hide();
		}
	}

	function check_email(){

		var pattern = new RegExp(/^[+a-zA-Z0-9.-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/i);

		if(pattern.test($("#email").val())){
			$("#email_error_message").hide();
		} else {
			$("#email_error_message").html("Endereço de email inválido");
			$("#email_error_message").show();
			error_email = true;
		}
	}

	function check_password(){

		var password_length = $("#password").val().length;

		if(password_length < 6){
			$("#password_error_message").html("O password deve conter pelo menos 6 caracteres");
			$("#paswword_error_message").show();
			error_password = true;
		} else {
			$("#password_error_message").hide();
		}
	}

	function check_login(){

		var login_length = $("#use_login").val().length;

		if(login_length < 5 || login_length > 15){
			$("#login_error_message").html("O login tem que conter de 5 a 15 caracteres");
			$("#login_error_message").show();
			error_login = true;
		} else {
			$("#login_error_message").hide();
		}
	}

	function check_matricula(){

		var matricula_length = $("#use_matricula").val().length;

		if(matricula_length < 5 || matricula_length > 20){
			$("#matricula_error_message").html("O número de matrícula tem que conter de 5 a 20 caracteres");
			$("#matricula_error_message").show();
			error_matricula = true;
		} else {
			$("#matricula_error_message").hide();
		}
	}

	function check_cpf(){

		var cpf_length = $("#use_cpf").val().length;

		if(cpf_length < 11){
			$("#cpf_error_message").html("O CPF tem que conter 11 caracteres");
			$("#cpf_error_message").show();
			error_cpf = true;
		} else {
			$("cpf_error_message").hide();
		}
	}

	function check_data_reg(){

		var data_length = $("#use_data_reg").val().length;

		if(data_length < 5 || data_length > 20){
			$("#data_error_message").html("Por favor cadastre a data de rigistro do usuário.");
			$("#data_error_message").show();
			error_data = true;
		} else {
			$("#data_error_message").hide();
		}
	}
});