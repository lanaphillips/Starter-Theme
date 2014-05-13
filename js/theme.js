/*----------------------------------------------------------
    Name: Theme Scripts
    Notes: Certain sections of javascript/jquery only
           happen on certain pages. 
----------------------------------------------------------*/

var path    = location.pathname.split('/'),
	page    = path[1] || 'home',
	section = {};

jQuery(document).ready(function($) {

	function Sections() {

		section.allPages();

		if (section[page] && typeof section[page] === "function") {
            console.info("loading '" + page + "' section js.");
            section[page]();
        }else{
            console.info("No js for '" + page + "'");
        }

	}

	section.allPages = function(){

		// Section Page Styles
		document.body.className += ' ' + page;

		// Menu Button
		$('#toggle-menu').on('click', function(e){
			e.preventDefault();
			$('#header').toggleClass('nav-active');
		});

		// Responsive Videos
		$('#content').fitVids();

	}

	$(Sections);

});
