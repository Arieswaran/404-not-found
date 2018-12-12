<?php
//$data="63.0 1.0 1.0 145.0 233.0 1.0 2.0 150.0 0.0 2.3 3.0 0.0 6.0";
//print $data;
$data="";
$data.=$_POST["age"];
$data.=" ".$_POST["Gender"];
$data.=" ".$_POST["Chest_pain_type"];
$data.=" ";
$data.=$_POST["blood_pressure"];
$data.=" ";

$data.=$_POST["cholestoral"];
$data.=" ";

$data.=$_POST["blood_sugar"];
$data.=" ";

$data.=$_POST["Electrocardiographic_results"];
$data.=" ";
$data.=$_POST["max_heart_rate"];
$data.=" ";
$data.=$_POST["exercise_induced_angina"];
$data.=" ";
$data.=$_POST["oldpeak"];
$data.=" ";
$data.=$_POST["slope"];
$data.=" ";
$data.=$_POST["ca"];
$data.=" ";
$data.=$_POST["thal"];

echo exec("python HeartDisease.py ".$data);
//$i=$_GET["name"];
//echo "Hi";
//echo $i;
?>
