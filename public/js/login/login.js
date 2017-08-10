$("document").ready(function(){
    $("#btnlogin").click(function(){

        var frmlogin = $("#frmlogin").serialize();
        var username = $("#username").val();
    	var password = $("#password").val();

	    $.ajax({
	        type    :"POST",
	        data    :frmlogin,
	        url     :"postLogin",
	        beforeSend:function(){

	        },
	        success:function(response){
	        	$("#divresult").html(response);
	        }
	    });

	    // $.get("getLogin",function(data){
	    // 	$("#divresult").html(data);
	    // 	console.log(data);
	    // });  
    	
    	// $.post("postLogin",{username:username, password:password},function(data){
    	// 	$("#divresult").html(data);
    	// 	console.log(data);
    	// });
    });
});