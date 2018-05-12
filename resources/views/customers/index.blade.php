@extends('layouts.customer')
@section('content')
<div class="container">
	@include('alerts.success')
	<ul class="list-group iconproject">
		<li class="list-group-item active">
			Tus Clientes 
		</li>
		@foreach($customers as $customer) 
		
		@can('owner',$customer)
		<li class="list-group-item">
			<div class="col-md-8">{{ $customer -> name }}</div>
			<div class="col-md-2">{{ link_to_route('customer.edit',$title="Abrir Cliente" , $parameter = $customer, $attributes =['class' => 'btn']) }}<i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
</div>
			@include('customers.delete')
		</li>
		@endcan
		@endforeach
	</ul>
	<div class="row">
		<div class="col-md-12"><i class="fa fa-file" aria-hidden="true"></i>
		<a href="" data-toggle="modal" data-target="#modalAttr" class="subray">Nuevo Cliente</a><br>	
	</div>

 
</div>
</div>
 <div class="modal fade" id="modalAttr" role="dialog">
    <div class="modal-dialog">
        @include('customers.new')
    </div>
  </div>  
@endsection
