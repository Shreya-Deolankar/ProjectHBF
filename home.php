<!DOCTYPE html>
<html>
<head>
	<title>HBF</title>
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
<style type="text/css">
	.myNextButton {
    float: right;
    display: inline-block;
    margin-top: -70px;
}
.img_desc{
  top: 2px;
  bottom: 2px;
  left: 2px;
  right: 2px;
  color: black;
  visibility: hidden;

}

.imgLinkFE:hover .imgFE {
  opacity: 0.2;
}

.imgLinkFE:hover .img_desc {
  visibility: visible;
}

</style>

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
			<a href="#wiac" style="text-decoration:none"><input type="button" class="clickButton" name="whatisachapter" value="What is a chapter"></a>
			<a href="#ourevents" style="text-decoration:none"><input type="button" class="clickButton" name="ourEvents" value="Our Events"></a>
			<a href="#difference" style="text-decoration:none"><input type="button" class="clickButton" name="Makeadifference" value="Make a difference"></a>
		</div>
		<div id="ato">
		<h3 class="eventHeading" style="font-size: 30px;text-align: left;margin-left: 0px;">About the organization</h3>
		<p>The Heritage Bridge Foundation operates under the axiom of  Dignitas-Societatem-Ductus, familiarly known as Dignity, 
		Fellowship, and Leadership. In the present day our community is characterized by a divergence in the domestic structure 
		that often leads to deviations in the actions of the present generation. We, at Heritage Bridge, believe that the foundations 
		of a productive community lie in the unification of the young and the  seasoned mind. As the torch of knowledge is passed from 
		the veteran to amateur, the society is able to reach the once legendary echelons. In an exemplary formation, a retired physician 
		shares his experience with an aspiring medical student, to aid in his understanding of the field. In order to encourage this natural
		exchange of knowledge, the Heritage Bridge Foundation seeks to connect High School students with the residents of local retirement homes.
		Through our organization, students are able to engage in community service activities that expand the cognitive structure, while providing 
		our past generation with a means to employ their crystallized intelligence. Researchers at the Mayo Clinic find that “loneliness” is a 
		potential threat to the physical health of the elderly. Complementarily a survey by the American Psychological Association found that the 
		majority of millennials are developing without the influence of an elderly figure in their lives. In efforts to maintain a progressive 
		society, the Heritage Bridge Foundation seeks to “bridge” the growing gap between the current and past generations. By encouraging students 
		to maintain a dignified manner, to strengthen fellowship within society, and to lead others towards new horizons, we at Heritage Bridge
		believe that the future is to be basked in the hands of success and progression.  </p>
		</div>
		<div id="wiac">
		<h3 class="eventHeading" style="font-size: 30px;text-align: left;margin-left: 0px;">What is a Chapter?</h3>
		
		<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, 
		by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, 
		you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend 
		to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, 
		combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore
		always free from repetition, injected humour, or non-characteristic words etc..</p>
		</div>
		<div id="ourevents">
			<div>
			<h3 class="eventHeading" style="font-size: 30px;text-align: left;margin-left: 0px;">Future Events</h3><a class="imgLinkFE" href="images/FE1.jpg">
			<img class="imgFE" src="images/FE1.jpg" style="float: left; width: 24%; height:120px; margin-right: 1%;" alt="currently unavailable"></a>
			
			<img class="imgFE" src="images/FE2.jpg" style="float: left; width: 24%; height:120px;margin-right: 1%;" alt="currently unavailable">
			<img class="imgFE" src="images/FE3.jpg" style="float: left; width: 24%;height:120px; margin-right: 1%;" alt="currently unavailable">
			<img class="imgFE" src="images/FE4.jpg" style="float: left; width: 24%;height:120px; margin-right: 1%;" alt="currently unavailable">
			<button type="button" name="button" class="myNextButton" onclick="nextImageFE()">></button>
			</div>
			<div style="clear:both"></div>
			<p class="img_desc">event detail</p>
			<div>
			<h3 class="eventHeading" style="font-size: 30px;text-align: left;margin-left: 0px;">Past Events</h3>
			<img class="imgPE" src="images/PE1.jpg" style="float: left; width: 24%; height:120px;margin-right: 1%;" alt="currently unavailable">
			<img class="imgPE" src="images/PE2.jpg" style="float: left; width: 24%;height:120px; margin-right: 1%;" alt="currently unavailable">
			<img class="imgPE" src="images/PE3.jpg" style="float: left; width: 24%;height:120px; margin-right: 1%;" alt="currently unavailable">
			<img class="imgPE" src="images/PE4.jpg" style="float: left; width: 24%;height:120px; margin-right: 1%;" alt="currently unavailable">
			<button type="button" name="button" class="myNextButton" onclick="nextImagePE()">></button>
			</div>
			<div style="clear:both"></div>
		</div>
		<div id="difference">
			<h3 class="eventHeading" style="font-size: 30px;text-align: left;margin-left: 0px;">Make A Difference</h3>
			<a href="#" style="text-decoration:none"><input type="button" name="Create a chapter" class="clickButton" value="Create a Chapter"></a>
			
		</div>	
	<script type="text/javascript">
		var index=1;
		
			function nextImageFE(){
				var counter=index;
				for (var i = 0;i<4;i++) {
					counter = counter%8+1;
					var x= document.getElementsByClassName('imgFE')[i];
				    x.src = "images/FE"+counter+ ".jpg"; 
				}
			 index=index+1;	
			}
		
		var index1=1;
			function nextImagePE(){
			var counter1=index1;
				for (var i = 0;i<4;i++) {
					counter1 = counter1%8+1;
					var y= document.getElementsByClassName('imgPE')[i];
				    y.src = "images/PE"+counter1+ ".jpg"; 
				}
				index1=index1+1;	
			}
		
	</script>
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
					<p class="hidden-first" style="font-size: 10px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam porttitor feugiat ipsum quis ullamcorper.</p> <br />
                    
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

<script type="text/javascript">
	function read_more() {
	    document.getElementById('hidden-first').style.display = 'block';
	}

	document.getElementById('read-more').addEventListener('click', read_more);
</script>


<?php include("footer.html");?>

</body>
</html>
