

$(".abc").on('submit',function(e)
{  
e.preventDefault();
var that=$(this),
url=that.attr('action'),
type=that.attr('method'),
data={};
that.find('[name]').each(function(index,value)
{

var that=$(this),
name=that.attr('name'),
value=that.val();
data[name]=value;

});
$('form.abc')[0].reset();
$.ajax({  
    type: type,
    url: url,  
    data: data,  
    success: function(msg){  
   

 if(msg=='OK') 
 {  

var login_response = "Logging you in...";  
  $('#text-login-msg').empty();
  $("#icon-login-msg").addClass('glyphicon-ok').removeClass('glyphicon-chevron-right');
  $('#div-login-msg').css("background-color","#B9F6CA");
$('#div-login-msg').css("color","#00C853");
 $('#text-login-msg').html(login_response);

setTimeout(function(){
  $('#login-modal').hide();
  window.location.href = "private.php";
}, 3000);

 

}
 else
 {  
 var login_response = msg;
   $('#text-login-msg').empty();
   $("#icon-login-msg").addClass('glyphicon-remove').removeClass('glyphicon-chevron-right');
   $('#div-login-msg').css("background-color","#ffebee");
$('#div-login-msg').css("color","#b71c1c");
  $('#text-login-msg').html(login_response);
 }  

}

 }); 
 return false; 
   
 });  
  
