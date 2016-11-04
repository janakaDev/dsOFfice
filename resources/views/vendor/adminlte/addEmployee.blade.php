<?php

  use App\Employee; 
  $emps = Employee::all();
?>
<style type="text/css">
    .colorgraph {
  height: 5px;
  border-top: 0;
  background: #c4e17f;
  border-radius: 5px;
  background-image: -webkit-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
  background-image: -moz-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
  background-image: -o-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
  background-image: linear-gradient(to right, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);



}


.parallax-text {
    overflow: hidden;
    text-align: center;
    color: #3a3a3a;
    font-size: 60px;
    line-height: 86px;
    font-weight: 700;
    
    mix-blend-mode: lighten;
    margin-top: 50px;
    
}


.fileUpload {
    position: relative;
    overflow: hidden;
    margin: 10px;
}
.fileUpload input.upload {
    position: absolute;
    top: 0;
    right: 0;
    margin: 0;
    padding: 0;
    font-size: 20px;
    cursor: pointer;
    opacity: 0;
    filter: alpha(opacity=0);
}


</style>

@extends('adminlte::layouts.app')

@section('htmlheader_title')
  {{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')
  <div class="container-fluid">

    <div class="row">
      <div class="col-md-12" id="main_contentDiv">
        
      <div class="container-fluid">
    <div class="parallax-div">
        <h1 class="parallax-text">
            Add An Eployee
        </h1>
    </div>
</div>

      <div class="row">
        <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">

      {!! Form::open(array('route' => 'addEmployee.store','method'=>'POST', 'files'=>true)) !!}
      <hr class="colorgraph">

          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
              <div class="form-group">
                           {{ Form::text('id',null,array('class' =>'form-control input-lg', 'placeholder'=>'ID')) }}
              </div>
            </div> 
          </div>
          <div class="row">
            <div class="col-xs-6 col-sm-6 col-md-6">
              <div class="form-group">
                          {{ Form::text('first_name',null,array('class' =>'form-control input-lg', 'placeholder'=>'First Name')) }}
              </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6">
              <div class="form-group">
                        
                {{ Form::text('last_name',null,array('class' =>'form-control input-lg' , 'placeholder'=>'Last Name')) }}
              </div>
            </div>  
          </div>
          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
              <div class="form-group">
                         {{ Form::text('nic',null,array('class' =>'form-control input-lg','placeholder'=>'National ID Number')) }}

              </div>
            </div> 
          </div>
          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
              <div class="form-group">
                         {{ Form::text('email',null,array('class' =>'form-control input-lg','placeholder'=>'Email')) }}

              </div>
            </div> 
          </div>
          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
              <div class="form-group">
                        {{ Form::file('file',null,array('class'=> 'form-control input-lg fileUpload')) }}

              </div>
            </div> 

          </div>
          <hr class="colorgraph">
          <div class="row">
          <div class="col-xs-6 col-md-6">{{ Form::submit('Submit',array('class' => 'btn btn-danger btn-lg btn-block')) }}</div>
        <div class="col-xs-6 col-md-6">{{ Form::submit('Submit',array('class' => 'btn btn-success btn-lg btn-block')) }}</div>
      </div>

     
         

          <hr class="colorgraph">
      {!! Form::close() !!}

      </div>
      </div>
      <div class="container">



</div>





    
      </div>
    </div>
  </div>
@endsection
