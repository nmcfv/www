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