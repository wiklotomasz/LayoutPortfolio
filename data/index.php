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
    			"id" => "1",
    			"name" => "BarcelonaPoint.com",
    			"company" => "Perfect Sun Travel",
    			"date" => "July 2012",
    			"url" => "http://barcelonapoint.com",
    			"big" => "http://localhost/LayoutPortfolio/img/portfolio_projects/briks_desktop.jpg",
    			"small" => "http://localhost/LayoutPortfolio/img/portfolio_projects/firma-spedycyjna-strona-www.png",
    			"technologies" => "HTML, CSS, Javascript",
    			"desc" => "Website development for an event organised in Bydgoszcz and its administration throughout the entire event.",
			];
        break;
    case "project-number-1":
        	$portfolio = [
    			"id" => "2",
    			"name" => "EventForYou.pl",
    			"company" => "MruCon sp. z. o. o.",
    			"date" => "July 2015",
    			"url" => "http://www.eventforyou.pl/",
    			"big" => "http://studioleopard.pl/wp-content/uploads/2015/03/barcelona-point-strona-www.png",
    			"small" => "http://studioleopard.pl/wp-content/uploads/2015/10/eventforyou_mobile.jpg",
    			"technologies" => "HTML, CSS, Javascript",
    			"desc" => "Website development for an event organised in Bydgoszcz and its administration throughout the entire event.",
			];
        break;
    case "project-number-2":
        	$portfolio = [
    			"id" => "3",
    			"name" => "BRIKS Architekci",
    			"company" => "BRIKS Architekci",
    			"date" => "July 2015",
    			"url" => "http://briks.com.pl/",
    			"big" => "http://studioleopard.pl/wp-content/uploads/2015/03/barcelona-point-strona-www.png",
    			"small" => "http://studioleopard.pl/wp-content/uploads/2015/10/eventforyou_mobile.jpg",
    			"technologies" => "HTML, CSS, Javascript",
    			"desc" => "Website development for an event organised in Bydgoszcz and its administration throughout the entire event.",
			];
        break;
    case 2:
        	$portfolio = [
    			"id" => "1",
    			"name" => "Bla bla",
    			"url" => "barcelona-point.jpg",
    			"img" => "barcelona-point.jpg",
			];
        break;
    default:
        	$portfolio = [
    			"id" => "1",
    			"name" => "Bla bla",
    			"url" => "barcelona-point.jpg",
    			"img" => "barcelona-point.jpg",
			];
	}
	
	//Make the altered data properties of $return object 
	$return->data['json_array']  = $portfolio; 
	
	//Encode the stdClass object containing information and return data as a json string
	$json = json_encode($return);
	
	//Return the json string to the JavaScript
	echo $json;	
	
?>