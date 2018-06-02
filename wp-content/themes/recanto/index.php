<?php get_header(); ?>

    <div id="container-fluid">

        <div id="artigos" style="margin-top:50px;">

            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <div class="artigo">
                    <h2 class="titulo-page" style="display:none;"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>

                    <p><?php the_content(); ?></p>
                </div>
            <?php endwhile?>

            <?php else: ?>

            <?php endif; ?>

        </div>


    </div>
<?php get_footer(); ?>
