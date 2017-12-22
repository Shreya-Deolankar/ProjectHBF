<!DOCTYPE html>
<html>
<head>
	<title>HBF</title>
	<link rel="stylesheet" href="css/nithin.css" type="text/css">
	<style type="text/css">
	
	.map1{
	    float:right;
	    margin-top: -100px;
	}
	.labelcontact{
	     font-family: Georgia;
	     font-size: 18px;
	}
	</style>
	
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
		<h2 class="eventHeading">Contact us</h2>
        <form>
            <label> First Name</label>
            &nbsp&nbsp&nbsp<input type="text" placeholder="enter First Name"  class="myfield" required>
            </br><label> Last Name</label>
            &nbsp&nbsp&nbsp<input type="text" placeholder="enter Last Name" class="myfield" required>
            </br><label> Email Id</label>
             &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="email" placeholder="enter email address" class="myfield"  required >
            </br><label>Query Description</label>
            </br><textarea name="text" class="myfield" placeholder="enter you query here !" cols="33" rows="5" ></textarea> 
            </br><button type="submit" name="button" class="eventAccept">Submit</button> 
            </form> 
            </br>
            <div id="info">
            <label class="labelcontact"> You can reach us @ xyz@domain.com</label>
            <br>
            <label class="labelcontact"> Ring us @ 9876543210</label> 
            </div>

            <div style="padding: 5px;" class="map1">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14152.811968663413!2d-97.882455!3d27.525152!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xc7bb43aa8a23b56d!2sTexas+A%26M+University+-+Kingsville!5e0!3m2!1sen!2sus!4v1501543321928" width="240" height="150" frameborder="0" style="border:0" allowfullscreen></iframe>
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
