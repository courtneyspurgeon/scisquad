<?php get_header(); ?>

<!--James changes-->
<div class="<?php if (is_front_page()) : ?>container_24<?php else : ?>container_24Wide<?php endif; ?>">
<!--end of james changes-->
	
	<div id="content" class="grid_16 <?php echo of_get_option('blog_sidebar_pos') ?>">
	
	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
    <div id="post-<?php the_ID(); ?>" <?php post_class('page'); ?>>
      <article class="nomargin">
        <?php $post_image_size = of_get_option('post_image_size'); ?>
				<?php if($post_image_size=='' || $post_image_size=='normal'){ ?>
          <?php if(has_post_thumbnail()) {
            echo '<a href="'; the_permalink(); echo '">';
            echo '<div class="featured-thumbnail"><div class="img-wrap">'; the_post_thumbnail(); echo '</div></div>';
            echo '</a>';
            }
          ?>
        <?php } else { ?>
          <?php if(has_post_thumbnail()) {
            echo '<a href="'; the_permalink(); echo '">';
            echo '<div class="featured-thumbnail large"><div class="img-wrap"><div class="f-thumb-wrap">'; the_post_thumbnail('post-thumbnail-xl'); echo '</div></div></div>';
            echo '</a>';
            }
          ?>
        <?php } ?>
        <div id="page-content">
          <?php the_content(); ?>

          <div class="pagination">
            <?php wp_link_pages('before=<div class="pagination">&after=</div>'); ?>
          </div><!--.pagination-->
        </div><!--#pageContent -->
      </article>
    </div><!--#post-# .post-->

  <?php endwhile; ?>
</div><!--#content-->
<!--#changes made by James-->

<!--?php get_sidebar(); ? old code-->
<?php if (!is_front_page() ) : get_sidebar(); endif; ?>

<!--#end of James change-->
</div>
<?php get_footer(); ?>