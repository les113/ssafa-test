<!-- postcode script -->
$(document).ready(function(){	

	<!-- load ext file via ajax -->
	$('#addresses').load('../addresslist.php',setupPostcodeList);	 

	<!-- copy postcodes into array and populate select dropdown -->	
	function setupPostcodeList(){ 
	var postcodeArr = $('#addresses'); 
		postcodeArr.children('div').each(function(){
			var postcodeID = $(this).attr('id'); 
			var label = $(this).attr('label'); 
			$('#selectpostcode').append($('<option>').text(label).attr('id', postcodeID));
			//console.log(postcodeID, label);
		}); 
		$('.address').hide();  // hide the contact addresses after loading	
	};
	
	<!-- filter addresses when postcode select list changes -->
	$('#selectpostcode').change(function(){
		$('.address').hide();	
		var selectedpostcodeID = $(this).find('option:selected').attr('id');
		$('.address#' +selectedpostcodeID).show(function(){				
		});
		//console.log(selectedpostcodeID);
	});	
});