@extends('layouts.master')
@section('content')

<div class="container">
    <h1>Add Credit Card</h1>
  	<hr>
	<div class="row">
      <!-- left column -->
    
      <!-- edit form column -->
      <div class="col-md-9 personal-info">
        
        <h3>Card info</h3>
        <div class="alert alert-info alert-dismissable">
          <a class="panel-close close" data-dismiss="alert">×</a> 
          <i class="fa fa-coffee"></i>
          This is an <strong>.alert</strong>. Use this to show important messages to the user.
        </div>
        {!! Form::open(['action' => ['CardController@store'],'method'=>'POST','class'=>'form-horizontal','role'=>'form']) !!}
        <div class="form-group">
        {{Form::label( 'Card Number',null,['class' => 'col-lg-3 control-label'])}}
            <div class="col-lg-8">
              {{Form::text('card_number', '', ['class' => 'form-control'])}}
            </div>
        </div>
        <div class="form-group">
        {{Form::label( 'CCV',null,['class' => 'col-lg-3 control-label'])}}
            <div class="col-lg-8">
              {{Form::text('ccv', '', ['class' => 'form-control'])}}
            </div>
        </div>
        <div class="form-group">
        {{Form::label( 'Expiration Date',null,['class' => 'col-lg-3 control-label'])}}
            <div class="col-lg-8">
              {{Form::text('date','', ['class' => 'form-control'])}}
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label"></label>
            <div class="col-md-8">
                {{Form::submit('Create',['class'=>'btn btn-primary'])}}
              <span></span>
              <a href="{{route('user.edit',$user->id)}}" class="btn btn-primary">Cancel</a>
            </div>
        </div>
        {!! Form::close() !!}
        
      </div>
  </div>
</div>
<hr>
@endsection