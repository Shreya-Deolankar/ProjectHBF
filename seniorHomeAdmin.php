<!doctype html>
<!-- Website template by freewebsitetemplates.com -->
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Page Layout in Class</title>
    <link rel="stylesheet" href="css/style.css" type="text/css">
	<link rel="stylesheet" href="css/nithin.css" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">

	<style type="text/css">


	</style>
</head>
<body>
<?php include("SHAdminHeader.html");?>

		<div class="columnMain">	
			<div class="leftColumn">
				<ul style="list-style-type:none" class="sideNavUL">

					<li><span><input type="button" value="+" class="plusButton"  id="mybutton" onclick="display()"/></span><a href="#">Activities</a>
					<script type="text/javascript" >
					function display()
					{
					var list=document.getElementById("mylist");
					var but=document.getElementById("mybutton");
					var v=but.value;
					var p=0;
					if(v=="+")
					{
					list.style.display="block";
					p=1;
					but.value="-";
					}
					if(v=="-")
					{
					list.style.display="none";
					but.value="+";
					}
					}
					</script>
						<div class="sample">
						<ul style="list-style-type:none;display:none" id="mylist" >
							<li><input type="button" class="plusButton" value="-"/><a href="seniorHomeAdmin.html">Pending</a></li>
							<li><input type="button" class="plusButton" value="-"/><a href="registeredEventSHAdmin.php">Registered</a></li>
							<li><input type="button" class="plusButton" value="-"/><a href="eventCreatedSHAdmin.php">Created</a></li>
							<li><input type="button" class="plusButton" value="-"/><a href="rejectedEventSHAdmin.php">Rejected</a></li>
						</ul>
						</div>
					</li>
					<li><input type="button" class="plusButton" value="-"/><a href="basicProfileSHAdmin.php">Basic Info</a></li>
					<li><input type="button" class="plusButton" value="-"/><a href="sendInviteSHAdmin.php">Send Invite</a></li>
					<li><input type="button" class="plusButton"  value="-"/><a href="checkFeedBackSHAdmin.php">Check Feedback</a></li>
					<li><input type="button" class="plusButton" value="-"/><a href="sendFeedBackSHAdmin.php">Send Feedback</a></li>
					<li><input type="button" class="plusButton" value="-"/><a href="checkCertificateSHAdmin.php">Generate Certificate</a></li>
					<li><input type="button" class="plusButton" value="-"/><a href="reviewActivitySHAdmin.php">Review Activity</a></li>
					<li><input type="button" class="plusButton" value="-"/><a href="memberListSHAdmin.php">Member List</a></li>
				</ul>
				</div>

				<div class="middleColumn">

						<h1 class="eventHeading">Pending Events</h1>
						<div class="eventblock">
							<span>Event 1</span>
							<input type="button" class="eventAccept" value="Accept">
							<input type="button" class="eventReject" value="Reject">
						</div>
						<div class="eventblock">
							<span>Event 2</span>
							<input type="button" class="eventAccept" value="Accept">
							<input type="button" class="eventReject" value="Reject">
						</div>
						<div class="eventblock">
							<span>Event 3</span>
							<input type="button" class="eventAccept" value="Accept">
							<input type="button" class="eventReject" value="Reject">
						</div>
						<div class="eventblock">
							<span>Event 4</span>
							<input type="button" class="eventAccept" value="Accept">
							<input type="button" class="eventReject" value="Reject">
						</div>
						<div class="eventNavigate">
							<span>1</span>
							<span>|</span>
							<span>2</span>
							<span>|</span>
							<span>3</span>
						</div>
				</div>
				<div class="rightColumn">
					<div class="eventGenerator">
						<h1 class="generatorHeading">Event Generator</h1>
						<input type="text" class="eventNameText" name="eventname" placeholder="Event name..">
						<select class="eventType" id = "abc" name="eventType" onchange="showDiv(this)">
	    				<option value="ge" selected="selected">Group Event</option>
	    				<option value="ie" >Individual Event</option>
  					</select>
						<script>
							function showDiv(elem){
   							if(elem.value == "ie"){
      						document.getElementById('indName').style.display = "block";
							document.getElementById('description').style.height = "70px";
								}
}
							
						</script>
						<input type="text" class="indNameText" name="indName" id = "indName"  placeholder="Senior Person name" style="display:none">
						<textarea placeholder="Some Description.." class="eventTextarea" id="description"></textarea>
						<select class="eventType" name="schoolType">
	    				<option value="s1">school 1</option>
	    				<option value="s2">school 2</option>
  					</select>
						<input type="date" name="date">
						<div class="timeSelector">
							<span class="time">Time</span>
							<span >
								<select class="timeFrom" name="timeFrom">
									<option value="9am">9 A.M</option>
									<option value="10am">10 A.M</option>
									<option value="11am">11 A.M</option>
									<option value="12am">12 A.M</option>
									<option value="1pm">1 P.M</option>
									<option value="2pm">2 P.M</option>
									<option value="3pm">3 P.M</option>
									<option value="4pm">4 P.M</option>
									<option value="5pm">5 P.M</option>
								</select>
							</span>
							<span >
								<select class="timeTo" name="timeTo">
									<option value="10am">10 A.M</option>
									<option value="11am">11 A.M</option>
									<option value="12am">12 A.M</option>
									<option value="1pm">1 P.M</option>
									<option value="2pm">2 P.M</option>
									<option value="3pm">3 P.M</option>
									<option value="4pm">4 P.M</option>
									<option value="5pm">5 P.M</option>
								</select>
							</span>
						</div>
						<input type="button" name="generateEvent" class="generate" value="Generate" />
					</div>
					<div class="advertise">
						<h1>Advertisement</h1>
					</div>
				</div>

			</div>

<hr>
</div>
<footer class="footer-distributed">

			<div class="footer-left">

				<h3><img src="images/f_logo.png" style="width:135px; height:90px;"/></h3>

				<p class="footer-links">
					<a href="#">About Us</a>
					|
					<a href="#">Contact Us</a>
					|
					<a href="#">Feedback</a>
					|
					<a href="#">Careers</a>
					|
					<a href="#">Policies</a>

				</p>

				<p class="footer-company-name">Heritage Bridge Foundation &copy; 2017</p>
			</div>

			<div class="footer-center">

				<div>
					<i class="fa fa-map-marker"></i>
					<p><span>21 Revolution Street</span> Texas, US</p>
				</div>

				<div>
					<i class="fa fa-phone"></i>
					<p>+1 XXX-XXX-XXXX</p>
				</div>

				<div>
					<i class="fa fa-envelope"></i>
					<p><a href="mailto:#">support@community.com</a></p>
				</div>

			</div>

			<div class="footer-right">

				<p class="footer-company-about">
					<span>About the orgnisation</span>
					The Heritage Bridge Foundation operates under the axiom of  Dignitas-Societatem-Ductus, familiarly known as Dignity, Fellowship, and Leadership.
				</p>

				<div class="footer-icons">

					<a href="#"><i class="fa fa-facebook"></i></a>
					<a href="#"><i class="fa fa-twitter"></i></a>
					<a href="#"><i class="fa fa-linkedin"></i></a>
					<a href="#"><i class="fa fa-github"></i></a>

				</div>

			</div>

		</footer>

</body>
</html>
