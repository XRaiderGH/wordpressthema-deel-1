<?php
//header
get_header();

//wordpress loop
if ( have_posts()) :
    while ( have_posts() ) : the_post()
        ?>
<article>
    <div class="postContainer">
        <a class="postContainerTitle" href="<?php the_permalink() ?>"><h2><?php the_title(); ?></h2></a>
        <?php the_content() ?>
    </div>
</article>
    <?php endwhile;
else:
    echo '<p> Er zijn geen berichten gevonden</p>';
endif;
// end of wordpress loop.

//footer
get_footer();
?>