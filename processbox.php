<?php
if( $_POST )
{
	$to = $_POST['email'];
$name=$_POST['name'];
$subject = "Tencyclopedia - Thank You for Subscribing !";

$message = "
<html>
<head>
<title>Tencyclopedia</title>
</head>
<body>

<div>&nbsp;</div>

<span style='font-size: 2vw; text-align: center;'><em> &nbsp;<span style='font-family: helvetica, arial, sans-serif;'>t e n c y c l o p e d i a &nbsp; &nbsp; &nbsp;</span></span></em></span><br>
<hr>
Hey ".$name."  ,<br><br>
<p>Thank you for Subscribing . !!</p>
<br><br><hr>
</body>
</html>
";

$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <support@tencyclopedia.com>' . "\r\n";


mail($to,$subject,$message,$headers);

$con = mysql_connect("localhost","tencyclo_subscri","mxyzptlk702");

if (!$con)
{
   die('Could not connect: ' . mysql_error());
	#echo "<h2>NThank you for your feedback!</h2>";

}

mysql_select_db("tencyclo_sub", $con);


$insert_query = "insert into subscribe values (
            '".$_POST['name']."',
            
            '".$_POST['email']."')";

mysql_query($insert_query);
header ("Location:".$_SERVER['HTTP_REFERER']	);
#header("Location: http://www.tencyclopedia.com");
die();

mysql_close($con);
}
?>