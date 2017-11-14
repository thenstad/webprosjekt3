<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
	<?php
	$url = "http://localhost:8983/solr/wp3core/select?q=*:*&wt=json";
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$result = curl_exec ($ch);
	curl_close ($ch);
	echo $result;
	?>






	<form>
	<input type="text" id="searchQuery">
	<input type="button" value="SUBMIT" onclick="ajax()">

	<div id="myDiv"></div>
	</form>
</body>
</html>
