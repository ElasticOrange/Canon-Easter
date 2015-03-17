$(document).ready(function() {
	$('[data-form=true]').bind('ajax:complete', function(e) {
		e.preventDefault();
        $('[data-form=true]').fadeOut( 1000 ); 
	});
});