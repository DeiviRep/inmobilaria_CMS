<div class="modal modal-card fade in" id="modal-{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <form method="POST" action="{{route('destroy.equipo',$item->id)}}">
    {{csrf_field()}}
    <input name="_method" type="hidden" value="DELETE">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">¿Quieres eliminar este contenido?</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <p class="s-text">Est contenido se eliminará permanentemente<br> <span class="p-text">Esta acción no se puede deshacer.</span></p>
        </div>
        <div class="modal-footer double-button">
          <button type="button" class="button secondary" data-dismiss="modal">Cancelar</button>
          <button type="submit" class="button secondaryy btn-borrar--aceptar">Aceptar</button>
        </div>
        </div>
    </div>
    </form>



</div>