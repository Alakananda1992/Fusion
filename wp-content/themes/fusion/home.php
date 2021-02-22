<?php
/**
Template Name: Home
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header();
?>

<!-- services-->
<div id="services" class="services">
	<div class="container">
		<div class="headingsTop">
			<div class="singleLine"></div>
			<h4>Our services</h4>
			<h3>Our team will take your business<br> presence to new level</h3>
		</div>

		<?php
    $testargs = array(
        'posts_per_page' => 3,
        'post_type' => 'our_services',
        'post_status' =>'publish',
        'order'=>'ASC',
        'orderby'=>'date'
    );
    $testnew_query = new WP_Query($testargs);
    if ($testnew_query->have_posts()): ?>
            <div class="row">
                <?php while ($testnew_query->have_posts()) : $testnew_query->the_post(); ?> 
                    <div class="col-md-4">
                    	<div class="images_box"><?php the_post_thumbnail(); ?></div>
                    	<div class="title_service"><?php the_title(); ?></div>
                    	<div class="cont_bar"><?php the_content(); ?></div>
						<a href="<?php the_permalink(); ?>" class="getIn">See Details<i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                    </div>
                    <?php endwhile; wp_reset_postdata(); ?>
            </div>
    <?php
    else :
    endif;
    ?>


	</div>
</div>

<!-- projects -->
<div class="projects">
	<div class="container">
		<?php
    $testargs = array(
        'posts_per_page' => 3,
        'post_type' => 'projects',
        'post_status' =>'publish',
        'order'=>'DESC',
        'orderby'=>'date'
    );
    $testnew_query = new WP_Query($testargs);
    if ($testnew_query->have_posts()): ?>
        <div class="container">
          <div id="myCarousel1" class="carousel slide testimonial-sec " data-ride="carousel">
                <!-- Wrapper for carousel items -->
                <div class="carousel-inner">   
                    <?php
                        $t=1;
                        while ($testnew_query->have_posts()) : $testnew_query->the_post(); 
                    ?> 
                    <div class="item carousel-item youtube <?php if($t==1){echo 'active';}?>">
                        <div class="row">
                        	<div class="col-md-2">
                        		<div class="headingsTop branding">
									<div class="singleLine"></div>
									<h4>Branding & Design</h4>
									
								</div>
                        	</div>
                            <div class="col-md-10">
                            	<div class="onlyImage">
	                            	<div class="images_projects"><?php the_post_thumbnail(); ?></div>
	                            	<div class="title_projects"><?php the_title(); ?></div>
	                            </div>
	                            <div class="onlyText float-right">
	                            	<a href="#" class="getIn">Project Details<i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
	                            	<a href="#" class="getIn">View Details<i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
	                            	<div class="singleLine"></div>
	                            </div>	
                            </div>
                        </div>
                    </div>
                    <?php
                    $t++;
                    endwhile; wp_reset_postdata();
                    ?>
                </div>
                <!-- Carousel controls -->
                <div class="carousel-fix">
                        
                        <ol class="carousel-indicators">
						    <li data-target="#myCarousel1" data-slide-to="0" class="active"></li>
						    <li data-target="#myCarousel1" data-slide-to="1"></li>
					  </ol>
                        
                </div>
            </div>
        </div>
    <?php
    else :
    endif;
    ?>
	</div>	
</div>

<!-- projects -->
<!-- testimonials-->
<div class="testimonials">
	<div class="container">
		<div class="headingsTop">
			<div class="singleLine"></div>
			<h4>Testimonials</h4>
			<h3>We have worked with some amazing companies around the world</h3>
		</div>
		<?php
		    $testargs = array(
		        'posts_per_page' => 7, 'post_type' => 'client_logo', 'post_status' =>'publish', 'order'=>'ASC'
		    );
		    $testnew_query = new WP_Query($testargs);
		    if ($testnew_query->have_posts()): ?>
			<div class="clientLogo">
					<?php $t=1; while ($testnew_query->have_posts()) : $testnew_query->the_post(); ?> 
                    <div class="client_image"><?php the_post_thumbnail(); ?></div>
                    <?php $t++; endwhile; wp_reset_postdata(); ?>
			</div>
			<?php else : endif; ?>
		<?php
   		 $testargs = array(
        'posts_per_page' => 3,
        'post_type' => 'testimonials',
        'post_status' =>'publish',
        'order'=>'DESC',
        'orderby'=>'date'
    );
    $testnew_query = new WP_Query($testargs);
    if ($testnew_query->have_posts()): ?>
        <div class="container">
          <div id="myCarousel" class="carousel slide testimonial-sec " data-ride="carousel">
                <!-- Wrapper for carousel items -->
                <div class="carousel-inner">   
                    <?php
                        $t=1;
                        while ($testnew_query->have_posts()) : $testnew_query->the_post(); 
                    ?> 
                    <div class="item carousel-item youtube <?php if($t==1){echo 'active';}?>">
                        <div class="row">
                            <div class="col-md-12">
                            	<div class="images_box"><?php the_post_thumbnail(); ?></div>
                            	<div class="cont_bar"><?php the_content(); ?></div>
                            	<div class="title_bar"><?php the_title(); ?></div>
                            	<div class="desig"><?php echo get_field("designation"); ?></div>
                            </div>
                        </div>
                    </div>
                    <?php
                    $t++;
                    endwhile; wp_reset_postdata();
                    ?>
                </div>
                <!-- Carousel controls -->
                <div class="carousel-fix">
                        
                        <ol class="carousel-indicators">
						    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
						    <li data-target="#myCarousel" data-slide-to="1"></li>
					  </ol>
                        
                </div>
            </div>
        </div>
    <?php
    else :
    endif;
    ?>

	</div>
</div>


<!-- testimonials-->
<!-- Our Team-->
<div class="teams">
	<div class="headingsTop">
		<div class="singleLine"></div>
		<h4>Our Team</h4>
		<h3>Our Amazing Team</h3>
	</div>
	<div class="container">
		<div class="ourTeams">
			<?php
		    $testargs = array(
		        'posts_per_page' => 7, 'post_type' => 'our_team', 'post_status' =>'publish', 'order'=>'ASC'
		    );
		    $testnew_query = new WP_Query($testargs);
		    if ($testnew_query->have_posts()): ?>
			<div class="row">
					<?php
                        $t=1;
                        while ($testnew_query->have_posts()) : $testnew_query->the_post();
                         
                    ?> 
					<div class="col-lg-3 col-sm-6 col-xs-12">
						<div class="our-team-main">
						
							<div class="team-front">
								<div class="img-fluid" ><?php the_post_thumbnail(); ?></div>
								<h3><?php the_title(); ?></h3>
								<p><?php echo get_field("designation"); ?></p>
							</div>
								
							<div class="team-back">
								<div class="float_left left_side">
									<div class="img-fluid" ><?php the_post_thumbnail(); ?></div>
									<h3><?php the_title(); ?></h3>
									<p><?php echo get_field("designation"); ?></p>
								</div>
								<div class="float_right left_side"><?php the_content(); ?></div>
							</div>
							
							</div>
						</div>
							<?php $t++; endwhile; wp_reset_postdata(); ?>
						
			</div>
			<?php else : endif; ?>
		</div>
	</div>
</div>


<!-- testimonials-->

<script>
	$(document).ready(function(){
  $(".scrollto").on('click', function(event) {
    if (this.hash !== "") {
      event.preventDefault();
      var hash = this.hash;
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function(){
        window.location.hash = hash;
      });
    } // End if
  });
});
</script>
<?php
get_footer();
