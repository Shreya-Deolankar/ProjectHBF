<!DOCTYPE html>
<html>
<head>
  <title></title>
  <!--<link rel="stylesheet" type="text/css" href="css/bhanu_css.css">-->
  <!--<script type="text/javascript" src="Js/bhanu_js.js"></script>-->
  <link rel="stylesheet" type="text/css" href="css/nithin.css">

  <!--progress bar styling-->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

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
      float: right;
    }
    .eventTB th{
      padding: 18px;
    }
    #acceptBtn{
      background-color: #4caf50;
      color: white;
      margin-left: 100px;
    }
    #rejectBtn{
      background-color: #b71c1c;
      color: white;
      margin-left: 20px;
      margin-top: 30px;
    }
  </style>
</head>
<body>

<?php include("studentHeader.html");?>

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
              <li><input type="button" class="plusButton" value="-"/><a href="student.php">Pending</a></li>
              <li><input type="button" class="plusButton" value="-"/><a href="registeredEventStudent.php">Registered</a></li>
              <li><input type="button" class="plusButton" value="-"/><a href="rejectedEventStudent.php">Rejected</a></li>
            </ul>
            </div>
          </li>
          <li><input type="button" class="plusButton" class="plusButton" value="-"/><a href="basicProfileStudent.php">Basic Info</a></li>
          <li><input type="button" class="plusButton" value="-"/><a href="registeredEventStudent.php">Apply for Certificate</a></li>
        </ul>
        </div>
      
      <div class="middleColumn">
        <div class="middlePadding">
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
      </div>

        <div class="rightColumn">
        <div class="eventGenerator">
          <div style="padding: 5px;">
            <iframe width="250" height="200" src="https://www.youtube.com/embed/XGSy3_Czz8k">
                      </iframe>
          </div>
        </div>
        <div class="advertise">
        <div style="padding: 5px;">
          <img src="images/img22.jpg" id="idvertisement" height=200 width=250 />
          </div>
        </div>
        
      
      
</div>

<?php include("footer.html");?>

</body>
</html>