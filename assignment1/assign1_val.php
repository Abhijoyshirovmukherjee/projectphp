<?php

$number1= $_POST['number1'];
$number2= $_POST['number2'];
$number3= $_POST['number3'];
$number4= $_POST['number4'];
$number5= $_POST['number5'];


if( $number1>=$number2 && $number1>=$number3 && $number1>=$number4 && $number1>= $number5)
{
	echo "The Highest marks is in English: ";
	echo $number1;
}
else if( $number2>=$number1 && $number2>=$number3 && $number2>=$number4 && $number2>= $number5)
{
	echo "The Highest marks is in Maths: ";
	echo $number2;
}
else if( $number3>=$number2 && $number3>=$number1 && $number3>=$number4 && $number3>= $number5)
{
    echo "The Highest marks is in Physics: ";
    echo $number3;
}
if( $number4>=$number2 && $number4>=$number3 && $number4>=$number1 && $number4>= $number5)
{
    echo "The Highest marks is in Chemistry: ";
    echo $number4;
}
else if( $number5>=$number2 && $number5>=$number3 && $number5>=$number1 && $number5>= $number4)
{
     echo "The Highest marks is in Computer: ";
     echo $number5;
}

?>