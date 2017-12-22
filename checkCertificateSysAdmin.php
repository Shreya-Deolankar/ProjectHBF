<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/nithin.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
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
	</style>
</head>
<body>

<?php include("sysAdminHeader.html");?>

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
							<li><input type="button" value="-"/><a href="sysadmin.php"> Pending</a></li>
							<li><input type="button" value="-"/><a href="registeredEventSysAdmin.php">Registered</a></li>
							<li><input type="button" value="-"/><a href="rejectedEventSysAdmin.php">Rejected</a></li>
						</ul>
						</div>
					</li>
					<li><input type="button" value="-"/><a href="basicProfileSysAdmin.php"> Basic Info</a></li>
					<li><input type="button" value="-"/><a href="sendInviteSysAdmin.php"> Send Invites</a></li>
					<li><input type="button" value="-"/><a href="#"> Traffic Analysis</a></li>
					<li><input type="button" value="-"/><a href="checkFeedBackSysAdmin.php"> Check Feedback</a></li>
					<li><input type="button" value="-"/><a href="checkCertificateSysAdmin.php"> View Certificates</a></li>
				</ul>
				</div>
			<div class="middleColumn">

					<h2 class="eventHeading">Check Certificate</h2>
				<form action="">
					<label style="margin-left: 10px;">Certificate Code</label>
					<input type="text" name="certificateCode">

		            <input type="submit" name="Generate" id="generatebtn">
		        </form>
		            <img src="images/certificate.png" alt="certificate image" id="certificateimage">
		            </br><button class="first button" onclick="location.href='#'">Print</button>
		            <button class="button" onclick="location.href='#'">Save</button>
		            <button class="button" onclick="location.href='#'">Send Email</button>
											
			</div>
			<div class="rightColumn">
				<div class="eventGenerator">
					<p>
						Hello!!<hr />
						Video and all is displayed here!!
					</p>
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
