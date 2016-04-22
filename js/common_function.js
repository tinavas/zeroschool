function check_organization(org_name,id)
{
	$.ajax({
			type: 'POST',
			url :'login/verification_new_user',
			data:{val:org_name, field_name:'Organization'},
		  })	
		 .done(function(msg){
			 if(msg!==''){
			 document.getElementById(id).value="";
			 document.getElementById(id).focus();
			 }
			 $("#show_error").html(msg);
			return false;
		 }); 
	return false;
}


function check_email(email,id)
{
	$.ajax({
			type:'POST',
			url:'login/verification_new_user',
			data:{val:email, field_name:'Email'},
		  })
	.done(function(msg){
		if(msg!==''){
		document.getElementById(id).value="";
		document.getElementById(id).focus();
		}
		$("#show_error").html(msg);
		return false;
	});	  
	return false;
}

function check_username(username)
{
	$.ajax({
			type: 'POST',
			url: 'verification_new_user',
			data:{val:username, field_name:'Username'},
		  })
	.done(function(msg){
		$("#show_error").html(msg);
		return false;
		 });
		 return false;
}

function check_dbname(dbname,id)
{	var id='db_name';
	$.ajax({
			type: 'POST',
			url: 'login/verification_new_user',
			data:{val:dbname, field_name:'Database name'},
		  })
	.done(function(msg){
		if(msg!==''){
		 document.getElementById(id).value="";
		 document.getElementById(id).focus();
		}
		$("#show_error").html(msg);
		return false;
		 });
		 return false;
}

 function application_entry(value)
{	
	if(document.getElementById('chk').checked==true)
		{     
			var name =document.getElementById('name').value;
			var email =document.getElementById('email').value;
			var mobile =document.getElementById('mobile').value;
			var username =document.getElementById('username').value;
			var password =document.getElementById('password').value;
			document.getElementById('app_admin_name').value= name;
			document.getElementById('app_email').value= email;
			document.getElementById('app_mobile').value= mobile;
			document.getElementById('app_username').value= username;
			document.getElementById('app_password').value= password;
		}
	else{
			document.getElementById('app_admin_name').value= '';
			document.getElementById('app_email').value= '';
			document.getElementById('app_mobile').value= '';
			document.getElementById('app_username').value= '';
			document.getElementById('app_password').value= '';
		}
	
	//alert(email);
} 
function myfunction()
{var organization_name = document.getElementById('org').value;
			var name =document.getElementById('name').value;
			var email =document.getElementById('email').value;
			var mobile =document.getElementById('mobile').value;
			var username =document.getElementById('username').value;
			var password =document.getElementById('password').value;
			document.getElementById('app_admin_name').value= name;
			document.getElementById('app_email').value= email;
			document.getElementById('app_mobile').value= mobile;
			document.getElementById('app_username').value= username;
			document.getElementById('app_password').value= password;
			document.getElementById('db_name').value= organization_name;
}

function toggle_visibility(className) {

       var els = document.getElementsByClassName(className);
	   
	    for(var i=0; i<els.length; ++i){
      var s = els[i].style;
      s.display = s.display==='block' ? 'none' : 'block';
   };
 
    }

/*
function CustomAlert(){
    this.render = function(dialog){
        var winW = window.innerWidth;
        var winH = window.innerHeight;
        var dialogoverlay = document.getElementById('dialogoverlay');
        var dialogbox = document.getElementById('dialogbox');
        dialogoverlay.style.display = "block";
        dialogoverlay.style.height = winH+"px";
        dialogbox.style.left = (winW/2) - (550 * .5)+"px";
        dialogbox.style.top = "100px";
        dialogbox.style.display = "block";
        document.getElementById('dialogboxhead').innerHTML = "Acknowledge This Message";
        document.getElementById('dialogboxbody').innerHTML = dialog;
        document.getElementById('dialogboxfoot').innerHTML = '<button onclick="Alert.ok()">OK</button>';
    }
	this.ok = function(){
		document.getElementById('dialogbox').style.display = "none";
		document.getElementById('dialogoverlay').style.display = "none";
	}
}
var Alert = new CustomAlert();
*/