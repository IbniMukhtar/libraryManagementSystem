//**********************************************java script code
$(document).ready(function(){
		 $("#sub1").attr("disabled",true);
//******************Name validation**********************************
	$("#name[type='text']").on("keyup bind cut copy paste",function(){
      if ($("#name").val()==""){ $("#nameError").html('**Name is required.');}

			else if(!validateName($("#name").val()))
		  { $("#nameError").html('**invalid name format');$("#sub1").attr("disabled",true);}

	  else if(!isNaN($("#name").val()))
		  { $("#nameError").html('**numbers are not allowed');$("#sub1").attr("disabled",true);}

	  else if($("#name").val().length<3)
	    { $("#nameError").html('**Name should be atleast 3 characters');$("#sub1").attr("disabled",true);}
	  else if($("#name").val().length>20)
	    { $("#nameError").html('**Name should not exceed 20 characters ');$("#sub1").attr("disabled",true);}
	   else{$("#nameError").html('<b></b>');}
	function validateName($name){
		var temp=/^([a-zA-Z]{1,}[ ]{0,1}[a-zA-Z]{0,}[ ]{0,1}[a-zA-Z]{0,})$/;
		return temp.test($name);
	}
	});
//************************************username validation******************
$("#userName[type='text']").on("keyup bind cut copy paste",function(){
  var userName = $(this).val();
  	$("#sub1").attr("disabled",true);
	if ($("#userName").val()=="") {
		$("#userNameError").html('**username is rquired');
		$("#sub1").attr("disabled",true);
	}

 	else if (!validateuserName($("#userName").val())) {
		 $("#userNameError").html('**invalid userName format');
		 $("#sub1").attr("disabled",true);
	 }

  else if($("#userName").val().length<6){
		 $("#userNameError").html('**Name must be atleast 6 characters');
     $("#sub1").attr("disabled",true);
	 }

    else if($("#userName").val().length>9){
			 $("#userNameError").html('**Name should not exceed 10 characters ');
       $("#sub1").attr("disabled",true);
	   }
		 // else if(userName)
		 //  {
			// 	 $.ajax({
			// 						url:'registerStudent.php',
			// 						method:"POST" ,
			// 						data:{username_txt: userName} ,
			// 						success:function(response){
			// 							if(response!=0)
			// 							{
			// 							 $("#userNameError").html('**username already taken');
			// 							 $("#sub1").attr("disabled",true);
			// 							}
			// 							else {
			// 								$("#userNameError").html('**username exists');
			// 							}
			// 						}
			// 					});
			//  }
     else{
			 $("#userNameError").html('<b></b>');
       // $("#sub1").attr("disabled",false);
		 }
//validateuserName function*****************************************************
  function validateuserName($userName)
	  {
      var temp=/^([a-zA-Z0-9._]+)$/;
      return temp.test($userName);
    }

});
//*********************ROLL NO VALIDATION****************************************************
	$("#rollno[type='number']").on("keyup bind cut copy paste",function(){
		if ($("#rollno").val()==""){ $("#rollnoError").html('**rollno is required.');$("#sub1").attr("disabled",true);}
		else if($("#rollno").val().length !=7)
	    { $("#rollnoError").html('**rollno must be exactly 7 dights');$("#sub1").attr("disabled",true);}
		 else{$("#rollnoError").html('<b></b>');}
	});
//*************************mobile validation**********************************************
	$("#mobile[type='number']").on("keyup bind cut copy paste",function(){
		if ($("#mobile").val()==""){ $("#mobileError").html('**mobile no. is required.');$("#sub1").attr("disabled",true);}
		else if($("#mobile").val().length !=10)
	    { $("#mobileError").html('**mobile no. must be exactly 10 dights');$("#sub1").attr("disabled",true);}
		 else{$("#mobileError").html('<b></b>');}
	});
//********************************email  validation*****************************
	$("#email").on("keyup bind cut copy paste",function(){
		if ($("#email").val()==""){ $("#emailError").html('**email  is required.');$("#sub1").attr("disabled",true);}
		else if (!validateEmail($("#email").val()))
		{  $("#emailError").html('**invalid email format');$("#sub1").attr("disabled",true);	}
		 else{$("#emailError").html('<b></b>');$("#sub1").attr("disabled",false);}
	    function validateEmail($email){
		var temp=/^([\w-\.]+@[\w-]+\.[\w-]{2,4})?$/;
		return temp.test($email);
	    }
	});

//***********************************************pravent redirection*********************************
  // $("#sub1").click(function(){
  //
  //   $.post( $("#form1").attr("action") , $("#form1":input).serializeArray() ,function(info){
	// 	     $("#ack").empty();
	// 	     $("#ack").html(info);
	// 	       clean();
  //        });
  //
	// $("#form1").submit(function(){
	// 	return false;
	// });
  // function clean(){
  //   $("#form1":input).each( function(){
  //     $(this).val(" ");
  //   });
  // }
  // });
//*********************************************clear the existing data************************************

//script is closed below
});
