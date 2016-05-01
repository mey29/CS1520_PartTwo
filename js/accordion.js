// Megan Yates: Code for jQuery Accordion functionality - CS1520 Part Two

$(function() {
	$( "#accordion" ).accordion({
		collapsible: true,
		active: false,
		heightStyle: "content",
		autoFill: false
	});
});
$(function() {
	$( "#dialog" ).dialog({
	autoOpen: false,
	dialogClass: 'title',
	show: {
		effect: "drop",
		duration: 100
	},
	hide: {
		effect: "drop",
		duration: 100
	}
	});
	$( "#open" ).click(function() {
		$( "#dialog" ).dialog( "open" );
	});
});
