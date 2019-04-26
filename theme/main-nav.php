<?php $defaults = array(
    'theme_location'  => 'primary_navigation',
    'menu'            => '',
    'container'       => 'ul',
    'container_class' => '',
    'container_id'    => '',
    'menu_class'      => 'rhd-main-menu flex flex-row-rev flex-wrap',
    'menu_id'         => '',
    'echo'            => true,
    'fallback_cb'     => 'wp_page_menu',
    'before'          => '',
    'after'           => '',
    'link_before'     => '',
    'link_after'      => '',
    'depth'           => 0,
    'walker'          => ''
);
?>



<?php wp_nav_menu( $defaults ); ?>
