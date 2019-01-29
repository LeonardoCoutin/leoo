
<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Sidebar_1') ) : ?>
    <?php endif; 
    
    if (function_exists('register_sidebar'))
    {
        register_sidebar(array(
            'name'          => 'Sidebar_1',
            'before_widget' => '<div class="widget">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3>',
            'after_title'   => '</h3>',
        ));
    }

    if (function_exists('register_sidebar'))
    {
        register_sidebar(array(
            'name'          => 'footer_w1',
            'before_widget' => '<div class="widget">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3>',
            'after_title'   => '</h3>',
        ));
    }


    if (function_exists('register_sidebar'))
    {
        register_sidebar(array(
            'name'          => 'footer_w2',
            'before_widget' => '<div class="widget">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3>',
            'after_title'   => '</h3>',
        ));
    }
?>