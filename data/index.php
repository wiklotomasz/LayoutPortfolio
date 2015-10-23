<?php
	
	function sanitize($str, $quotes = ENT_NOQUOTES){
		$str = htmlspecialchars($str, $quotes);
		return $str;
	}
	
	//Create a stdClass instance to hold important information
	$return = new stdClass(); 
	$return->success = true;
	$return->errorMessage = "";
	$return->data = array();

	$method = $_POST;

	//Sanitize the string and json strings received from the front-end
	//Corresponds to 'data:{ js_string: val , js_array: arr,  js_object: obj }' in $.ajax
	if(isset($method['js_string'])) $string = sanitize($method['js_string']); 
	

	//Alter values
	switch ($string) {
    case "project-number-0":
        	$portfolio = [
    			"id" => "0",
    			"name" => "BarcelonaPoint.com",
    			"company" => "Perfect Sun Travel",
    			"date" => "September 2014",
    			"url" => "http://barcelonapoint.com",
    			"big" => "barcelona-point-strona-www.png",
    			"small" => "barcelona-point-responsywna-strona.png",
    			"technologies" => "HTML, CSS, Javascript, jQuery, Bootstrap, MySQL, PHP",
    			"desc" => "Created new graphic layout for the http://barcelonapoint.com/ website based on .psd files.",
			];
        break;
    case "project-number-1":
            $portfolio = [
                "id" => "1",
                "name" => "EventForYou.pl",
                "company" => "MruCon Sp. z o.o.",
                "date" => "April 2015",
                "url" => "http://eventforyou.pl/",
                "big" => "event-for-you-strona-www.png",
                "small" => "event_for_you_mobile.png",
                "technologies" => "HTML, CSS, jQuery, Bootstrap, PHP",
                "desc" => "Website development for an event company from Poznań.",
            ];
        break;
    case "project-number-2":
            $portfolio = [
                "id" => "2",
                "name" => "Briks.com.pl",
                "company" => "BRIKS ARCHITEKCI",
                "date" => "September 2015",
                "url" => "http://briks.com.pl/",
                "big" => "briks_desktop.jpg",
                "small" => "briks_mobile.jpg",
                "technologies" => "HTML, CSS, Javascript, jQuery, Bootstrap, Wordpress, MySQL, PHP",
                "desc" => "Website development for an architect studio from Poznań based on ready template.",
            ];
        break;
    case "project-number-3":
            $portfolio = [
                "id" => "3",
                "name" => "Mrucon-group.com",
                "company" => "MruCon Sp. z o.o.",
                "date" => "October 2015",
                "url" => "http://mrucon-group.com/",
                "big" => "corporate-website.jpg",
                "small" => "mrucon_mobile.png",
                "technologies" => "HTML, CSS, Javascript, jQuery, Bootstrap",
                "desc" => "Website development for an company from Poznań based on ready template.",
            ];
        break;
    case "project-number-4":
            $portfolio = [
                "id" => "4",
                "name" => "Socialmeister.pl",
                "company" => "Social Meister",
                "date" => "October 2014",
                "url" => "http://socialmeister.pl/",
                "big" => "socialmeister-agencja-interaktywna.png",
                "small" => "agencja-social-media-responsywne.png",
                "technologies" => "HTML, CSS, jQuery, Bootstrap, Wordpress",
                "desc" => "Website development for an company from Poznań based on ready template.",
            ];
        break;
    case "project-number-5":
            $portfolio = [
                "id" => "5",
                "name" => "Wikombiuro.pl",
                "company" => "Biuro Rachunkowe WIKOM",
                "date" => "October 2013",
                "url" => "http://wikombiuro.pl/",
                "big" => "biuro-rachunkowe-strona-www.png",
                "small" => "biuro-rachunkowe-responsywne.png",
                "technologies" => "HTML, CSS",
                "desc" => "Website development for an company from Poznań based on ready template.",
            ];
        break;
    case "project-number-6":
            $portfolio = [
                "id" => "6",
                "name" => "Trans-sped.net",
                "company" => "TRANS – SPED Piotr Grabowski",
                "date" => "August 2015",
                "url" => "http://trans-sped.net/",
                "big" => "firma-spedycyjna-strona-internetowa.jpg",
                "small" => "firma-spedycyjna-strona-www.png",
                "technologies" => "HTML, CSS, jQuery, Wordpress, PHP",
                "desc" => "Website development for an company from Poznań based on ready template.",
            ];
        break;
    case "project-number-7":
            $portfolio = [
                "id" => "7",
                "name" => "Szopbudka.pl",
                "company" => "MruCon Sp. z o.o.",
                "date" => "July 2015",
                "url" => "http://szopbudka.pl/",
                "big" => "szopbudka_www.png",
                "small" => "strona_mobilna_szopbudka.png",
                "technologies" => "HTML, CSS, jQuery, Bootstrap, Wordpress, MySQL, PHP",
                "desc" => "Website development for an company from Poznań based on ready template.",
            ];
        break;
    case "project-number-8":
            $portfolio = [
                "id" => "8",
                "name" => "University Conference",
                "company" => "Poznań University of Life Sciences",
                "date" => "September 2014",
                "url" => "http://wikweb.pl/konferencja/",
                "big" => "konferencja-przyrodnicza-strona-www1.png",
                "small" => "konferencja-przyrodnicza-strona-telefon.png",
                "technologies" => "HTML, CSS",
                "desc" => "Website development for Poznań University of Life Sciences based on ready template.",
            ];
        break;
    case "project-number-9":
            $portfolio = [
                "id" => "9",
                "name" => "Toastmasterspoznan.pl",
                "company" => "Toastmasters Poznan",
                "date" => "December 2013",
                "url" => "http://toastmasterspoznan.pl/",
                "big" => "toastmasters-strona-www.jpg",
                "small" => "toastmasters-telefony.png",
                "technologies" => "HTML, CSS, Wordpress",
                "desc" => "Website development for an event company from Poznań.",
            ];
        break;
    case "project-number-10":
            $portfolio = [
                "id" => "10",
                "name" => "Rentierzy.FM",
                "company" => "Krzysztof Cybul",
                "date" => "September 2012",
                "url" => "http://rentierzy.fm/",
                "big" => "rentierzy-fm-strona-internetowa.png",
                "small" => "rentierzy-fm-strona-telefon.png",
                "technologies" => "HTML, CSS, Javascript, jQuery, Wordpress, MySQL, PHP",
                "desc" => "Development (jointly with a graphic designer) of the website.",
            ];
        break;
    default:
            $portfolio = [
                "id" => "10",
                "name" => "Title",
                "company" => "Company",
                "date" => "Date 2015",
                "url" => "http://tomaszwiklo.com/",
                "big" => "http://localhost/LayoutPortfolio/img/portfolio_projects/briks_desktop.jpg",
                "small" => "http://localhost/LayoutPortfolio/img/portfolio_projects/firma-spedycyjna-strona-www.png",
                "technologies" => "HTML, CSS, Javascript, jQuery, Bootstrap, Wordpress, MySQL, PHP, Less",
                "desc" => "Website development for an event company from Poznań.",
            ];
	}
	
	//Make the altered data properties of $return object 
	$return->data['json_array']  = $portfolio; 
	
	//Encode the stdClass object containing information and return data as a json string
	$json = json_encode($return);
	
	//Return the json string to the JavaScript
	echo $json;	
	
?>