<?php get_header(); ?>

<!-- Begin #colleft -->
			<section>
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>	
				<article>
                    <header>
    					<h1><?php the_title(); ?></h1>
    					<div class="meta">
    					 <?php the_time('j F Y') ?> توسط <?php the_author_posts_link()?>&nbsp;&nbsp;&nbsp;<img src="<?php bloginfo('template_directory'); ?>/images/ico_post_comments.png" alt="" /> <?php comments_popup_link("نظر شما چیست؟","یک دیدگاه","% دیدگاه"); ?>&nbsp;&nbsp;&nbsp;<img src="<?php bloginfo('template_directory'); ?>/images/ico_post_date.png" alt="" /> در موضوع:  <?php the_category(', ') ?> 
    					</div>
                    </header>
					<?php the_content(); ?>
					 <div class="postTags"><?php the_tags(); ?></div>
				</article>
				<?php comments_template(); ?>
		<?php endwhile; else: ?>

		<p>متاسفم، شما به دنبال مطلبی می گردید که در اینجا نیست</p>

	<?php endif; ?>
			
			</section>
			<!-- End section -->
			

<?php get_sidebar(); ?>	
<?php get_footer(); ?>