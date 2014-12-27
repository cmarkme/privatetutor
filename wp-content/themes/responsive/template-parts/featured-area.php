<?php

// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) {
	exit;
}

$responsive_options = responsive_get_options();
//test for first install no database
$db = get_option( 'responsive_theme_options' );
//test if all options are empty so we can display default text if they are
$empty     = ( empty( $responsive_options['home_headline'] ) && empty( $responsive_options['home_subheadline'] ) && empty( $responsive_options['home_content_area'] ) ) ? false : true;
$emtpy_cta = ( empty( $responsive_options['cta_text'] ) ) ? false : true;

?>

<div id="featured" class="grid col-940">

	<div id="featured-content" class="grid col-460">
		<h1 class="featured-title">
			<?php
			if ( isset( $responsive_options['home_headline'] ) && $db && $empty )
				echo $responsive_options['home_headline'];
			/*else {
				_e( 'Find Tutors or Sign up if you\'re a Tutor', 'responsive' );
			}*/
			?>
		</h1>

		<h2 class="featured-subtitle">
			<?php
			if ( isset( $responsive_options['home_subheadline'] ) && $db && $empty )
				echo $responsive_options['home_subheadline'];
			else
				_e( 'Want to Learn?', 'responsive' );
			?>
		</h2>

		<?php
		if ( isset( $responsive_options['home_content_area'] ) && $db && $empty ) {
			echo do_shortcode( wpautop( $responsive_options['home_content_area'] ) );
		} else {
			echo '<p>' . __( 'Good! you will Find the Perfect Tutor for your needs right here, just drop your information in the Contact Box below', 'responsive' ) . '</p>';
		} ?>

		<h2 class="featured-subtitle">
			<?php
			if ( isset( $responsive_options['home_subheadline'] ) && $db && $empty )
				echo $responsive_options['home_subheadline'];
			else
				_e( 'Youre a Tutor and need Students?', 'responsive' );
			?>
		</h2>
<?php
		if ( isset( $responsive_options['home_content_area'] ) && $db && $empty ) {
			echo do_shortcode( wpautop( $responsive_options['home_content_area'] ) );
		} else {
			echo '<p>' . __( 'Then that\'s great....  Just use the Contact Box to the right and get a quick response from our Dedicated Team ', 'responsive' ) . '</p>';
		} ?>
		<img src="http://privatetutor.me.uk/wp-content/themes/responsive/core/images/gads.jpg" alt="" style="
    margin-left: 35px;
    margin-top: 25px;
" />
		</div>
	
	<div id="featured-image" class="grid col-460 fit">
<?php include 'wp-content/themes/responsive/contactform/contact.php'; ?>
		<?php $featured_content = ( !empty( $responsive_options['featured_content'] ) ) ? $responsive_options['featured_content'] : '<img class="aligncenter" src="' . get_template_directory_uri() . '/core/images/tutor.jpg" width="440" height="300" alt="" />'; ?>

		<?php echo do_shortcode( wpautop( $featured_content ) ); ?>

	</div><!-- end of #featured-image -->

	</div><!-- end of #featured-image -->

</div><!-- end of #featured -->