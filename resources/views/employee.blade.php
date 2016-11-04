@extends('adminlte::layouts.app')

@section('htmlheader_title')
	{{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')
	<div class="container-fluid spark-screen">
		<div class="row">
			<div class="col-md-8 col-md-offset-2" id="main_contentDivEmployee">
				  <div class="caption" class="pull-left">
                      <a href="http://bootsnipp.com/" class="btn btn-primary icon  pull-right">Select</a>
                      <h4>      
                      <a href="#" >Luis Felipe Kaufmann</a>
                      </h4>
                      <small><b>RG: </b>99384877</small>  
          </div>
			</div>
		</div>
	</div>
@endsection
