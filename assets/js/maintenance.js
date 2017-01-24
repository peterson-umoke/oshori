$(document).ready(function() {

//cowntdown function. Set the date by modifying the date in next line (January 01, 2013 00:00:00):
		var austDay = new Date("March 28, 2017 00:00:00");
			$('#countdown').countdown({until: austDay, layout: '<div class="item"><p>{dn}</p> <span>-{dl}-</span></div> <div class="item"><p>{hn}</p> <span>-{hl}-</span></div> <div class="item"><p>{mn}</p> <span>-{ml}-</span></div> <div class="item"><p>{sn}</p> <span>-{sl}-</span></div>'});
			$('#year').text(austDay.getFullYear());

//function for the social hover effect - tooltips		
	$('.tooltip').tipsy
	({
		fade: true,
		gravity: 's'
	});
});	