<?php
/**
 * Template Name: Home Full Width Page
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
<?php while ( have_posts() ) : the_post(); ?>

<div class="wrapper pt-0 pb-0" id="full-width-page-wrapper">
	<div class="container-fluid" id="content">
		<div class="row">
			<div class="col-md-12 content-area" id="primary">
				<main class="site-main" id="main" role="main">
						<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
                <div class="container">
                  <div class="row">
                  <div class="homepage-hero d-flex justify-content-center w-100">
                	<?php echo get_the_post_thumbnail( $post->ID, 'full' ); ?>
                  </div>
                  </div>
                </div>
        </article>
        </main>
      </div>
    </div>
  </div>
</div>

<div class="wrapper  wrapper-md text-center">
        <div class="container">
          <div class="row">
            <div class="col-md-10 offset-md-1 p-0 text-center t-mb-30">
                <?php if( have_rows('team_members', 'option') ):
                $rows = get_field('team_members', 'option' ); // get all the rows
                $first_row = $rows[0]; // get the first row
                $felix_email = $first_row['email'];
                $paul_row = $rows[1];
                endif; ?>
                <?php $bush_facebook = get_field('bushwahzee_facebook', 'option' ); ?>
                <?php if($bush_facebook) { ?>
                <p class="d-flex justify-content-center mb-0"><span class="bold">facebook &nbsp</span>|<a href="<?php echo $bush_facebook ?>"><i class=" pr-1 pl-1 fa fa-facebook-square"></i></a></p>
                <?php } ?>
                <?php if($felix_email) { ?>
                <p class="d-flex justify-content-center mb-0"><span class="bold">email &nbsp</span> | <a href="mailto:<?php echo $felix_email ?>"><span class="">&nbsp;<?php echo $felix_email ?></span></a></p>
                <?php } ?>
          </div>
          <div class="col-md-10 offset-md-1 p-0 text-center secondary-header t-mb-50  ">
              <?php the_content(); ?>
          </div>
        </div>
        </div>
      </div>

<div class="wrapper wrapper-light wrapper-md services-section ">
              <div class="container">
                <div class="row t-mb-50 t-mt-50">
                  <div class="col-12">
                  <h2 class="d-flex justify-content-center section-header t-mb-30">Services</h2>
                  </div>

                  <div class="col-lg-4 services-pod">
                    <?php if ( is_active_sidebar( 'homepage_services_2' ) ) : ?>
		                  <?php dynamic_sidebar( 'homepage_services_2' ); ?>
                    <?php endif; ?>
                  </div>
                  <div class="col-lg-4 services-pod">
                    <?php if ( is_active_sidebar( 'homepage_services_3' ) ) : ?>
		                  <?php dynamic_sidebar( 'homepage_services_3' ); ?>
                    <?php endif; ?>
                  </div>
                    <div class="col-lg-4 services-pod">
                      <?php if ( is_active_sidebar( 'homepage_services_4' ) ) : ?>
  		                  <?php dynamic_sidebar( 'homepage_services_4' ); ?>
                      <?php endif; ?>
                    </div>
                </div>
              </div>
      </div>

          <div class="wrapper  wrapper-md wrapper-highlight">
           <div class="container">
              <div class="row t-mb-50 t-mt-50">
                <div class="offset-md-2 col-md-4 d-flex flex-column justify-content-around">
                    <h3 class="section-header t-mb-30"><?php the_field('paul') ?></h3>
                    <?php the_field('paul_caption') ?>
                    <?php $paul_email = $paul_row['email']; ?>
                    <?php $paul_phone =  $paul_row['phone'] ?>
                    <?php if($paul_email) { ?>
                    <p class="d-flex justify-content-start mb-0"><span class="bold">email &nbsp</span> | <a href="mailto:<?php echo $paul_email ?>"><span class="">&nbsp;<?php echo $paul_email ?></span></a></p>
                    <?php } ?>
                    <?php if($paul_phone) { ?>
                    <p class="d-flex justify-content-start"><span class="bold">phone &nbsp</span>|  <a href="tel:<?php echo $paul_phone ?>"><span class="">&nbsp;<?php echo $paul_phone ?></span></a></p>
                    <?php } ?>
                    <p><a class='bush-button' href="<?php the_field('paul_link')?>">Book Now</a></p>
                </div>
                <div class="col-md-4">
                 <a href="<?php the_field('paul_link') ?>"></a><img src="<?php $paul_photo=get_field('paul_photo');echo $paul_photo['url']; ?>" alt="<?php echo $paul_photo['alt']; ?>" /></a>
                </div>
              </div>
            </div>
          </div>


<div class="wrapper  wrapper-md">
              <div class="container">
                <div class="row t-mb-50 t-mt-50">
                  <div class="col-12">
                  <h2 class="d-flex justify-content-center section-header t-mb-30">Productions</h2>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-6">
                    <?php if ( is_active_sidebar( 'productions_1' ) ) : ?>
		                  <?php dynamic_sidebar( 'productions_1' ); ?>
                    <?php endif; ?>
                  </div>
                  <div class=" col-lg-3 col-md-6 col-sm-6">
                    <?php if ( is_active_sidebar( 'productions_2' ) ) : ?>
		                  <?php dynamic_sidebar( 'productions_2' ); ?>
                    <?php endif; ?>
                  </div>
                  <div class=" col-lg-3 col-md-6 col-sm-6">
                    <?php if ( is_active_sidebar( 'productions_3' ) ) : ?>
		                  <?php dynamic_sidebar( 'productions_3' ); ?>
                    <?php endif; ?>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-6">
                    <?php if ( is_active_sidebar( 'productions_4' ) ) : ?>
		                  <?php dynamic_sidebar( 'productions_4' ); ?>
                    <?php endif; ?>
                  </div>
                </div>
              </div>
            </div>

<div class="wrapper wrapper-highlight wrapper-md ">
          <div class="container">
            <div class="row t-mb-50 t-mt-50">
              <div class="col-12">
              <h2 class="d-flex justify-content-center section-header t-mb-30"> Celtic and Irish music</h2>
              </div>
              <div class="col-md-4">
                <?php if ( is_active_sidebar( 'homepage_music_bands_1' ) ) : ?>
                  <?php dynamic_sidebar( 'homepage_music_bands_1' ); ?>
                <?php endif; ?>
              </div>
              <div class="col-md-4">
                <?php if ( is_active_sidebar( 'homepage_music_bands_2' ) ) : ?>
                  <?php dynamic_sidebar( 'homepage_music_bands_2' ); ?>
                <?php endif; ?>
              </div>
              <div class="col-md-4">
                <?php if ( is_active_sidebar( 'homepage_music_bands_3' ) ) : ?>
                  <?php dynamic_sidebar( 'homepage_music_bands_3' ); ?>
                <?php endif; ?>
              </div>
            </div>
          </div>
        </div>

<div class="wrapper  wrapper-md">
          <div class="container">
            <div class="row t-mb-50 t-mt-50">
              <div class="col-md-6 d-flex flex-column justify-content-around">

                  <h3 class="section-header t-mb-30"><?php the_field('name') ?></h3>
                  <p class="lou-header t-mb-30"><?php the_field('blurb') ?></p>
                  <p><a class='bush-button' href="<?php the_field('link')?>">Listen Now</a></p>
              </div>
              <div class="col-md-6">
              <a href="<?php the_field('link') ?>"></a><img src="<?php $image=get_field('image');echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" /></a>
              </div>
            </div>
            </div>
          </div>


<div class="wrapper wrapper-light wrapper-md">
<div class="container">
  <div class="row t-mb-50 t-mt-50">
            <div class="col-12">
            <h2 class="d-flex justify-content-center section-header t-mb-30">Contact Details</h2>
            </div>

        <?php if( have_rows('team_members', 'option') ):
            while ( have_rows('team_members', 'option') ) : the_row();
                $name = get_sub_field('name', 'option');
            		$email = get_sub_field('email', 'option');
            		$facebook = get_sub_field('facebook', 'option');
                $address = get_sub_field('address', 'option');
                $blurb = get_sub_field('blurb', 'option');
                $phone = get_sub_field('phone', 'option');
                $tel = str_replace(' ', '', $phone);

        ?>
              <div class="col-lg-3 col-md-6">
              <div class="contact-deets">
                <?php if($name) { ?>
                <p class="d-flex justify-content-start mb-0 paragraph-header "><?php echo $name ?></p>
                <?php } ?>
                <?php if($blurb) { ?>
                <p class="d-flex justify-content-start mb-0"><?php echo $blurb ?></p>
                <?php } ?>
                <?php if($email) { ?>
                <p class="d-flex justify-content-start mb-0"><span class="bold">email &nbsp</span> | <a href="mailto:<?php echo $email ?>"><span class="">&nbsp;<?php echo $email ?></span></a></p>
                <?php } ?>
                <?php if($phone) { ?>
                <p class="d-flex justify-content-start mb-0"><span class="bold">phone &nbsp</span>|  <a href="tel:<?php echo $tel ?>"><span class="">&nbsp;<?php echo $phone ?></span></a></p>
                <?php } ?>
                <?php if($address) { ?>
                <p class="d-flex justify-content-start mb-0"><span class="bold">address &nbsp</span>| <?php echo $address ?></p>
                <?php } ?>
                <?php if($facebook) { ?>
                <p class="d-flex justify-content-start mb-0"><span class="bold">facebook &nbsp</span>|<a href="<?php echo $facebook ?>"><i class=" pr-1 pl-1 fa fa-facebook-square"></i></a></p>
                <?php } ?>
                </div>
                </div>

          <?php
          endwhile;
        endif;
        ?>
    </div>
    </div>

					<?php endwhile; // end of the loop. ?>

    </div>
<?php get_footer(); ?>
