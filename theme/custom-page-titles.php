<?php

add_filter( 'document_title_parts', 'custom_title');
function custom_title( $title ) {
if ( ! is_singular() ) return $title;
$custom_title = trim(get_post_meta( get_the_id(), 'title', true ));
if( ! empty( $custom_title ) ){
    $custom_title = esc_html( $custom_title );
    $title['title'] = $custom_title;
    }
return $title;
}

?>