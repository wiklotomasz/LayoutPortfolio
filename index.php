<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Frontend Developer Tomasz Wiklo Portfolio</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        <!-- <link rel="stylesheet" href="css/bootstrap.min.css"> -->

        <!-- Bootstrap Core CSS -->
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">

        <!-- Other CSS -->
        <link rel="stylesheet" href="css/menu.css"> <!-- Resource style -->
        <link rel="stylesheet" href="css/animate.css">
        <link rel="stylesheet" href="css/portfolio.css">
        <!-- bxSlider CSS file -->
        <link href="css/jquery.bxslider.css" rel="stylesheet" />

        <!-- Custom CSS -->
        <link rel="stylesheet" href="css/main.css">

        <!-- Custom Fonts -->
        <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href='https://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>

        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
  <header class="cd-header">

    <a id="top-menu" class="cd-primary-nav-trigger" href="#0">
      <span class="cd-menu-icon"></span>
    </a> <!-- cd-primary-nav-trigger -->

  </header>

  <nav>
    <ul class="cd-primary-nav">
      <li><a href="#home">Home</a></li>
      <li><a href="#works">Works</a></li>
      <li><a href="#about">About me</a></li>
      <li><a class="cv" href="#0">Download CV</a></li>
      <li><a href="#contact">Contact</a></li>
    </ul>
  </nav>
    <!-- Intro Header -->
    <section class="intro" id="home">
        <div class="intro-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <p class="hello-text"><strong>Hello!</strong> I am</p>
                        <img src="img/tomasz-wiklo.jpg" alt="author-image" class="img-responsive img-circle">
                        <h1 class="brand-heading">Tomasz Wiklo</h1>
                        <p class="intro-text">and i'm a polish front end developer nice to meet you!</p>
                        <a href="#works" class="btn btn-circle page-scroll">
                            <i class="fa fa-angle-double-down animated"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Page Content -->
    <div id="works-bg">
    <section id="works" class="container text-center">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Works</h1>
            </div>
        </div>
        <!-- /.row -->

  <div class="cd-projects-wrapper projects-visible">
    <ul class="cd-slider">
      <li class="current">
        <div class="transition">
          <a class="show-project" id="project-number-0" href="#0">
            <img src="img/portfolio/barcelona-point.jpg" alt="project image">
            <div class="project-info">
              <h2>BRIKS Architekci</h2>
            </div>
          </a>
        </div>
      </li>

      <li>
        <div class="transition">
          <a class="show-project" id="project-number-1" href="#0">
            <img src="img/portfolio/agencja-eventowa.jpg" alt="project image">
            <div class="project-info">
              <h2>BarcelonaPoint.com</h2>
            </div>
          </a>
        </div>
      </li>

      <li>
        <div class="transition">
        <a class="show-project" id="project-number-2" href="#0">
          <img src="img/portfolio/architects.jpg" alt="project image">
          <div class="project-info">
            <h2>Mrucon Group</h2>
          </div>
        </a>
        </div>
      </li>

      <li>
        <div class="transition">
        <a href="#0">
          <img src="img/portfolio/corporate-website.jpg" alt="project image">
          <div class="project-info">
            <h2>Project 4</h2>
          </div>
        </a>
        </div>
      </li>

      <li>
        <div class="transition">
        <a href="#0">
          <img src="img/portfolio/social-agency-website.jpg" alt="project image">
          <div class="project-info">
            <h2>Project 5</h2>
          </div>
        </a>
        </div>
      </li>

      <li>
        <div class="transition">
        <a href="#0">
          <img src="img/portfolio/wikom.jpg" alt="project image">
          <div class="project-info">
            <h2>Project 6</h2>
          </div>
        </a>
        </div>
      </li>

      <li>
        <div class="transition">
        <a href="#0">
          <img src="img/portfolio/firma-spedycyjna-strona-internetowa.jpg" alt="project image">
          <div class="project-info">
            <h2>Project 7</h2>
          </div>
        </a>
        </div>
      </li>
      
      <li>
        <div class="transition">
        <a href="#0">
          <img src="img/portfolio/szop-budka.jpg" alt="project image">
          <div class="project-info">
            <h2>Project 8</h2>
          </div>
        </a>
        </div>
      </li>

      <li>
        <div class="transition">
        <a href="#0">
          <img src="img/portfolio/university-website.jpg" alt="project image">
          <div class="project-info">
            <h2>Project 9</h2>
          </div>
        </a>
        </div>
      </li>
    </ul>

    <ul class="cd-slider-navigation cd-img-replace">
      <li><a href="#0" class="prev inactive">Prev</a></li>
      <li><a href="#0" class="next">Next</a></li>
    </ul> <!-- .cd-slider-navigation -->
  </div> <!-- .cd-projects-wrapper -->


  <div class="cd-project-content">
    <div>
      <h1 class="page-header text-center" id="ajax-name">BarcelonaPoint.com</h1>
      <p class="author hidden-xs"><span id="ajax-company">Perfect Sun Travel</span> <span class="date" id="ajax-date">July 2012</span></p>
      <div class="screens-portfiolo">
      <div class="wyswietl-maca">
          <div class="ekran-maca">
            <img class="obrazek-portfolio" id="ajax-big" src="http://studioleopard.pl/wp-content/uploads/2015/03/barcelona-point-strona-www.png" alt="Strona www" title="Strona www wersja na komputer">   
          </div>
      </div>
      <div class="wyswietl-iphona">
          <div class="ekran-iphona">
            <img class="obrazek-iphone hidden-xs" id="ajax-small" src="http://studioleopard.pl/wp-content/uploads/2015/10/eventforyou_mobile.jpg" alt="Strona www" title="Strona www wersja na telefon">   
          </div>
      </div>
      </div>
      <div class="row">
            <div class="col-md-8 details">
                <h2 class="page-header">Details</h2>
                <p>Technologies: <span id="ajax-technologies"> HTML, CSS, Javascript</span></p>
                <p>Description: <span id="ajax-desc"> Website development for an event organised in Bydgoszcz and its administration throughout the entire event.</span></p>
            </div>
            <div class="col-md-4 visit-online">
              <h2 class="page-header">Try it</h2>
              <p>
                <button type="button" class="btn btn-visit btn-about"><i class="fa fa-external-link"></i> VISIT <span>ONLINE</span></button>
              </p>
            </div>
      </div>
    </div>
    <a href="#0" class="close">
    <span class="cd-menu-icon is-clicked"></span>
    </a>
  </div> <!-- .cd-project-content -->

    </section>
    </div>
    <!-- /.container -->

    <!-- Page Content -->
    <div id="about-bg">
    <section id="about" class="container">

        <div class="row text-centred">
            <div class="col-lg-6 img-photo">
                <img src="img/tomasz.jpg" class="img-responsive" alt="author Tomasz Wiklo">
            </div>
            <div class="col-lg-6 about-column">

              <ul class="bxslider">
                <li>



                    <div class="about-text">
                      <h1 class="page-header text-center">About me</h1>
                      <p>I'm a Front End Developer from Poznan, Poland.</p>
                      <p>I enjoy turning complex problems into simple, beautiful and intuitive websites. When I'm not coding, I love to play board games, watch classic movies and swim.</p>
                      <button type="button" class="btn btn-visit btn-about"><i class="fa fa-download"></i> DOWNLOAD <span>CV</span></button>
                      <a href="#contact" type="button" class="btn btn-visit btn-about page-scroll"><i class="fa fa-paper-plane"></i> HIRE <span>ME</span></a>
                    </div>


                </li>
                <li>

<!-- The Timeline -->
<h1 class="page-header text-center">Education</h1>
<ul class="timeline">

  <!-- Item 1 -->
  <li>
    <div class="direction-r">
      <div class="flag-wrapper">
        <span class="flag">Poznan University of Economics</span>
        <span class="time-wrapper"><span class="time">2012 - 01.2015</span></span>
      </div>
      <div class="desc">Faculty of Informatics and Electronic Economy, programme: Informatics and Econometrics. Full-time postgraduate studies (MSc)</div>
    </div>
  </li>
  
  <!-- Item 2 -->
  <li>
    <div class="direction-r">
      <div class="flag-wrapper">
        <span class="flag">Paris – Sud University, France</span>
        <span class="time-wrapper"><span class="time">02.2013 – 06.2013</span></span>
      </div>
      <div class="desc">Faculty of Management, programme: study programme in English.</div>
    </div>
  </li>

  <!-- Item 3 -->
  <li>
    <div class="direction-r">
      <div class="flag-wrapper">
        <span class="flag">Poznan University of Economics</span>
        <span class="time-wrapper"><span class="time">2009 – 2011</span></span>
      </div>
      <div class="desc">Faculty of Informatics and Electronic Economy. Full-time undergraduate studies (BSc) </div>
    </div>
  </li>
  
</ul>
                </li>  
                <li>

                  <h1 class="page-header text-center">Experience</h1>
<ul class="timeline">

  <!-- Item 1 -->
  <li>
    <div class="direction-r">
      <div class="flag-wrapper">
        <span class="flag">Freelance</span>
        <span class="time-wrapper"><span class="time">05.2012 - present</span></span>
      </div>
      <div class="desc">Web Designer/Front-End Developer</div>
    </div>
  </li>
  
  <!-- Item 2 -->
  <li>
    <div class="direction-r">
      <div class="flag-wrapper">
        <span class="flag">Perfect Sun Travel</span>
        <span class="time-wrapper"><span class="time">06.2014 – 09.2014</span></span>
      </div>
      <div class="desc">Summer internship in Barcelona, Spain. Responsible for redesign of websites.</div>
    </div>
  </li>

  <!-- Item 3 -->
  <li>
    <div class="direction-r">
      <div class="flag-wrapper">
        <span class="flag">TS Software</span>
        <span class="time-wrapper"><span class="time">07.2013 – 06.2014</span></span>
      </div>
      <div class="desc">Development of dedicated software for TIMAC Agro Sp. z o.o. (French company)</div>
    </div>
  </li>
  
</ul>
          </li>
                <li>
                      <h1 class="page-header text-center">Skills</h1>
                      <div id="skills-div">
                        <ul id="brandlogo">
                          <li data-toggle="tooltip" data-placement="bottom" title="HTML 5"><img src="img/skills/html-5.svg" alt="..."></li>
                          <li data-toggle="tooltip" data-placement="bottom" title="CSS 3"><img src="img/skills/css-3.svg" alt="..."></li>
                          <li data-toggle="tooltip" data-placement="bottom" title="Javascript"><img src="img/skills/iicon-js.png" alt="..."></li>
                          <li data-toggle="tooltip" data-placement="bottom" title="Responsive Web Design"><img src="img/skills/rwd.png" alt="..."></li>
                          <li data-toggle="tooltip" data-placement="bottom" title="jQuery"><img src="img/skills/jquery.svg" alt="..."></li>
                          <li data-toggle="tooltip" data-placement="bottom" title="Wordpress"><img src="img/skills/wordpress-icon.svg" alt="..."></li>
                          <li data-toggle="tooltip" data-placement="bottom" title="Bootstrap"><img src="img/skills/bootstrap.svg" alt="..."></li>
                          <li data-toggle="tooltip" data-placement="bottom" title="Grunt"><img src="img/skills/grunt.svg" alt="..."></li>
                          <li data-toggle="tooltip" data-placement="bottom" title="GIT"><img src="img/skills/git-icon.svg" alt="..."></li>
                          <li data-toggle="tooltip" data-placement="bottom" title="Less"><img src="img/skills/less.svg" alt="..."></li>
                          <li data-toggle="tooltip" data-placement="bottom" title="Sass"><img src="img/skills/sass.svg" alt="..."></li>
                          <li data-toggle="tooltip" data-placement="bottom" title="Angularjs"><img src="img/skills/angular-icon.svg" alt="..."></li>
                          <li data-toggle="tooltip" data-placement="bottom" title="Photoshop"><img src="img/skills/photoshop.png" alt="..."></li>
                          <li data-toggle="tooltip" data-placement="bottom" title="Drupal"><img src="img/skills/drupal.svg" alt="..."></li>
                          <li data-toggle="tooltip" data-placement="bottom" title="PHP 5"><img src="img/skills/php.svg" alt="..."></li>
                          <li data-toggle="tooltip" data-placement="bottom" title="English"><img src="img/skills/england.png" alt="..."></li>
                        </ul>
                      </div>


                </li>
              </ul>

            </div>
        </div>


    </section>
    </div>
    <!-- /.container -->

    <!-- Page Content -->
    <div id="contact-bg">
    <section id="contact" class="container text-center">

      <div class="row first">
            <div class="col-md-12">
                <h1 class="page-header">Contact me</h1>
                <p>I would love to talk to you so holla me if you have time.</p>
            </div>
      </div>

      <div class="row second">
            <div class="col-md-12">
                <div class="social">
                  <ul>
                      <li data-toggle="tooltip" data-placement="bottom" title="Facebook"><a href="https://www.facebook.com/tomaszwiklo" target="_blank"><i class="fa fa-lg fa-facebook"></i></a></li>
                      <li data-toggle="tooltip" data-placement="bottom" title="Linkedin"><a href="https://pl.linkedin.com/in/tomaszwiklo" target="_blank"><i class="fa fa-lg fa-linkedin"></i></a></li>
                      <li data-toggle="tooltip" data-placement="bottom" title="Github"><a href="https://github.com/wiklotomasz" target="_blank"><i class="fa fa-lg fa-github"></i></a></li>
                      <li data-toggle="tooltip" data-placement="bottom" title="CV"><a href="#"><i class="fa fa-lg fa-file-text" target="_blank"></i></a></li>
                      <li data-toggle="tooltip" data-placement="bottom" title="E-mail"><a href="mailto:wikweb@gmail.com"><i class="fa fa-lg fa-envelope-o" target="_blank"></i></a></li>                                     
                  </ul>
              </div>
            </div>
      </div>

        <div class="row third">
          <div class="col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3">
            <form role="form" id="contactForm" data-toggle="validator" class="shake">
                      <div id="msgSubmit" class="bs-component hidden">
                        <div class="alert alert-dismissible alert-danger">
                        </div>
                      <div id="source-button" class="btn btn-primary btn-xs" style="display: none;">&lt; &gt;</div></div>
                      <div class="form-group">
                        <input type="text" class="form-control" id="name" placeholder="Name" required="">
                        <div class="help-block with-errors"></div>
                      </div>
                      <div class="form-group">
                        <input type="email" class="form-control" id="email" placeholder="Email Address" required="">
                        <div class="help-block with-errors"></div>
                      </div>
                      <div class="form-group">
                        <textarea class="form-control" id="message" placeholder="Enter your message" required=""></textarea>
                        <div class="help-block with-errors"></div>
                      </div>
                      <button type="submit" id="form-submit" class="btn btn-send">Submit a Message</button>
            </form>
          </div>
        </div>

    </section>
    <footer>
          Copyrights © <script>document.write(new Date().getFullYear())</script> TomaszWiklo.com. All Rights Reserved. Icons from <a href="http://pl.freepik.com/" target="_blank">Freepik</a>.
    </footer>
    </div>
    <!-- /.container -->
        
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>
        
        <script type="text/javascript" src="js/vendor/ajax-json.js"></script>
        

        <script src="js/vendor/bootstrap.min.js"></script>
        <!-- bxSlider Javascript file -->
        <script src="js/vendor/jquery.bxslider.min.js"></script>
        <script type="text/javascript" src="js/vendor/validator.min.js"></script>
        <script type="text/javascript" src="js/vendor/form-scripts.js"></script>
        <script src="js/vendor/jquery.mobile.custom.min.js"></script>

        <script type="text/javascript">
          $(document).ready(function(){
            $('.bxslider').bxSlider({
              infiniteLoop: false,
              hideControlOnEnd: true,
              adaptiveHeight: true,
              mode: 'fade'
            });
          });
        </script>
        <script src="js/vendor/portfolio.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>
