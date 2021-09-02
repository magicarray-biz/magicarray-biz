<?php
$name = $_POST['fname'];
$company = $_POST['fcompany'];
$phone = $_POST['fphone'];
$email = $_POST['femail'];
$country = $_POST['fcountry'];
$requirements = $_POST['frequirements'];
$formcontent="Request a Quote of Magic Array Technology Solutions \n From: $name \n Email: $company \n Phone: $phone \n Email: $email \n Country: $country \n Requirements: $requirements";
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

