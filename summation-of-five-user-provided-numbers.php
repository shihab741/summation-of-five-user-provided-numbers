<?php
/**
 *
 * PHP code for showing summation of five user provided numbers
 *
 * Coded by: Shihab Uddin Ahmed
 *
 */

if (isset($_POST['btn']))
{

	// To get first number, default value is zero
	if (is_numeric($_POST['firstNumber']))
	{
		$firstNumber = $_POST['firstNumber'];
	}
	else
	{
		$firstNumber = 0;
	}


	// To get second number, default value is zero
	if (is_numeric($_POST['secondNumber']))
	{
		$secondNumber = $_POST['secondNumber'];
	}
	else
	{
		$secondNumber = 0;
	}


	// To get third number, default value is zero
	if (is_numeric($_POST['thirdNumber']))
	{
		$thirdNumber = $_POST['thirdNumber'];
	}
	else
	{
		$thirdNumber = 0;
	}


	// To get fourth number, default value is zero
	if (is_numeric($_POST['fourthNumber']))
	{
		$fourthNumber = $_POST['fourthNumber'];
	}
	else
	{
		$fourthNumber = 0;
	}


	// To get fifth number, default value is zero
	if (is_numeric($_POST['fifthNumber']))
	{
		$fifthNumber = $_POST['fifthNumber'];
	}
	else
	{
		$fifthNumber = 0;
	}



	$result = $firstNumber + $secondNumber + $thirdNumber + $fourthNumber + $fifthNumber;
}


?>

<!DOCTYPE html>
<html>
<head>
	<title>PHP code for showing summation of five user provided numbers</title>
</head>
<body>

<h3>PHP program for showing summation of five user provided numbers</h3>
<strong>Coded by: </strong> Shihab Uddin Ahmed<br>

<br>
<hr>
<form method="post">
	<table>
		<tr>
			<td>First number:</td>
			<td><input type="text" name="firstNumber"></td>
		</tr>
		<tr>
			<td>Second number:</td>
			<td><input type="text" name="secondNumber"></td>
		</tr>
		<tr>
			<td>Third number:</td>
			<td><input type="text" name="thirdNumber"></td>
		</tr>
		<tr>
			<td>Fourth number:</td>
			<td><input type="text" name="fourthNumber"></td>
		</tr>
		<tr>
			<td>Fifth number:</td>
			<td><input type="text" name="fifthNumber"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="btn" value="Submit"></td>
		</tr>
	</table>
</form>


<!-- Table below is shown only if 'Submit' button is pressed. -->
<?php if(isset($result)) : ?>
	<table border="1">
		<tr>
			<th>First number</th>
			<th>Second number</th>
			<th>Third number</th>
			<th>Fourth number</th>
			<th>Fifth number</th>
			<th>Summation</th>
		</tr>
		<tr>
			<td><?php echo $firstNumber; ?></td>
			<td><?php echo $secondNumber; ?></td>
			<td><?php echo $thirdNumber; ?></td>
			<td><?php echo $fourthNumber; ?></td>
			<td><?php echo $fifthNumber; ?></td>
			<td><?php echo $result; ?></td>
		</tr>
	</table>
<?php endif; ?>

</body>
</html>