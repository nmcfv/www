<?php
# LIST EMAIL ADDRESS
$recipient = "chris@nmcfp.com";

# SUBJECT (Subscribe/Remove)
$subject = "Subscribe";

# SENDER - WE ALSO USE THE RECIPIENT AS SENDER
$sender = "info@nmcfp.com";

$name = $_REQUEST['Name'];
$email = $_REQUEST['Email'];

if (!preg_match("/^[-a-zA-Z ]*$/",$name)) {
	print "Invalid name format.";
	die();
}

if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$email)) {
	print "Invalid email format.";
	die();
}

# MAIL BODY
$body .= "Name: ".$name." \n";
$body .= "Email: ".$email." \n";

$r_subject = "Thanks for Subscribing!";
$r_body = "Thanks for subscribing to NMCFP's mailing list. Please allow up to 24 hours for new subscriptions to be processed. If at any time you would like to unsubscribe, please contact us by email at info@nmcfp.com or by phone at (505) 261-9566.";

## SEND MESSGAE ##
mail( $recipient, $subject, $body, "From: $sender" ) or die ("Subscription failed.");
mail( $email, $r_subject, $r_body, "From: $sender" );

## SHOW RESULT PAGE ##
print "
<div class='font' style='text-align:center; font-family: Arial, Helvetica, sans-serif;'>
Thanks for subscribing!<br />Please allow up to 24 hours for <font style='font-weight:bold;'>$email</font> to be added to the mailing list.
</div>
";
?>