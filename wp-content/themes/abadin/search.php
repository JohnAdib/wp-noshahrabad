<?php get_header(); ?>
	
		<!-- Begin #colLeft -->
		<section>
		<?php if(get_option('journal_box_model')!="normal"){?>
			<h1>نتایج جستجوی  "<?php /* Search Count */ $allsearch = &new WP_Query("s=$s&showposts=-1"); $key = wp_specialchars($s, 1); $count = $allsearch->post_count; _e(''); _e('"'); echo $key; _e('"'); wp_reset_query(); ?>"</h1>
		<?php }else{?>
			<div id="archive-title">
			نتایج جستجوی آرشیو <strong>"<?php /* Search Count */ $allsearch = &new WP_Query("s=$s&showposts=-1"); $key = wp_specialchars($s, 1); $count = $allsearch->post_count; _e(''); _e('"'); echo $key; _e('"'); wp_reset_query(); ?>"</strong>
			</div>
		<?php }?>
		<?php $postindex = 1; ?>		
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<?php if(get_option('journal_box_model')!="normal"){?>
			<article class="postBox<?php if(($postindex % 2) == 0){ echo ' lastBox';}?>">
				<div class="postBoxInner">
					<?php
					if ( has_post_thumbnail()) {
						//the_post_thumbnail();?> 
						<img src="<?php bloginfo('template_directory'); ?>/timthumb.php?src=<?php echo get_image_url(); ?>&amp;h=90&amp;w=255&amp;zc=1" alt="<?php the_title(); ?>" />
					<?php } else {?>
						<img src="<?php bloginfo('template_directory'); ?>/images/nothumb.jpg" alt="بدون تصویر"  />
					<?php } ?>
					<h2><a href="<?php the_permalink() ?>" ><?php the_title(); ?></a></h2>
					<div class="excerpt"><?php  theme_excerpt(20) ?></div>
					<div class="meta"> <?php the_time('j F Y') ?> &nbsp;&nbsp;&nbsp;<img src="<?php bloginfo('template_directory'); ?>/images/ico_post_comments.png" alt="" /> <?php comments_popup_link("نظر شما چیست؟","یک دیدگاه","% دیدگاه"); ?></div>
				</div>
				<a href="<?php the_permalink() ?>" class="readMore">بیشتر بخوانید</a>
			</article>
			<?php ++$postindex; ?>
			<?php }else{?>
				<article>
						<h1><a href="<?php the_permalink() ?>" ><?php the_title(); ?></a></h1>
						<div class="meta">
						 <?php the_time('j F Y') ?> توسط <?php the_author_posts_link()?>&nbsp;&nbsp;&nbsp;<img src="<?php bloginfo('template_directory'); ?>/images/ico_post_comments.png" alt="" /> <?php comments_popup_link("نظر شما چیست؟","یک دیدگاه","% دیدگاه"); ?>&nbsp;&nbsp;&nbsp;<img src="<?php bloginfo('template_directory'); ?>/images/ico_post_date.png" alt="" /> در موضوع:  <?php the_category(', ') ?> 
						</div>
						<?php the_excerpt('بیشتر بخوانید &raquo;'); ?>
					</article>
			<?php }?>
		<?php endwhile; ?>

	<?php else : ?>
		<p>متاسفم، شما به دنبال مطلبی می گردید که در اینجا نیست</p>
		<div class="entry">
			<p>پیشنهادات:</p>
			<ul>
			   <li>  املای تمام کلمات را بررسی نمایید.</li>
			   <li>  از کلمات کلیدی دیگری استفاده نمایید.</li>
			   <li>  از کلمات کلیدی عمومی تری استفاده نمایید.</li>
			</ul>
		</div>
	<?php endif; ?>
	<div style="clear:both;"></div>
			<?php if (function_exists("wpthemess_paginate")) {
				wpthemess_paginate();
			} ?>
		</section>
		<!-- End section -->

<?php get_sidebar(); ?>	

<?php get_footer(); ?>
