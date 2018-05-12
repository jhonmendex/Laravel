@extends('layouts.menu')
@section('content')
<div class="col-md-10 col-md-offset-2 nproject">	
<div id="alerts"></div>
@include('alerts.errors')
{!! Form::model($customer,['route' => ['customer.update',$customer], 'method' => 'PUT']) !!}
<div class="col-md-10">
{!! Form::text('name',null,['class'=>'form-control','placeholder' => 'Cliente sin nombre','id'=>'nombrecliente']) !!}
</div>
<div class="col-md-2">
{!! Form::submit('Almacenar',['class'=>'btn btn-primary']) !!}
</div>
{!! Form::close() !!}
 </div>
@endsection
