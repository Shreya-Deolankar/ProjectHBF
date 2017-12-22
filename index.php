<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/bhanu_css.css">
	<script type="text/javascript" src="Js/bhanu_js.js"></script>
</head>
<body>

<?php include("header.html");?>

<!--This is the content of the page-->
<h1>This is the content of the page</h1>
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="#">Activities</a>
  <a href="#">Basic Info</a>
  <a href="#">Send Invite</a>
  <a href="#">Check Feedback</a>
  <a href="#">Generate Certificate</a>
  <a href="#">Review Activity</a>
  <a href="#">Member List</a>	
</div>
<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; open</span>

<?php include("footer.html");?>

</body>
</html>