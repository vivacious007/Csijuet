<?php
mysql_connect("localhost","root","");
mysql_select_db("csiweb");
?>

<html>
<head>
<script type="text/javascript" src="js/right_click_disable.js"></script>
<style>
body
{
	background:url("bg.jpg")repeat-x;
	color:white;
}
#notice
{
	background-color:black;
	color:white;
	width:40%;
	height:70%;
	border-radius:15px;
	
}
input[type="text"]
{
	margin-top:5%;
	border-radius:5px;
	height:30px;
	padding:5px;
	width:50%;
}
input[type="link"],textarea
{
	width:50%;
	border-radius:5px;
	height:30px;
	padding:5px;
}
</style>
</head>

<body>
<center>
<h1>Upload the notices from the form</h1>
<form action="index.php?f=1" method="post" name="notice_upload">
<center>
<div id="notice">
<h2>Enter Event Name </h2>
<input type="text" name="EventName" placeholder="Enter event name" style="margin-top:-10px;">
<h2>Enter Event Description </h2>
<textarea name="Event" placeholder="Enter event details"></textarea> <br/>
<h2>Enter Event Link </h2>
<input type="link" name="NoticeLink" placeholder="Enter notice link here"> <br/>
<input type="submit" name="submit" value="Upload" style="margin-top:10px;">
</form>
 <br/><br/> <br/><br/>
<h2>
Remove Event
</h2>
<form action="index.php?f=2" method="post" name="notice_remove">
<input type="text" name="RemoveEvent" placeholder="Enter event name"> <br/><br/>
<input type="submit" name="submit" value="Remove Event" style="height:25px; width:100px;">
</form>
</div>
</center>
</body>
</html>