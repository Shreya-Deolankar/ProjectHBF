<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/nithin.css">
</head>
<body>

<?php include("studentHeader.html");?>

<!--This is the content of the page-->
<hr />
<div class="columnMain">

			<div class="leftColumn">
				<ul style="list-style-type:none" class="sideNavUL">

					<li><span><input type="button" class="plusButton" value="+"  id="mybutton" onclick="display()"/></span><a href="#">Activities</a>
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
					<li><input type="button" class="plusButton" value="-"/><a href="basicProfileStudent.php">Basic Info</a></li>
					<li><input type="button" class="plusButton" value="-"/><a href="registeredEventStudent.php">Apply for Certificate</a></li>
				</ul>
				</div>
			<div class="middleColumn">
			<div class="middlePadding">

					<h1 class="eventHeading">Pending Events</h1>
					<div class="eventblock">
						<span>Event 1</span>
						<input type="button" class="eventAccept" value="Accept">
						<input type="button" class="eventReject" value="Reject">
					</div>
					<div class="eventblock">
						<span>Event 2</span>
						<input type="button" class="eventAccept" value="Accept">
						<input type="button" class="eventReject" value="Reject">
					</div>
					<div class="eventblock">
						<span>Event 3</span>
						<input type="button" class="eventAccept" value="Accept">
						<input type="button" class="eventReject" value="Reject">
					</div>
					<div class="eventblock">
						<span>Event 4</span>
						<input type="button" class="eventAccept" value="Accept">
						<input type="button" class="eventReject" value="Reject">
					</div>
					<div class="eventNavigate">
						<span><a href="#">1</a></span>
						<span>|</span>
						<span><a href="#">2</a></span>
						<span>|</span>
						<span><a href="#">3</a></span>
					</div>
					</div>
			</div>
			<div class="rightColumn">
				<div class="eventGenerator">
					<div style="padding: 5px;">
						<iframe width="250" height="200" src="https://www.youtube.com/embed/XGSy3_Czz8k">
                      </iframe>
					</div>
				</div>
				<hr>
				<div class="eventGenerator">
					<div style="padding: 5px;">
					<h3 style=" color: #637488;font-family: 'Oswald',Arial,Helvetica,sans-serif;font-size: 30px;font-weight: 350 ! important; text-align: center;padding: 0;">Changing Lives</h3>
					<div class="rating">
                    <span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
                    </div>
					<img src="images/user.jpg" width="50px" height="50px" style="float:left;margin-right: 2px;"/>
					<p style="font-size: 10px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam porttitor feugiat ipsum quis ullamcorper.</p> <br />
                    
                    <a href="#" id="read-more">Read More >></a>
					</div>
				</div>
				<hr>
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
