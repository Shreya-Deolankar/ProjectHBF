<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/nithin.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<style type="text/css">
		.region,.sh,.event{
			margin-left: 30px;
		}
		#submitbtn{
			margin-left: 30px;
			background-color: #b71c1c;
			color:white;
		}

		.eventFeedback{
			padding: 10px;
			text-align: justify;
		}
	</style>
</head>
<body>

<?php include("HSAdminHeader.html");?>

<!--This is the content of the page-->
<hr />
<div class="columnMain">

			<div class="leftColumn">
				<ul style="list-style-type:none">

					<li><span><input type="button" value="+"  id="mybutton" onclick="display()"/></span><a href="#">Activities</a>
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
							<li><input type="button" value="-"/><a href="highSchoolAdmin.html">Pending</a></li>
							<li><input type="button" value="-"/><a href="registeredEventStuAdmin.php">Registered</a></li>
							<li><input type="button" value="-"/><a href="eventCreatedHSAdmin.php">Created</a></li>
							<li><input type="button" value="-"/><a href="rejectedEventStuAdmin.php">Rejected</a></li>
						</ul>
						</div>
					</li>
					<li><input type="button" value="-"/><a href="basicProfileHSAdmin.php">Basic Info</a></li>
					<li><input type="button" value="-"/><a href="sendInviteHSAdmin.php">Send Invite</a></li>
					<li><input type="button" value="-"/><a href="checkFeedBackHSAdmin.php">Check Feedback</a></li>
					<li><input type="button" value="-"/><a href="checkCertificateHSAdmin.php">Generate Certificate</a></li>
					<li><input type="button" value="-"/><a href="reviewActivityHSAdmin.php">Review Activity</a></li>
					<li><input type="button" value="-"/><a href="memberListHSAdmin.php">Member List</a></li>
				</ul>
				</div>
			<div class="middleColumn">

					<h2 class="eventHeading">Check Feedback</h1>
				<form action="">
					<select class="region" name="region">
		              <option value="R1">Region1</option>
		              <option value="R2">Region2</option>
		              <option value="R3">Region3</option>
		              <option value="R4">Region4</option>
		            </select>
		            <select class="sh" name="sh">
		              <option value="SH1">Senior Home1</option>
		              <option value="SH2">Senior Home1</option>
		              <option value="SH3">Senior Home1</option>
		              <option value="SH4">Senior Home1</option>
		            </select>
		            <select class="event" name="event">
		              <option value="event1">event1</option>
		              <option value="event2">event2</option>
		              <option value="event3">event3</option>
		              <option value="event4">event4</option>
		            </select>
		            <input type="submit" name="Submit" id="submitbtn">

		             							
		            <ul>
		            	<li><a href="">Feedback by SHM2</a></li>
		            	<li><a href="">Feedback by SHM1</a></li>
		            	<li><a href="">Feedback by SHM3</a></li>
		            	<li><a href="">Feedback by SHM4</a></li>
		            	<li><a href="">Feedback by SHM5</a></li>
		            	<li><a href="">Feedback by SHM6</a></li>
		            	<li><a href="">Feedback by SHM7</a></li>
		            	<li><a href="">Feedback by SHM8</a></li>
		            </ul>							
			</div>
			<div class="rightColumn">
          <div class="eventGenerator">
            <h1 class="generatorHeading">Event Generator</h1>
            <input type="text" class="eventNameText" name="eventname" placeholder="Event name..">
            
            <textarea placeholder="Some Description.." class="eventTextarea"></textarea>
            <select class="eventType" name="oldHomeType">
	    				<option value="o1">Old Home 1</option>
	    				<option value="o2">Old Home 2</option>
  					</select>
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
            <h1 style="color: black;">Advertisement</h1>
        </div>
        </div>

		</div>



<hr />


<?php include("footer.html");?>

</body>
</html>
