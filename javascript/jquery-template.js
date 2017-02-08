$(document).ready(function() {
	$(".accordion").accordion({
		heightStyle: "content"
	}).accordion("option", "icons", null);

	$( ".button" ).button();
	$( "#spinner" ).spinner();
});