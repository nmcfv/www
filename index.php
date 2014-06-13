<html>
<link rel="stylesheet" type="text/css" href="./html/style.css">

<head>
<title>New Mexico CFV</title>
<meta charset="UTF-8">
<link rel="icon" type="image/png" href="./images/title.png" />
<script src="./html/jquery-1.11.0.min.js"></script>
</head>

<body>
<div class="banner"></div>

<?php
	include './html/nav.html';

	print '<div class="content">';

	$content = $_GET['content'];
	$found = 0;
	if ($content == "") $content = "home";

	# permanent fixtures
	if ($content == "home") {include './html/home.html'; $found = 1;}
	if ($content == "churches") {include './html/churches.html'; $found = 1;}
	if ($content == "issues") {include './html/issues.html'; $found = 1;}
	if ($content == "people") {include './html/people.html'; $found = 1;}
	if ($content == "contact") {include './html/contact.html'; $found = 1;}
	
	# temporary pages
	if ($content == "message") {include './html/message.html'; $found = 1;}
	if ($content == "coming_soon") {include './html/coming_soon.html'; $found = 1;}
	
	# events
	if ($content == "colson") {include './html/colson.html'; $found = 1;}
	
	if ($found == 0) {
		echo "<center>Error: page not found.</center>";
	}
	
	print "</div>";
	include './html/social.html';
?>

<footer>
<iframe class="rights" src="./html/rights.html" seamless="yes"></iframe>
</footer>
</body>
</html>