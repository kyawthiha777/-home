<!DOCTYPE html>
<html>
<head>
<TITLE>Templates | Example Template | Demo of resume</TITLE>
<meta charset="utf-8">
<link  rel="stylesheet" href="resume.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

</head>
<body>
<?php header( 'Location: /index.html' ) ;  ?>
<div class="upperpart">
	<ul>
		 <li><a class="active" href="#home">Home</a></li>
		 <li><a href="#news">About</a></li>
		 <li><a href="#contact">Skills</a></li>
		 <li><a href="#about">Education</a></li>
		 <li><a href="#about">Photo</a></li>
		 <li><a href="#about">Experience</a></li>
		 <li><a href="#about">Contact</a></li>
	</ul>
</div>
<div class="image">
	<img src="my picture.jpg" alt="me" class="image-middle">
	<div class="personal">
		<h1 class="header-personal">Hello</h1><hr>
		<h2 style="color:#fff;">My name is Kyaw Thiha<br>& I am student </h2>
		<p class="view-photo">view my photo</p>
	</div>
</div>
<div class="about">
	<h1 class="aboutme">About Me</h1>
	<h2>Personal detail</h2>
	<table>
 		<tr>
    		<td>Fullname</td>
    		<td>Kyaw Thiha</td>
  		</tr>
  		<tr>
    		<td>Father's Name</td>
    		<td>Kyaw Thein</td>
  		</tr>
  		<tr>
    		<td>Address</td>
    		<td>No.33,137street,second floor,Tamwe,Yangon</td>
  		</tr>
  		<tr>
    		<td>Zip Code</td>
    		<td>11211</td>
  		</tr>
  		<tr>
    		<td>Phone Number</td>
    		<td>09796320181</td>
  		</tr>
  		<tr>
    		<td>Email</td>
    		<td>kthiha777@gmail.com</td>
  		</tr>
  		<tr>
    		<td>Facebook</td>
    		<td>Michael Kyaw</td>
  		</tr>
	</table><hr>
</div>
<div class="myskills">
	<h1 class="skill">My Skills</h1>
	<div class="w3-container">
	 	<div class="w3-light-grey w3-round-xlarge">
	 		<p>HTML</p>
    		<div class="w3-container w3-blue w3-round-xlarge" style="width:65%">65%</div>
  </div>

	 	<div class="w3-light-grey w3-round-xlarge">
	 		<p>CSS</p>
    		<div class="w3-container w3-blue w3-round-xlarge" style="width:55%">55%</div>
  </div>

	 	<div class="w3-light-grey w3-round-xlarge">
	 		<p>Javascript</p>
    		<div class="w3-container w3-blue w3-round-xlarge" style="width:45%">45%</div>
  </div>

	 	<div class="w3-light-grey w3-round-xlarge">
	 		<p>Photoshop</p>
    		<div class="w3-container w3-blue w3-round-xlarge" style="width:75%">75%</div>
  </div>
  <h2 style="color: white">Language skills</h2>
  	<div class="loader">
  		<div class="full-loader">
  			<p class="Myanmar-loader">Myanmar</p>
  		</div>
  	</div>
  	<div class="loader">
  		<div class="half-loader">
  			<p class="English-loader">English</p>
  		</div>
  	</div>
  	<div class="loader">
  		<div class="semi-half-loader">
  			<p class="Malay-loader">Malay</p>
  		</div>
  	</div>

</div>
</div>
<div class="education-header">
	<h1 style="color: white">Education</h1>
		<button class="education">F.I.S.C</button>
			<div class="panel">
  			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
			</div>

		<button class="education">B.E.H.S(6)Botahtaung</button>
			<div class="panel">
  			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
			</div>

		<button class="education">UniMAP</button>
			<div class="panel">
  			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
			</div>
</div>
<div class="travel">
	<h1 style="color: white;"> Travel cities</h1>
	<div class="tab">
 		<button class="tablinks" onclick="openCity(event, 'Kualalumpur')">KualaLumpur</button>
  		<button class="tablinks" onclick="openCity(event, 'Bangkok')">Bangkok</button>
  		<button class="tablinks" onclick="openCity(event, 'Kolkata')">Kolkata</button>
	</div>

	<div id="Kualalumpur" class="tabcontent">
  		<h3>Kualalumpur</h3>
  		<p>Kualalumpur is the capital city of Malaysia.</p>
	</div>

	<div id="Bangkok" class="tabcontent">
  		<h3>Bangkok</h3>
  		<p>Bangkok is the capital of Thailand.</p> 
	</div>

	<div id="Kolkata" class="tabcontent">
  		<h3>Kolkata</h3>
  		<p>Kolkata is the second-capital of India.</p>
	</div>
</div>
<div class="learn">
	<h1 style="color: white;">Learn about OS</h1>
  		<div class="loader">
  			<div class="half-loader">
  			<p class="English-loader">Window</p>
  			</div>
  		</div>
  		<div class="loader">
  			<div class="semi-half-loader">
  			<p class="Malay-loader">Ubuntu</p>
  			</div>
  		</div>
</div>
</body>
<script src="script.js" type="text/javascript"></script>
</html>
