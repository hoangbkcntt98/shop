
@extends('layouts.master')
@section('content')

<div class="container">
    <h1>Profile</h1>
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
        {!! Form::open(['action' => ['ProfileController@edit',$user->id],'method'=>'GET','class'=>'form-horizontal','role'=>'form']) !!}
        
        <div class="form-group">
        <h4>{{Form::label( 'Full Name:',null,['class' => 'col-lg-3 control-label'])}}</h4>
            <div class="col-lg-8">
            <h4 class="col-lg-3 control-label">{{$user->name}}</h4>
            </div>
        </div>
        <div class="form-group">
        <h4>{{Form::label( 'User Name:',null,['class' => 'col-lg-3 control-label'])}}</h4>
            <div class="col-lg-8">
            <h4 class="col-lg-3 control-label">{{$user->username}}</h4>
            </div>
        </div>
        <div class="form-group">
        <h4>{{Form::label( 'Email:',null,['class' => 'col-lg-3 control-label'])}}</h4>
            <div class="col-lg-8">
            <h4 class="col-lg-3 control-label">{{$user->email}}</h4>
            </div>
        </div>
        <div class="form-group">
        <h4>{{Form::label( 'Role:',null,['class' => 'col-lg-3 control-label'])}}</h4>
            <div class="col-lg-8">
            <h4 class="col-lg-3 control-label">@if($user->type==2)
                    User
                @elseif($user->type==0)
                    Admin
                @else  
                    Staff
                @endif</h4>
            </div>
        </div>
        <div class="form-group">
        <h4>{{Form::label( 'Credit Card:',null,['class' => 'col-lg-3 control-label'])}}</h4>
            <div class="col-lg-8">
            @if(count($cards)==0)
                <h4 class="col-lg-3 control-label">None</h4>
            @else
                @foreach($cards as $card)
                <h4 >{{$card->card_number}}</h4>
                @endforeach
            @endif
            
            </div>
        </div>
        
        <div class="form-group">
            <label class="col-md-3 control-label"></label>
            <div class="col-md-8">
                {{Form::submit('Edit Profile',['class'=>'btn btn-primary'])}}
              </div>
        </div>
        {!! Form::close() !!}
        
      </div>
  </div>
</div>
<hr>
@endsection
