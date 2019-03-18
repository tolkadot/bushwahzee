<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();

$container = get_theme_mod( 'understrap_container_type' );
?>

<div class="wrapper" id="error-404-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

		<div class="row">

			<div class="col-md-12 content-area" id="primary">

				<main class="site-main" id="main">

					<section class="error-404 not-found">

						<header class="page-header">

							<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'understrap' ); ?></h1>

						</header><!-- .page-header -->

						<div class="page-content">

							<p><?php esc_html_e( 'It looks like the page you were looking for no longer exists.', 'understrap' ); ?></p>




							<?php if ( understrap_categorized_blog() ) : // Only show the widget if site has multiple categories. ?>

								<div class="widget widget_categories">



								</div><!-- .widget -->

							<?php endif; ?>



						</div><!-- .page-content -->

					</section><!-- .error-404 -->


				</main><!-- #main -->

			</div><!-- #primary -->

		</div><!-- .row -->

	</div><!-- #content -->

</div><!-- #error-404-wrapper -->

            <div class="wrapper wrapper-light wrapper-md services-section ">
                          <div class="container">
                            <div class="row t-mb-50 t-mt-50">
                              <div class="col-12">
                              <h2 class="d-flex justify-content-center section-header t-mb-30">Services</h2>
                              </div>
                              <div class="col-xl-3 col-md-6 services-pod">
                                <?php if ( is_active_sidebar( 'homepage_services_1' ) ) : ?>
            		                  <?php dynamic_sidebar( 'homepage_services_1' ); ?>
                                <?php endif; ?>
                              </div>
                              <div class="col-xl-3 col-md-6 services-pod">
                                <?php if ( is_active_sidebar( 'homepage_services_2' ) ) : ?>
            		                  <?php dynamic_sidebar( 'homepage_services_2' ); ?>
                                <?php endif; ?>
                              </div>
                              <div class="col-xl-3 col-md-6 services-pod">
                                <?php if ( is_active_sidebar( 'homepage_services_3' ) ) : ?>
            		                  <?php dynamic_sidebar( 'homepage_services_3' ); ?>
                                <?php endif; ?>
                              </div>
                                <div class="col-xl-3 col-md-6 services-pod">
                                  <?php if ( is_active_sidebar( 'homepage_services_4' ) ) : ?>
              		                  <?php dynamic_sidebar( 'homepage_services_4' ); ?>
                                  <?php endif; ?>
                                </div>
                            </div>
                          </div>
            </div>

<?php get_footer(); ?>
