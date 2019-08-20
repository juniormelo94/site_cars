function btn_cadastrar(){
    $("#btn_cad_form").attr("disabled", "disabled");
	var dados = $('#form_cadastre_se').serialize();

    $.ajax({
        type: "POST",
        url: "Controller/CadastrarController.php",
        data: dados,
        dataType:"json",
        success: function(resposta)
        {

    		$("#modalAlertaMessage").text(resposta.msg);
        	$(".modal").modal("hide");
        	$("#modalAlerta").modal("show");
        	$("#btn_cad_form").attr("disabled", false);
        },
        error: function(erro){
    	console.log("erro");
    	console.log(erro);
    	}
	});
}

function btn_entrar(){
    $("#ent_form").attr("disabled", "disabled");
    var dados = $('#form_entrar').serialize();

    $.ajax({
        type: "POST",
        url: "Controller/EntrarController.php",
        data: dados,
        dataType:"json",
        success: function(resposta)
        {
            window.location.href = resposta.data.home;

            if(resposta.status == 'error'){
                $("#modalAlertaMessage").text(resposta.msg);
                $(".modal").modal("hide");
                $("#modalAlerta").modal("show");
            }
        	$("#ent_form").attr("disabled", false);

        },
        error: function(erro){
        	console.log("erro");
        	console.log(erro);
        }
    });
}

function btn_sair(){
    $.ajax({
        type: "GET",
        url: "../Controller/Sair.php",
        dataType: "json",
        success: function(resposta)
        {
            window.location.href = resposta.data.sair;
        },
        error: function(erro)
        {
            console.log("erro");
            console.log(erro);
        }
    });
}

function buscar_carros(filtro)
{
    filtro = filtro || {};
    $.ajax({
        type: "POST",
        url: "../Controller/BuscarCarrosController2.php",
        data: filtro,
        dataType: "json",
        success: function(resposta)
        {
            $("#row-carros").html("");
            $("#row-carros").html(preenche_dados_carro(resposta));
        },
        error: function(erro)
        {
            console.log("erro");
            console.log(erro);
        }
    });
}

function preenche_dados_carro(dados)
{
    var html = '';

    if (dados.length > 0) {
        for (var i = 0; i < dados.length; i++) {
            html += '<div class="col-md-4">'+
              '<div class="card mb-4 box-shadow">'+
                '<img class="img-fluid  rounded mx-auto d-block card-img-top" src="'+dados[i].imgCaminho+'" style="height: 200px; width: 200px; display: block;">'+
                '<div class="card-body">'+
                  '<h5>'+
                    dados[i].dadosNome+
                  '</h5>'+
                  '<p class="card-text mb-1">'+
                    dados[i].dadosMarca+
                  '</p>'+
                  '<p class="card-text mb-1">'+
                    dados[i].dadosCategoria+
                  '</p>'+
                  '<p class="card-text mb-1">'+
                    'R$ '+ dados[i].dadosValor+
                  '</p>'+
                  '<p class="card-text mb-1">'+
                    dados[i].dadosResumo+
                  '</p>'+
                  '<div class="d-flex justify-content-between align-items-center">'+
                    '<div class="btn-group">'+
                      '<button type="button" class="btn btn-sm btn-outline-secondary">View</button>'+
                      '<button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>'+
                    '</div>'+
                    '<small class="text-muted">9 mins</small>'+
                  '</div>'+
                '</div>'+
              '</div>'+
            '</div>';
        }
    }

    return html;
}


 var file = false;

 function pegarImagem()
 {
    if (event.target.files != null && event.target.files.length > 0){
      file = event.target.files[0];
    }
 }

 function btn_cadastrar_cars()
 {
    var formDataCadCar = new FormData();
    formDataCadCar.append("imagem", file);
    formDataCadCar.append("nome", $("#nome").val());
    formDataCadCar.append("categoria", $("#categoria").val());
    formDataCadCar.append("marca", $("#marca").val());
    formDataCadCar.append("resumo", $("#resumo").val());
    formDataCadCar.append("valor", $("#valor").val());

    $.ajax({
        url : 'Controller/CadastrarCarsController.php',
        data : formDataCadCar,
        type : 'POST',
        processData: false,
        contentType: false,
        dataType: "json",
        success: function(resposta)
        {
            $("#modalAlertaMessage").text(resposta.msg);
            $(".modal").modal("hide");
            $("#modalAlerta").modal("show");
            $("#btn_form_cars").attr("disabled", false);
        },
        error: function(erro)
        {
            console.log("erro");
            console.log(erro);
        }
    });
 }
