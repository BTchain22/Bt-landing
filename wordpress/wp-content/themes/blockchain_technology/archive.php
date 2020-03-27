<?php
/*
    Template Name: archive
*/
?>
<?php get_header(); ?>


 <main id="content">
 <div class="container">

    <div class="page-content-wrapper">
        <div class="single-page-content">
            <div class="breadcrumbs" typeof="BreadcrumbList" vocab="http://schema.org/">
                <?php if(function_exists('bcn_display'))
                {
                    bcn_display();
                }?>
            </div>
            <div class="news-sidebar-row">
                <?php wp_nav_menu( array( 'container_class' => 'news-menu', 'menu' => 'news' , 'menu_class' => 'news-nav' , 'theme_location' => 'primary' ) ); ?>
            </div>
            <article>
                <div class="entry">
                    <?php if ( have_posts() ) : ?>
                    <?php
                    // Start the loop.
                    while ( have_posts() ) : the_post();?>
                        <div class="news-entry">
                            <?php the_post_thumbnail( 'thumbnail', array( 'class' => 'alignleft' ) ); ?>

                            <div class="news-title">
                                <p><?php the_date(); ?></p>
                                <h4><a href="<?php the_permalink(); ?>" title="Читати далі"><?php the_title(); ?></a></h4>
                            </div>
                            <div class="news-excerpt">
                                <?php echo(get_the_excerpt()); ?>
                                <div class="read-more-news"><a href="<?php the_permalink(); ?>" title="Читать дальше">Читать дальше</a></div>
                            </div>

                        </div>

                    <?php endwhile; ?>
                </div>
            </article>

            <?php
            the_posts_pagination( array(
                'prev_text'          => __( 'Previous page' ),
                'next_text'          => __( 'Next page' ),
                'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page' ) . ' </span>',
            ) ); ?>
            <?php endif;
            ?>
        </div>
    </div>
	
	</div>
	</main>
<?php get_footer(); ?>