<?php
$age="";     //declaration //
$gender="";
$Dengue=array("chills","fatigue","vomiting","headache","pain_in_abdomen");
$Malaria=array("chills","high_fever","sweating","headache","vomiting");
$Flu=array("high fever","sweating","headache","cough","Sore_throat");
$Anthrax=array("pains_in_muscles","dark_scab_in_skin","malaise","fever","shortness_of_breath");
if(isset($_POST['check']))
{
	$age=$_POST['age'];
	//print $age;
	$gender=$_POST['gender'];
	//print $gender;
	$symptoms=array();
	if(isset($_POST["chills"])){
		array_push($symptoms,"chills");
	}
	if(isset($_POST["fatigue"]))
	{
		array_push($symptoms,"fatigue");
	}
	if(isset($_POST["vomiting"]))
	{
		array_push($symptoms,"vomiting");
	}
	if(isset($_POST["headache"]))
	{
		array_push($symptoms,"headache");
	}
	if(isset($_POST["pain_in_abdomen"]))
	{
		array_push($symptoms,"pain_in_abdomen");
	}
	if(isset($_POST["high_fever"]))
	{
		array_push($symptoms,"high_fever");
	}
	if(isset($_POST["sweating"]))
	{
		array_push($symptoms,"sweating");
	}
	if(isset($_POST["cough"]))
	{
		array_push($symptoms,"cough");
	}
	if(isset($_POST["Sore_throat"]))
	{
		array_push($symptoms,"Sore_throat");
	}
	if(isset($_POST["pains_in_muscles"]))
	{
		array_push($symptoms,"pains_in_muscles");
	}
	if(isset($_POST["dark_scab_in_skin"]))
	{
		array_push($symptoms,"dark_scab_in_skin");
	}
	if(isset($_POST["malaise"]))
	{
		array_push($symptoms,"malaise");
	}
	if(isset($_POST["fever"]))
	{
		array_push($symptoms,"fever");
	}
	if(isset($_POST["shortness_of_breath"]))
	{
		array_push($symptoms,"shortness_of_breath");
	}
	$N=sizeof($symptoms);
	$DengueSize=0;
	$MalariaSize=0;
	$FluSize=0;
	$AnthraxSize=0;
	//print_r($symptoms);
	for ($x = 0; $x<$N; $x++)
  {
   foreach ($Dengue as $value) 
   {
	   //print $value."<br>";
	   //print $symptoms[$x]." s<br>";
    if(strcmp($value,$symptoms[$x])==0)
    {
     $DengueSize=$DengueSize+1; 
    }
   }
   foreach ($Malaria as $value) 
   {
    if (strcmp($value,$symptoms[$x])==0)
    {
     $MalariaSize+=1;
    }
   }
   foreach ($Flu as $value) 
   {
    if (strcmp($value,$symptoms[$x])==0)
    {
     $FluSize+=1;
    }
   }
   foreach ($Anthrax as $value) 
   {
    if (strcmp($value,$symptoms[$x])==0)
    {
     $AnthraxSize+=1;
    }
   }
 }
$Max=max($DengueSize,$MalariaSize,$FluSize,$AnthraxSize);
if($Max==$DengueSize)
 {
  //echo "you may have Dengu"."<br>";
   header('Location: Dengue.html');
   exit;
  
 }
if($Max==$MalariaSize)
 {
  //echo "you may have Malaria"."<br>";
   header('Location: Malaria.html');
  exit;
 }
if($Max==$FluSize)
 {
  //echo "you may have Flu"."<br>";
   header('Location: FLu.html');
   exit;
 }

if($Max==$AnthraxSize)
 {
  //echo "you may have Anthrax"."<br>";
  header('Location: Anthrax.html');
  exit;
 }
}
?>
