<x-app-layout>
	<x-slot name="header">
		<h2 class="font-semibold text-xl text-gray-800 leading-tight">
		<img src="{{asset('img/duquesa.png')}}" width="80px" height="80px">	CLIENTES
		</h2>
	</x-slot>

	<div class="container">
		<div class="panel-body">

			@if ($errors->any())
			<div class="alert alert-danger">
				<ul>
					@foreach ($errors->all() as $error)
					<li><!-- {{ $error }} -->  El NIT ya exite en OFIMA, por favor verificar!</li>
					@endforeach
				</ul>
			</div>
			@endif
			
			
		</p>
	</p>
</p>
</p>

</div>
<hr>

@if (session('status'))
<div class="alert alert-success">
	{{ session('status') }}


</div>
@endif  

<br>
<br>
<br>
<br>

@include('clientes.tienda')
@include('clientes.create')
@include('clientes.edit')

<p>


	<div >
		

		<div class="container">

		

			<a class="btn btn-info col-lg-push-3" data-toggle="modal" href='#clientes'><i class="fas fa-plus-circle"></i> Crear Cliente Nuevo  </a><br><br>
			 <a class="btn btn-danger col-lg-push-3" data-toggle="modal" href='#tienda'><i class="fas fa-store"></i> Tienda Duquesa </a><br><br><br>
		


			{!! Form::open(['route' => 'clientes.index', 'method'=>'GET', 'Class'=>'form-inline ']) !!}
			<!--<form class="navbar-form navbar-right" role="search">-->
				<div class="form-group">
					<input type="text"  placeholder="Search" name="nombre" id="nombre">
				</div>&nbsp&nbsp
				<button type="submit" class="btn btn-primary"><i class="fas fa-search"></i> Consultar por NIT</button>
				{!! Form::close() !!}
				<br>
				<table class="table table-sm table-striped table-responsive" >
					<thead class="thead-light">
						<tr>
							<td colspan="2">NIT</td>
							<td>NOMBRE</td>
							<td>TELEFONO</td>
							<td>CELULAR</td>
							<td>EMAIL</td>
							<td>USUARIO</td>
							<td>DIRECCION</td>
							<td>CONTACTO</td>
							<td>COMENTARIO</td>
							<td>FECHA INGRESO</td>



						</tr>
					</thead>
					<tbody>

						@foreach($cliente as $row)
						<tr>
							<td colspan="2">{{$row->NIT}}</td>
							<td>{{$row->NOMBRE}}</td>
							<td>{{$row->TEL1}}</td>
							<td>{{$row->TEL2}}</td>
							<td>{{$row->EMAIL}}</td>
							<td>{{$row->PASSWORDIN}}</td>
							<td>{{$row->DIRECCION}}</td>
							<td>{{$row->CONTACTO}}</td>
							<td>{{$row->COMENTARIO}}</td>
							<td>{{$row->FECHAING}}</td>
						</td>





					</td>

				</tr>
			</tbody>

			@endforeach


		</table>

	</div>
</div>

<center>{{ $cliente->links() }}</center>

</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</x-app-layout>
