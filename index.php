<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="./html/style.css">

<head>
<meta charset="UTF-8">
<title>New Mexico CFV</title>
<link rel="icon" type="image/png" href="./images/title.png" />
<script src="./html/jquery-1.11.0.min.js"></script>
</head>

<body>
<div class="page">

<!--[if lt IE 10]>
<div class="font" style="padding:10px; text-align:center; width:500px; margin:0 auto; display:block;">
<p style="font-size:26px; font-weight:bold; margin-top: 0px;">Whoops!</p>
You appear to be using an unsupported/out of date browser (such as IE9 or 
earlier). Please consider upgrading to a modern browser such as 
<a class="link" href="https://www.google.com/chrome/browser/#eula">Chrome</a> or 
<a class="link" href="https://www.mozilla.org/en-US/firefox/new/?utm_source=firefox-com&utm_medium=referral">Firefox</a> 
or updating to the <a class="link" href="http://www.microsoft.com/en-us/download/internet-explorer-11-details.aspx">most recent version of Internet Explorer<a>.
</div>
<script type="text/undefined">
<![endif]-->
    
<?php
        print '<div class="banner"></div>';
	include './html/nav.html';

	print '<div class="content"><div id="content">';

	$content = $_GET['content'];
	$found = 0;
	if ($content == "") $content = "home";

	# permanent fixtures
	if ($content == "home") {include './html/home.html'; $found = 1;}
        if ($content == "churches") {include './html/churches.html'; $found = 1;}
	if ($content == "issues") {include './html/issues.html'; $found = 1;}
	if ($content == "people") {include './html/people.html'; $found = 1;}
	if ($content == "contact") {include './html/contact.html'; $found = 1;}
      	if ($content == "coming_soon") {include './html/coming_soon.html'; $found = 1;}
        
	# events
	if ($content == "colson") {include './html/colson.html'; $found = 1;}	
	
        # vote 2014
        if ($content == "vote") {include './html/vote/vote.html'; $found = 1;}
        if ($content == "call_to_vote") {include './html/vote/call_to_vote.html'; $found = 1;}
        
	# misc temp
	if ($content == "message") {include './html/message.html'; $found = 1;}
	
	if ($found == 0) {
		echo "<center>Error: page not found.</center>";
	}
	
	print '</div></div>';
	include './html/social.html';
        
        print '<footer>';
        include './html/rights.html';
        print '</footer>';
?>

</div>
</body>
<script id="link_handler" src="./html/link_handler.js"></script>
</html>