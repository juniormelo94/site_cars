<!-- Modal -->
<div class="modal fade pr-0" id="modal_entrar" tabindex="-1" role="dialog" aria-labelledby="modalAlertaLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content fundo_azul">
      <div class="modal-header header_white">
        <h4 class="modal-title modal_title_cinza" id="modalAlertaLabel">Entrar</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="container">
          <form id="form_entrar" class="form-signin">
            <input type="email" name="email"  class="mb-2 form-control" placeholder="E-mail">
            <input type="password" name="senha" class="mb-2 form-control" placeholder="Senha">
          </form> 
          <button id="ent_form" class="mt-3 btn btn-lg btn btn-dark btn-block" onclick="btn_entrar()" >Entrar</button>         
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-dark" data-dismiss="modal">Fechar</button>
      </div>
    </div>
  </div>
</div>