<?php get_header(); ?>
<div id="main">
	<div id="content" class="container">
	<!-- single.php -->
		<div class="row">
			<div class="col-sm-8">
				<header><h1><a href="<?php echo get_permalink( get_option( 'page_for_posts' ) ) ?>">News &amp; Blog</a></header>
				<?php if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); ?>
			</div>
			<div class="col-sm-4">
				<div class="header-search"><?php get_search_form(); ?></div>
			</div>
		</div>
	</div>
	<div  class="background-color-gray">
		<div id="content" class="container">
			<div class="row">
				<div class="col-sm-3">
					<?php get_sidebar(); ?>
				</div>
				<div class="col-sm-9">
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<?php	
						$categories = get_the_category();
				        $separator = ', ';
				        $output = '';
				        if($categories){
				          foreach($categories as $category) {
				            $output .= '<a href="'.get_category_link( $category->term_id ).'" title="'.esc_attr( sprintf( __( "View all posts in %s" ), $category->name)).'">'.$category->cat_name.'</a>'.$separator;
				          }
				        }
			        ?>
					<article>
						<div class="card">
						<?php if (has_post_thumbnail()): ?>
							<div class="post-header-img"><?php the_post_thumbnail('full'); ?></div>
						<?php endif; ?>
							<div class="news-post-content">
								<div class="news-post-title">
									<header>
					                  <h2><?php echo get_the_title(); ?></h2>
					                  <span class="news-post-category"><?php echo trim($output, $separator).' - '.get_the_time('F jS, Y'); ?></span>
									</header>
								</div>
								<p><?php the_content(__('(more...)')); ?></p>
								<p><?php comments_template( $file, $separate_comments ); ?></p>
							</div>
						</div>
					</article>
					<hr> <?php endwhile; else: ?>
					<p><?php _e('Sorry, no posts matched your criteria.'); ?></p><?php endif; ?>
				</div>
			</div>
		</div>
	</div>
</div>
<?php get_footer(); ?>