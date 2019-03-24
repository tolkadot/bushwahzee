<?php
/**
* Template Name: Conatct Page
 * @package understrap
*/


if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();

$container = get_theme_mod( 'understrap_container_type' );

$email = get_field('email');
$phone = get_field('phone');
$welcome = get_field('contact_welcome');
$cv = get_field('cv' , 52);

?>

<div class="wrapper" id="page-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

		<div class="row">

			<!-- Do the left sidebar check -->


			<main class="site-main" id="main">
      <div class="container">
        <div class="row">
        <div class="col-12"><h1 class="contact-header">Contact</h1></div>
			<div class="col-md-6">

        <p class="contact-welcome"> <?php echo $welcome; ?> <a class="contact-welcome" href="tel:<?php echo $phone; ?>"><?php echo $phone; ?></a> </p>
        <div class="sep-wrapper "><hr class="sep" /></div>

        <?php if( have_rows('team_members', 'option') ):
            while ( have_rows('team_members', 'option') ) : the_row();
                // display a sub field value
                //the_sub_field('name', 'option');
                $name = get_sub_field('name', 'option');
            		$email = get_sub_field('email', 'option');
            		$facebook = get_sub_field('facebook', 'option');
                $address = get_sub_field('address', 'option');
                $blurb = get_sub_field('blurb', 'option');
                $phone = get_sub_field('phone', 'option');
                $tel = str_replace(' ', '', $phone);

        ?>
              <div class="contact-deets">
                <?php if($name) { ?>
                <p class="d-flex mb-0 paragraph-header"><?php echo $name ?></p>
                <?php } ?>
                <?php if($blurb) { ?>
                <p class="d-flex mb-0"><?php echo $blurb ?></p>
                <?php } ?>
                <?php if($email) { ?>
                <p class="d-flex mb-0">email | <a href="mailto:<?php echo $email ?>"><span class="">&nbsp;<?php echo $email ?></span></a></p>
                <?php } ?>
                <?php if($phone) { ?>
                <p class="d-flex mb-0">phone |  <a href="tel:<?php echo $tel ?>"><span class="">&nbsp;<?php echo $phone ?></span></a></p>
                <?php } ?>
                <?php if($address) { ?>
                <p class="d-flex mb-0">address | <?php echo $address ?></p>
                <?php } ?>
                <?php if($facebook) { ?>
                <p class="d-flex mb-0">facebook |<a href="<?php echo $facebook ?>"><i class=" pr-1 pl-1 fa fa-facebook-square"></i></a></p>
                <?php } ?>
                </div>
                <div class="sep-wrapper "><hr class="sep" /></div>
          <?php
          endwhile;
        endif;
        ?>
      </div>
      <div class="col-md-6">
        <?php echo do_shortcode( '[contact-form-7 id="42" title="Contact form 1"]' ); ?>
      </div>
</div>
</div>
			</main><!-- #main -->

			<!-- Do the right sidebar check -->


		</div><!-- .row -->

	</div><!-- #content -->

</div><!-- #page-wrapper -->

<?php get_footer(); ?>
