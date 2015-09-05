<?php
  include('includes/core/Database.php');

ini_set('display_errors', 'On');

  session_start();
  $db = new Database();
    //$db->delete("pages", 4);
    //$db->update("pages", 3, "Updated Post", "The first post i updated", "This is my first updated post through php", "updated-post");
    //$db->insert("pages", "PHP Post", "My first post from PHP", "This is the first post which was sent through php", "php-post");
    $postArray = $db->selectAll("pages");
    var_dump($postArray);
?>


<!DOCTYPE html>
<html>
  <head>
      <title>Oskar Mendel Freelance Web Developer & Web Designer</title>
      <meta name="description" content="Oskar Mendel is a freelance web developer & web designer. He loves to make websites and would be happy to work with you.">
      <meta name="keywords" content="Oskar Mendel, Freelance, Web Developer, Web Design, Programming, Design, Technology, Code, Responsive, Mobile">
      <meta name="robots" content="NOINDEX, NOFOLLOW">
      <meta name="google-site-verification" content="GPGulxFcdObZIM-2Ft3LxSSTi-esKA8mqmL6Z55fiLg" />
      <meta name="author" content="Oskar Mendel">



    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- FONTS  -->
    <link href='http://fonts.googleapis.com/css?family=Oswald:400,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Playfair+Display:400,700italic,700,400italic' rel='stylesheet' type='text/css'>
    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-28307396-4', 'auto');
  ga('send', 'pageview');

</script>
  </head>

  <body>
  <!-- HEADER CONTENT -->
    <header>
      <div class="overlay-tint">
          <div class="header-wrap">
            <div class="logo-container">
              <div class="logo">
                <h1>O.M</h1>
              </div>
            </div>
            <nav>
              <ul class="main-menu">
                <li class="menu-item"><a href="#About">About</a></li>
                <li class="menu-item"><a href="#Services">Services</a></li>
                <li class="menu-item"><a href="#Portfolio">Portfolio</a></li>
                <li class="menu-item"><a href="#Contact">Contact</a></li>
              </ul>
            </nav>

            <div class="hMessage-container">
              <div class="hMessage-box">
                <div class="hMessage">
                  <h1 class="headline">Do you need a beautiful website?</h1>
                  <h2>I would love to work with you</h2>
                </div>
                <div class="hMessage-logo">
                  <h1>O.M</h1>
                </div>
              </div>
            </div>
          </div>
      </div>
    </header>
    <!-- HEADER CONTENT END -->

    <!-- ABOUT CONTENT -->
    <section class="about">
      <div class="about-wrap flex">
      <div class="about-col about-text">
        <h1 class="headline-font about-space-bot" id="About">About me</h1>
        <div class="about-faceimg-mobile">
        </div>

        <!-- About Tablist -->
        <div class="about-tabs">
          <ul class="about-tablist">
            <li class="about-active"><a href="tabAbout">About</a></li>
            <li><a href="tabSkill">Skills</a></li>
          </ul>
        </div>

        <div class="about-tabContent">
          <div id="tabAbout" class="tab active">
            <h3 class="about-title">My name is Oskar Mendel</h3>
            <h5 class="about-undertitle">And I create <span class="text-bigYellow">AWESOME</span> websites.</h5>
            <hr class="dashed-hr">
            <p>I have been intrested in <span class="text-bigYellow">PROGRAMMING</span>
               since I was 13. Three years ago I started <span class="text-bigYellow">DESIGNING</span>
               websites and since then web development has been my passion.</p>
          </div>
          <div id="tabSkill" class="tab">
            <ul class="about-skillList">
              <li>HTML/CSS
                  <div class="about-skillBar"><div id="skillHtml" class="about-skill"></div></div>
              </li>
              <li>Javascript/JQuery
                <div class="about-skillBar"><div id="skillJs" class="about-skill"></div></div>
              </li>
              <li>Wordpress
                <div class="about-skillBar"><div id="skillWp" class="about-skill"></div></div>
              </li>
              <li>PHP
                <div class="about-skillBar"><div id="skillPhp" class="about-skill"></div></div>
              </li>
              <li>Python
                <div class="about-skillBar"><div id="skillPython" class="about-skill"></div></div>
              </li>
              <li>Photoshop
                <div class="about-skillBar"><div id="skillPhotoshop" class="about-skill"></div></div>
              </li>
            </ul>
          </div>
        </div>
        <!-- About Tablist End-->

    	</div>
    	<div class="about-col about-image-col">
    	  <div class="temp-img">
	      </div>
        </div>
    </section>
    <!-- ABOUT CONTENT END -->

    <!-- WORKFLOW CONTENT -->
    <section class="workflow" id="Services">
        <div class="workflow-container">
          <div class="workflow-col">
            <div class="workflow-item">
                <i class="fa fa-paint-brush fa-5x"></i>
                <h1>Design</h1>
                <p>I offer full process design with high quality tailored for my clients needs.</p>
            </div>
            <div class="workflow-item space-top">
                <i class="fa fa-code fa-5x"></i>
                <h1>Code</h1>
                <p>I code websites to be highly responsive using multiple languages and the newest technologies.</p>
            </div>
          </div>
          <div class="workflow-col">
            <div class="workflow-item">
                <i class="fa fa-cogs fa-5x"></i>
                <h1>SEO Optimization</h1>
                <p>I will optimize your website for search engimes so your website can be easily found on the web.</p>
            </div>
            <div class="workflow-item space-top">
                <i class="fa fa-commenting-o fa-5x"></i>
                <h1>Support</h1>
                <p>Having issues or something is not working with your current website, I answear emails within 24 hours.</p>
            </div>
          </div>
        </div>
    </section>
    <!-- WORKFLOW CONTENT END -->

      <!-- PORTFOLIO CONTENT -->
    <section class="portfolio" id="Portfolio">
      <div class="portfolio-container">
        <div class="row">
          <div class="large-6 columns">
              <ul class="previous-work">
                <li class="websites site-oldPortfolio">
                  <div class="website-info">
                    <h1 class="website-info-headline">Old Portfolio</h1>
                      <p class="time-span"><b>Time to complete: </b>2 weeks.</p>
                      <p class="intro-text">This site is what got me started in Web Design & Development. When I made this my goal was to learn about
                                                      parallax scrolling.</p>
                      <p>I was assigned a task from my teacher when i was in school to create my own portfolio website,
                            another part of the task was that I had to choose a technology of my choise I wanted to dig deeper in.
                            My choise was paralax scrolling and in this website i placed effects which triggered from scrolling through the website.</p>
                      <a class="website-info-button" href="#Contact">Get your own website!</a>
                  </div>
                </li>
                <li class="websites site-jacekPortfolio selected-website">
                  <div class="website-info">
                    <h1 class="website-info-headline">Jacek's Portfolio</h1>
                      <p class="time-span"><b>Time to complete: </b>2 weeks.</p>
                      <p class="intro-text">I created this site for my father a freelance photographer who wanted a place to store and display his work.</p>
                      <p>I used Wordpress to create this site because I feel like the simplicity for a user to publish his/her own content is really
                            simple. At the same time Wordpress makes developing very easy and is alot of fun to work with.</p>
                      <a class="website-info-button" href="#Contact">Get your own website!</a>
                  </div>
                </li>
                <li class="websites site-insideMetal">
                  <div class="website-info">
                    <h1 class="website-info-headline">Inside Metal</h1>
                    <p class="time-span"><b>Time to complete: </b>4 weeks.</p>
                      <p class="intro-text">This website uses Wordpress as CMS and is website made for people intrested in recieving the latest news
                            within the metal scene.</p>
                      <p>This website was a project I worked on with a friend in school as a graduation project. When we started
                            this project we had no prior knowledge of how Wordpress works and our PHP skills were very limited compared to today.
                            The website turned out great and it was a very fun project.</p>
                      <a class="website-info-button" href="#Contact">Get your own website!</a>
                  </div>
                </li>
              </ul>
          </div>
          <div class="large-6 columns">
              <!--<div class="website-info">
                <h1 class="website-info-headline">Selected website</h1>
                  <p>This was a website bla bla bla i made it bblasifdjasifpojshgopahdguid</p>
                  <p>This was a website bla bla bla i made it bblasifdjasifpojshgopahdguid</p>
                  <p>This was a website bla bla bla i made it bblasifdjasifpojshgopahdguid</p>
                  <a class="website-info-button">Get your own website!</a>
              </div>-->
          </div>
        </div>
      </div>
    </section>
      <!-- PORTFOLIO CONTENT END -->

    <section class="articles">
      <div class="articles-container">
          <div class="large-6 columns">
            <?php
                if(isset($postArray)){
                    $postCount = count($postArray);
                    for($x = 0; $x < $postCount; $x++){
                        if(isset($postArray[$x])){
                            $post = $postArray[$x];
                        }
                        ?>
                        <div class="article-post">
                            <div class="postDate"> <?php echo $post[5] ?></div>
                            <div class="row">
                                <div class="postTitle">
                                    <h1><?php echo $post[1] ?></h1>
                                </div>
                            </div>
                            <div class="row">
                                <div class="postBody">
                                    <p><?php echo $post[2] ?></p>
                                </div>
                                <div class="postLink"><a href="<?php echo $post[4] ?>">Read more!</a></div>
                            </div>
                        </div>
                        <?php
                    }
                }
            ?>
          </div>
          <div class="large-6 columns">
            <h1 class="ArticlesHeadline">Articles</h1>
          </div>
      </div>
    </section>

  <!-- CONTACT CONTENT -->
      <section class="contact">
        <div class="contact-container">
          <h1 id="Contact">Contact</h1>
            <div class="large-6 columns">
              <h2>Getting in touch is easy!</h2>
              <div class="row"><h3>Oskar Mendel</h3></div>
              <div class="row"><p>Granhem Jät</p></div>
              <div class="row"><p><u>mendel.oskar@gmail.com</u></p></div>
              <div class="row icon-container">
                <i class="fa fa-twitter"><a href="https://twitter.com/OskarMendel"></a></i>
                <i class="fa fa-facebook-square"><a href=""></a></i>
                <i class="fa fa-github"><a href="https://github.com/Rakso96"></a></i>
                <i class="fa fa-youtube-square"><a href="https://www.youtube.com/channel/UC3wANyKciMfuUa-mnYlTSrA"></a></i>
              </div>
            </div>
            <div class="large-6 columns">
              <form action="//formspree.io/mendel.oskar@gmail.com" method="POST">
                <div class="row">
                    <input type="text" name="name" placeholder="Name" class="input-name">
                </div>
                <div class="row form-space">
                  <input type="email" name="_replyto" placeholder="Your Email" class="input-mail">
                </div>
                <div class="row form-space">
                  <div class=".large-8.columns">
                    <textarea name="message" placeholder="Write to me about any project. I'd love to work with you!" class="input-text"></textarea>
                  </div>
                </div>
                <div class="row">
                  <input type="submit" value="Send The Message!" class="input-send">
                </div>
              </form>
            </div>
        </div>
      </section>

  <footer>
      This will be the footer
  </footer>

      <!-- SCRITPS -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
      <script src="assets/js/scripts.js"></script>
  </body>


</html>
