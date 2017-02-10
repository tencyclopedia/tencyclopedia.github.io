<?php
if( $_POST )
{
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

header("Location: http://www.tencyclopedia.com/mobiletrans.html");
die();

mysql_close($con);
}
?>