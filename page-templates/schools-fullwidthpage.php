<?php
/**
 * Template Name: Schools Page
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


<div class="wrapper wrapper-md pt-0">
  <div class="container">
    <div class="row t-mb-50">
      <div class="col-12 text-center"> <h2 class="d-flex justify-content-center section-header t-mb-30">  <?php the_field("intro_title") ?></h2></div>
      <div class="col-md-6">
        <?php the_field("intro") ?>
      </div>
      <div class="col-md-6 d-flex align-items-center justify-content-center">
        <?php $image = get_field('intro_image');
        if( !empty($image) ): ?>
	       <div><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" /></div>
        <?php endif; ?>
      </div>
    </div>
  </div>
</div>

<div class="wrapper wrapper-md wrapper-light ">
  <div class="container">
    <div class="row t-mb-50 t-mt-50">
      <div class="col-12 text-center"> <h2 class="d-flex justify-content-center section-header t-mb-30">  <?php the_field("timetable_title") ?></h2>
      <p class="secondary-header t-pb-30">
        <?php the_field("timetable_intro") ?>
</p></div>
      <div class="col-md-8 offset-md-2">

        <div class="container">
          <div class="row timetable">

        <?php while ( have_rows('timetable') ) : the_row();?>
                <div class="col-sm-3 col-4 time-entry">
              <?php    the_sub_field('time'); ?>
                </div>
                <div class="col-sm-9 col-8 time-entry">
              <?php    the_sub_field('activity');  ?>
              </div>
          <?php  endwhile; ?>
          </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<div class="wrapper wrapper-md ">
  <div class="container">
    <div class="row t-mb-50 t-mt-50">
      <div class="col-12 text-center"> <h2 class="d-flex justify-content-center section-header t-mb-30">  <?php the_field("program_title") ?></h2></div>
      <div class="col-md-6">
        <?php the_field("program") ?>
      </div>
      <div class="col-md-6 d-flex col-md-6 d-flex align-items-center justify-content-center">
        <?php $image2 = get_field('program_image');
        if( !empty($image2) ): ?>
	       <div><img src="<?php echo $image2['url']; ?>" alt="<?php echo $image2['alt']; ?>" /></div>
        <?php endif; ?>
      </div>
      <div class="col-12">
        <div class="sep-wrapper "><hr class="schools-sep"></div></div>
      <div class="col-12 text-center"> <p><?php the_field("program_details") ?></p><div class="d-flex justify-content-center"><a class="bush-button" href="/contact">Contact Now</a></div></div>
    </div>
  </div>
</div>


<div class="wrapper wrapper-md wrapper-light">
  <div class="container">
    <div class="row t-mb-50 t-mt-50">
      <div class="col-12 text-center"> <h2 class="d-flex justify-content-center section-header t-mb-30">  <?php the_field("outside_title") ?></h2></div>

      <div class="col-md-6">
      <?php the_field("outside") ?>
      </div>
      <div class="col-md-6 d-flex col-md-6 d-flex align-items-center justify-content-center">
        <?php $image3 = get_field('outside_image');
        if( !empty($image3) ): ?>
	       <div><img src="<?php echo $image3['url']; ?>" alt="<?php echo $image3['alt']; ?>" /></div>
        <?php endif; ?>
      </div>
  </div>
</div>
</div>

<div class="wrapper wrapper-md ">
  <div class="container">
    <div class="row t-mb-50 t-mt-50">
      <div class="col-12 text-center"> <h2 class="d-flex justify-content-center section-header t-mb-30">  <?php the_field("checklist_title") ?></h2></div>

      <div class="col-md-12">
      <ol>


      <?php   while ( have_rows('checklist') ) : the_row();
            ?> <li> <?php
              the_sub_field('item');
              ?> </li> <?php
        endwhile; ?>
</ol>
      </div>

  </div>
</div>
</div>


<?php get_footer(); ?>
