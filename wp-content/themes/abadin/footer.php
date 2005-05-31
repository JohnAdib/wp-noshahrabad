</div>
<!-- End #content -->
	</div>
	<!-- End #wrapper -->
	<!-- Begin #footer -->
	<?php if(is_user_logged_in()) { ?>
	<a id="nav-admin" href="<?php bloginfo('url'); echo "/wp-admin"; ?>" target="_blank" title="برای ورود به بخش مدیریت کلیک کنید"><img src="<?php bloginfo('template_directory'); echo"/images/navigate-admin.png"; ?>" alt="انتقال به پنل مدیریت" ></a>
	<?php } ?>
	<footer>
		<div id="footerInner">
		<?php if ( is_active_sidebar( 'footer_jc' ) ) : ?>
						<?php dynamic_sidebar( 'footer_jc' ); ?>
		<?php endif; ?>
		<div id="copyright">تمام حقوق این وب سایت برای <a href="<?php bloginfo('siteurl'); ?>" title="<?php bloginfo('description'); ?>"><?php bloginfo('name'); ?></a> محفوظ است.</div>
		<div id="powered-by-mixa">
		Designed By <a target="_blank" href="http://ermile.com/fa" title="طراحی شده توسط جواد عوض زاده | ارمایل Ermile" >Ermile &copy;</a> |
		<a href="http://validator.w3.org/check?uri=referer" title='HTML5 Valid' target="_blank"> HTML5 Valid</a>
		</div>
			<!-- BEGIN TOP SOCIAL LINKS -->
			<div id="topSocial">
				<ul>
					<?php if(of_get_option('journal_facebook_link')!=""){ ?>
					<li><a href="<?php echo of_get_option('journal_facebook_link'); ?>" class="facebook" title="در فیس بوک به ما بپیوندید"><img src="<?php bloginfo('template_directory'); ?>/images/spacer.gif" alt="در فیس بوک به ما بپیوندید" /></a></li>
					<?php }?>
					<li><a href="<?php bloginfo('rss2_url'); ?>" title="مشترک ما شوید" class="rss"><img src="<?php bloginfo('template_directory'); ?>/images/spacer.gif" alt="مشترک خوراک ما شوید" /></a></li>
				</ul>
			</div>
			<!-- END TOP SOCIAL LINKS -->		
		</div>
	</footer>
	<!-- End #footer -->
</div>
<!-- End #mainWrapper -->
<?php wp_footer(); ?>
</body>
</html>
