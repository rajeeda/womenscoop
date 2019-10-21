<?php
$to = "nadee0337@gmail.com";
$subject = "My subject";
$txt = "Hello world!";
$headers = "From: 00nadeerandeniya@gmail.com" . "\r\n" .
"CC: rajithagamage91@gmail.com";

mail($to,$subject,$txt,$headers);
?>