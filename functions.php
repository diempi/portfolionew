<?php 
add_action('widgets_init','generic_widget_init');
add_action( 'after_setup_theme', 'generic_widget_setup' );
add_action( 'init', 'create_post_type' );
add_action('init','add_taxonomies');
add_action('init','add_year');
add_action('init','add_image_size');
add_theme_support( 'post-thumbnails' ); 
function generic_widget_init(){

	register_sidebar( array(
		'name' => __( 'Main Sidebar', 'generic' ),
		'id' => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => "</aside>",
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );	

	register_sidebar( array(
		'name' => __( 'Secondary', 'generic' ),
		'description' => 'Ajoutez vos widgets ici',
		'id' => 'sidebar-2',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => "</aside>",
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );	
} 

function generic_widget_setup(){
	register_nav_menu( 'primary', __( 'Primary Menu', 'generic' ) );
}

if(! function_exists('add_taxonomies'))
{
    function add_taxonomies()
    {
        register_taxonomy('techniques','works',array(
            "label"=>"Techniques utilisées",
            "hierarchical" => true,
            "query_var" => true,
            "rewrite" => true
            ));
        {

        }
    }
}

if( ! function_exists('add_image_size'))
{
    function add_image_size(){
        add_image_size('folio-work',640,480);
    }
}

add_filter( 'image_size_names_choose', 'foliopict' );


function foliopict( $sizes ) {
    return array_merge( $sizes, array(
        'folio-work' => __('Portfolioer'),
    ) );
}


if(! function_exists('add_year'))
{
    function add_year()
    {
        register_taxonomy('annees','works',array(
            "label"=>"Années du projet",
            "hierarchical" => false,
            "query_var" => true,
            "rewrite" => true
            ));
        {

        }
    }
}



if(! function_exists('generic_setup'))
{
    function generic_setup()
    {
        add_theme_support('automatic-feed-links');
        add_theme_support('post-formats',array('aside','gallery','link','image'));
    }
}
if(! function_exists('portfolio_sidebars'))
{
    function portfolio_sidebars()
    {
            register_sidebar(
                     
                     array(
                        'id'=>'primary',
                        'name'=>'Primary',
                        'Description'=>'Premiere sidebar',
                        'before_widget'=>'<div id="%1$s" class="widget">',
                        'after_widget'=>'</div>',
                        'before_title' => '<h3>',
                        'after_title' => '</h3>'
                        )
                     );
            register_sidebar(
                     
                     array(
                        'id'=>'home',
                        'name'=>'Home',
                        'Description'=>'Home Sidebar',
                        'before_widget'=>'<div id="%1$s" class="widget">',
                        'after_widget'=>'</div>',
                        'before_title' => '<h3>',
                        'after_title' => '</h3>'
                        )
                     );   
            register_sidebar(
                     
                     array(
                        'id'=>'projects',
                        'name'=>'Projects',
                        'Description'=>'Projects Sidebar',
                        'before_widget'=>'<div id="%1$s" class="widget">',
                        'after_widget'=>'</div>',
                        'before_title' => '<h3>',
                        'after_title' => '</h3>'
                        )
                     );                               
    }
}


if(! function_exists('create_post_type'))
{
    function create_post_type()
    {
        register_post_type('works',array(
                                         'labels' => array(
                                            'name' => __('Travaux'),
                                            'singular_name'=>__('Travail')
                                            ),
                                         'public'=>true,
                                         'has_archive'=>true,
                                         'supports'=>array('title','editor','thumbnail','post-formats','custom-fields')
                                        )
                           );
    }
}

function portfolio_excerpt_length( $length ) {
    return 40;
}
add_filter( 'excerpt_length', 'portfolio_excerpt_length' );

/**
 * Returns a "Continue Reading" link for excerpts
 */
function portfolio_continue_reading_link() {
    return ' <a href="'. esc_url( get_permalink() ) . '">' . __( '... <span class="meta-nav">Lire la suite </span>', 'portfolio' ) . '</a>';
}
add_filter( 'excerpt_more', 'portfolio_continue_reading_link' );


/* WIDGETS */

class Projects_Widget extends WP_Widget {
    function Projects_Widget() {
        // widget actual processes
        // widget settings
    $widget_ops = array( 'classname' => 'Latest Projects', 'description' => 'Afficher les autres projets' );
    // widget control settings
    $control_ops = array( 'width' => 250, 'height' => 350, 'id_base' => 'projects_widget' );
    // create the widget
    $this->WP_Widget( 'projects_widget', 'Latest Projects Tabs', $widget_ops, $control_ops );
    }
    function widget($args, $instance) {
        // outputs the content of the widget
        extract( $args );
        $title = apply_filters('widget_title', $instance['title']);
        $before_widget;
        if ( $title )
            echo $before_title . $title . $after_title;
        // Create and run custom loop
        $custom_posts = new WP_Query();
        $custom_posts->query('post_type=works');
        ?>
        <ul class="widget"><?php
        while ($custom_posts->have_posts()) : $custom_posts->the_post();
        ?>
            <li><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'portfolio' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></li>
    <?php endwhile; ?>
        </div>

              <?php echo $after_widget; ?>
        <?php
    }
    function update($new_instance, $old_instance) {
        // processes widget options to be saved
        $instance = $old_instance;
        $instance['title'] = strip_tags($new_instance['title']);
        return $instance;
    }
    function form($instance) {
        // outputs the options form on admin
        $title = esc_attr($instance['title']);
        ?>
            <p><label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:'); ?> <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $title; ?>" /></label></p>
        <?php
    }
}
register_widget('Projects_Widget');


