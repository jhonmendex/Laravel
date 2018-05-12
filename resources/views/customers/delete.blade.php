{!! Form::open(['route' => ['customer.destroy',$customer->id],'method' => 'DELETE']) !!}
{!! Form::submit('Eliminar cliente',['class' => 'eliminar']) !!}<i class="fa fa-times-circle" aria-hidden="true"></i>

{!! Form::close() !!}