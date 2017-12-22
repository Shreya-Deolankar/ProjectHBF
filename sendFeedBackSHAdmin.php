<!DOCTYPE html>
<html>
<head>
	<title>HBF</title>
	<link rel="stylesheet" href="css/nithin.css" type="text/css">
<<style>
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
  color: black;
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
        <div class="middlePadding">

					<h1 class="eventHeading">Send Feedback</h1>
					<div style="margin-left:30px;">
						<form class="form">

                                <li class="list">
                                <label class="left">What Events did you Attend?</label><br/>
                                <select class="right"  style="margin-left: 130px;">
                                  <option value="volvo">Volvo</option>
                                  <option value="saab">Saab</option>
                                  <option value="mercedes">Mercedes</option>
                                  <option value="audi">Audi</option>
                                </select>
                                </li>
                                <li class="list">
                                <label class="left">Overall, How Entertaining was the event?</label>
                                <div class="right" style="margin-left: 130px;">
                                 <input type="radio" name="group" value="Bad" style="width: 28px;"> Bad
                                 <input type="radio" name="group" value="Good" style="width: 28px;" checked> Good
                                 </div>
                                </li>
                                <li class="list">
                                <label class="left">After the event how inspired did you feel?</label>
                                <div class="right"  style="margin-left: 150px;">
                                <div class="rating" >
                                 <span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
                                 </div>
                                 </div>
                               </li> 
                               <li class="list">
                               <label class="left">Did you Feel the day provided value for money?</label>
                               <div class="right" style="margin-left: 130px;">
                                   <input type="radio" name="group" value="yes" checked style="width: 28px;"> Yes
                                  <input type="radio" name="group" value="No" style="width: 28px;"> No
                                  </div>
                                </li>
                                <li class="list">
                                <label class="left">What was the single best part of the Event?</label>
                                <div class="right" style="margin-left: 130px;">
                                  <input type="radio" name="group" value="yes" checked style="width: 28px;"> option 1
                                 <input type="radio" name="group" value="No" style="width: 28px;"> option 2
                                 <input type="radio" name="group" value="yes" style="width: 28px;"> option 3
                                 <input type="radio" name="group" value="No" style="width: 28px;"> option 4
                                 </div>
                                </li>
                                <li class="list">
                                <label class="left"> What problems did you encounter?</label>
                                <div class="right">
                                	 <textarea name="text" placeholder="Write something to us" ></textarea>
                                </div>
                                </li>

    
                                <p class="submit" style="margin-left:150px;">
                                <input type="submit" value="Send" class="eventAccept" />
                                </p>
                        </form>
                        </div>
              </div>
						
					
					
					
			</div>
			<div class="rightColumn">
          <div class="eventGenerator">
            <h1 class="generatorHeading">Event Requestor</h1>
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
