<?php
/**
 * Template Name: Home page
 */
 get_header(); ?>	
<?php $shortname = "unit_theme"; ?>
<div id="slideshow_cont">
	<div class="flicker-example fullplate" data-block-text="false">
		<div class="scroller">
			<!--<div class="icon-arrow-down2 scroller-icon"></div>
			SCROLL<span>DOWN</span>-->
			SCROLL &#9660;  DOWN 
		</div>		
		<ul>			
			<?php
			$slider_arr = array();
			$x = 0;
			$args = array(
				 //'category_name' => 'blog',
				 'post_type' => 'post',
				 'meta_key' => 'ex_show_in_slideshow',
				 'meta_value' => 'Yes',
				 'posts_per_page' => 99
				 );
			query_posts($args);
			while (have_posts()) : the_post(); 
				$thumb = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), 'full' );
				//$thumb = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), 'large' );
				$img_url = $thumb['0']; 
			?>		
				<li data-background="<?php echo $img_url; ?>" onclick="location.href='<?php the_permalink(); ?>';" style="cursor:pointer;">
					
				</li>		
			<?php array_push($slider_arr,get_the_ID()); ?>
			<?php $x++; ?>
			<?php endwhile; ?>
			<?php wp_reset_query(); ?>                                    		
	
		</ul>
		
	</div>
</div> <!-- //slideshow_cont -->




<div id="content">
	<div class="container">
		<?php

			$categories = get_categories();
			foreach( $categories as $category ) {
				$cat_image = get_field('category_image', $category);
				if($cat_image){ ?>
				<div class="home_box">
					<div class="home_box_media">
					<a href="<?php echo get_category_link($category->term_id); ?>"><img src="<?php echo $cat_image['sizes']['ut-home-image']; ?>" /></a>
					<h3><a href="<?php echo get_category_link($category->term_id); ?>"><?php echo $category->name; ?></h3>
					</div>
				</div>
				<?php }				
			}
		?>
		<div class="clear"></div>
		
		
	</div> <!-- //container -->
</div> <!-- //content -->
<?php get_footer(); ?> 		