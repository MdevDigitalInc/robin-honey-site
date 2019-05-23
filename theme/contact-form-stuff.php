<?php
// add_filter("wpcf7_ajax_json_echo", function ($response, $result) {

//     //$response["message"] = 'hello';

//     return $response;

// },10,2);

add_filter( 'wpcf7_validate_text*', 'custom_text_validation_filter', 20, 2 );

add_filter( 'wpcf7_validate_text', 'custom_text_validation_filter', 20, 2 );

add_filter( 'wpcf7_validate_textarea', 'custom_textarea_validation_filter', 20, 2 );

add_filter( 'wpcf7_validate_email', 'custom_email_validation_filter', 20, 2 );


function custom_textarea_validation_filter( $result, $tag ) {
    if ( 'your-message' == $tag->name ) {

        $name = isset( $_POST['your-message'] ) ? trim( wp_unslash( (string) $_POST['your-message'] ) ) : '';

        if ( empty( $name ) ) {
          $result->invalidate( $tag, "Please enter a message!");
        }

    }

    return $result;
}



function custom_text_validation_filter( $result, $tag ) {
    if ( 'your-name' == $tag->name ) {

        $name = isset( $_POST['your-name'] ) ? trim( wp_unslash( (string) $_POST['your-name'] ) ) : '';

        if ( empty( $name ) ) {
          $result->invalidate( $tag, "The name field is required!");
        }

        // matches any utf words with the first not starting with a number
        $re = '/^[^\p{N}][\p{L}]*/i';

        if (!preg_match($re, $_POST['your-name'], $matches)) {
            $result->invalidate($tag, "The name field is not valid!" );
        }

    }

    return $result;
}

function custom_email_validation_filter( $result, $tag ) {
    if ( 'your-email' == $tag->name ) {

        $email = isset( $_POST['your-email'] ) ? trim( wp_unslash( (string) $_POST['your-email'] ) ) : '';

        if ( empty( $email ) ) {
          $result->invalidate( $tag, "The email field is required!");
        }

        $re = '^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,10})$^';

        if (!preg_match($re, $_POST['your-email'], $matches)) {
            $result->invalidate($tag, "The email field is not valid!" );
        }
    }

    return $result;
}

?>