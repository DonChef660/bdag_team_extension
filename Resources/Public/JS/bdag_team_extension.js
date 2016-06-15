//beratung
$( ".test" ).click(function() {
	$( ".test" ).hide( "slow", function() {
		alert( "Animation complete." );
	});
});
//Grafik & umsetzung
$( ".Gra" ).click(function() {
	$( ".Ber .Web .Adm" ).hide( "slow", function() {
		alert( "Animation complete." );
	});
});
//web & programmierung
$( ".Web" ).click(function() {
	$( ".Ber .Gra .Adm" ).hide( "slow", function() {
		alert( "Animation complete." );
	});
});
//administration
$( ".Adm" ).click(function() {
	$( ".Ber .Gra .Web" ).hide( "slow", function() {
		alert( "Animation complete." );
	});
});
