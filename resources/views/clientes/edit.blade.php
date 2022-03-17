<div class="modal fade" id="editar_clientes">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                
                <h4 class="modal-title">ACTUALIZAR</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">

                

<form class="" action="{{route('clientes.update', 'id' )}}"   method="post" id="FormEditclientess">

  {{method_field('patch')}}
  {{csrf_field()}}

<input type="hidden" id="id"  name="id" value="">



    <center><button type="submit" class="btn btn-primary" >Actualizar</button>
    <button type="button" class="btn btn-default "data-dismiss="modal" >Cerrar</button></center><p>

</form>



  </div>
</div>

</div>
</div>
