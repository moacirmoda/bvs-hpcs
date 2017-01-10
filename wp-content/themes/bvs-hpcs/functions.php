<?php

$top_sidebar = false;
$footer_sidebar = false;

register_sidebar( array(
	'name' => __('Header','vhl'),
	'id' => 'header',
	'description' => '',
	'before_widget' => '<div id="%1$s" class="widget %2$s">',
	'after_widget' => '</div>',
	'before_title' => '<h2 class="widget-title">',
	'after_title' => '</h2>',
) );

if ($top_sidebar == true){
    register_sidebar( array(
	'name' => __('Top Auxiliary SideBar','vhl'),
	'id' => 'top_sidebar',
	'description' => '',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ) );
}

if ($footer_sidebar == true){
    register_sidebar( array(
	'name' => __('Footer Auxiliary SideBar','vhl'),
	'id' => 'footer_sidebar',
	'description' => '',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ) );
}

register_sidebar( array(
	'name' => __('Themes','vhl'),
	'id' => 'themes',
	'description' => '',
	'before_widget' => '<div id="%1$s" class="col-sm-12 %2$s">',
	'after_widget' => '</div>',
	'before_title' => '<h2 class="widget-title">',
	'after_title' => '</h2>',
) );

register_sidebar( array(
	'name' => __('Sub Themes','vhl'),
	'id' => 'sub-themes',
	'description' => '',
	'before_widget' => '<div id="%1$s" class="col-sm-6 %2$s">',
	'after_widget' => '</div>',
	'before_title' => '<h2 class="widget-title">',
	'after_title' => '</h2>',
) );

register_sidebar( array(
	'name' => __('Sidebar','vhl'),
	'id' => 'sidebar',
	'description' => '',
	'before_widget' => '<div id="%1$s" class="col-sm-12 %2$s">',
	'after_widget' => '</div>',
	'before_title' => '<h2 class="widget-title">',
	'after_title' => '</h2>',
) );

register_sidebar( array(
	'name' => __('Footer','vhl'),
	'id' => 'footer',
	'description' => '',
	'before_widget' => '<div id="%1$s" class="col-sm-4 %2$s">',
	'after_widget' => '</div>',
	'before_title' => '<h2 class="widget-title">',
	'after_title' => '</h2>',
) );

register_sidebar( array(
	'name' => __('Level 2','vhl'),
	//'id' => 'level2' . $current_language,
	'id' => 'level2',
	'description' => 'Widgets que aparecerão em segundo nível',
	'before_widget' => '<aside id="%1$s" class="widget %2$s">',
	'after_widget' => '</aside>',
	'before_title' => '<h2 class="widget-title">',
	'after_title' => '</h2>',
) );


/**
* Find and close unclosed xml tags
**/
function html_tidy($src){
    libxml_use_internal_errors(true);
    $x = new DOMDocument;
    $x->loadHTML('<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />'.$src);
    $x->formatOutput = true;
    $ret = preg_replace('~<(?:!DOCTYPE|/?(?:html|body|head))[^>]*>s*~i', '', $x->saveHTML());
    $done=trim(str_replace('<meta http-equiv="Content-Type" content="text/html; charset=utf-8">','',$ret));
    return $done;
}
