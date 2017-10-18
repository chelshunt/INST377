<<<<<<< HEAD



<!DOCTYPE html>
<html>
<head>	
<style>
</style>

<script>
	function validateForm() {
    var x = document.forms["animalForm"]["animal"].value;
    if (x == "") {
        alert("Animal field must be filled out");
        return false;
    } else if (x=="Lion"){
    	alert("Lion is not acceptable...");
    	return false;
    }
}
</script>

<body>


<div>
	<form aname='food.php' method='POST'>
		<select name="foof">
			<option value="select" default >-Select--</option>
			<option value="cat">Cat</option>
			<option value="dog">Dog</option>
			<option value="elephant">Elephant</option>
		</select>
		<input type="submit"><br>
	</form>
</div>
</body>
</head>
=======
<?php 

$food = $_POST["food"];

if (isset($food)){
	$food = str_replace(' ', '', $food);
	echo "Received <strong>" . $food . "</strong> from the form.";
} else {
	echo "Nothing was received...";
}

?>
>>>>>>> upstream/master
