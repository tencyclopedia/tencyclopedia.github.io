<?php
if( $_POST )
{

	session_start();

	
$to = $_POST['email'];
echo "Order Confirmation Has Been Sent to ".$to;
$name=$_POST['name'];
$subject = "Order Confirmation ";

 foreach ($_SESSION['cart'] as $key => $value) {
    echo $value . "<br />";
}

$lol= array();

foreach ($_SESSION['cart'] as $key => $value) {
    array_push($lol,$value);
}

$message = "
<html>
<head>
<title>svakiya</title>
</head>
<body>

<div>&nbsp;</div>

<h3>Svakiya</h3>
Hey ".$name.",<br>
<center><h4>Order Summary</h4></center>
<hr>
".implode("<br>",$lol)."

<hr>


</body>
</html>
";

$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <support@svakiya.com>' . "\r\n";


mail($to,$subject,$message,$headers);

	//ip,username,pass
/*
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




header("Location: http://www.tencyclopedia.com");
die();

mysql_close($con);*/
}
?>