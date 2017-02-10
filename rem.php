<?php


session_start();
if(empty($_SESSION['cart'])){
echo "no";
}

$val=$_GET['id'];
foreach ($_SESSION['cart'] as $key => $value) {
	if($val==$value)
		{array_pop($_SESSION['cart']);}

}
header("Location: http://www.svakiya.com/test.php");

?>

