<?php

session_start();

/*foreach ($_SESSION['cart'] as $key => $value) {
    echo $value . "<br />";
}*/
?>

<!DOCTYPE html>
<html>
<head>
	<title>test_db</title>
</head>
<body>
<form action="checkout.php" method="post">
<input type="text" name="name">
<input type="email" name="email">
<button type="submit"> submit</button>
</form>

<div class="order">
<center><h4>Order Summary</h4></center>
<hr>
<?php

 foreach ($_SESSION['cart'] as $key => $value) {
    echo $value . "<br />";
}
?>

<hr>

</div>

</body>
</html>