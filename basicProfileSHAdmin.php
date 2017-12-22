<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/nithin.css">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<style type="text/css">
	#certificateimage{
		height: 50%;
		width: 70%;
		margin-top: 10px;
	}
	#generatebtn,.button{
		margin-left: 50px;
		padding: 10px;
		margin-top: 30px;
		background-color: #4caf50;
		color:white;
	}
	ul li a{
		color: black;
	}

	</style>
</head>
<body>

<?php include("SHAdminHeader.html");?>

<!--This is the content of the page-->
<hr />
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
					<li><input type="button" class="plusButton" class="plusButton" value="-"/><a href="basicProfileSHAdmin.php">Basic Info</a></li>
					<li><input type="button" class="plusButton" value="-"/><a href="sendInviteSHAdmin.php">Send Invite</a></li>
					<li><input type="button" class="plusButton" value="-"/><a href="checkFeedBackSHAdmin.php">Check Feedback</a></li>
					<li><input type="button" class="plusButton" value="-"/><a href="#">Send Feedback</a></li>
					<li><input type="button" class="plusButton" class="plusButton" value="-"/><a href="checkCertificateSHAdmin.php">Generate Certificate</a></li>
					<li><input type="button" class="plusButton" value="-"/><a href="reviewActivitySHAdmin.php">Review Activity</a></li>
					<li><input type="button" class="plusButton" value="-"/><a href="memberListSHAdmin.php">Member List</a></li>
				</ul>
				</div>
			<div class="middleColumn">
			<div class="middlePadding">
					<h2 class="eventHeading">Your Profile &nbsp<a style="font-size:50%;" href="#"><span class="glyphicon glyphicon-pencil"></span></a></h2>
				

					<p>
        			</br>First Name: ABC
					</br>Last Name: XYZ
					</br>Birthday: 12th March 1985
					</br>Address: 1100 W Corral Avenue, University Squares, Apt#3, Kingsville, Texas
					</br>Member Since: 12th March 2016
					</br>Phone Number: +11234567899
					</br>Email: ABC.XYZ@gmail.com
					</br>Password:abctuohafbb</p>
		        
											
			</div>
			</div>
			<div class="rightColumn">
           <div class="eventGenerator">
            <h1 class="generatorHeading">Event Generator</h1>
            <input type="text" class="eventNameText" name="eventname" placeholder="Event name..">
            <select class="eventType" name="eventType">
              <option value="ie">Group Event</option>
              <option value="ge">Individual Event</option>
            </select>
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
            <div style="padding: 5px;">
			    <img src="images/img22.jpg" id="idvertisement" height=200 width=250 />
			</div>
        </div>
        </div>


		</div>





<?php include("footer.html");?>

</body>
</html>
