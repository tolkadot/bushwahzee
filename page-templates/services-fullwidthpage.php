<?php
/**
 * Template Name: Services Page
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>

<div class="wrapper wrapper-md pb-0">
  <div class="container">
    <div class="row">
      <div class="col-12  ">
        <?php the_title( '<h1 class="entry-title contact-header">', '</h1>' ); ?>
      </div>
    </div>
  </div>
</div>



<?php if( have_rows('services') ):

 	// loop through the rows of data
  $total_fields = count(get_field('services')); $count_fields = 1;
    while ( have_rows('services') ) : the_row(); ?>
        <div class="wrapper wrapper-md pt-0">
          <div class="container">
            <div class="row t-mb-50">
              <div class="col-12 text-center">
                <h2 class="d-flex justify-content-center section-header t-mb-30">
                <?php the_sub_field('service_title'); ?>
                </h2>
              </div>
              <div class="col-md-12">
                <?php the_sub_field('service_description') ?>
                <p class=" text-center"><a class='bush-button' href="/contact">Book Now</a></p>
              </div>
            </div>
              <?php if($count_fields < $total_fields ){ ?>
                <div class="col-12">
                  <div class="sep-wrapper "><hr class="schools-sep">
                  </div>
                </div>
              <?php } ?>
          </div>
        </div>
      <?php  $count_fields++ ;?>
<?php
    endwhile;
    endif;
?>






<?php get_footer(); ?>
