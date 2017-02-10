<?php
$to = "praveenmxy@gmail.com";
$subject = "HTML email";

$message = "
<html>
<head>
<title>Tencyclopedia</title>
</head>
<body>
<p>Thank you for sub stay connected :D</p>
<table>
<tr>
<th>nig</th>
<th>nig</th>
</tr>
<tr>
<td>lol</td>
<td>lel</td>
</tr>
</table>
</body>
</html>
";

$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <support@tencyclopedia.com>' . "\r\n";
$headers .= 'Cc: praveenmxy@gmail.com' . "\r\n";

mail($to,$subject,$message,$headers);
echo "lol";
?>