
$(function() {

	// Back to Top Button
    $('#back-to-top').on('click', function(event){
        event.preventDefault();

        $('html, body').animate({scrollTop: 0}, 300);

    });

});