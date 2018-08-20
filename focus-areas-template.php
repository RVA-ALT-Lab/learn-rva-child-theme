<?php
/**
 * Template Name: Focus Area Template
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package understrap
 */

get_header();

$container   = get_theme_mod( 'understrap_container_type' );
$sidebar_pos = get_theme_mod( 'understrap_sidebar_position' );
?>

<?php if ( is_front_page() && is_home() ) : ?>
	<?php get_template_part( 'global-templates/hero', 'none' ); ?>
<?php endif; ?>

<div class="jumbotron header-img" style="background-image: linear-gradient(
      rgba(0, 0, 0, 0.45),
      rgba(0, 0, 0, 0.45)
    ), url(<?php echo get_the_post_thumbnail_url(); ?>);">

<div class="header-text">
	<h1><?php the_title(); ?></h1>
</div>

</div>



<div class="wrapper" id="wrapper-index">

	<div class="<?php echo esc_html( $container ); ?>" id="content" tabindex="-1">
        <div class="row">
            <div class="col-lg-12">
                <br>
                <p class="lead">This website seeks to orient the higher education community to the history and culture of Richmond, Virginia (RVA) as a first step to rich engagement.</p>
                <br>
                <p></p>
                <div class="row">


                <?php
                $args = array('post_type' => 'content-area');
                $wp_query = new WP_Query($args);
                ?>


                <?php while($wp_query->have_posts()): ?>

                    <?php $wp_query->the_post(); ?>
                    <div class="col-lg-4 section-tile">
                    <a href="<?php the_permalink(); ?>">
                        <div class="panel panel-default" style="background:url(<?php echo the_post_thumbnail_url(); ?>); background-size:cover;">
                            <div class="panel-body">
                                <div class="panel-transparency">
                                    <h2><?php echo get_the_title(); ?></h2>
                                    <div class="tile-text"><?php echo the_field('zinger_'); ?></div>
                                </div>
                            </div>
                        </div>
                    </a>
                    </div>
                <?php endwhile; ?>

                <?php wp_reset_postdata(); ?>

                </div>

                </div>
            </div>
        </div>


	</div><!-- .row -->

</div><!-- Container end -->

</div><!-- Wrapper end -->

<?php get_footer(); ?>
