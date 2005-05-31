<?php

// Do not delete these lines
	if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die ('لطفا این صفحه را مستقیما فراخوانی نکنید! ممنون');

	if ( post_password_required() ) { ?>
		<p class="nocomments">این نوشته توسط کلمه عبور محافظت شده است. برای دیدن دیدگاه ها کلمه عبور را وارد نمایید.</p>
	<?php
		return;
	}
?>

<!-- You can start editing here. -->

<?php if ( have_comments() ) : ?>
	<h2 class="h2comments"><?php comments_number("نظر شما چیست؟","یک دیدگاه","% دیدگاه");?> <a href="#respond" class="addComment">افزودن دیدگاه</a></h2>

	<ul class="commentlist">
	<?php wp_list_comments('callback=mytheme_comment'); ?>
	</ul>
 <?php else : // this is displayed if there are no comments so far ?>

	<?php if ('open' == $post->comment_status) : ?>
		<!-- If comments are open, but there are no comments. -->
	 <?php else : // comments are closed ?>
		<!-- If comments are closed. -->
		<p class="nocomments">دیدگاه ها بسته شده اند</p>

	<?php endif; ?>
<?php endif; ?>


<?php if ('open' == $post->comment_status) : ?>

<div id="respond">

<h2 id="commentsForm">
<?php comment_form_title("نظر شما چیست؟ دیدگاه خود را بیان کنید.", "دیدگاه شما در رابطه با %s چیست؟"); ?></h2>

<div class="cancel-comment-reply">
	<small><?php cancel_comment_reply_link(); ?></small>
</div>

<?php if ( get_option('comment_registration') && !$user_ID ) : ?>
<p>برای ارسال دیدگاه باید <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php echo urlencode(get_permalink()); ?>">وارد شوید</a></p>
<?php else : ?>

<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">

<?php if ( $user_ID ) : ?>

<p>وارد شده با نام <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo wp_logout_url(get_permalink()); ?>" title="خروج از این اکانت">خارج شوید &raquo;</a></p>

<?php else : ?>
	<div class="col-right">				
		<p><label for="author">نام <?php if ($req) echo "(اجباری)"; ?></label>
		<input type="text" name="author" id="author" value="<?php echo $comment_author; ?>" size="22" tabindex="1" <?php if ($req) echo "aria-required='true'"; ?> />
		</p>

		<p><label for="email">رایانامه <?php if ($req) echo "(اجباری)"; ?></label>
		<input type="text" name="email" id="email" value="<?php echo $comment_author_email; ?>" size="22" tabindex="2" <?php if ($req) echo "aria-required='true'"; ?> />
		</p>

		<p><label for="url">وب سایت</label>
		<input type="text" name="url" id="url" value="<?php echo $comment_author_url; ?>" size="22" tabindex="3" />
		</p>
	</div>

<?php endif; ?>
<div class="col-left">
	<p><label for="comment">دیدگاه شما</label>
	<textarea name="comment" id="comment" cols="100%" rows="10" tabindex="4"></textarea></p>
	<p><input name="submit" type="submit" id="submit" tabindex="5" value="ارسال دیدگاه" />
</div>

<?php comment_id_fields(); ?>
</p>
<?php do_action('comment_form', $post->ID); ?>

</form>

<?php endif; // If registration required and not logged in ?>
</div>

<?php endif; // if you delete this the sky will fall on your head ?>
