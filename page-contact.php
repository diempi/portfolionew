<?php
/*
	Template Name: Contact
*/ 
?>
<?php get_header( ); ?>
           <section id="content">
                <h1 class="bigtitle">Louez mes services!</h1>
                <section id="contactform">
                    <h2>Contactez-moi dès maintenant via le formulaire</h2>
                    <form action="#" >
                        <fieldset>
                            <div>
                                <label for="name">Votre Nom</label>
                                <input type="text" id="name" placeholder="Votre Nom" required>
                            </div>

                            <div>
                                <label for="email">Votre Email</label>
                                <input type="email" id="email" placeholder="@" required>
                            </div>

                            <div>
                                <label for="subject">Sujet</label>
                                <input type="text" id="subject" placeholder="Titre de votre message" required>
                            </div>

                            <div>
                                <label for="message">Votre message</label>
                                <textarea name="message" id="message" cols="30" rows="10"></textarea>
                            </div>

                            <div id="send">
                                <input type="submit" value="Envoyer">
                            </div>

                        </fieldset>
                    </form>
                </section>
                <section class="social social-contact">
                    <h2>Je suis aussi présent sur</h2>
                    <ul>
                        <li><a href="http://www.twitter.com/imdiempi" title="Mon compte Twitter" id="twitterdev">@ImDiempi</a></li>
                        <li><a href="http://be.linkedin.com/in/didierg" title="Mon compte Linkedin" id="lknd">Linkedin</a></li>
                        <li><a href="https://plus.google.com/105017643822966037515" title="Mon compte Google plus" id="gplus">Google+</a></li>
                    </ul>
                </section>
                <div id="main-footer"></div>
            </section><!-- END MAIN -->
<?php get_footer( ); ?>