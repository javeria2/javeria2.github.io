<!DOCTYPE html>
<html lang="en">
<head>
	<!-- meta data -->
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
 	<meta name="description" content="Portfolio website of Sanchay Javeria, Computer Science Undergrad at University of Illinois, Urbana-Champaign." />
 	<meta name="keywords" content="Sanchay Javeria, Sanchay Javeria website, Sanchay Javeria Portfolio, inspiration, CS@UofI, Computer Science, developer, web designer" />
	<meta name="author" content="Sanchay Javeria" />
	<!-- pinterest -->
	<meta name="p:domain_verify" content="86b29db38657155820303a8caf416616"/>
	<title>Hello!</title>

	<!-- favicons -->
	<link rel="apple-touch-icon" sizes="180x180" href="resources/favicons/apple-touch-icon.png">
	<link rel="icon" type="image/png" href="resources/favicons/favicon-32x32.png" sizes="32x32">
	<link rel="icon" type="image/png" href="resources/favicons/favicon-16x16.png" sizes="16x16">
	<link rel="manifest" href="resources/favicons/manifest.json">
	<link rel="mask-icon" href="resources/favicons/safari-pinned-tab.svg">
	<link rel="shortcut icon" href="resources/favicons/favicon.ico">
	<meta name="msapplication-config" content="resources/favicons/browserconfig.xml">
	<meta name="theme-color" content="#ffffff">

	<!-- Google font -->
	<link href='https://fonts.googleapis.com/css?family=Lato:300,100,400,300italic' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Playfair+Display:400,700italic,900italic,400italic' rel='stylesheet' type='text/css'>

	 <!-- resposive grid -->
	 <link rel="stylesheet" type="text/css" href="external/css/grid.css">

	 <!-- normalize -->
	 <link rel="stylesheet" type="text/css" href="external/css/normalize.css">

	 <!-- font awesome -->
	 <script src="https://use.fontawesome.com/2960686916.js"></script>

	 <!-- stylesheet -->
	 <link rel="stylesheet" type="text/css" href="resources/css/portfolio.css">
	 <link rel="stylesheet" type="text/css" href="resources/css/media-queries.css">

     <!-- Animate -->
     <link rel="stylesheet" type="text/css" href="external/css/animate.css">

     <!-- fontastic -->
     <link rel="stylesheet" type="text/css" href="external/css/fonts-skills.css">

     <!-- Glide js -->
     <link rel="stylesheet" type="text/css" href="external/css/glide.css">
</head>

<body>
<?php include_once("analyticstracking.php") ?>

<!-- PRELOADER -->
<div class="se-pre-con"></div>

<!-- HOMEPAGE -->
<header class="header js__here-header">
	<div class="main-headline">
	    <div class="grid__item">
	        <a class="link link--takiri" href="#">Sanchay Javeria <span>Developer / Designer</span></a>
	    </div>
	</div>
</header>
<span class="homepage-foot">
    <p><a href="#link__about-me"><i class="down-arrow fa fa-angle-down" aria-hidden="true"></i></a></p>
</span>

<!-- NAVIGATION BAR -->
<nav>
	<img src="resources/img/logo.png" alt="logo"><span id="sanchayjaveria"><span id="sanchay">Sanchay</span> <span id="javeria">Javeria</span></span>
    <a class="burger-icon"><i class="fa fa-bars" aria-hidden="true"></i></a>
	<div class="nav-links">
	    <a href="#link__about-me" class="a1" id="format">About me</a>
	    <a href="#link__skills" class="a2" id="format">Skills</a>
	    <a href="#link__projects" class="a3" id="format">Projects</a>
	    <a href="#link__education" class="a4" id="format">Education</a>
	    <a href="resume.html" target="_blank" class="a5" id="format">Resume</a>
	    <a href="#link__contact" class="a6" id="format">Contact</a>
    	<!-- BURGER -->
    </div>
</nav>

<!-- ABOUT ME -->
<section class="about-me js__about-me" id="link__about-me">
	<div class="container">
		<h3>Oh hey, Hi!</h3>
	</div>
	<div class="container">
		<p>I'm Sanchay, currently pursuing my B.S. in Computer Science from the University of Illinois at Urbana-Champaign. A full-stack web developer obsessed with minimal design, I build web apps that delight and inform.</p>
		<p>In my free time, I like to <span id='typerjs' class="type-it"></span></p>
		<p>Currently I'm on the lookout for an exciting new project. If you want to work together or just talk about life in general, shoot me an email at <!-- <a href="mailto:sanchay@sanchayjaveria.com" style="border-bottom: 1px solid white">sanchay@sanchayjaveria.com</a> --> sanchay [at] sanchayjaveria [dot] com and get in touch!</p>
	</div>
</section>


<!-- SKILLS -->
<section class="skills js__skills" id="link__skills">
	<div class="container">
		<h2>What's in the basket?</h2>
	</div>
	<div class="container">
		<div class="col span-1-of-4 box1">
			<i class="icon-code"></i>
			<h3 id="inner-h3">Languages</h3>
			<p>Javascript, Python, Java, C++, C</p>
		</div>
		<div class="col span-1-of-4 box2">
			<i class="icon-web"></i>
			<h3 id="inner-h3">Web</h3>
			<p><b>Technologies:</b> HTML5, CSS/SCSS, JQuery, NodeJS, Express<br> <b>Frameworks:</b> AngularJS, ReactJS + Redux<br> <b>Databases:</b> MongoDB, postgreSQL, MySQL<br></p>
		</div>
		<div class="col span-1-of-4 box3">
			<i class="icon-mobile"></i>
			<h3 id="inner-h3">Mobile</h3>
			<p><b>Languages:</b> Swift 2, Swift 3<br> <b>Packages (Pods):</b> Alamofire, SwiftString, etc.</p>
		</div>
		<div class="col span-1-of-4 box4">
			<i class="icon-settings-streamline"></i>
			<h3 id="inner-h3">Tools</h3>
			<p>Git, Heroku, Docker</p>
		</div>
	</div>

	<section class="process-workflow">
		<div class="container">
			<h2>My general workflow</h2>
		</div>
		<div class="container">
			<div class="col span-1-of-4 box-p">
				<img src="resources/img/bulb.svg" alt="bulb">
				<span id="box-p-text">Visualize</span>
			</div>
			<div class="col span-1-of-4 box-p">
				<img src="resources/img/pencil.svg" alt="pencil">
				<span id="box-p-text">Wireframe</span>
			</div>
			<div class="col span-1-of-4 box-p">
				<img src="resources/img/browser.svg" alt="browser">
				<span id="box-p-text">Prototype</span>
			</div>
			<div class="col span-1-of-4 box-p">
				<img src="resources/img/speed.svg" alt="speed">
				<span id="box-p-text">Optimize</span>
			</div>
		</div>
	</section>
</section>


<!-- PROJECTS -->
<section class="projects js__projects" id="link__projects">
	<div class="slider" id="slider_custom">
      <ul class="slides">

        <li class="slide" id="slide1">
          <div class="container">
          	<h2>Magpie</h2>
          	<h3>A lost and found portal for UIUC</h3>
          	<div class="container">
				<div class="col span-1-of-2" id="img-box">
					<img src="resources/img/magpie.png" alt="magpie">
				</div>
    	      	<div class="col span-1-of-2" id="desc">
					<p>Magpie is a web application, aimed at solving a frequent user problem of having no platform other than a cluttered facebook page to post lost and found items.</p>
					<ul>
						<li>Wrote the entire client-side of the application in <strong>Angular.</strong></li>
						<li>Server side contribution involved handling user-auth with <strong>passportJS.</strong></li>
						<li>Made an in-app chat application between users with <strong>Socket.io</strong></li>
						<li>Also assisted two other teammates in writing the REST API using <strong>Node</strong>, <strong>Express</strong> and <strong>MongoDB</strong> for database queries.</li>
					</ul>

					Some features:
					<ul>
						<li>Was chosen as the application with best UI/UX amongst 30 other web-apps at a web contest held at UIUC's research park, Dec '16.</li>
						<li>Users can upload images for the posts from local disk.</li>
						<li>Google map active filtering allowed based on current location to find nearby posts.</li>
						<li>Follows CRUD principles.</li>
					</ul>
					<em>See it in action </em> <a target="_blank" href="https://cs498lostandfound.herokuapp.com/#/home">HERE</a>.
          		</div>
          	</div>
          </div>
        </li>

        <li class="slide" id="slide2">
          <div class="container">
          	<h2>Delone</h2>
          	<h3>A web app to help people meet over food</h3>
          	<div class="container">
				<div class="col span-1-of-2" id="img-box">
					<img src="resources/img/delone.png" alt="enthub">
				</div>
    	      	<div class="col span-1-of-2" id="desc">
					<p>Delone, abbr. <em>don't eat alone</em>, is a web-app helping users connect with each other who are looking to eat out together. I wrote this application at MHacks '16, Detroit, MI.</p>
					<ul>
						<li>Angular used for routing and data-binding on the client side. (SPA)</li>
						<li>Node and Express used for creating a REST API on the server.</li>
						<li>mongoDB and mongoose used for data persistence.</li>
						<li>PassportJS used for local auth.</li>
						<li>Leveraged <strong>materialize css</strong> for the front-end.</li>
						<li><strong>Mocha and Chai (assert)</strong> used for unit testing.</li>
					</ul>
					Some features:
					<ul>
						<li>Follows CRUD principles for adding/deleting/updating new user events.</li>
						<li>Features a guest-list where users could request the owner to join.</li>
						<li>Follows minimal <strong>material design</strong> principles for enjoyable user interaction.</li>
					</ul>
					<em>See it in action </em> <a target="_blank" href="https://delone.herokuapp.com/#/">HERE</a>.
          		</div>
          	</div>
          </div>
        </li>


        <li class="slide" id="slide3">
          <div class="container">
          	<h2>Yamp</h2>
          	<h3>A camping yelp</h3>
          </div>
          <div class="container">
          	<div class="col span-1-of-2" id="img-box">
          		<img src="resources/img/yamp.png" alt="yamp!">
          	</div>
          	<div class="col span-1-of-2" id="desc">
          		<p>Yamp is a full-stack camping assistant web application, which enables users to choose the best camp by looking at reviews and other related details of the specific camping site. </p>

				<ul>
					<li><strong>Bootstrap</strong> components for front-end.</li>
					<li>back-end hosted on <strong>Node.js</strong> using the <strong>Express.js</strong> framework.</li>
					<li><strong>Passport.js</strong> used for user authentication.</li>
					<li><strong>RESTful routing</strong> conventions followed.</li>
					<li><strong>mongoDB</strong> used for the database of the application using the <strong>mongoose</strong> library.</li>
				</ul>
				Some features:
					<ul>
						<li>User authentication enabled.</li>
						<li>New camps can be added with an image, a 5-star rating and a Description. </li>
						<li>Comments functionality added. </li>
						<li>All the posts and comments can be deleted or edited for better management. </li>
					</ul>
				<em>See it in action</em> <a target="_blank" href="https://yamp.herokuapp.com/">HERE</a>.
          	</div>
          </div>
        </li>

        <li class="slide" id="slide4">
          <div class="container">
          	<h2>On The Rocks</h2>
          	<h3>Food, faster than ever</h3>
          </div>

          <div class="container">
          	<div class="col span-1-of-2" id="img-box">
          		<img src="resources/img/OTR.png" alt="On the rocks">
          	</div>

          	<div class="col span-1-of-2" id="desc">
          		<p>Front-end for the website of the restaurant 'On the rocks'. It was created with a simple goal in mind, to make sure that the user feels hungry just by looking at the website!</p>
				<ul>
					<li>The website is pure <strong>HTML5, CSS3 and JQuery</strong> with minimal usage of external libraries. </li>
					<li><strong>Fluid responsive grid</strong> used to make the website responsive.</li>
					<li><strong>gmaps.js</strong> used to incorporate <strong>google maps</strong> with the contact form. </li>
					<li>Strong emphasis on good design principles and best practices.</li>
				</ul>

				Some features:
				<ul>
					<li>An image grid showing the best dishes of the restaurant. </li>
					<li>A simple subscription plans section. </li>
					<li>A review sections showcasing the best customer reviews. </li>
					<li>A contact form as an overlay on top of a google map showing the restaurant's closest location. </li>
				</ul>
				<em>See it in action</em> <a target="_blank" href="https://on-the-rocks.herokuapp.com/">HERE</a>.
          	</div>
          </div>
        </li>

        <li class="slide" id="slide5">
          <div class="container">
          	<h2>EntHub</h2>
          	<h3>Social network, for entrepreneurs</h3>
          	<div class="container">
				<div class="col span-1-of-2" id="img-box">
					<img src="resources/img/enthub.png" alt="enthub">
				</div>
    	      	<div class="col span-1-of-2" id="desc">
					<p>Enthub is a social networking iOS app for developers who want to share their work with the community, or look for people to share their ideas with and collaborate.</p>
					<ul>
						<li>The application is written in <strong>Swift 2</strong></li>
						<li>Back-end is hosted on <strong>Firebase</strong> </li>
						<li>Networking pod <strong>Alamofire</strong> used to make API calls to Firebase </li>
						<li>Follows <strong>material design</strong> principles and is a <strong>socket based application</strong></li>
						<li><strong>Facebook SDK</strong> used to integrate facebook login within the application</li>
					</ul>

					Some features:
					<ul>
						<li>Minimalistic login/sign-up page with Facebook auth integration.</li>
						<li>User can upload an image from camera-roll and add a description to their post.</li>
						<li>Other users can like the post and comment on it.</li>
						<li>The posts can be deleted by the owner.</li>
					</ul>
					<em>Find more</em> <a target="_blank" href="https://github.com/javeria2/EntHub">HERE</a>.
          		</div>
          	</div>
          </div>
        </li>

        <li class="slide" id="slide6">
          <div class="container">
          	<h2>Pokedex</h2>
          	<h3>Know more about what you're catching</h3>
          </div>
          <div class="container">
          	<div class="col span-1-of-2" id="img-box">
          		<img src="resources/img/pokedex.png" alt="pokedex">
          	</div>
          	<div class="col span-1-of-2" id="desc">
          		<p>With pokemonGO raging the streets lately, it was created with an idea to let users know more about the pokemons they're catching.</p>
          		<ul>
					<li>The application is written in <strong>Swift 2</strong></li>
					<li>Consumes <strong>pokeAPI</strong> to pull information about 718 pokemons</li>
					<li>The front-end utilizes <strong>UICollectionView</strong> to present the list of 718 pokemons</li>
					<li><strong>Active filter search</strong> feature also added for better UX</li>
          		</ul>

          		Some features:
          		<ul>
          			<li>The application currently pulls data for 718 pokemons from the database but can be expanded further to include more pokemons</li>
          			<li>UITapGestureRecognizer added to dismiss the keyboard when clicking outside of it to improve UX</li>
          			<li>UIStackView used to display information about pokemons</li>
          		</ul>
          		<em>Find more</em> <a target="_blank" href="https://github.com/javeria2/Pokedex">HERE</a>.
          	</div>
          </div>
        </li>

        <li class="slide" id="slide7">
          <div class="container">
          	<h2>Flight Simulator</h2>
          	<h3>A basic flight simulator game</h3>
          </div>
          <div class="container">
          	<div class="col span-1-of-2" id="img-box">
          		<img src="resources/img/fsm.png" alt="flight simulator">
          	</div>
          	<div class="col span-1-of-2" id="desc">
				<p>this game is a simple flight simulator which uses OpenGL to handle the display along with freeglut library.</p>
          		<ul>
          			<li><strong>PLATFORM:</strong> Windows</li>
					<li><strong>BUILD ENVIRONMENT:</strong> Visual Studio 2013</li>
					<li><strong>LANGUAGE:</strong> C (OpenGL API)</li>
					<li><strong>EXTERNAL LIBRARIES USED:</strong> Free GLUT library, GL</li>
          		</ul>
          		Some features:
          		<ul>
          			<li>The airplane automatically moves forward at a fixed speed.</li>
					<li>Reinforces user controls. example: The user will control the bank and tilt of the airplane through the arrow keys. Pressing the left (right) arrow key will make the plane roll to its left (right). Pressing the up (down) arrow key will cause the airplane to pitch up (down) etc.</li>
					<li>The view automatically toggles between day and night mode in fixed intervals.</li>
					<li>Score display using a counter.</li>
          		</ul>
          		<em>See more</em> <a target="_blank" href="https://github.com/javeria2/flightSimulator">HERE</a>.
          	</div>
          </div>
        </li>

        <li class="slide" id="slide1">
          <div class="container">
          	<h2>Chess Library</h2>
          	<h3>A simple chess library written in Java, with GUI written in Swing</h3>
          </div>
          <div class="container">
          	<div class="col span-1-of-2" id="img-box">
          		<img src="resources/img/chess.png" alt="chess" style="max-width: 80%;">
          	</div>
          	<div class="col span-1-of-2" id="desc">
          		<ul>
          			<li>Made as a part of a machine problem for the course CS242 (Programming studio).</li>
          			<li>Entire game logic is written in <strong>Java</strong>.</li>
          			<li>GUI written using Java's GUI widget toolkit <strong>'Swing'</strong>.</li>
          			<li>Plenty of unit tests written to stimulate test-driven development using <strong>JUnit</strong>.</li>
          		</ul>
          		Project outline:
          		<ul>
          			<li>Game is divided into three core packages:</li>
          			<li><strong>'Model'</strong> containing the core logic, the board setup and the test suite containing unit-tests for the game logic.</li>
					<li><strong>'Controller'</strong> which connects the 'Model' and the 'View' [See the class variables, just one instance of Model and View each]</li>
					<li><strong>'View'</strong> which contains an implementation of a static GUI. (Two JPanels representing the board and the pieces sitting on top of a JFrame)</li>
					<li>The <strong>'MVC'</strong> package has a single class called 'game'. Run the Main method in this file to launch the application (Such data abstraction).</li>
          		</ul>
          		<em>Github repository:</em> <a target="_blank" href="https://github.com/javeria2/chessLibrary">HERE</a>.
          	</div>
          </div>
        </li>

        <li class="slide" id="slide2">
          <div class="container">
          	<h2>I don't care</h2>
          	<h3>Front-end for a fictional restaurant 'I don't care'</h3>
          </div>
          <div class="container">
          	<div class="col span-1-of-2" id="img-box">
          		<img src="resources/img/idc.png" alt="idc" style="max-width: 95%;">
          	</div>
          	<div class="col span-1-of-2" id="desc">
          		<ul>
          			<li>Made as a part of a machine problem for the course CS498rk (The Art and Science of Web Programming) at UIUC.</li>
          			<li>The website currently is static and is written purely in <strong>HTML5, CSS3, Javascript.</strong></li>
          			<li>CSS pre-processor <strong>SASS</strong> used to simplify design process.</li>
          			<li>Part of the requirement was to focus on individual elements and not responsiveness, hence <strong>the wesbite is NOT responsive</strong>, i.e., please view the heroku deployed link below in a full-width PC web-browser only.</li>
          		</ul>
          		Project outline:
          		<ul>
          			<li>Focus was on good overall design and individual elements purely through CSS3, HTML5 and Javascript without use of any external librarier or frameworks.</li>
          			<li>A full list of contained elements can be found <a target="_blank" href="https://uiuc-web-programming.github.io/fa2016/MP-1">HERE.</li>
          		</ul>
          		<em>See it in action</em> <a target="_blank" href="https://idontcare.herokuapp.com/">HERE</a>, again, view this only on a full-width PC browser window.
          	</div>
          </div>
        </li>
      </ul>
    </div>
</section>


<!-- EDUCATION -->
<section class="education js__education" id="link__education">
	<div class="container">
		<h2>Education</h2>
	</div>
	<div class="container">

		<div class="col span-1-of-2" id="box1">
			<i class="fa fa-exchange" aria-hidden="true"></i>
			<h3 id="inner-h3">Manipal University</h3>
			<p>Junior year transfer from Manipal University, Manipal, India</p>
			<p>Major: Computer Science</p>
		</div>

		<div class="col span-1-of-2" id="box2">
			<i class="fa fa-graduation-cap" aria-hidden="true"></i>
			<h3 id="inner-h3">University of Illinois at Urbana-Champaign</h3>
			<p>Currently a senior</p>
			<p>Major: Computer Science</p>
		</div>
	</div>
</section>

<!-- CONTACT -->
<div class="contact js__contact" id="link__contact">

    <div id="map"></div>

    <div class="form-box" id="form">
        <div class="container">
            <h2>Let's talk</h2>
        </div>
        <div class="container">
            <form method="POST" action="mailer.php" class="contact-form">
                <div class="container">
	          		<?php
	                	if($_GET['success'] == 1) {
	                		echo "<div class=\"form-messages success\">
	                			<i class=\"fa fa-smile-o\" aria-hidden=\"true\"></i> Message sent! Thanks for getting in touch.
	                		</div>";
	                	} else if ($_GET['success'] == -1){
							echo "<div class=\"form-messages error\">
	                			<i class=\"fa fa-frown-o\" aria-hidden=\"true\"></i> Oops! Something went wrong. Please try again!
	                		</div>";
	                	}
	                ?>
				</div>
				<div class="container">
                    <div class="col span-1-of-3 labels">
                        <label for="name">Name:</label>
                    </div>
                    <div class="col span-2-of-3">
                        <input type="text" name="name" id="name" required>
                    </div>
                </div>
                <div class="container">
                    <div class="col span-1-of-3 labels">
                        <label for="email">Email:</label>
                    </div>
                    <div class="col span-2-of-3">
                        <input type="email" name="email" id="email" required>
                    </div>
                </div>
                <div class="container">
                    <div class="col span-1-of-3 labels">
                        <label for="reason">Reason?</label>
                    </div>
                    <div class="col span-2-of-3">
                        <select name="reason" id="reason">
                            <option value="I want to hire you!" selected>I want to hire you!</option>
                            <option value="Just swung by to say hello :)">Just swung by to say hello :)</option>
                            <option value="Other">Other</option>
                        </select>
                    </div>
                </div>
                <div class="container">
                    <div class="col span-1-of-3 labels">
                        <label for="message">Message:</label>
                    </div>
                    <div class="col span-2-of-3">
                        <textarea id="message" name="message" placeholder="Say something awesome..."></textarea>
                    </div>
                </div>
                <div class="container">
                    <div class="col span-1-of-3">
                        <label></label>
                    </div>
                    <div class="col span-2-of-3">
                        <button class="btn">Send</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- FOOTER -->
<footer>
	<div class="footer-img">
		<img src="resources/img/logo.png" alt="footer logo">
	</div>
	<p>Built with <i class="fa fa-heart" id="heart" aria-hidden="true"></i> in the beautiful city of Jaipur, India.</p>
	<div class="socials">
		<p><a href="https://www.linkedin.com/in/javeria2"><i class="fa fa-linkedin-square" id="linkedin" aria-hidden="true"></i></a></p>
		<p><a href="https://www.github.com/javeria2"><i class="fa fa-github-square" id="github" aria-hidden="true"></i></a></p>
		<p><a href="https://www.facebook.com/sanchay.javeria"><i class="fa fa-facebook-square" id="facebook" aria-hidden="true"></i></a></p>
		<p><a href="https://plus.google.com/u/0/+sanchayjaveria"><i class="fa fa-google-plus-square" id="google" aria-hidden="true"></i></a></p>
	</div>
</footer>

<!-- JS SCRIPTS -->
<script type="text/javascript" src="external/js/jquery-1.10.2.min.js"></script> <!-- jquery -->
<script src="https://cdn.jsdelivr.net/jquery.typeit/4.3.0/typeit.min.js"></script> <!-- typeIt -->
<script type="text/javascript">
	$(document).ready(function(){
		//typeIt jquery plugin initialization
		$('.type-it').typeIt({
	     speed: 50,
	     autostart: false,
	     loop: true,
	     cursor: false,
	     deleteSpeed: 10
		}).tiType('leisure travel.').tiPause(900).tiDelete()
		.tiType('read comics.').tiPause(900).tiDelete()
		.tiType('play billiards.').tiPause(900).tiDelete()
		.tiType('swim.').tiPause(900).tiDelete()
		.tiType('listen to EDM.').tiPause(900).tiDelete()
		.tiType('watch anime.').tiPause(900).tiDelete()
		.tiType('draw.').tiPause(900).tiDelete()
		.tiType('figure out who\'ll claim the iron throne?').tiPause(900).tiDelete();
	});
</script> <!-- type-it -->
<script type="text/javascript" src="external/js/jquery.waypoints.min.js"></script> <!-- waypoint -->
<script type="text/javascript" src="resources/js/script.js"></script> <!-- script -->
<script type="text/javascript" src="external/js/jquery.glide.min.js"></script> <!-- glide -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCIsKcxEoXUG9pQ-rJQFProzcCoKPNaksM"></script> <!-- google maps -->
<script type="text/javascript" src="external/js/gmaps.js"></script> <!-- gmaps -->
<script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.js"></script> <!-- modernizr -->

</body>
</html>
