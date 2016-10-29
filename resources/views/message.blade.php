@extends('adminlte::layouts.app')

@section('htmlheader_title')
	{{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')
	<div class="container-fluid spark-screen">
		<div class="row">
			<div class="col-md-8 col-md-offset-2" id="main_contentDiv">
				 <div id = 'msg'>This message will be replaced using Ajax. 
         			Click the button to replace the message.</div>
      				<?php
        			 echo Form::button('Replace Message',['onClick'=>'process()']);
     				?>
			</div>
		</div>
	</div>
@endsection
<script>
function getMessage(){
            $.ajax({
               type:'POST',
               url:'/getmsg',
               data:'_token = <?php echo csrf_token() ?>',
               success:function(data){
                  $("#msg").html(data.msg);
               }
            });
 }
</script>