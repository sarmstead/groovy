jQuery(document).ready(function($) {
    // There is a class called 'groovy-toggle'
    $('.groovy-toggle').hide();
    // When a button with a class called 'groovy-button' is pressed, toggle class with appear
    $('.groovy-button').on('click', function(event) {
        event.preventDefault();
        $('.groovy-toggle').toggle();
    });
})