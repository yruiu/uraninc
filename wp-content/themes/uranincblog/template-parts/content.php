<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package uranincblog
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <a href="<?php the_permalink(); ?>">
        <div class="singlePart">
            <div class="img-thumbnail" style="background: #fff3cd">
                <?php the_post_thumbnail('medium_large'); ?>
            </div>
            <div class="text">
                <div class="entry-header">
                    <?php
                    if ( is_singular() ) :
                        the_title( '<h1 class=Title">', '</h1>' );
                    else :
                        the_title( '<h2 class="Title">', '</h2>' );
                    endif;

                    if ( 'post' === get_post_type() ) :
                        ?>

                    <?php endif; ?>

                </div><!-- .entry-header -->

    </a>
    <div class="entry-content">
        <div class="Text">
            <?php
            if(is_singular()){
                the_content(
                    sprintf(
                        wp_kses(
                        /* translators: %s: Name of current post. Only visible to screen readers */
                            __( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'uranincblog' ),
                            array(
                                'span' => array(
                                    'class' => array(),
                                ),
                            )
                        ),
                        wp_kses_post( get_the_title() )
                    )
                );
            };
            ?>
        </div>
    </div>
    <?php

    wp_link_pages(
        array(
            'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'uranincblog' ),
            'after'  => '</div>',
        )
    );
    ?>
    </div><!-- .entry-content -->
    </div>

</article><!-- #post-<?php the_ID(); ?> -->
