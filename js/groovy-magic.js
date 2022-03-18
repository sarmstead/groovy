jQuery(document).ready(function($) {
    
    $('.groovy-toggle').hide();
    
    $('.groovy-button').on('click', function(event) {
        event.preventDefault();
        $('.groovy-toggle').toggle();
    });
})