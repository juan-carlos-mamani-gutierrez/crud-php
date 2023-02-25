


<div
  class="modal fade"
  id="modalmantenimiento"
  tabindex="-1"
  aria-labelledby="exampleModalLabel1"
  aria-hidden="true"
>
  <div class="modal-dialog">
    <div class="modal-content">
       <form method="post" id="producto_form">
      <div class="modal-header">
        <h5 class="modal-title" id="mdltitulo"></h5>
        
        
      </div>
      <div class="modal-body">
       
         <input type="hidden" id="prod_id" name="prod_id">
  

             <div class="mb-3">
                 <label for="prod_nom" class="col-form-label">Nombre</label>
                 <input type="text" class="form-control" id="prod_nom" name="prod_nom">
             </div>
        
      </div>
      <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary" id="#" value ="add" name="action">Guardar</button>
      </div>
       </form>
    </div>
  </div>
</div>