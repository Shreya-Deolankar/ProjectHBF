<!DOCTYPE html>
<html>
<head>
	<title>HBF</title>
	<link rel="stylesheet" href="css/nithin.css" type="text/css">
	<style type="text/css">
	
		p
		{
			font:Georgia;
			color: black;
		}
		.sponsordetails
		{
			max-width:93%;
			box-shadow:0px 0px 4px black;
			margin:auto;
			text-align:center;
		}
		.imagebox
		{
			box-shadow:0px 0px 3px black;
			width:90%;
			height:15%;
			margin:2% auto;
			overflow:auto;
			padding:10px;
		}
		.image
		{
			min-height:100px;
			max-height:100px;
			max-width:100px;
			min-width:100px;
			float:left;
			display:inline-block;
			padding:0px;
			margin:auto;
			border-radius:50%;
			box-shadow:0px 0px 2px black;
		}
		.imagebox p
		{
			display:inline-block;
			padding:px;
			float:left;
			overflow:auto;
			margin-left:5px;
			width:80%;
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
		<h2 class="eventHeading" align="center">Sponsor Details</h2>
		<div class="sponsordetails">
		<p>text contents relating to the sponsor</p>
		</div>
		<div class="imagebox">
			<p class="image"><image src="images/sponsor.png" alt="sponsor image" class="image"></p>
			<p>Lorem ipsum dolor sit amet, pro saepe integre invidunt in, nonumy noster vituperata his cu. Ut vel clita verear maluisset, equidem constituam nam eu, odio vituperatoribus ea eam.
			Vel amet sint deseruisse id, pri elitr nihil tollit no. Essent eirmod consequat ius no, justo meliore et vel, nisl quidam facilisis pro in.</p>
		</div>
		<div class="imagebox">
			<p class="image"><image src="images/sponsor.png" alt="sponsor image" class="image"></p>
			<p>Lorem ipsum dolor sit amet, pro saepe integre invidunt in, nonumy noster vituperata his cu. Ut vel clita verear maluisset, equidem constituam nam eu, odio vituperatoribus ea eam. 
			Vel amet sint deseruisse id, pri elitr nihil tollit no. Essent eirmod consequat ius no, justo meliore et vel, nisl quidam facilisis pro in.</p>
		</div>
		<div class="imagebox">
			<p class="image"><image src="images/sponsor.png" alt="sponsor image" class="image"></p>
			<p>Lorem ipsum dolor sit amet, pro saepe integre invidunt in, nonumy noster vituperata his cu. Ut vel clita verear maluisset, equidem constituam nam eu, odio vituperatoribus ea eam.
			Vel amet sint deseruisse id, pri elitr nihil tollit no. Essent eirmod consequat ius no, justo meliore et vel, nisl quidam facilisis pro in.</p>
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
