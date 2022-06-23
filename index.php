<!DOCTYPE html>
<html>

<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<style type="text/css">
		
		.card {
  /* Add shadows to create the "card" effect */
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  border-radius: 5px;
}

/* On mouse-over, add a deeper shadow */
.card:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

/* Add some padding inside the card container */
.container {
  padding: 2px 16px;
}

	</style>


	<title>TEST</title>
</head>

<body class="">
	<script src="js/jquery-1.11.3.min.js"></script>


	<a href="#" id="testPush" name="testPush">PUSH</a>
	<a href="#" id="testPull" name="testPull">PULL</a>
	<br />
	<div id="divTestViewOutput">-- --</div>
</body>
</html>


<?php


?>

<script type="text/javascript">
	
	$(document).on('click','#testPush', function(event) {

		$this_id1 = this.id;

		$jqOut = 'divTestViewOutput';

		//SEND THE DATA USING JQUERY POST
		$ajax = $.post('php/test/test.push.php', {}, function() {
		})
		.done(function($jqData) {
			//RESULT
			$("#"+$jqOut).empty().append($jqData);
		})
		.fail(function($jqData) {
			//ERROR
			$("#"+$jqOut).empty().append("ERROR");	
		})
		.always(function($jqData) {
			//LOADING
			//$("#ID").trigger('click');
		});
	});



	$(document).on('click','#testPull', function(event) {

		$this_id1 = this.id;

		$jqOut = 'divTestViewOutput';

		//SEND THE DATA USING JQUERY POST
		$ajax = $.post('php/test/test.pull.php', {}, function() {
		})
		.done(function($jqData) {
			//RESULT
			$("#"+$jqOut).empty().append($jqData);
		})
		.fail(function($jqData) {
			//ERROR
			$("#"+$jqOut).empty().append("ERROR");	
		})
		.always(function($jqData) {
			//LOADING
			//$("#ID").trigger('click');
		});
	});

</script>