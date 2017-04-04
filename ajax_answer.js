
$(".ajax_answer").on('submit',function(e)
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
$('form.ajax_answer')[0].reset();
$.ajax({  
    type: type,
    url: url,  
    data: data,  
    success: function(msg){  
   
if(msg!='OK')
{

var login_response = "<div><p><b>Posted By:</b>";  
 var msg='['+msg+']';
 var obj=$.parseJSON(msg);
 $.each(obj,function(){

login_response+=' '+this['user']+'</p><p><b>Dated:</b>'+this['date']+'</p>'+this['com']+'<hr></div>';


 });

  $('#ajax_ans').css("display","block");
 $('#ajax_ans').css("padding","15px");
  $('#ajax_ans').css("padding-top","0px");
$('#formmm').html("Submitting...");
  setTimeout(function(){
$('#formmm').html("Submit");
 $('#ajax_ans').append(login_response);

}, 1000);
 

}


}

 }); 
 return false; 
   
 });  
  





