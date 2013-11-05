<?php get_header(); ?>
<?php
    $term = get_term_by("slug",get_query_var("term"),get_query_var("taxonomy"));
?>
        <section id="content">
            <h1 id="fullwidth"> Projets crée en <?php echo($term->name); ?> </h1>
            <ul class="galerie">
                    <?php if(have_posts()): ?>
                        <?php while(have_posts()): the_post();?>
                            <li class="recent-works"  itemscope itemtype="http://schema.org/CreativeWork">
                                <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" itemprop="url">
                                    <div class="thumb" itemprop="image"><?php the_post_thumbnail(); ?></div> 
                                    <h3 class="title" itemprop="name"><?php the_title(); ?></h3>
                                    <p><?php the_terms($post->ID,'techniques','Crée avec ',' - ',' '); ?></p>
                                    <p itemprop="description"><?php the_terms($post->ID,'annees','Années: ',' - ',' '); ?></p>
                                </a>
                            </li>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </ul>

                <div id="main-footer"></div>
        </section><!-- END MAIN -->
    <div id="sidebar">
        <?php dynamic_sidebar('projects'); ?>
    </div>
<?php get_footer(); ?>