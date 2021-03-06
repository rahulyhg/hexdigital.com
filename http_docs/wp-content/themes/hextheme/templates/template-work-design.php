<?php
/*
Template Name: Design
*/
?>

<?php get_header(); ?>

<?php $idnumber = 0 //create variable for section id numbers ?> 

<?php 

/*
*  Loop through a Flexible Content field and display it's content with different views for different layouts
*/

while(has_sub_field("work")): ?>
 


<?php if(get_row_layout() == "main_header_image"):  ?>
	
			<section id="<?php echo $idnumber; //echo current id variable to section id ?>" class="worksection mainheaderimage"> 
			<?php $idnumber++ //increment id var by one so that next section is numbered one higher ?> 

				<div class="mainheaderimagebg" style="background: url(<?php the_sub_field("main_header_image"); ?>)">
		 			<div class="verticalcenterwrap">
						<div class="verticalcenterblock">

						<div class="clear100"></div>

							<h1 class="workmaintitle textintro">
								<?php echo get_the_title($ID); ?> 
							</h1>

							<h2 class="subtitle textmedium textcenter">
								<?php the_sub_field("subtitle"); ?>
							</h2>

						<div class="clear50"></div>
						<div class="clear30"></div>
						<div class="clear30"></div>

						<a href="#<?php echo $idnumber; //create nav button with destination matching the next section's id ?>" class="navarrowcircle2 realeasy"> 
							<div class="navarrow"></div>
						</a> <!-- end navarrowcircle -->

						</div> <!-- end verticalcenterblock -->
					</div> <!-- end verticalcenterwrap -->
				</div> <!-- end mainheaderimagebg -->
			</section>	
 


<?php elseif(get_row_layout() == "lead"): ?>

			<section id="<?php echo $idnumber; ?>" class="worksection sectionlead">
			<?php $idnumber++ ?>

				<div class="verticalcenterwrap">
					<div class="verticalcenterblock">

						<div class="large-8 large-centered small-10 small-centered columns">

						<div class="clear100"></div>
						<div class="clear50"></div>

						<p class="lead">
							<?php the_sub_field("lead"); ?>
						</p>

						<a href="#<?php echo $idnumber; ?>" class="navarrowcircle realeasy">
							<div class="navarrow"></div>
						</a> <!-- end navarrowcircle -->

						</div> <!-- end large-10 -->

					</div> <!-- end verticalcenterblock -->
				</div> <!-- end verticalcenterwrap -->

			</section>



<?php elseif(get_row_layout() == "video"): ?>

			<div id="<?php echo $idnumber; ?>" class="divsection worksection videosection">
			<?php $idnumber++ ?>

				<div class="verticalcenterwrap">
					<div class="verticalcenterblock">

						<div class="large-8 large-centered small-10 small-centered columns">


							<div class="videowrap">


								<?php if(get_sub_field('video_title')): ?>
									<h2 class="textintro"><?php echo get_sub_field("video_title"); ?></h2>
									<div class="clear50"></div>
								<?php endif; ?>


								<div class="videovimeo">
									<?php if(get_sub_field('video_vimeo')): ?>
										<div class="flex-video widescreen vimeo">
											<iframe src="http://player.vimeo.com/video/<?php echo get_sub_field("video_vimeo"); ?>?title=0&amp;byline=0&amp;portrait=0" width="100%" height="300" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
										</div>
									<?php endif; ?>
								</div>


								<div class="videoyoutube">
									<?php if(get_sub_field('video_youtube')): ?>
										<div class="flex-video widescreen">
											<iframe width="100%" height="400" src="http://www.youtube.com/embed/<?php echo get_sub_field("video_youtube"); ?>" frameborder="0" allowfullscreen></iframe>
										</div>
									<?php endif; ?>
								</div>


							</div> <!-- end videowrap -->


						</div> <!-- end large-10 -->

						<a href="#<?php echo $idnumber; ?>" class="navarrowcircle realeasy">
							<div class="navarrow"></div>
						</a> <!-- end navarrowcircle -->

					</div> <!-- end verticalcenterblock -->
				</div> <!-- end verticalcenterwrap -->

			</div> <!-- end div section -->



<?php elseif(get_row_layout() == "stats"): ?>

			<section id="<?php echo $idnumber; ?>" class="worksection statwrap sectiontextblock">
			<?php $idnumber++ ?>
				<div class="verticalcenterwrap">	
					<div class="verticalcenterblock">

						<div class="large-8 large-centered small-10 small-centered columns">

							<div class="clear50"></div>
							<div class="clear50"></div>
							<div class="clear100"></div>

							<?php if(get_sub_field('stats_block_title_1')): ?>

								<div class="large-4 columns">

									<h3 class="textblocktitle  textlarge">
									<?php the_sub_field("stats_block_title_1"); ?>
									<div class="clear5"></div>
									</h3> <!-- end large-10 -->

							<?php endif ?>

									<p class="textblock">
									<?php the_sub_field("textblock_1"); ?>
									</p> <!-- end large-10 -->

								</div>


							<?php if(get_sub_field('stats_block_title_2')): ?>

								<div class="large-4 columns">

									<h3 class="textblocktitle  textlarge">
									<?php the_sub_field("stats_block_title_2"); ?>
									<div class="clear5"></div>
									</h3> <!-- end large-10 -->

							<?php endif ?>

									<p class="textblock">
									<?php the_sub_field("text_block_2"); ?>
									</p> <!-- end large-10 -->

								</div>

							<?php if(get_sub_field('stats_block_title_3')): ?>

								<div class="large-4 columns">

									<h3 class="textblocktitle  textlarge">
									<?php the_sub_field("stats_block_title_3"); ?>
									<div class="clear5"></div>
									</h3> <!-- end large-10 -->

							<?php endif ?>

								<p class="textblock">
								<?php the_sub_field("text_block_3"); ?>
								</p> <!-- end large-10 -->

								</div>

						</div>
						
						<a href="#<?php echo $idnumber; ?>" class="navarrowcircle realeasy">
							<div class="navarrow"></div>
						</a> <!-- end navarrowcircle -->


					</div> <!-- end verticalcenterblock -->
				</div> <!-- end verticalcenterwrap -->

			</section>	



<?php elseif(get_row_layout() == "textblock"): ?>
	
			<section id="<?php echo $idnumber; ?>" class="worksection sectiontextblock">
			<?php $idnumber++ ?>
				<div class="verticalcenterwrap">	
					<div class="verticalcenterblock">

						<div class="large-8 large-centered small-10 small-centered columns">

							<div class="clear100"></div>

							<?php if(get_sub_field('text_block_title')): ?>

								<h3 class="textblocktitle textintro textlarge">
								<?php the_sub_field("text_block_title"); ?>
								<div class="clear30"></div>
								</h3> <!-- end large-10 -->

							<?php endif ?>

								<p class="textblock">
								<?php the_sub_field("textblock"); ?>
								</p> <!-- end large-10 -->

							<a href="#<?php echo $idnumber; ?>" class="navarrowcircle realeasy">
								<div class="navarrow"></div>
							</a> <!-- end navarrowcircle -->

						</div>

					</div> <!-- end verticalcenterblock -->
				</div> <!-- end verticalcenterwrap -->

			</section>	
 


<?php elseif(get_row_layout() == "image_section"): ?>

			<section id="<?php echo $idnumber; ?>" class="sectionimage section-header" style="background: url('<?php the_sub_field("image_section"); ?>')">
			<?php $idnumber++ ?>

					<a href="#<?php echo $idnumber; ?>" class="navarrowcircle realeasy">
						<div class="navarrow"></div>
					</a> <!-- end navarrowcircle -->

			</section>


<?php elseif(get_row_layout() == "image_small"): ?>

			<div id="<?php echo $idnumber; ?>" class="workimagesmall">
			<?php $idnumber++ ?>
				<div class="workimagesmall" style="background: url(<?php the_sub_field("image_small"); ?>)"></div> <!-- end workimage -->

			</div> <!-- workimagesmall -->




<?php elseif(get_row_layout() == "heading"): ?>
			<section id="<?php echo $idnumber; ?>" class="sectionstorm">
			<?php $idnumber++ ?>
				<div class="verticalcenterwrap">
					<div class="verticalcenterblock">

						<div class="clear100"></div>
						<div class="clear30"></div>

						<h3 class="heading textintroinline">
							<?php the_sub_field("heading"); ?>
						</h3>

						<a href="#<?php echo $idnumber; ?>" class="navarrowcircledark realeasy">
							<div class="navarrow"></div>
						</a> <!-- end navarrowcircle -->

					</div> <!-- end verticalcenterblock -->
				</div> <!-- end verticalcenterwrap -->

			</section>	
		



<?php elseif(get_row_layout() == "gallery"): ?>

			<section id="<?php echo $idnumber; ?>" class="worksection sectionworkgallery">
			<?php $idnumber++ ?>

				<div class="gallery">
					<?php the_sub_field("gallery"); ?>
				</div> <!-- end gallery -->

				<a href="#<?php echo $idnumber; ?>" class="navarrowcircle realeasy">
					<div class="navarrow"></div>
				</a> <!-- end navarrowcircle -->	

			</section>
		


<?php elseif(get_row_layout() == "quote"): ?>

			<section id="<?php echo $idnumber; ?>" class="worksection sectionworkquote">
			<?php $idnumber++ ?>
				<div class="verticalcenterwrap">	
				<div class="verticalcenterblock">

					<div class="large-8 columns large-centered small-8 small-centered">

					<div class="quote">

						<div class="large-3 columns">
							<div class="speechmarks">&quot;</div>
						</div> <!-- large-3 -->

						<div class="large-9 columns quotecontent textlarge">
						<?php the_sub_field("quote"); ?>
						</div>   <!-- end large-9 -->

					</div> <!-- end quote -->

					</div> <!-- end large-8 -->
						<a href="#<?php echo $idnumber; ?>" class="navarrowcircle realeasy">
						<div class="navarrow"></div>
						</a> <!-- end navarrowcircle -->
				</div> <!-- end verticalcenterblock -->
				</div> <!-- end verticalcenterwrap -->

			</section>



<?php elseif(get_row_layout() == "view_work"): ?>

			<section id="<?php echo $idnumber; ?>" class="worksection sectiontextblock">
			<?php $idnumber++ ?>

				<div class="verticalcenterwrap">	
					<div class="verticalcenterblock">

							<div class="large-6 large-centered small-10 small-centered columns">
							
								<h3 class="textintro textlarge"><?php the_sub_field("view_title"); ?></h3> 

								<div class="clear30"></div>

								<p class="textblock"><?php the_sub_field("view_copy"); ?></p> 

								<div class="clear30"></div>

								<a target="_blank" href="<?php the_sub_field("view_work_url"); ?>" class="hexbutton hexbuttondark"><?php the_sub_field("view_button_label"); ?></a>

							</div> <!-- columns -->

							<a href="#<?php echo $idnumber; ?>" class="navarrowcircle realeasy">
								<div class="navarrow"></div>
							</a> <!-- end navarrowcircle -->

					</div> <!-- end verticalcenterblock -->
				</div> <!-- end verticalcenterwrap -->

			</section>	
	

<?php endif; ?>
<?php endwhile; ?>


<div id="letsgo" class="divsection sectionoffwhite">
<div id="<?php echo $idnumber; ?>">
<div class="row">
<div class="verticalcenterwrap">
	<div class="verticalcenterblock">

		<div class="large-10 large-centered columns">

		<div class="clear100"></div>
		<div class="clear50"></div>

		<!--<h3>we create websites, digital marketing strategies and cool animations . . .</h3>-->

		<div class="clear50"></div>

				<ul class="large-block-grid-3 small-block-grid-1 workitems lightlinksnounderline">
	          
					<?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; query_posts("post_type=design&showposts=6&paged=$paged" ); ?>
					
					<?php while (have_posts()) : the_post(); ?> 
		          	<li class="realeasy"><a href="<?php the_permalink() ?>" class="workitem lightlinks realeasy" style="background:url('<?php $image_id = get_post_thumbnail_id(); $image_url = wp_get_attachment_image_src($image_id, 'work-thumb'); echo $image_url = $image_url[0]; ?>');"><div class="workitemtitle"><?php the_title() ?></div></a></li>
					
					<?php endwhile; ?>

				</ul>

		</div> <!-- end large-8 -->

		<div class="clear100"></div>
		<div class="clear50"></div>	

	</div> <!-- end verticalcenterblock -->
</div> <!-- end verticalcenterwrap -->
</div> <!-- end row -->
</div>
<div class="clear0"></div>

</div> <!-- end div section -->

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
