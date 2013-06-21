<?php
 /*
  Template Name: Products */

get_header(); ?>

<section id="section-1">
    	<div class="content-container">
	    	<div class="left-side">
			<?php if (have_posts()) : while (have_posts()) : the_post();?>
				<?php echo get_post_meta($post->ID, 'Section 1 Left', true); ?>
			<?php endwhile; else: ?>
				<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
			<?php endif; ?>
	    	</div>
	    	<div class="right-side">
	    		<?php if (have_posts()) : while (have_posts()) : the_post();?>
				<?php echo get_post_meta($post->ID, 'Section 1 Right', true); ?>
			<?php endwhile; else: ?>
				<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
			<?php endif; ?>
	    	</div>
    	</div>
    	<div class="call-row">
			<?php if (have_posts()) : while (have_posts()) : the_post();?>
				<?php echo get_post_meta($post->ID, 'Call To Action', true); ?>
			<?php endwhile; else: ?>
				<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
			<?php endif; ?>
    	</div>
    </section>

    <section id="section-2" class="shaded-bg">
    	<div class="content-container">
	    	<div class="left-side">
			<?php if (have_posts()) : while (have_posts()) : the_post();?>
				<?php echo get_post_meta($post->ID, 'Section 2 Left', true); ?>
			<?php endwhile; else: ?>
				<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
			<?php endif; ?>
	    	</div>
	    	<div class="right-side">
			<?php if (have_posts()) : while (have_posts()) : the_post();?>
				<?php echo get_post_meta($post->ID, 'Section 2 Right', true); ?>
			<?php endwhile; else: ?>
				<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
			<?php endif; ?>
	    	</div>
    	</div>
    </section>

    <section id="section-3">
    	<div class="content-container">
	    	<div class="left-side">
			<?php if (have_posts()) : while (have_posts()) : the_post();?>
				<?php echo get_post_meta($post->ID, 'Section 3 Left', true); ?>
			<?php endwhile; else: ?>
				<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
			<?php endif; ?>
	    	</div>
	    	<div class="right-side">
			<?php if (have_posts()) : while (have_posts()) : the_post();?>
				<?php echo get_post_meta($post->ID, 'Section 3 Right', true); ?>
			<?php endwhile; else: ?>
				<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
			<?php endif; ?>
	    	</div>
    	</div>
    </section>

    <section id="section-4" class="shaded-bg">
    	<div class="content-container">
	    	<div class="left-side">
			<?php if (have_posts()) : while (have_posts()) : the_post();?>
				<?php echo get_post_meta($post->ID, 'Section 4 Left', true); ?>
			<?php endwhile; else: ?>
				<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
			<?php endif; ?>
			</div>
			<div class="right-side">
				<?php if (have_posts()) : while (have_posts()) : the_post();?>
				<?php echo get_post_meta($post->ID, 'Section 4 Right', true); ?>
			<?php endwhile; else: ?>
				<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
			<?php endif; ?>
			</div>
		</div>
    </section>

<?php get_footer(); ?>