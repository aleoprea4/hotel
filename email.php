<?php
$to = "alexandru.oprea.fmi@gmail.com";
$subject = "Hotel contact mail";

$message = "
<html>
<head>
<title>The M hotel</title>
</head>
<body>
<p>This email contains  info about M</p>
<table>
<tr>
<th>Firstname</th>
<th>Lastname</th>
</tr>
<tr>
<td>Alex</td>
<td>O</td>
</tr>
</table>
</body>
</html>
";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <webmaster@example.com>' . "\r\n";
$headers .= 'Cc: myboss@example.com' . "\r\n";

mail($to,$subject,$message,$headers);
?>