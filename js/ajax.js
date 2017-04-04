$(document).ready(function()
{

$('#').click(function(){


	$.post("answer_submit.php",
	{
		ans:$('#answer').val(),
	},
	function(data)
	{
		$('#').html(data);
	}

		);



});


});