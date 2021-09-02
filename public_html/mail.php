<?php
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$subject = $_POST['subject'];
$comments = $_POST['comments'];
$formcontent="CONTACT FORM OF Magic Array Technology Solutions \n From: $name \n Email: $email \n Phone: $phone \n Subject: $subject \n Comments: $comments";
$recipient = "mail@magicarray.com, sustvm@gmail.com, magicarray@gmail.com";
$subject = "Contact Form";
$mailheader = 'MIME-Version: 1.0' . "\r\n";
$mailheader = 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "" . "<a href='form.html' style='text-decoration:none;color:#ff0099;'></a>";
?>

<html> 
 <head>
<script type="text/javascript">
<!--
function delayer(){
    window.location = "<?php echo $_SERVER['HTTP_REFERER']; ?>"
}
//-->
</script>
</head>
<body onLoad="setTimeout('delayer()', 3000)">
	

		<center>		

		<p style="font-size:18px;"> Thank You. <br><br>We will be in touch with you very soon. </p>  
</center>

</body>
</html>

