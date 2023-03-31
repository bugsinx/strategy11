add_action( 'wp_ajax_challenge_endpoint', 'challenge_ajax_handler' );
add_action( 'wp_ajax_nopriv_challenge_endpoint', 'challenge_ajax_handler' );

function challenge_ajax_handler() {
   // Your code to fetch data from the API and return it to the AJAX request
}
