<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
<footer>
	<div class="container">
		<?php dynamic_sidebar("heading"); ?>	
		<div class="contactForm form-wrapper">	
			<?php echo do_shortcode('[contact-form-7 id="9" title="Contact form"]'); ?>
		</div>
		<div class="footerSection">
			<div class="row">
				<div class="col-md-2 col-sm-6 col-xs-12"><div class="logo float-left"><a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri() ?>/assets/images/logo.png"></a></div></div>
				<div class="col-md-3 col-sm-6 col-xs-12">
					<?php dynamic_sidebar("Footer1"); ?>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-12"><?php dynamic_sidebar("Footer2"); ?></div>
				<div class="col-md-3 col-sm-6 col-xs-12"><?php dynamic_sidebar("Footer3"); ?></div>
				
			</div>
		</div>	
	</div>	
</footer>
<script>
	$('input, textarea').focus(function(){
  $(this).parents('.form-group').addClass('focused');
});

$('input, textarea').blur(function(){
  var inputValue = $(this).val();
  if ( inputValue == "" ) {
    $(this).removeClass('filled');
    $(this).parents('.form-group').removeClass('focused');  
  } else {
    $(this).addClass('filled');
  }
})  
</script>
<?php wp_footer(); ?>

</body>
</html>
