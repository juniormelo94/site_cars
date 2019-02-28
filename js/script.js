
function btn_cadastrar(){
	$('#form_cadastre_se').submit(function(){
	    var dados = $( this ).serialize();

	    $.ajax({
	        type: "POST",
	        url: "../Controller/CadastrarController.php",
	        data: dados,
	        success: function( data )
	        {
	            // $('.recebeDados').html(data);
	             alert(data);
	        }
	    });
	    
	    return false;
	});
}


function btn_entrar(){
	$('#form_entrar').submit(function(){
	    var dados = $( this ).serialize();

	    $.ajax({
	        type: "POST",
	        url: "../Controller/Entrar.php",
	        data: dados,
	        success: function( data )
	        {
	            // $('.recebeD').html(data);
	            alert(data);
	        }
	    });
	    
	    return false;
	});
}




