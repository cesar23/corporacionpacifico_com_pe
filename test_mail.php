<?php
/*
$to = "sistemas@corporacionpacifico.com.pe";
$subject = "My subject2";
$txt = "Hello world!";
$headers = "From: ventas@corporacionpacifico.com.pe" . "\r\n" .
"CC: somebodyelse@example.com";

mail($to,$subject,$txt,$headers);
*/
?>

<?php
//$to = "sistemas@corporacionpacifico.com.pe";
$to = "sistemas_aempresarial@hotmail.com";
$subject = "HTML email-1";

$message = "
<html>
<head>
<title>HTML email</title>
</head>
<body>
<p>This email contains HTML Tags!</p>
<table>
<tr>
<th>Firstname</th>
<th>Lastname</th>
</tr>
<tr>
<td>John</td>
<td>Doe</td>
</tr>
</table>
</body>
</html>
";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: Sistema de ventas <ventas@corporacionpacifico.com.pe>' . "\r\n";
$headers .= 'Cc: myboss@example.com' . "\r\n";

mail($to,$subject,$message,$headers);
?>