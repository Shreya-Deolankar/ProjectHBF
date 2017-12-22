<!DOCTYPE html>
<html>
<head>
	<title></title>
	<!--<link rel="stylesheet" type="text/css" href="css/style.css">-->
	<link rel="stylesheet" type="text/css" href="css/nithin.css">
</head>
<body>

<?php include("SHMemberHeader.html");?>

<!--This is the content of the page-->
<hr />
<div class="columnMain">
		<div class="leftColumn">
				<ul style="list-style-type:none" class="sideNavUL">

					<li><span><input type="button" class="plusButton"  value="+"  id="mybutton" onclick="display()"/></span><a href="#">Activities</a>
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
							<li><input type="button" class="plusButton"  value="-"/><a href="oldhomeperson.php"> Pending</a></li>
							<li><input type="button" class="plusButton" value="-"/><a href="registeredEventSHMember.php">Registered</a></li>
							<li><input type="button" class="plusButton" value="-"/><a href="eventCreatedSHMember.php">Created</a></li>
							<li><input type="button" class="plusButton" value="-"/><a href="rejectedEventSHMember.php">Rejected</a></li>
						</ul>
						</div>
					</li>
					<li><input type="button" class="plusButton" value="-"/><a href="basicProfileSHMember.php"> Basic Info</a></li>
					<li><input type="button" class="plusButton" value="-"/><a href="sendFeedBackSHMember.php"> Feedback Form</a></li>
				</ul>
				</div>
			<div class="middleColumn">
				<div class="middlePadding">
					<h1 class="eventHeading">Pending Events</h1>
					<div class="eventblock">
						<span>Event 1</span>
						<input type="button" class="eventAccept" value="Accept">
					</div>
					<div class="eventblock">
						<span>Event 2</span>
						<input type="button" class="eventAccept" value="Accept">
					</div>
					<div class="eventblock">
						<span>Event 3</span>
						<input type="button" class="eventAccept" value="Accept">
					</div>
					<div class="eventblock">
						<span>Event 4</span>
						<input type="button" class="eventAccept" value="Accept">
					</div>
					<div class="eventNavigate">
						<span><a href="#">1</a></span>
						<span>|</span>
						<span><a href="#">2</a></span>
						<span>|</span>
						<span><a href="#">3</a></span>
					</div>
					</div>
			</div>
			<div class="rightColumn">
				<div class="eventGenerator">
					<h1 class="generatorHeading">Event Generator</h1>
					<input type="text" class="eventNameText" name="eventname" placeholder="Event name..">
					
					<textarea placeholder="Some Description.." class="eventTextarea"></textarea>
					<input type="date" name="date">
					<div class="timeSelector">
						<span class="time">Time</span>
						<span >
							<select class="timeFrom" name="timeFrom">
								<option value="6am">6 A.M</option>
								<option value="7am">7 A.M</option>
							</select>
						</span>
						<span >
							<select class="timeTo" name="timeTo">
								<option value="6am">6 A.M</option>
								<option value="7am">7 A.M</option>
							</select>
						</span>
					</div>
					<input type="button" class="generate" name="generateEvent" value="Generate" />
				</div>
				<div class="advertise">
					<h1>Advertisement</h1>
				</div>
			</div>

		</div>



<hr />


<?php include("footer.html");?>

</body>
</html>
