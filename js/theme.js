/*----------------------------------------------------------
    Name:      Theme Scripts
----------------------------------------------------------*/

var parts = location.pathname.split('/');

jQuery(document).ready(function($) {

	$('body').addClass(parts[1] || 'home');

});
