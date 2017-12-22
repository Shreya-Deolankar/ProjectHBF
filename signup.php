<!DOCTYPE html>
<html>
<head>
	<title>HBF</title>
	<link rel="stylesheet" href="css/nithin.css" type="text/css">
	
<script type="text/javascript">
function read_more() {
    document.getElementById('hidden-first').style.display = 'block';
}

document.getElementById('read-more').addEventListener('click', read_more);
</script>
</head>
<body>

<?php include("header.html");?>

<!--This is the content of the page-->

<div class="columnMain">

			<div class="leftColumn">
				<ul style="list-style-type:none" class="sideNavUL">

					<li><input type="button" class="plusButton" value="-"/><a href="home.php">Home</a></li>

					<li><span><input type="button" value="+" class="plusButton" id="mybutton" onclick="display()"/></span><a href="#">Chapters</a>
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
							<li><input type="button" class="plusButton" value="-"/><a href="#">Senior Home & High School</a></li>
							<li><input type="button" class="plusButton" value="-"/><a href="#">Associations</a></li>
						</ul>
						</div>
						<li><input type="button" class="plusButton" value="-"/><a href="#">How can you help?</a></li>
					
					
				</ul>
				</div>
<div class="middleColumn">
	<div class="middlePadding">
		<div class="middlecontentbutton" >
			    <h1 class="eventHeading">Create a new account for free</h1>

			<table class="table">
			<tr>
			    <td>
			    <label><b> First Name </b></label>
			        </td>
			    <td>
			    <input type="text" placeholder="enter first name" name="firstname" value="" required >
			    </td>
			</tr>    
			    
			    <tr>
			        <td>
			    <label><b> Last Name </b></label>
			    </td>
			        <td><input type="text" placeholder="enter last name" name="lastname" value="" required >
			    </td>
			</tr>
			    
			    <tr>
			        <td>
			    <label><b> Email Id </b></label>
			        </td>
			        <td>
			    <input type="email" placeholder="enter email address" name="emailid" value="" required >
			            </td>
			</tr> 
			   <tr>
			       <td>
			    <label><b> Phone Number </b></label>
			       </td>
			    <td>
			    <input type="number" placeholder="Phone number" name="phoneno" value="" required >
			    </td>
			</tr> 
			    <tr>
			        <td>
			    <label><b> Birthday </b></label>
			        </td>
			        <td>
			    <input type="date"  value="" required >
			</td>
			</tr> 
			    <tr>
			        <td>
			        <label><b> Gender</b></label>
			        </td>
			        <td>
			        <input type="radio" value="">Male    <input type="radio" value="">Female
			</td>
			    </tr>
			    <tr>
			        <td>
			    <label><b>Create Password</b></label>
			        </td>
			<td>
			    <input type="password" placeholder="enter password" required>
			</td>
			    </tr>
			    <tr>
			        <td>
			    <label><b>Confirm Password</b></label>
			</td>
			        <td>
			    <input type="password" placeholder="re-enter password" required>
			</td>
			    </tr>
			    <tr>
			        <td>
			    
			        <p>By creating an account you agree to out <a href="#">Terms & Privacy</a>.</p>
			        </td>
			        </tr>
			    </table>
			    <table id="signup">
			    <tr>
			        <td>
			        <button type="submit" class="eventAccept" style="margin-left: 250px;">Sign Up</button>
			    </td>
			    </tr>
			</table>
		</div>
	</div>
</div>
			<div class="rightColumn">
				<div class="eventGenerator">
					<div style="padding: 5px;">
						<iframe width="250" height="200" src="https://www.youtube.com/embed/pwZS5wg8BN0">
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
