<?php if(isset($_POST["fullname"]))
{

$name=$_POST["fullname"];
$email=$_POST["email"];
$phone=$_POST["phone"];
$address=$_POST["address"];
$degree=$_POST["degree"];
$dateofbirth=$_POST["year"];
$dateofbirth.="/".$_POST["month"];
$dateofbirth.="/".$_POST["day"];



$text="Name: ".$name."\nEmail Id: ".$email."\nQualification: ".$degree."\nAddress: ".$address."\nPhone No: ".$phone."\nDate Of Birth: ".$dateofbirth;

$sub="New Member asked to join Prosoft Grow !!!";
mail("pilotprosoft@gmail.com",$sub,$text);

}

header("Location: https://www.pilotprosoft.com/rdr");
?>