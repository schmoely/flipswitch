<?php

// Register footer widgets

register_sidebar( array(
        'name' => __( 'Footer', 'tto' ),
        'id' => 'footer-1',
        'description' => __( 'Footer widget area, found on the bottom of every page', 'tto' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',

) );

?>