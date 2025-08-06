<?php if(isset($_POST["fullname"]))
{

$name=$_POST["fullname"];
$email=$_POST["email"];
$address=$_POST["address"];
$degree=$_POST["degree"];
$dateofbirth=$_POST["year"];
$dateofbirth.="/".$_POST["month"];
$dateofbirth.="/".$_POST["day"];
$text="Name: ".$name."\nAddress: ".$address."\nEmail Id: ".$email."\nQualification: ".$degree."\nDate Of Birth: ".$dateofbirth;
$sub="New Member asked to join Prosoft Grow !!!";
mail("pilotprosoft@gmail.com",$sub,$text);

}

header("Location: https://www.pilotprosoft.com/rdr");
?>