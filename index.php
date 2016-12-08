<!DOCTYPE html>
<html>
<head>
<?php include 'navbar.php'; ?>
<style>
body { 
	padding-top: 3%; 
}
.well{
	background: #A8DBA8;
	padding: auto auto auto auto;
}

#contentContainer{
	width: 90%;
}
</style>
<title>Jason Snell - Web Developer </> </title>
	
</head>
<body>
<!-- Page content -->
<div class="bodyContainer">
	<div id="contentContainer" class="innerBodyContainer container-fluid">
    <div id="aboutMe"></div>
        <div class="well">
        <div class="row">
        <div id="rightCol" class="col-md-10">
        <div class= "text-center">
        <h3 id="pageTitle">Jason Snell</h3>
        <h4 id="pageTitleCaption" class="text-primary"><i>Web Developer</i></h4>
        </div>
                <p>
                    Hello, my name is Jason Snell. I am an independent web developer. I am in the process of
                    expanding my knowledge of web development. Currently I am working through a great site for learning
                    front end development, <a href="http://www.freecodecamp.com">Free Code Camp</a>. I would highly
                    recommend this site to anyone wanting to learn web development.
                    <br><br>
                    I have worked with web pages for several years and I am quite excited about all the new frameworks
                    that are now availble. This site uses a variety of both front end and back end languages. Feel free
                    to click through the projects in the menu to see what I've been up to. 
                    <br><br>
                    Current languages and frameworks being used:
                    <br><b>HTML, CSS, JavaScript, Bootstrap, PHP, and JQuery</b>
                    <br><br>
                    I am also continuing to expand my knowledge of web development, and not just in learning new languages
                    or frameworks, but also in accessibility and security. A great example I heard once was that trying to
                    add accessibility or security into a website is like trying to add blueberries into a muffin after it
                    has been baked. It is much easier to build from the ground up with all the ingredients to a web site.
                </p>
            Below are some screenshots of some projects I have completed.<br><br>
        </div></div>
    <!--
    Portfolio screen shots
    -->
<div id="portfolioImages" class="row text-center">
	<div class="row"><div class="col-md-6">
        <figure>
            <img class="img-thumbnail img-rounded" alt="A tribute page screenshot for Alexander Fleming" src="imgs/alexflemss.png" width="500" height="400" /><br>
            <figcaption>A tribute page screenshot for Alexander Fleming</figcaption>
        </figure>
		</div>
		<div class="col-md-6">
		<figure>
            <a href="DisplayWeather.php"><img class="img-thumbnail img-rounded" alt="Screenshot of a weather display web page" src="imgs/weathergenss.png" width="500" height="400"/></a><br>
            <figcaption>Weather Display Page using the OpenWeather API</figcaption>
        </figure>
		
        </div>
    </div>
    <div class="row">
		<div class="col-md-6">
		<figure>
            <a href="quotepage.php"><img class="img-thumbnail img-rounded" alt="Screenshot of a random quote web page" src="imgs/quotegenss.png"  width="500" height="400"/></a><br>
            <figcaption>Random Quote Page using an API for generation</figcaption>
        </figure>
		
        </div>
        <div class="col-md-6">
		<figure>
            <a href="wikipediaViewer.php"><img class="img-thumbnail img-rounded" alt="Screenshot of a wikipedia search and viewer web page" src="imgs/wikiviewier_screenshot.png"  width="500" height="400"/></a><br>
            <figcaption>Search and View Wikipedia Articles</figcaption>
        </figure>
		
        </div>
	</div>
    <div class="row">
		<div class="col-md-6">
		<figure>
            <a href="twitchtvviewer.php"><img class="img-thumbnail img-rounded" alt="Screenshot of Twitch.TV Stream Viewer" src="imgs/twitchtvss.png"  width="500" height="400"/></a><br>
            <figcaption>View Twitch.TV Streams using the Twitch.TV API</figcaption>
        </figure>
		
        </div>
        <div class="col-md-6">
		<figure>
            <img class="img-thumbnail img-rounded" alt="" src=""  width="500" height="400"/><br>
            <figcaption></figcaption>
        </figure>
		
        </div>
	</div>
</div>
		<br>
		<br>
<div id="contactMe"></div>		
<form class="form-horizontal" action="https://formspree.io/admin@jasonsnell.com" method="POST">
<fieldset>

<!-- Form Name -->
<legend>Contact Me!</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="firstName">First Name</label>  
  <div class="col-md-4">
  <input name="firstName" class="form-control input-md" id="firstName" type="text" placeholder="First Name">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="lastName">Last Name</label>  
  <div class="col-md-4">
  <input name="lastName" class="form-control input-md" id="lastName" type="text" placeholder="Last Name">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="email">Email Address</label>  
  <div class="col-md-4">
  <input name="email" class="form-control input-md" id="email" type="text" placeholder="Email Address">
    
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="message">Message</label>
  <div class="col-md-4">                     
    <textarea name="message" class="form-control" id="message" rows="5"></textarea>
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="submit"></label>
  <div class="col-md-4">
    <button name="submit" class="btn btn-primary" id="submit">Submit</button>
  </div>
</div>

</fieldset>
</form>
<!-- Insert Social Media Icons below here -->
        <div id="bottom" class="row text-center">
            <div class="col-md-3">
            <a href="#" style="color:black;"><button class="btn btn-facebook"><i class="fa fa-facebook"></i> | Connect with Facebook</button></a>
            </div>
            <div class="col-md-3">
            <a href="https://www.linkedin.com/in/jasonrsnell" style="color:black;"><button class="btn btn-linkedin"><i class="fa fa-linkedin"></i> | Connect with LinkedIn</button></a>
            </div>
            <div class="col-md-3">
            <a href="https://github.com/foxtwo7" style="color:black;"><button class="btn btn-github"><i class="fa fa-github"></i> | Connect with GitHub</button></a>
            </div>
            <div class="col-md-3">
            <a href="#" style="color:black;"><button class="btn btn-twitter"><i class="fa fa-twitter"></i> | Connect with Twitter</button></a>
            </div>
        </div>
		
    <div id="copyright" class="row text-center"><div class="col-md-12"><i class="">Copyright 2016 - Jason Snell</i></div></div>
	</div>
</div>
</div>
</body>
</html>