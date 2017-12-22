<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/nithin.css">
</head>
<body>

<?php include("sysAdminHeader.html");?>

<!--This is the content of the page-->
<hr />
<div class="columnMain">

			
<div class="leftColumn">
				<ul style="list-style-type:none" class="sideNavUL">

					<li><span><input type="button" value="+" class="plusButton" id="mybutton" onclick="display()"/></span><a href="#">Activities</a>
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
							<li><input type="button" class="plusButton" value="-"/><a href="sysadmin.php"> Pending</a></li>
							<li><input type="button" class="plusButton" value="-"/><a href="registeredEventSysAdmin.php">Registered</a></li>
							<li><input type="button" class="plusButton" value="-"/><a href="rejectedEventSysAdmin.php">Rejected</a></li>
						</ul>
						</div>
					</li>
					<li><input type="button" class="plusButton" value="-"/><a href="basicProfileSysAdmin.php"> Basic Info</a></li>
					<li><input type="button" class="plusButton" class="plusButton" class="plusButton" value="-"/><a href="sendInviteSysAdmin.php"> Send Invites</a></li>
					<li><input type="button" class="plusButton" class="plusButton" value="-"/><a href="#"> Traffic Analysis</a></li>
					<li><input type="button" class="plusButton" value="-"/><a href="checkFeedBackSysAdmin.php"> Check Feedback</a></li>
					<li><input type="button" class="plusButton" value="-"/><a href="checkCertificateSysAdmin.php"> View Certificates</a></li>
				</ul>
				</div>

			<div class="middleColumn">
			<div class="middlePadding">
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
					<div style="padding: 5px;">
						<iframe width="250" height="200" src="https://www.youtube.com/embed/XGSy3_Czz8k">
                      </iframe>
					</div>
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
