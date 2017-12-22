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

<?php include("sysAdminHeader.html");?>

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
        <h2>Rejected Events</h2>
        
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
        <input type="submit" value="Accept" id="deleteBtn">
        </form>

        <ul class="memberList">
          <li><a href="#">1</a></li>
          <li><a href="#">2</a></li>
          <li><a href="#">3</a></li>
        </ul>
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

<?php include("footer.html");?>

</body>
</html>