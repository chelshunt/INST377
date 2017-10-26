<html>
<head>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<style type="text/css">
	#square {
		margin-top: 20px;
		margin-left: 100px;
		height: 200px;
		width: 200px;
		background: orange;
	}

	div {
		margin-bottom: 20px;
	}

	.round {
		border-radius: 20px;
	}

	#square:hover{
		cursor: pointer;
	}
	
</style>
<script>

$(document).ready(function(){

	var sentence = "default";

	$("#square").click(function(){

		var request1 = $.ajax({
			url: "ajax_test.php",
			data: {name: "John Smith"},
			type: "POST"			
		});
<<<<<<< HEAD
		
		request1.done(function(data, status){
			sentence = data;
			$("#square").text(sentence);			
=======

<<<<<<< HEAD
		request1.done(function(data, status){
			sentence = data;
			$("#square").text(sentence).css("color", "blue");
>>>>>>> upstream/master
		});

		var request2 = $.ajax({
			url: "ajax_answer.php",
			data: {data: sentence},
			type: "POST"
<<<<<<< HEAD
		});

		request2.done(function(data, status){
			// display the returned data below the square
			console.log(sentence);	
			// your code goes here	
		});		

		// your code goes here

=======
		})
=======
		

		
>>>>>>> ee89c8e279eb796626cc938cfcf5f966548ce109
		
	
		$.when(request1.done(function(data, status){
			sentence = data;
			$("#square").text(sentence).css("color", "blue");
		})).then(function(){	
			var request2 = $.ajax({
				url: "ajax_answer.php",
				data: {data: sentence},
				type: "POST"
			})		
			request2.done(function(data, status){
				// display the returned data below the square
				console.log(data);	
				// your code goes here	
				$("#square").text(data)
			});	
		});

>>>>>>> upstream/master
	});


});



</script>
</head>

<body>
	
	<div id="square"></div>
	
</body>
</html>