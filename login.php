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
		<h2 class="eventHeading">Login Here</h1>

		<form class="myform">
		    <label> Email Id</label>
		        <input type="email" placeholder="enter email address" name="emailid" value="" required ><br>
		    <br><label> Password</label>
		            <input type="password" placeholder="enter password" required>
		           <br>
		    <br>
    <input type="checkbox" checked="checked">Remember me

    </br><button type="submit" name="button" class="eventAccept">Sign In </button>       
    <button type="reset" name="forgot password" class="eventReject"><a href="#">Forgot Password?</a></button>
        </div>
    <br>
    <div>
    
    </form>
 	<p>New User? <a href="signup.php">Create an account</a></p>
			    
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
