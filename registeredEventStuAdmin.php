<!DOCTYPE html>
<html>
<head>
  <title></title>
  <!--progress bar styling-->
  <link rel="stylesheet" type="text/css" href="css/nithin.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  

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
      float: right;
    }
    .eventTB th{
      padding: 18px;
    }
    #acceptBtn{
      background-color: #b71c1c;
      color: white;
      margin-left: 230px;
      margin-top: 30px;
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
              <li><input type="button" class="plusButton" value="-"/><a href="highSchoolAdmin.html">Pending</a></li>
              <li><input type="button" class="plusButton" value="-"/><a href="registeredEventStuAdmin.php">Registered</a></li>
              <li><input type="button" class="plusButton" value="-"/><a href="eventCreatedHSAdmin.php">Created</a></li>
              <li><input type="button" class="plusButton" value="-"/><a href="rejectedEventStuAdmin.php">Rejected</a></li>
            </ul>
            </div>
          </li>
          <li><input type="button" class="plusButton" value="-"/><a href="basicProfileHSAdmin.php">Basic Info</a></li>
          <li><input type="button" class="plusButton" value="-"/><a href="sendInviteHSAdmin.php">Send Invite</a></li>
          <li><input type="button" class="plusButton" value="-"/><a href="checkFeedBackHSAdmin.php">Check Feedback</a></li>
          <li><input type="button" class="plusButton" value="-"/><a href="checkCertificateHSAdmin.php">Generate Certificate</a></li>
          <li><input type="button" class="plusButton" value="-"/><a href="reviewActivityHSAdmin.php">Review Activity</a></li>
          <li><input type="button" class="plusButton" value="-"/><a href="memberListHSAdmin.php">Member List</a></li>
        </ul>
        </div>
      
      <div class="middleColumn">
        <table>
        <th width="5px"><h2 class="eventHeading">Registered Events</h2></th>
        <th width="5px"><input type="checkBox" name="memberCB" class="memberCB" value="0"></th>
        <tr><td width="5px">Event1</td>
        <td width="5px"><input type="checkbox" name="memberCB" class="memberCB" value="1"></td></tr>
        <tr><td width="5px"> <div class="container">
        <div style="width:35%;">
                  <div class="progress" >
                    <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width:0%">
                     </div>
                     </div>
                  </div>
        </div></td></tr>
        <tr><td width="5px">Event2</td>
        <td width="5px"><input type="checkbox" name="memberCB" class="memberCB" value="2"></td></tr>
        <tr><td width="5px"> <div class="container">
        <div style="width:35%;">
                  <div class="progress" >
                    <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width:50%">
                     </div>
                     </div>
                  </div>
        </div></td></tr>
        <tr><td width="5px">Event3</td>
        <td width="5px"><input type="checkbox" name="memberCB" class="memberCB" value="3"></td></tr>
        <tr><td width="5px"> <div class="container">
        <div style="width:35%;">
                  <div class="progress" >
                    <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width:100%">
                     </div>
                     </div>
                  </div>
        </div></td></tr>
        </table>

         <input type="submit" value="Reject" class="eventReject" style="margin-left: 300px;">
        <ul class="memberList" style="margin-left: 300px; margin-top: 20px;">
          <li><a href="#">1</a></li>
          <li><a href="#">2</a></li>
          <li><a href="#">3</a></li>
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

<?php include("footer.html");?>

</body>
</html>