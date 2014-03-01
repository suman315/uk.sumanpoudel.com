<?php error_reporting(E_ALL ^ E_NOTICE); ?>
<!DOCTYPE html>
<html>
<head>
<link rel="icon" type="image/png" href="./img/favicon.png">
<meta charset='UTF-8'>
<meta name="viewport" content="width=device-width,initial-scale=1.0">
 <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script> 
 <script type="text/javascript" src="./css/modernizr.js"></script>
 <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDY0kkJiTPVd2U7aTOAwhc9ySH6oHxOIYM&sensor=false"></script>
<link rel="stylesheet" type="text/css" href="./css/style.css?ts=<?php echo time(); ?>">
	<title>Suman Poudel </title>
</head>
<body>
<?php if(empty($_GET['url'])):?>
<nav class="mainNav">
	<a href="#home"><img src="./img/mylogo2.png" alt="logo"></a>
		<ul>
			<li><a href="#aboutme">About Me</a></li>
			<li><a href="#education">Education</a></li>
			<li><a href="#resume">Resume</a></li>
			<li><a href="#contact">Contact Me</a></li>
		</ul>
</nav>
<section id="home">
<div id="welcome"><span>w</span><span>e</span><span>l</span><span>c</span><span>o</span><span>m</span><span>e</span></div>
<div id="container" >
		<ul id="scene" class="scene">
			<li class="layer" data-depth="1.00"><img src="./img/html5.png" alt="html5"></li>
			<li class="layer" data-depth="0.80"><img src="./img/css3.png" alt="css3"></li>
			<li class="layer" data-depth="0.60"><img src="./img/php.png" alt="php"></li>
			<li class="layer" data-depth="0.40"><img src="./img/javascript.png" alt="javascript"></li>
			<li class="layer" data-depth="0.20"><img src="./img/mysql.png" alt="mysql"></li>
			<li class="layer" data-depth="0.20"><img src="./img/jquery.png" alt="jquery"></li>
		</ul>
	</div>

</section>
<section id="aboutme">
<div class="aboutmecontent">
<img src="./img/myimage.jpg" class="myimage" alt="myimage" />
<article class='discription'> 
<h2> WHO I AM ? </h2>
I’m Suman and I’m an UI Designer and Front End Developer.<br><br>

I came to the UK 6 years ago from Nepal for my studies and really like it here so I decided to stay.
 I completed my HND in Software Development from Queensland college London.
<br><br>
I enjoy taking complex problems and turning them into simple and beautiful interface designs.I love all things technology related.
<br><br>
I also love the logic and structure of coding and always strive to write elegant and efficient code, whether it be HTML, CSS, PHP or JavaScript.
<br><br>
I’m always open to exciting job opportunities. </article>
</div>
<img src="./img/clouds.jpg" class="clouds" alt="clouds" />
</section>
<section id="education" >
<img src="./img/book.png" class="bookimg" alt="books" />
<div class="education">
<article > <h3>These are the following educational qualification I have:</h3><br>

<strong>1. EDEXCEL LEVEL 5 BTEC HIGHER NATIONAL DIPLOMA in COMPUTING (SOFTWARE DEVELOPMENT) From Queensland college London,UK.</strong>
<br>
SUBJETCS
<ul>
	<li>COMPUTER PLATFORMS</li>
	<li>SYSTEM ANALYSIS</li>
	<li>PROGRAMMING CONCEPTS</li>
	<li>DATABASE DESIGN CONCEPTS</li>
	<li>NETWORKING CONCEPTS</li>
	<li>VISUAL PROGRAMMING</li>
	<li>WEBSITE DESIGN</li>
	<li>OOP PROGRAMMING</li>
	<li>PERSONAL SKILLS DEVELOPMENT</li>
	<li>SOFTWARE DEVELOPMENT PROJECT</li>
	<li>DATA ANALYSIS AND DESIGN</li>
	<li>PROJECT MANAGEMENT</li>
	<li>JAVA PROGRAMMING</li>
	<li>FORMAL METHODS</li>
	<li>VISUAL PROGRAMMING DEVELOPMENT</li>
	<li>QUALITY SYSTEM</li>
</ul>
<b>GRADE= COMPLETED</b>
<br>
<strong><br>
2. A LEVELS IN SCIENCES From National school of sciences, Nepal</strong>
<br>
SUBJECT
<ul>
	<li>PHYSICS</li>
	<li>BIOLOGY</li>
	<li>CHEMISTRY</li>
	<li>MATHS</li>
	<li>ENGLISH</li>
</ul>
<b>GRADE = FIRST</b>
<br>
<strong> 
<br>3. GCSE From Bhandara Higher Secondary school, Nepal</strong>
<br>
<b>GRADE =FIRST</b>

</article>
</div>
</section>
<section id="resume">
<div class="resumeside">
<form action="http://dev.sumanpoudel.com/includes/CVcomp.docx">
	<input type="submit" value="Download my Resume in .docx" class="resumebtn" />
</form><br>
<form action="http://dev.sumanpoudel.com/includes/CVcomp.pdf">
	<input type="submit" value="Download my Resume in .pdf " class="resumebtn" /> 
</form> <br>
<form action="https://github.com/suman315/Dev.sumanpoudel.com/" target="_blank" >
	<input type="submit" value="Download Source codes from GitHub" class="resumebtn" /> 
</form>
</div>
	<article class="resumecontent">
<h1>Mr Suman POUDEL</h1>

Address: 85 Victoria Road, Farnborough, GU14 7PP <br>
Email: suman.poudel2227@gmail.com or contact@sumanpoudel.com<br>
Website: www.sumanpoudel.com<br>
Mobile: 07443591315<br>
<h2>QUALIFICATIONS</h2>
<ul id="qualification">
	<li>2013 September- 2014 January: Site-Builder Contractor at WMG Limited, 138 South Street, Dorking, Surrey RH4 2EU. <br>
Working with HTML5, CSS3, >PHP5, JavaScript, JQuery, AJAX, MySQL, WordPress, Joomla to WordPress migration, Dreamweaver, Photoshop, FTP, OOP 
</li>
<li>2013 March: 1 month website designing and Photoshop training in CSE, Chitwan, Nepal</li>
<li>2010: Higher Nation Diploma in Software Development (Edexcel Level-5 BTEC), Queensland College, London, UK<br>
  Subjects Completed: Computer platforms H1, System analysis H2, Programming concepts H1, Database design concepts H1, Networking concepts H1, Visual programming using Visual basic H2, Website design H1, OOP programming H1, Personal skills development H1, Software development project H2, Data analysis and design H2, Project management H2, Java programming H1, Formal methods H2, Visual programming development H2, Quality system H2  
<br>Grade = Completed
</li>
<li>2006: A Level in Science, NIST College, Kathmandu, Nepal<br>
Subject Completed: Physics, Chemistry, Biology, Mathematics, English<br>
Grade = First
</li>
</ul>
<h2>SKILLS</h2>
<ul id="skills">
<li>Web designing using HTML5, CSS3, JavaScript, JQuery, AJAX, PHP, MySQL, NVU and Dreamweaver</li>
<li>Responsive Designs, CSS3 Animations </li>
<li>SQL database Design and Development</li>
<li>WordPress</li>
<li>Front end development </li>
<li>Visual basic and Visual studio</li>
<li>OOP concepts</li>
<li>Photoshop </li>
<li>GitHub(https://github.com/suman315), Zend-2, Composer, Virtual box</li>
<li>Microsoft windows, Microsoft office, Operating Systems, Windows 8</li>
<li>Passion for new technology</li>
<li>Languages: Fluent in English, Nepalese, Hindi and Basics in Spanish</li>
</ul>
<h2>DESIGNED AND LIVE WEBSITES</h2>
<ul>
<li><a href="/" target="_blank">www.sumanpoudel.com</a></li>
<li><a href="http://thecricketmagazine.com/" target="_blank">www.thecricketmagazine.com</a></li>
<li><a href="http://westminsterjournal.com/" target="_blank">www.westminsterjournal.com</a></li>
<li><a href="http://wealthandluxurymagazine.com/" target="_blank">www.wealthandluxurymagazine.com</a></li>
<li><a href="http://designmycoat.co.uk/" target="_blank">www.designmycoat.co.uk</a></li>
<li><a href="http://dev.sumanpoudel.com/" target="_blank">dev.sumanpoudel.com</a></li>
</ul>


	</article>



</section>
<section id="contact">
<div id="contactdiscription">
<h2> How can I help you ? </h2>
<img src="./img/telephone.png" alt="telephone"><p>call me: 07443591315</p>
<img src="./img/email.png" alt="email"><p>Email: suman.poudel2227@gmail.com</p>
</div>
	<div id="googleMap"> </div>

</section>



<?php elseif($_GET['url']=="page1"): ?>
page1
<?php endif; ?>
<script type="text/javascript" src="./css/scroll.js"></script>
<script type="text/javascript" src="./css/javaScript.js"></script>
<script type="text/javascript" src="./css/rotatingtopbar.js"></script> 
<script type="text/javascript" src="http://jqueryrotate.googlecode.com/svn/trunk/jQueryRotate.js"></script>
<script type="text/javascript" src="./css/pagescroll.js"></script>
<script src="./css/deploy/jquery.parallax.js"></script>
	<script>
	$('#scene').parallax();

	</script>
<script type="text/javascript" src="./css/googlemap.js"></script>

</body>
</html>
















