<?php get_header(); ?>
<!-- Begin #colleft -->
			<section>
			<!-- archive-title -->	
			<?php if(of_get_option('journal_box_model')!="normal"){?>			
						<?php if(is_month()) { ?>
						<h1>بایگانی <?php the_time('F, Y') ?></h1>
						<?php } elseif(is_category()){ ?>
						<h1>در حال مرور بخش "<?php $current_category = single_cat_title("", true); ?>"</h1>
						<?php } elseif(is_tag()) { ?>
						<h1>کلید واژه "<?php wp_title('',true,''); ?>"</h1>
						<?php } elseif(is_author()) { ?>
						<h1>نوشته ای از "<?php wp_title('',true,''); ?>"</h1>
						<?php }else{?>
						<!--<h1>Browsing All Articles</h1>-->
						<?php }
					}else{?>
						<?php if(is_month()) { ?>
						<div id="archive-title">
						بایگانی <strong><?php the_time('F, Y') ?></strong>
						</div>
						<?php } ?>
						<?php if(is_category()) { ?>
						<div id="archive-title">
						در حال مرور بخش "<strong><?php $current_category = single_cat_title("", true); ?></strong>"
						</div>
						<?php } ?>
						<?php if(is_tag()) { ?>
						<div id="archive-title">
						کلیدواژه "<strong><?php wp_title('',true,''); ?></strong>"
						</div>
						<?php } ?>
						<?php if(is_author()) { ?>
						<div id="archive-title">
						نوشته ای از "<strong><?php wp_title('',true,''); ?></strong>"
						</div>
						<?php }
					} ?>
					<!-- /archive-title -->
		<?php $postindex = 1; ?>	
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>	
		<?php if(of_get_option('journal_box_model')!="normal"){?>
			<article class="postBox<?php if(($postindex % 2) == 0){ echo ' lastBox';}?>">
				<div class="postBoxInner">
					<a href="<?php the_permalink() ?>" >
						<?php
						if ( has_post_thumbnail()) {
							//the_post_thumbnail();?> 
							<img src="<?php bloginfo('template_directory'); ?>/timthumb.php?src=<?php echo get_image_url(); ?>&amp;h=90&amp;w=255&amp;zc=1" alt="<?php the_title(); ?>"/>
						<?php } else {?>
							<img src="<?php bloginfo('template_directory'); ?>/images/nothumb.jpg" alt="بدون تصویر"  />
						<?php } ?>
					</a>
					<h2><a href="<?php the_permalink() ?>" ><?php the_title(); ?></a></h2>
					<div class="excerpt"><?php  theme_excerpt(20) ?></div>
					<div class="meta"> <?php the_time('j F Y') ?> &nbsp;&nbsp;&nbsp;<img src="<?php bloginfo('template_directory'); ?>/images/ico_post_comments.png" alt="دیدگاه های <?php the_title(); ?>" /> <?php comments_popup_link("نظر شما چیست؟","یک دیدگاه","% دیدگاه"); ?></div>
				</div>
				<a href="<?php the_permalink() ?>" class="readMore">بیشتر بدانید</a>
			</article>
			<?php ++$postindex; ?>
			<?php }else{?>
				<article>
                    <header>
						<h1><a href="<?php the_permalink() ?>" ><?php the_title(); ?></a></h1>
						<div class="meta">
						 <?php the_time('j F Y') ?> توسط <?php the_author_posts_link()?>&nbsp;&nbsp;&nbsp;<img src="<?php bloginfo('template_directory'); ?>/images/ico_post_comments.png" alt="دیدگاه های <?php the_title(); ?>" /> <?php comments_popup_link("نظر شما چیست؟","یک دیدگاه","% دیدگاه"); ?>&nbsp;&nbsp;&nbsp;<img src="<?php bloginfo('template_directory'); ?>/images/ico_post_date.png" alt="" /> موضوع :  <?php the_category(', ') ?> 
						</div>
                    </header>
						<?php the_content('بیشتر بخوانید &raquo;'); ?>
				</article>
			<?php }?>
			<?php endwhile; ?>

	<?php else : ?>

		<p>متاسفم، شما به دنبال مطلبی می گردید که در اینجا نیست</p>

	<?php endif; ?>
	<div style="clear:both;"></div>
			<?php if (function_exists("wpthemess_paginate")) {
				wpthemess_paginate();
			} ?>
	</section>
	<!-- End section -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>
