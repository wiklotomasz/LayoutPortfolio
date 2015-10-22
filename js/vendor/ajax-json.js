/*Returns the jqXHR object*/
	function theAjax(val, arr, obj) {
			return $.ajax({
						 url : 'data/',
						 type: 'POST',
						data:{ js_string: val }
						});
	}
			
	/*Determine what is done with the data when it is returned by the server */
	function processData(response /*textStatus, jqXHR*/) {
			var response = JSON.parse(response),
					html = "";
			if(response.success) {
							

				name = response.data.json_array['name'];
				$('.cd-project-content #ajax-name').empty().hide().fadeIn(500).append(name);

				company = response.data.json_array['company'];
				$('.cd-project-content #ajax-company').empty().hide().fadeIn(500).append(company);

				date = response.data.json_array['date'];
				$('.cd-project-content #ajax-date').empty().hide().fadeIn(500).append(date);

				url = response.data.json_array['url'];
				$('.cd-project-content #ajax-url').empty().hide().fadeIn(500).append(url);

				big = response.data.json_array['big'];
				jQuery(".cd-project-content #ajax-big").attr("src", big);

				small = response.data.json_array['small'];
				jQuery(".cd-project-content #ajax-small").attr("src", small);

				technologies = response.data.json_array['technologies'];
				$('.cd-project-content #ajax-technologies').empty().hide().fadeIn(500).append(technologies);

				desc = response.data.json_array['desc'];
				$('.cd-project-content #ajax-desc').empty().hide().fadeIn(500).append(desc);
			}
	}	
			
	/* Obtain the data to be sent to the server and intiate Ajax*/
	function doAjax(get_id) {
		var value , ajax;
					
		//Hardcoded data values for demonstration purposes
		value = get_id;
					
		//Pass the values to the AJAX request and specify function arg for 'done' callback
		ajax = theAjax(value);
		ajax.done(processData);
		ajax.fail(function( jqXHR, textStatus, errorThrown) {
				//Output error information
		});
	}

								
	$(document).ready(function(){
		$('.show-project').click(function(event){
			get_id = this.id;
			doAjax(get_id);
		});
	});