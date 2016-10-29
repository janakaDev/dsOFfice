function process()
{
	//document.getElementById("main_contentDiv").innerHTML="<h2>Janaka</h2>";


	 
   $(document).ready(function(){

     $("empA").click(function(){

       alert("janaka");

    });

});

}


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
