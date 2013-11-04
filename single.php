<?php get_header( ); ?>
            <section id="content" role="main">
                <?php if(have_posts()): ?>
                    <?php while(have_posts()): the_post(); ?>
                            <h1>Sauvage Sauvage (Refonte)</h1>
                            <section id="contactform">
                                <h2>Aperçu du projet</h2>
                                <div class="preview">
                                    <img src="../img/sauvage_b.png" alt="Aperçu du projet" title="Aperçu du projet Sauvage Sauvage">
                                </div>
                            </section>
                            <section class="moreinfos">
                                
                                <h2 role="heading" aria-level="2">Description</h2>
                                <article>
                                    <?php the_content(); ?>
                                    <!-- Refonte du site du collectif Sauvage Sauvage dans le cadre du cours de Web.
                                    Les clients voulaient un site simple pour afficher les vidéos qu'ils avaient tournées et montrer leurs projets aux visiteurs. Ils voulaient avoir la possibilité d'ajouter leurs vidéos eux-mêmes et modifier l'image de fond en fonction de cette dernière.
                                --></article>
                                <p><a href="http://www.diempi.be/pw/sauvage/" title="Refonte du site de Sauvage Sauvage" target="_new">Visitez le site</a></p>
                                <h2>Techniques utilisées</h2>
                                <ul>
                                    <li><a href="#" title="HTML">HTML</a></li>
                                    <li><a href="#" title="CSS">CSS</a></li>
                                    <li><a href="#" title="Wordpress">Wordpress</a></li>

                                </ul>
                                <time date="<?php the_time('Y-m-d'); ?>" pubdate><?php echo get_the_date( ); ?></time>
                            </section>
                    <?php endwhile; ?>
                <?php endif; ?>
                            <div id="main-footer"></div>
            </section><!-- END MAIN -->
    
 <?php get_footer( ); ?>
