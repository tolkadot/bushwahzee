<?php
/**
* Template Name: Facepainting
 * @package understrap
*/


if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();

$container = get_theme_mod( 'understrap_container_type' );
          if( have_rows('team_members', 'option') ):
            $rows = get_field('team_members', 'option' ); // get all the rows
            $first_row = $rows[3]; // get the fourth row
            $christine_email = $first_row['email'];
            $christine_phone = $first_row['phone'];
            $christine_facebook = $first_row['facebook'];
            $christine_tel = str_replace(' ', '', $christine_phone);
          endif;
?>

<div class="wrapper" id="page-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

		<div class="row">

			<!-- Do the left sidebar check -->

<?php while ( have_posts() ) : the_post(); ?>
			<main class="site-main" id="main">
      <div class="container">
        <div class="row">
        <div class="col-12"><h1 class="contact-header">Tina Sparkle</h1></div>
			   <div class="col-md-6">
          <div class="container">
            <div class="row">
            <div class="col-md-8 p-0">
  <div class="sep-wrapper "><hr class="sep" /></div>
  <div class="contact-deets">
  <?php if($christine_email) { ?>
  <p class="d-flex mb-0">email | <a href="mailto:<?php echo $christine_email ?>"><span class="">&nbsp;<?php echo $christine_email ?></span></a></p>
  <?php } ?>
  <?php if($christine_phone) { ?>
  <p class="d-flex mb-0">phone |  <a href="tel:<?php echo $christine_tel ?>"><span class="">&nbsp;<?php echo $christine_phone ?></span></a></p>
  <?php } ?>
  <?php if($christine_facebook) { ?>
  <p class="d-flex mb-0">facebook |<a href="<?php echo $christine_facebook ?>"><i class=" pr-1 pl-1 fa fa-facebook-square"></i></a></p>
  <?php } ?>
  </div>

</div>
<div class="col-md-4 p-0">

	<?php echo get_the_post_thumbnail( $post->ID, 'full' ); ?>
</div>
</div>
</div>


        <p class="contact-welcome"><?php the_content(); ?></p>
      </div>
      <div class="col-md-6">
        <?php echo do_shortcode( '[contact-form-7 id="188" title="Tina Sparkle Contact"]' ); ?>
      </div>
</div>
</div>
			</main><!-- #main -->
<?php endwhile ?>
			<!-- Do the right sidebar check -->


		</div><!-- .row -->

	</div><!-- #content -->

</div><!-- #page-wrapper -->

<?php get_footer(); ?>
