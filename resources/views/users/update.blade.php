@extends('layouts.master')
@section('content')

<div class="container">
    <h1>Edit Profile</h1>
  	<hr>
	<div class="row">
      <!-- left column -->
    
      <!-- edit form column -->
      <div class="col-md-9 personal-info">
        
        <h3>Personal info</h3>
        <div class="alert alert-info alert-dismissable">
          <a class="panel-close close" data-dismiss="alert">×</a> 
          <i class="fa fa-coffee"></i>
          This is an <strong>.alert</strong>. Use this to show important messages to the user.
        </div>
        {!! Form::open(['action' => ['ProfileController@update',$user->id],'method'=>'PUT','class'=>'form-horizontal','role'=>'form']) !!}
        <div class="form-group">
        {{Form::label( 'Full Name',null,['class' => 'col-lg-3 control-label'])}}
            <div class="col-lg-8">
              {{Form::text('name', $user->name, ['class' => 'form-control'])}}
            </div>
        </div>
        <div class="form-group">
        {{Form::label( 'Email',null,['class' => 'col-lg-3 control-label'])}}
            <div class="col-lg-8">
              {{Form::text('email', $user->email, ['class' => 'form-control'])}}
            </div>
        </div>
        <div class="form-group">
        {{Form::label( 'User Name',null,['class' => 'col-lg-3 control-label'])}}
            <div class="col-lg-8">
              {{Form::text('username', $user->username, ['class' => 'form-control'])}}
            </div>
        </div>
        <div class="form-group">
        {{Form::label( 'Role',null,['class' => 'col-lg-3 control-label'])}}
            <div class="col-lg-8">
            {{Form::select('type', [1 => 'Admin', 0 =>'User',2=>'Staff'], $user->type)}}
            </div>
        </div>
        <div class="form-group">
        {{Form::label('New Password',null,['class' => 'col-lg-3 control-label'])}}
            <div class="col-lg-8">
            {{Form::input('password','password', $user->password, ['class' => 'form-control'])}}
            </div>
        </div>
        <div class="form-group">
        {{Form::label('Confirm Password',null,['class' => 'col-lg-3 control-label'])}}
            <div class="col-lg-8">
            {{Form::input('password','password-confirm', '', ['class' => 'form-control'])}}
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label"></label>
            <div class="col-md-8">
                {{Form::submit('Save Changes',['class'=>'btn btn-primary'])}}
              
              <span></span>
              <a href="{{route('user.index')}}" class="btn btn-primary">Cancel</a>
            </div>
        </div>
        {!! Form::close() !!}
        
      </div>
      <!-- edit form column -->
      <div class="col-md-9 personal-info">
        
        <h3>Card Infor</h3>
        <div class="alert alert-info alert-dismissable">
          <a class="panel-close close" data-dismiss="alert">×</a> 
          <i class="fa fa-coffee"></i>
          This is an <strong>.alert</strong>. Use this to show important messages to the user.
        </div>
        @include('card.card')
        <label class="col-md-3 control-label"></label>
            <div class="col-md-8">
              <a href="/card/create/" class="btn btn-primary">Add A Credit Card</a>
            </div>
        </div>
  </div>
</div>
<hr>
@endsection