<!DOCTYPE html>
<html>
<head>
	<title>System Admin- Send Invite</title>
	<link rel="stylesheet" href="css/nithin.css" type="text/css">
<	<style>
 textarea {
  padding: 10px;
  border: 1px solid #E5E5E5;
  width: 200px;
  color: #999999;
  box-shadow: rgba(0, 0, 0, 0.1) 0px 0px 8px;
  -moz-box-shadow: rgba(0, 0, 0, 0.1) 0px 0px 8px;
  -webkit-box-shadow: rgba(0, 0, 0, 0.1) 0px 0px 8px;   
}

textarea {
  width: 400px;
  height: 150px;
  max-width: 400px;
  line-height: 18px;
}

input:hover, textarea:hover,
input:focus, textarea:focus {
  border-color: 1px solid #C9C9C9;
  box-shadow: rgba(0, 0, 0, 0.2) 0px 0px 8px;
  -moz-box-shadow: rgba(0, 0, 0, 0.2) 0px 0px 8px;
  -webkit-box-shadow: rgba(0, 0, 0, 0.2) 0px 0px 8px; 
}
.form label {
  margin-left: 10px;
  color: #999999;
}

/* ===========================
   ====== Submit Button ====== 
   =========================== */

.submit input {
  width: 100px; 
  height: 40px;
  color: #FFF;
  border-radius: 3px;
  -moz-border-radius: 3px;
  -webkit-border-radius: 3px;   
}
</style>
<script type="text/javascript">
function read_more() {
    document.getElementById('hidden-first').style.display = 'block';
}

document.getElementById('read-more').addEventListener('click', read_more);
</script>
</head>
<body>

<?php include("sysAdminHeader.html");?>

<!--This is the content of the page-->

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

					<h1 class="eventHeading">Send Invitation</h1>
					<div style="margin-left:30px;">
						<form class="form">
    
                                <p class="email">                        
          							<input type="text" name="email" id="email" placeholder="Enter Email Address" />
          						</p>
    
                                <p class="text">
                                <textarea name="text" placeholder="Invitation In Detail" /></textarea>
                                </p>
    
                                <p class="submit" style="margin-left:150px;">
                                <input type="submit" value="Send" class="eventAccept" />
                                </p>
                        </form>
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
						<input type="button" class="generate" name="generateEvent" value="Generate" />
					</div>
					<div class="advertise">
						<div style="padding: 5px;">
						<img src="images/img22.jpg" id="idvertisement" height=200 width=250 />
			    		</div>
					</div>
				</div>

		</div>



<hr />


<?php include("footer.html");?>

</body>
</html>
