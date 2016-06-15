//beratung

$(document).ready(function(){
	
	
	$( "#showBer" ).click(function() {
		hideEmployee('.Web','.Adm','.Gra');
		$( ".Ber" ).show( "slow");
	});
	
	$( "#showGra" ).click(function() {
		hideEmployee('.Web','.Adm','.Ber');
		$( ".Gra" ).show( "slow");
	});

	$( "#showWeb" ).click(function() {
		hideEmployee('.Ber','.Adm','.Gra');
		$( ".Web" ).show( "slow");
	});
	$( "#showAdm" ).click(function() {
		hideEmployee('.Web','.Ber','.Gra');
		$( ".Adm" ).show( "slow");
	});


	
	
	function hideEmployee(group1, group2, group3){
		$( group1 ).hide( "slow");
		$( group2 ).hide( "slow");
		$( group3 ).hide( "slow");
	}
		


});
