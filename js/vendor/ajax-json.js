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
				$('.cd-project-content #ajax-name').empty().append(name);

				company = response.data.json_array['company'];
				$('.cd-project-content #ajax-company').empty().append(company);

				date = response.data.json_array['date'];
				$('.cd-project-content #ajax-date').empty().append(date);

				url = response.data.json_array['url'];
				$(".cd-project-content #ajax-url").attr('href', url)

				big = response.data.json_array['big'];
				jQuery(".cd-project-content #ajax-big").attr("src", "img/portfolio_projects/"+big);

				small = response.data.json_array['small'];
				jQuery(".cd-project-content #ajax-small").attr("src", "img/portfolio_projects/"+small);

				technologies = response.data.json_array['technologies'];
				$('.cd-project-content #ajax-technologies').empty().append(technologies);

				desc = response.data.json_array['desc'];
				$('.cd-project-content #ajax-desc').empty().append(desc);

				id = response.data.json_array['id'];
				id = parseInt(id,10)
				if (id == 0) {
					$( "#show-prev-ajax" ).addClass( "inactive" );
				}
				else {
					$( "#show-prev-ajax" ).removeClass( "inactive" );
				}
				if (id == 10) {
					$( "#show-next-ajax" ).addClass( "inactive" );
				}
				else {
					$( "#show-next-ajax" ).removeClass( "inactive" );
				}
				prev = id-1;
				$('#show-prev-ajax').attr("data-portfolio", "project-number-"+prev);
				next = id+1;
				$('#show-next-ajax').attr("data-portfolio", "project-number-"+next);
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
			get_id = $(this).attr("data-portfolio");
			doAjax(get_id);
		});
	});


