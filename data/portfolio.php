      <?php
        // The code below creates the class
        class Portfolio {
            // Creating some properties (variables tied to an object)
            public $id;
            public $name;
            public $desc;
            public $img;
            public $url;
            
            // Assigning the values
            public function __construct($id, $name, $desc, $img, $url) {
              $this->id = $id;
              $this->name = $name;
              $this->desc = $desc;
              $this->img = $img;
              $this->url = $url;
            }
            
            // Creating a method (function tied to an object)
            public function display() {
              return '
                <div class="col-md-3 col-sm-6 col-xs-12 portfolio-item item" data-content="#content_' . $this->id .'">
                    <div class="transition">
                    <a class="button colio-link" href="#">
                        <img class="img-responsive" src="img/portfolio/' . $this->img .'" alt="' . $this->name .'">
                    </a>
                    </div>
                </div>
                ';

            }


            public function colioz() {
              return '
                <div id="content_' . $this->id .'" class="colio-content">
                  <div class="col-md-12">
                      <div class="col-lg-6">
                          <img class="img-responsive" src="img/portfolio/' . $this->img .'" alt="' . $this->name .'">
                      </div>
                      <div class="col-lg-6">
                          <h2>' . $this->name .'</h2>
                          <p class="project-desc">' . $this->desc .'</p>
                          <a href="' . $this->url .'" target="_blank"><button type="button" class="btn btn-visit">VISIT WEBSITE <span>ONLINE</span></button></a>
                      </div>                
                  </div>
                </div>
                ';

            }


                
          }
          
        // Creating a new person called "boring 12345", who is 12345 years old ;-)
        $me_1 = new Portfolio('1', 'BarcelonaPoint.com', 'BarcelonaPoint - a company which offers a search engine dedicated to the holiday apartment rental', 'barcelona-point.jpg', 'https://www.barcelonapoint.com');
        $me_2 = new Portfolio('2', 'EventForYou.pl', 'Events agency from Poland', 'agencja-eventowa.jpg', 'http://www.eventforyou.pl/');
        $me_3 = new Portfolio('3', 'Studio Leopard', 'Company which offers websites designs', 'webdeveloping-website.jpg', 'http://studioleopard.com/');
        $me_4 = new Portfolio('4', 'BRIKS Architekci', 'Polish architects', 'architects.jpg', 'http://briks.com.pl/');
        $me_5 = new Portfolio('5', 'Mrucon Group', 'Corporate website', 'corporate-website.jpg', 'http://www.mrucon-group.com');
        $me_6 = new Portfolio('6', 'Social Meister', 'Website for a social media agency', 'social-agency-website.jpg', 'http://socialmeister.pl/');
        $me_7 = new Portfolio('7', 'WIKOM', 'Website for tax advisor from Poznan', 'wikom.jpg', 'http://wikombiuro.pl/');
        $me_8 = new Portfolio('8', 'TRAN-SPED.NET', 'The shipping company from Poland', 'firma-spedycyjna-strona-internetowa.jpg', 'http://trans-sped.net/');
        $me_9 = new Portfolio('9', 'Szopbudka.pl', 'Website for company with photoboxes', 'szop-budka.jpg', 'http://szopbudka.pl/');
        $me_10 = new Portfolio('10', 'University of Life Sciences', 'Information webpage for University of Life Sciences in Poznan conference', 'university-website.jpg', 'http://wikweb.pl/konferencja/');
        $me_11 = new Portfolio('11', 'Toastmasters Poznan', 'Public speaking club', 'public-speaking.jpg', 'http://toastmasterspoznan.pl/');
        $me_12 = new Portfolio('12', 'Rentierzy.FM', 'MLM sectior, corporate webiste', 'mlm-sector-website.jpg', 'http://rentierzy.fm/en/');
        
        // Printing out, what the greet method returns
        ?>