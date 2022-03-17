{!! Form::open(['route' => ['clientes.destroy', $row->id],'method'=>'DELETE']) !!}


<button  onclick="return confirm('Esta seguro de Eliminar el clientes')"><i class="fa fa-trash" aria-hidden="true"></i> Delete </button>
{!! Form::close() !!}