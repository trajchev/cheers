<!-- THE ABOUT SECTION -->
<section id="about-section">

    <div class="container">

        <div class="grey-gradient up-rounded px-4 pb-2">

            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

            <article class="mx-auto article-block py-4">

                <?php  ?>

                <div class="article-header">

                    <h2 class="h4 text-center py-0 my-0"><?php _e('About us', 'cheers'); ?></h2>

                    <h3 class="h6 text-center py-0"><?php _e('Get to know us', 'cheers'); ?></h3>

                </div>

                <div class="article-content">

                    <?php the_excerpt(); ?>

                </div>

            </article>

            <?php endwhile; endif; ?>

        </div>

    </div>
    
</section>