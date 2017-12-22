<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/nithin.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<style type="text/css">
	#certificateimage{
		height: 50%;
		width: 70%;
		margin-top: 10px;
	}
	#generatebtn,.button{
		margin-left: 50px;
		padding: 10px;
		margin-top: 30px;
		background-color: #4caf50;
		color:white;
	}
	</style>
</head>
<body>

<?php include("studentHeader.html");?>

<!--This is the content of the page-->
<hr />
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
							<li><input type="button" value="-"/><a href="student.php">Pending</a></li>
							<li><input type="button" value="-"/><a href="registeredEventStudent.php">Registered</a></li>
							<li><input type="button" value="-"/><a href="rejectedEventStudent.php">Rejected</a></li>
						</ul>
						</div>
					</li>
					<li><input type="button" value="-"/><a href="basicProfileStudent.php">Basic Info</a></li>
					<li><input type="button" value="-"/><a href="registeredEventStudent.php">Apply for Certificate</a></li>
				</ul>
				</div>
			<div class="middleColumn">

					<h2 class="eventHeading">Your Profile &nbsp<a style="font-size:50%;" href="#"><span class="glyphicon glyphicon-pencil"></span></a></h2>
				

					<p>
        			</br>First Name: ABC
					</br>Last Name: XYZ
					</br>Birthday: 12th March 1985
					</br>Address: 1100 W Corral Avenue, University Squares, Apt#3, Kingsville, Texas
					</br>Member Since: 12th March 2016
					</br>Phone Number: +11234567899
					</br>Email: ABC.XYZ@gmail.com
					</br>Password:abctuohafbb</p>
		        
											
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



<hr />


<?php include("footer.html");?>

</body>
</html>
