<?php /* Template Name: Blog */ ?>
<?php get_header(); ?>
<div id="wrap-body">
	<!--get template -->
	<?php get_template_part('module/module-wp/module-22', 'blog'); ?>
	<section>
		<div class="container">
			<div class="row">
				<div class="col-md-7 col-lg-8 cards cards-title-25 cards-pad-30 cards-border">
					<div class="m-r-20 m-sm-0">
						<!--get template-->
						<?php get_template_part('module/module-wp/module-20', 'blog'); ?>
					</div>
				</div>
				<div class="col-md-5 col-lg-4">
					<!--template-->
					<?php get_template_part('module/module-wp/module-21', 'blog'); ?>
				</div>
			</div>
		</div>
	</section>
</div>
<?php get_footer(); ?>