<?php
 /*
  Template Name: Credit */

get_header(); ?>

<section id="section-1">
    	<div class="row-fluid">
	    	<div class="span10 offset1">
            <h1><?php the_title(); ?></h1>
			<?php if (have_posts()) : while (have_posts()) : the_post();?>
				<?php echo get_post_meta($post->ID, 'Section 1 Left', true); ?>
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

    <section id="section-2" class="shaded-bg no-edge">
    	<div class="row-fluid">
	    	<div class="span12">
			<?php if (have_posts()) : while (have_posts()) : the_post();?>
				<?php echo get_post_meta($post->ID, 'Section 2 Left', true); ?>
			<?php endwhile; else: ?>
				<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
			<?php endif; ?>
	    	</div>
    	</div>
    </section>

    <section id="section-3">
    	<div class="row-fluid">
	    	<div class="span10 offset1">
			<?php if (have_posts()) : while (have_posts()) : the_post();?>
				<?php echo get_post_meta($post->ID, 'Section 3 Left', true); ?>
			<?php endwhile; else: ?>
				<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
			<?php endif; ?>
	    	</div>
    	</div>
    </section>

    <section id="section-4" class="shaded-bg">
    	<div class="row-fluid">
	    	<div class="span5 offset1">
			<?php if (have_posts()) : while (have_posts()) : the_post();?>
				<?php echo get_post_meta($post->ID, 'Section 4 Left', true); ?>
			<?php endwhile; else: ?>
				<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
			<?php endif; ?>
			</div>
			<div class="span5 offset1">
				<?php if (have_posts()) : while (have_posts()) : the_post();?>
				<?php echo get_post_meta($post->ID, 'Section 4 Right', true); ?>
			<?php endwhile; else: ?>
				<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
			<?php endif; ?>
			</div>
		</div>
    </section>

<?php get_footer(); ?>