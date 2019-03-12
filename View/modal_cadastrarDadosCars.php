<!-- Button trigger modal -->
<!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalAlerta">
  Launch demo modal
</button> -->

<!-- Modal -->
<div class="modal fade pr-0" id="modal_dados_cars" tabindex="-1" role="dialog" aria-labelledby="modalAlertaLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content fundo_azul">
      <div class="modal-header header_white">
        <h4 class="modal-title modal_title_cinza" id="modalAlertaLabel">Cadastro de carros</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body ">
        <div class="container">
          <form id="form_dados_cars" class="form-signin" method="post" enctype="multipart/form-data">
            <input type="text" id="nome" name="nome" class="mb-2 form-control" placeholder="Fox">
            <input type="text" id="categoria" name="categoria" class="mb-2 form-control" placeholder="HATCH PEQUENO">
            <input type="text" id="marca" name="marca" class="mb-2 form-control" placeholder="Volkswagen">
            <input type="text" id="resumo" name="resumo" class="mb-2 form-control" placeholder="Resumo">
            <input type="text" id="valor" name="valor" class="mb-2 form-control" placeholder="40.000">
            <input type="file" onchange="pegarImagem()" name="imagem" class="mb-2 form-control" placeholder="https://...">
          </form>
          <button id="btn_form_cars" class="mt-3 btn btn-lg btn btn-dark btn-block" onclick="btn_cadastrar_cars()">Cadastrar</button>
        </div> 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-dark" data-dismiss="modal">Fechar</button>
      </div>
    </div>
  </div>
</div>