<!DOCTYPE html>
<html>
<head>
	<title></title>
	<!--<link rel="stylesheet" type="text/css" href="css/bhanu_css.css">-->
	<!--<script type="text/javascript" src="Js/bhanu_js.js"></script>-->
  <link rel="stylesheet" type="text/css" href="css/nithin.css">

  <style type="text/css">
  body{
    font-family: "Times New Roman", Times, serif;
  }
    .memberList{
      list-style-type: none;
      margin-left: 200px;
    }
    .memberList li {
      display: inline;
      float: left;

    }
    .memberList a {
    display: block;
    padding: 3px;
    border: 1px solid black;
    margin-right: 3px;
    font-size: 10px;
    margin-bottom: 10px;
    }
    .memberHR{
      clear: left;
      color: black;
    }
    div.memberDiv p{
      display: inline-block;
      margin-left: 10px;
      padding: 10px;
      padding-right: 350px;
      border: solid black;
    }
    .memberCB{
      padding: 10px;
       width: 30px;
      height: 30px;
      background: #333;
    }
    .eventTB th{
      padding: 18px;
    }
    #deleteBtn{
      background-color: #b71c1c;
      color: white;
      margin-left: 230px;
    }
  </style>
</head>
<body>

<?php include("SHAdminHeader.html");?>


<div class="columnMain">
    <div class="leftColumn">
        <ul style="list-style-type:none" class="sideNavUL">

          <li><span><input type="button" value="+" class="plusButton" class="plusButton"  id="mybutton" onclick="display()"/></span><a href="#">Activities</a>
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
              <li><input type="button" class="plusButton" class="plusButton" value="-"/><a href="seniorHomeAdmin.html">Pending</a></li>
              <li><input type="button" class="plusButton" value="-"/><a href="registeredEventSHAdmin.php">Registered</a></li>
              <li><input type="button"  class="plusButton" value="-"/><a href="eventCreatedSHAdmin.php">Created</a></li>
              <li><input type="button" class="plusButton" value="-"/><a href="rejectedEventSHAdmin.php">Rejected</a></li>
            </ul>
            </div>
          </li>
          <li><input type="button" class="plusButton" value="-"/><a href="basicProfileSHAdmin.php">Basic Info</a></li>
          <li><input type="button" class="plusButton" value="-"/><a href="sendInviteSHAdmin.php">Send Invite</a></li>
          <li><input type="button" class="plusButton" value="-"/><a href="checkFeedBackSHAdmin.php">Check Feedback</a></li>
          <li><input type="button" class="plusButton" value="-"/><a href="#">Send Feedback</a></li>
          <li><input type="button" class="plusButton" value="-"/><a href="checkCertificateSHAdmin.php">Generate Certificate</a></li>
          <li><input type="button" class="plusButton" value="-"/><a href="reviewActivitySHAdmin.php">Review Activity</a></li>
          <li><input type="button" class="plusButton" value="-"/><a href="memberListSHAdmin.php">Member List</a></li>
        </ul>
        </div>
      <div class="middleColumn">
        <div class="middlePadding">
        <h2 class="eventHeading">Events Created</h2>
        
        <table class="eventTB">
            <th width="155px">Event Number</th><th>Event Name</th><th>Date Created</th>
            <th><input type="checkbox" name="memberCB" class="memberCB" value="0"></th>
        </table>
        <form action="/action_page.php">
          <div class="memberDiv">
            <p>Event Details</p>
            <input type="checkbox" name="memberCB" class="memberCB" value="1">
          </div>
          <div class="memberDiv">
            <p>Event Details</p>
            <input type="checkbox" name="memberCB" class="memberCB" value="2">
          </div>
          <div class="memberDiv">
            <p>Event Details</p>
            <input type="checkbox" name="memberCB" class="memberCB" value="3">
          </div>
          <div class="memberDiv">
            <p>Event Details</p>
            <input type="checkbox" name="memberCB" class="memberCB" value="3">
          </div>
          <div class="memberDiv">
            <p>Event Details</p>
            <input type="checkbox" name="memberCB" class="memberCB" value="3">
          </div>
        <input type="submit" value="Delete" class="eventReject" style="margin-left: 210px;">
        </form>

        <ul class="memberList">
          <li><a href="#">1</a></li>
          <li><a href="#">2</a></li>
          <li><a href="#">3</a></li>
        </ul>
        </div>
      </div>

        <div class="rightColumn">
           <div class="eventGenerator">
            <h2 class="generatorHeading">Event Generator</h1>
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
            <h1 style="color: black;">Advertisement</h1>
        </div>
        </div>
      
      
</div>

<?php include("footer.html");?>

</body>
</html>