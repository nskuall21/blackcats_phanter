<?php 
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
/* Template Name: Front-Page */
get_header(); ?>


<?php 
    while(have_posts()): the_post(); 
         the_content ( );
    endwhile;
?>

<?php  get_footer(); ?>