<?php error_reporting(E_ALL ^ E_NOTICE); ?>
<!DOCTYPE html>
<html>
<head>
<meta charset='UTF-8'>
<meta name="viewport" content="width=device-width,initial-scale=1.0">
 <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script> 
<link rel="stylesheet" type="text/css" href="./css/style.css?ts=<?php echo time(); ?>">
	<title>hello </title>
</head>
<body>
<?php if(empty($_GET['url'])):?>
<nav class="mainNav">
<ul>
<li><a href="#home">HOME</a></li>
<li><a href="#aboutme">About Me</a></li>
<li><a href="#page3">Page3</a></li>
<li><a href="#page4">Page4</a></li>
<li><a href="#contact">Contact Me</a></li>
</ul>
</nav>
<section id="home">
<div class="topbar">
	<img src="./img/css3.png" id="topbarimg" />
	<img src="./img/html5.png" id="topbarimg" />
	<img src="./img/mysql.png" id="topbarimg" />
	<img src="./img/php.png" id="topbarimg" />
	<img src="./img/javascript.png" id="topbarimg" />
</div>
<div class="homefeature">
<img src="./img/profilepic.jpg" class="profilepic" />
<div class="responsive"><img src="./img/Responsive.png" class="responsiveimg"></div>
<div id="welcome"><span>w</span><span>e</span><span>l</span><span>c</span><span>o</span><span>m</span><span>e</span></div>
</div>
<div class="matrix"><img src="./img/matrix.png"></div>

</section>
<section id="aboutme">
<div class="aboutmecontent">
<img src="./img/myimage.jpg" class="myimage" />
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
<img src="./img/clouds.jpg" class="clouds" />
</section>
<section id="page3" ></section>
<section id="page4"></section>
<section id="contact"></section>



<?php elseif($_GET['url']=="page1"): ?>
page1
<?php endif; ?>
<script type="text/javascript" src="./css/scroll.js"></script>
<script type="text/javascript" src="./css/javaScript.js"></script>
<script type="text/javascript" src="./css/rotatingtopbar.js"></script> 
<script type="text/javascript" src="http://jqueryrotate.googlecode.com/svn/trunk/jQueryRotate.js"></script>


</body>
</html>
















