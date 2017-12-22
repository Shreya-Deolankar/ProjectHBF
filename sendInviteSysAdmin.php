<!DOCTYPE html>
<html>
<head>
	<title>System Admin- Send Invite</title>
	<link rel="stylesheet" href="css/nithin.css" type="text/css">
	<!--<style>
input, textarea {
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
  color: #999999;
}

/* ===========================
   ====== Submit Button ====== 
   =========================== */

.submit input {
  width: 100px; 
  height: 40px;
  background-color: #474E69; 
  color: #FFF;
  border-radius: 3px;
  -moz-border-radius: 3px;
  -webkit-border-radius: 3px;   
}
</style>-->
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

					<h1 class="eventHeading">Send Invitation</h1>
					<div style="margin-left:30px;">
						<form class="form">
    
                                <p class="email">                        
          							<input type="text" name="email" id="email" placeholder="Enter Email Address" />
          						</p>
    
                                <p class="text">
                                <textarea name="text" placeholder="Invitation In Detail" /></textarea>
                                </p>
    
                                <p class="submit" style="margin-left:150px;">
                                <input type="submit" value="Send"/>
                                </p>
                        </form>
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
