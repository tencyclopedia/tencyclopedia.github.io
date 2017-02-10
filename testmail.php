<?php

$to = "praveenmxy@gmail.com";

$subject = "Test";

$message = "lololololololol";

$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <support@tencyclopedia.com>' . "\r\n";


mail($to,$subject,$message,$headers);

?>