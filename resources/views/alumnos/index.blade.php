@extends('layouts.alumnos')
@section('content')
<div class="container">
	@include('alerts.success')
	<ul class="list-group iconproject">
		 
	</ul>
	<div class="row">
		<div class="col-md-12"><i class="fa fa-file" aria-hidden="true"></i>
		<a href="" data-toggle="modal" data-target="#modalAttr" class="subray">Nuevo alumno</a><br>	
	</div>

 
</div>
</div>
 <div class="modal fade" id="modalAttr" role="dialog">
    <div class="modal-dialog">
        @include('customers.new')
    </div>
  </div>  
@endsection
