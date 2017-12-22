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
      height: 100%;
    }
  .middleColumn{
      border: solid black;
      width: 45%;
      margin: 0.2em;
    }
  .rightColumn{
      background-color: #3a3a3a;
      color: white;
      width: 35%;
      margin: 0.2em;
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

<?php include("header.html");?>

<!--This is the content of the page-->
<div id="mySidenav" class="sidenav">
 <!-- <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>-->
 
</div>
<!--<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; open</span>-->


<div class="columnMain">
    <div class="leftColumn">
        <ul><li><a href="#">Activities</a></li>
          <ul>
            <li><a href="#">Pending</a></li>
            <li><a href="#">Registered</a></li>
            <li><a href="#">Rejected</a></li>
            <li><a href="#">Created</a></li>
          </ul>
          <li><a href="#">Basic Info</a></li>
          <li><a href="#">Feedback Form</a></li>
        </ul>
      
    </div>
      <div class="middleColumn">
        <h2>Events Created</h2>
        
        <table class="eventTB">
            <th>Event Number</th><th>Event Name</th><th>Date Created</th><th>
            <input type="checkbox" name="memberCB" class="memberCB" value="0"></th>
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
        <input type="submit" value="Delete" id="deleteBtn">
        </form>

        <ul class="memberList">
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