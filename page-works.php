<?php
/*
	Template Name: portfolio
*/ 
?>
<?php get_header( ); ?>
    <section id="content">
        <section id="showcase" itemscope itemtype="http://schema.org/CreativeWork">
                <h1 class="bigtitle"><?php the_title(); ?></h1>
                <div id="branding">
                    <?php 
                        $techs = get_terms( 'techniques');
                    ;?>
                    <ul>
                    <?php
                            foreach ($techs as $tech) {
                    ;?>
                        <li class="techniques">
                                <a href="<?php echo get_term_link($tech); ?>" title="<?php echo ($tech->name); ?>" data-hover="<?php echo ($tech->name); ?>"><span class="fontel icon-<?php echo ($tech->name); ?>"></span><span class="icon-text"><?php echo ($tech->name); ?></span></a>
                        </li>
                     <?php       
                        }      
                    ; ?>
                </div>
        </section>
                    
                        <ul class="galerie">
                            <?php 
                                $arg = array('post_type' => 'works');
                                $loop = new WP_Query($arg);
                            ;?>
                            <?php if(have_posts()): ?>
                                <?php while($loop->have_posts()): $loop->the_post();?>
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

 <?php get_footer( ); ?>