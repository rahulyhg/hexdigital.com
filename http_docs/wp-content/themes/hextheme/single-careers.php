<?php
/*
Template Name: Careers 
*/
?>

<?php get_header(); ?>

<style type="text/css">

#careerdescription{
text-align:left;
}

#careerdescription h3 {
font-family: 'intro_regular';
font-weight: 100 !important;
font-size: 40px;
font-weight: normal;
padding:30px 0;
}

#careerdescription li {
margin-bottom: 30px;
font-size: 1.125em;
font-weight: 300;
line-height: 1.8em;
margin: 0;
list-style-image:url('https://dl.dropboxusercontent.com/u/3744614/hexbullet-01.png');
margin-left: 0;
padding-left: .8em;
text-indent: -.8em;
padding-bottom:25px;
}

</style>

<?php 
 
/*
*  Loop through a Flexible Content field and display it's content with different views for different layouts
*/
 
while(has_sub_field("work")): ?>
 

	<?php if(get_row_layout() == "main_header_image"): ?>
	<section class="worksection mainheaderimage">
		<div class="mainheaderimagebg" style="background: url(<?php the_sub_field("main_header_image"); ?>)">
 

		<div class="verticalcenterwrap">
		<div class="verticalcenterblock">

		<h1 class="workmaintitle textintro">
			<?php echo get_the_title($ID); ?> 
		</h1>

		<h2 class="subtitle textmedium textcenter">
			<?php the_sub_field("subtitle"); ?>
		</h2>


			</div> <!-- end verticalcenterblock -->
		</div> <!-- end verticalcenterwrap -->

	</div> <!-- end mainheaderimagebg -->
	</section>	
 
	<?php elseif(get_row_layout() == "lead"): ?>
	<section class="worksection sectionlead">

		<div class="verticalcenterwrap">
			<div class="verticalcenterblock">

				<div class="large-8 large-centered small-10 small-centered columns">

				<p class="lead">
					<?php the_sub_field("lead"); ?>
				</p>

				</div> <!-- end large-10 -->

			</div> <!-- end verticalcenterblock -->
		</div> <!-- end verticalcenterwrap -->

	</section>

	


	<?php elseif(get_row_layout() == "heading"): ?>
	<section class="sectionstorm">
		
		<div class="verticalcenterwrap">
		<div class="verticalcenterblock">

		<h3 class="heading textintroinline">
			<?php the_sub_field("heading"); ?>
		</h3>

			</div> <!-- end verticalcenterblock -->
		</div> <!-- end verticalcenterwrap -->

	</div> <!-- end mainheaderimagebg -->
	</section>	

	

 <?php endif ?>
<?php endwhile; ?>


<div id="careerdescription" class="divsection sectionoffwhite" >

<div class="verticalcenterwrap">
	<div class="verticalcenterblock">
	<div class="clear100"></div>
		<div class="clear50"></div>

		<div class="large-6 large-centered columns" style="text-align:left;">
		<?php while (have_posts()) : the_post(); ?> 
		          	<?php the_content(); ?>
					<?php endwhile; ?>
		</div>			
		
		<div class="clear100"></div>
		<div class="clear50"></div>
		
	</div> <!-- end verticalcenterblock -->
</div> <!-- end verticalcenterwrap -->
</div>

<div class="clear0"></div>


<div class="clear0"></div>

<?php get_footer(); ?>

<!-- Smooth Scroll -->

	<script type="text/javascript">
  	$('a[href*=#]:not([href=#])').click(function() {
	    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') 
	        || location.hostname == this.hostname) {

	        var target = $(this.hash);
	        target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
	           if (target.length) {
	             $('html,body').animate({
	                 scrollTop: target.offset().top
	            }, 300);
	            return false;
        	}
    	}
	});	
  	</script>