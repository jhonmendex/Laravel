
 <!-- Modal content-->
<div class="modal-content">
	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal">&times;</button>
		<h4 class="modal-title"><i class="fa fa-file" aria-hidden="true"></i>&nbsp;Crear nuevo cliente</h4>
	</div>
	<div class="modal-body">
{!! Form::open(['route' => 'customer.store', 'method' => 'POST']) !!}
<div class="col-md-10">
{!! Form::text('name',null,['class'=>'form-control','placeholder' => 'Cliente sin nombre','id'=>'nombrecliente']) !!}
</div>
<div class="col-md-2">
{!! Form::submit('Almacenar',['class'=>'btn btn-primary']) !!}
</div>
{!! Form::close() !!}
	</div>
	<div class="modal-footer">
		<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	</div> 
</div> 
 
