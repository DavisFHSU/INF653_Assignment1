<?php
    // http://localhost/book_apps/assignment_1/display_results.php?first_name=Lili&last_name=Murach&age=23
	// get the data from the form 
	$first_name = filter_input(INPUT_GET, 'first_name');
	$last_name = filter_input(INPUT_GET, 'last_name');
	$age = filter_input(INPUT_GET, 'age', FILTER_VALIDATE_INT);
	$date = date('m/d/y');
	
	if (is_null($first_name)) {
		$error_message='You must enter a valid first name.';
	} else if (is_null($last_name)) {
		$error_message='You must enter a valid last name.';
	} else if ($age === FALSE || is_null($age)) {
		$error_message='You must enter a valid age.';
	} else if ($age <=0) {
		$error_message='You must enter an age greater that zero.';
	} else {
		$error_message='';
	}
	
	$message1='';
	$message2='';
	$message3='';
	$message4='';
	
	
	if ($error_message=='') {	
	
		$message1 = 'Hello, my name is ' . $first_name . ' ' . $last_name;
		
		if ($age >= 18) {
			$message2 = 'I am ' . $age . ' and I am old enough to vote in the United States.';
		} else { 
			$message2 = 'I am ' . $age . ' and I am not old enough to vote in the United States.';
		};	
	
		$days = $age*365;
	
		$message3 = 'I am ' . $days . ' days old.';
		
		$message4= 'The date is ' . $date; 
	}
	

?>

<!DOCTYPE html>
<html>
<head>
    <title>Assignment #1</title>
    <link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
	<h1>Assignment #1</h1>
	<p><?php echo htmlspecialchars($error_message); ?></p>
    <p><?php echo htmlspecialchars($message1); ?> </p>
	<p><?php echo htmlspecialchars($message2); ?></p>
	<p><?php echo htmlspecialchars($message3); ?></p>
	<p><?php echo htmlspecialchars($message4); ?></p>
	
</body>
</html>
