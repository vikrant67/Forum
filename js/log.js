$(function(){
  $("button#submitnote").click(function(){
    $.ajax ({
      type:"POST",
      url:"login.php",
      data: $('form.noteform').serialize(),
      success: function(msg){
        $("#thanks").html(msg)
        $("form.noteform").modal('hide');
      },
      error: function(){
        alert("failure");
      }
    });
  });
});

/*$(function()
{
	$("#contact-form").submit(function(e)


	{
		
			e.preventDefault();
   		
		$form=$(this);
		$.post(document.location.url, $(this).serialize(),function(data){

			$feedback= $("<div>").html(data).find(".form-feedback").hide();
			$form.prepend($feedback)[0].reset();
			$feedback.fadeIn(1000);

			
		});


	});
});*/



