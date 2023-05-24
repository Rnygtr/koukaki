<?php

get_header();
?>

<main id="primary" class="site-main FadeInAndOut">
    <section class="banner in-view">
        <div class="bannerbackground"></div>
        <video class="bannervideo" autoplay muted loop>
            <source src="wp-content\uploads\2023\03\VideoHeader.mp4" type="video/mp4">
        </video>

        <img class="superimposed_logo in-view"
            src="<?php echo get_template_directory_uri() . '/assets/images/logo.png'; ?> "
            alt="logo Fleurs d'oranger & chats errants">
    </section>

    <section id="story" class="story fade-in">
        <h2 class="section-title "><span>L'histoire</span></h2>
        <article id="" class="storyarticle">
            <p class="exclude">
                <?php echo get_theme_mod('story'); ?>
            </p>
        </article>
    
<?php get_template_part('characters'); ?>

    <section id="place" class="fade-in">
        <div>
            <h3>Le Lieu</h3>
            <p>
                <?php echo get_theme_mod('place'); ?>
            </p>
        </div>
            <div class="clouds cloud-container">
                <img class="big-cloud" src="http://localhost/koukaki/wp-content/uploads/2023/03/big_cloud.png"
                    alt="Gros nuage">
                <img class="little-cloud"
                    src="http://localhost/koukaki/wp-content/uploads/2023/03/little_cloud.png" alt="Petit nuage">
            </div>
        
</section>
    </section>

    <section id="studio" class="fade-in">
    <h2 class="section-title"><span>Studio Koukaki</span></h2>
        <div>
            <p class="exclude">Acteur majeur de l’animation, Koukaki est un studio intégré fondé en 2012 qui créé, produit et distribue
                des programmes originaux dans plus de 190 pays pour les enfants et les adultes. Nous avons deux sections
                en activité : le long métrage et le court métrage. Nous développons des films fantastiques,
                principalement autour de la culture de notre pays natal, le Japon.</p>
            <p class="exclude">Avec une créativité et une capacité d’innovation mondialement reconnues, une expertise éditoriale et
                commerciale à la pointe de son industrie, le Studio Koukaki se positionne comme un acteur incontournable
                dans un marché en forte croissance. Koukaki construit chaque année de véritables succès et capitalise
                sur de puissantes marques historiques. Cette année, il vous présente “Fleurs d’oranger et chats
                errants”.</p>
        </div>
        
    </section>

    <?php get_template_part('nominations'); ?>

</main>

<?php
get_footer();