<?php
/**
 * Template Name: Course Projects Template
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
        <?php
            $args = array('post_type' => 'work-sample');
            $wp_query = new WP_Query($args);
        ?>


<div class="wrapper" id="wrapper-index">
	<div class="<?php echo esc_html( $container ); ?>" id="content" tabindex="-1">
        <div class="row">
            <div class="col-lg-8">

                <?php while($wp_query->have_posts()): ?>
                    <?php $wp_query->the_post(); ?>

                    <div class="card mb-3">
                        <img class="card-img-top" src="<?php echo the_post_thumbnail_url(); ?>">
                        <div class="card-body">
                            <a href="<?php the_permalink(); ?>">
                                <h3 class="card-title">
                                    <?php echo get_the_title(); ?>
                                </h3>
                            </a>
                            <p class="card-text"><?php echo get_the_excerpt(); ?></p>
                        </div>
                    </div>

                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            </div>
            <!-- Sidebar brings in col-md-4 automatically, does not need container -->
            <?php get_template_part( 'global-templates/right-sidebar-check' ); ?>
        </div><!-- .row -->
    </div><!-- Container end -->
</div><!-- Wrapper end -->

<?php get_footer(); ?>
