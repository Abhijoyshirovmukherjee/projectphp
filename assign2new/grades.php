<?php
$number[]= $_POST['number1'];
$number[]= $_POST['number2'];
$number[]= $_POST['number3'];
$number[]= $_POST['number4'];
$number[]= $_POST['number5'];
foreach ($number as $value) {
	# code...

switch ($value) {
	case 10:
	echo " GRADE O";
		echo "<br>";
		break;
	case 9:
		
		echo " GRADE E ";
		echo "<br>";
		break;
		
		case 8:
		
		echo "GRADE A";
		echo "<br>";
		
		case 7:

		echo "GRADE B";
		echo "<br>";
		break;
		case 6:
	     echo "GRADE C";
	     echo "<br>";
			
			break;
		case 5:
		echo "GRADE D";
		echo "<br>";
		break;
	
	default:
		echo "FAILED";
		echo "<br>";

}
}
?>




