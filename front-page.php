<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
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

<div class="jumbotron" style="background-image: linear-gradient(
      rgba(0, 0, 0, 0.45),
      rgba(0, 0, 0, 0.45)
    ), url(http://learnrva.org/wp-content/uploads/sites/24118/2018/08/15140594339_a4f82592ba_z.jpg);background-size:cover;background-repeat:no-repeat;">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 mt-5">
				<div class="header-cutout-text">
					<h2>View Course Projects</h2>
					<p>Get inspiration on how to engage your students in the community using successful course projects.</p>
					<a class="btn btn-primary" href="/course-projects">View Projects</a>
				</div>
			</div>
			<div class="col-lg-6 mt-5">
				<div class="header-cutout-text">
					<h2>Learn About Richmond</h2>
					<p>Seek unique cultural, social, and historical aspects of the RVA area that align with your course.</p>
					<a class="btn btn-primary" href="/focus-areas">Learn About RVA</a>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="wrapper" id="wrapper-index">


	<div class="<?php echo esc_html( $container ); ?>" id="content" tabindex="-1">


			<main class="site-main" id="main">
			<div class="row">
			<div class="col-lg-12">
					<h3>About Learn RVA</h3>
			<p class="lead">LearnRVA is a shared platform meant to tell the story of Richmond, serve as a springboard for future conversations, and make connections in a hub for Richmond-oriented research development.</p>
			<p class="lead">The driving force behind LearnRVA is a belief that academia is deeply intertwined with this city and that this research is important to share.</p>
			<p class="lead">As educators, community members, and leaders, Richmond is a site for inquiry, and LearnRVA seeks to foster engagement and holistic understanding of the community.</p>
			<a href="/about" class="btn btn-primary">Read Our Full Charter</a>
			</div>
			</div><!-- .row -->
		</main><!-- #main -->
		<div class="row">
    		<div class="col-lg-12">
			</div>
		</div>

</div><!-- Container end -->

</div><!-- Wrapper end -->
<!-- <img class="footer-svg" src="<?php echo get_template_directory_uri();?>/img/learn-rva-graphic.svg" alt=""> -->

<?php get_footer(); ?>
