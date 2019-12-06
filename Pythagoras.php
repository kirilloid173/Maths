<?php
$AB=$_POST['AB'];
$AC=$_POST['AC'];
$BC=$_POST['BC'];
$result=((($AB*$AB)))*(($AC*$AC))*($BC*$BC);
$result1=($AB*$AB);
$result2=($AC*$AC);
$result3=($BC*$BC);
echo "<p style='color:green; font-size:32px;  margin-top:250px; text-align:center;'>" . "The result: ". $result . "</p>";
echo "<br><br>";
echo "<p style='text-align:center'>Information about the operation <br>First: ".$result1."<br> Second: ".$result2."<br>Three: ".$result3."</p>";
echo "<p style='text-align:center'> <br> Now we find root of result</p>";
echo "<p style='text-align:center'> <br>Finally result= ". sqrt($result)."</p>";
?>