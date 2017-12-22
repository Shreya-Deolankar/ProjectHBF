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
      clear: left;
    }
    div.memberDiv p{
      display: inline-block;
    }
    .eventReject{
      float: right;
      margin: 10px;
      padding: 7px;
    }
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
       <div class="middlePadding">
        <h2 class="eventHeading">Member List</h2>
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
        </br>
        </br>
        <div class="memberDiv">
          <p>Student Details</p>
          <button class="eventReject">Deactivate</button>
        </div>
        <pre></pre>
        <div class="memberDiv">
          <p>Student Details</p>
          <button class="eventReject">Deactivate</button>
        </div>
         <pre></pre>
        <div class="memberDiv">
          <p>Student Details</p>
          <button class="eventReject">Deactivate</button>
        </div>
        <pre></pre>
        <div class="memberDiv">
          <p>Student Details</p>
          <button class="eventReject">Deactivate</button>
        </div>
        <pre></pre>
        <div class="memberDiv">
          <p>Student Details</p>
          <button class="eventReject">Deactivate</button>
        </div>
        <pre></pre>
        <div class="memberDiv">
          <p>Student Details</p>
          <button class="eventReject">Deactivate</button>
        </div>
        <pre></pre>
        <div class="memberDiv">
          <p>Student Details</p>
          <button class="eventReject">Deactivate</button>
        </div>
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
</hr>
</body>
</html>