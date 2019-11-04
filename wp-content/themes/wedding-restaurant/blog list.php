<?php /* Template Name: blog */ ?>
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
						<nav aria-label="Page navigation example" class="m-t-20">
							<ul class="pagination">
								<li class="page-item"><a class="page-link" href="http://templatecs.com/demo/template/deliki/html/blog_list.html#"><i class="fa fa-angle-left"></i></a></li>
								<li class="page-item"><a class="page-link" href="http://templatecs.com/demo/template/deliki/html/blog_list.html#">1</a></li>
								<li class="page-item"><a class="page-link" href="http://templatecs.com/demo/template/deliki/html/blog_list.html#">2</a></li>
								<li class="page-item"><a class="page-link" href="http://templatecs.com/demo/template/deliki/html/blog_list.html#">3</a></li>
								<li class="page-item"><a class="page-link" href="http://templatecs.com/demo/template/deliki/html/blog_list.html#"><i class="fa fa-angle-right"></i></a></li>
							</ul>
						</nav>
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