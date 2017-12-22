<!DOCTYPE html>
<html>
<head>
	<title></title>
	<!--<link rel="stylesheet" type="text/css" href="css/bhanu_css.css">-->
	<!--<script type="text/javascript" src="Js/bhanu_js.js"></script>-->
  <link rel="stylesheet" type="text/css" href="css/nithin.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <style type="text/css">
  body{
    font-family: "Times New Roman", Times, serif;
  }
    .columnMain{
      display: flex;
      flex-direction: row;
    }
  .leftColumn{
     flex-grow: 1;
      width: 20%;
      height: 90%;
      background-color: #3a3a3a;
      margin: 0.2em;
      padding: 1px;
      color: white;
      
    }
  .middleColumn{
      border: solid black;
      width: 45%;
      margin: 0.2em;
      padding: 0.5em;
    }
  .rightColumn{
      background-color: #3a3a3a;
      color: white;
      width: 35%;
      margin: 0.2em;
    }
    .memberList{
      list-style-type: none;
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
    }
    .memberHR{
      clear: left;
    }
    .memberDiv{
      border: solid black;
    }
    div.memberDiv p{
      display: inline-block;
    }
    .deactivate{
      background-color: #b71c1c;
      color: white;
      float: right;
      margin: 10px;
    }
  </style>
</head>
<body>

<?php include("HSAdminHeader.html");?>

<!--This is the content of the page-->
<div id="mySidenav" class="sidenav">
 <!-- <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>-->
 
</div>
<!--<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; open</span>-->


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
        <h2>Member List</h2>
        <ul class="memberList">
          <li><a href="#">A</a></li>
          <li><a href="#">B</a></li>
          <li><a href="#">C</a></li>
          <li><a href="#">D</a></li>
          <li><a href="#">E</a></li>
          <li><a href="#">F</a></li>
          <li><a href="#">G</a></li>
          <li><a href="#">H</a></li>
          <li><a href="#">I</a></li>
          <li><a href="#">J</a></li>
          <li><a href="#">K</a></li>
          <li><a href="#">L</a></li>
          <li><a href="#">M</a></li>
          <li><a href="#">N</a></li>
          <li><a href="#">O</a></li>
          <li><a href="#">P</a></li>
          <li><a href="#">Q</a></li>
          <li><a href="#">R</a></li>
          <li><a href="#">S</a></li>
          <li><a href="#">T</a></li>
          <li><a href="#">U</a></li>
          <li><a href="#">V</a></li>
          <li><a href="#">W</a></li>
          <li><a href="#">X</a></li>
          <li><a href="#">Y</a></li>
          <li><a href="#">Z</a></li>
        </ul>
        <hr class="memberHR">
        <div class="memberDiv">
          <p>Student Details</p>
          <button class="deactivate">Deactivate</button>
        </div>
        <pre></pre>
        <div class="memberDiv">
          <p>Student Details</p>
          <button class="deactivate">Deactivate</button>
        </div>
         <pre></pre>
        <div class="memberDiv">
          <p>Student Details</p>
          <button class="deactivate">Deactivate</button>
        </div>
        <pre></pre>
        <div class="memberDiv">
          <p>Student Details</p>
          <button class="deactivate">Deactivate</button>
        </div>
        <pre></pre>
        <div class="memberDiv">
          <p>Student Details</p>
          <button class="deactivate">Deactivate</button>
        </div>
        <pre></pre>
        <div class="memberDiv">
          <p>Student Details</p>
          <button class="deactivate">Deactivate</button>
        </div>
        <pre></pre>
        <div class="memberDiv">
          <p>Student Details</p>
          <button class="deactivate">Deactivate</button>
        </div>
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

<?php include("footer.html");?>

</body>
</html>