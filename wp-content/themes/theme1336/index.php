//retrieves header
<?php get_header(); ?>

//designates container_24 class
<div class="container_24">
//getting side bar blog
	<div id="content" class="grid_16 <?php echo of_get_option('blog_sidebar_pos') ?>">
		<h3 class="title">Latest Topics</h3>
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <header>
          <h2><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
          <?php $post_meta = of_get_option('post_meta'); ?>
        <?php if ($post_meta=='true' || $post_meta=='') { ?>
           <div class="post-meta">
            <time datetime="<?php the_time('Y-m-d\TH:i'); ?>"><?php the_time('l, d F Y h:i'); ?></time> <span class="author">Posted by <?php the_author(); ?></span>
          </div><!--.post-meta-->
          <?php } ?>		
        </header>
        <?php $post_image_size = of_get_option('post_image_size'); ?>
      <?php if($post_image_size=='' || $post_image_size=='normal'){ ?>
        <?php if(has_post_thumbnail()) {
	   	echo '<div class="featured-thumbnail"><div class="img-wrap">'; 
          echo '<a href="'; the_permalink(); echo '">';
          the_post_thumbnail();
          echo '</a>';
		echo '</div></div>';
          }
        ?>
      <?php } else { ?>
        <?php if(has_post_thumbnail()) {
	   	echo '<div class="featured-thumbnail large"><div class="img-wrap"><div class="f-thumb-wrap">';
          echo '<a href="'; the_permalink(); echo '" class="extra">';
          the_post_thumbnail('post-thumbnail-xl'); 
          echo '</a>';
		echo '</div></div></div>';
          }
        ?>
      <?php } ?>
        
        <div class="post-content extra-wrap">
          <?php $post_excerpt = of_get_option('post_excerpt'); ?>
      	<?php if ($post_excerpt=='true' || $post_excerpt=='') { ?>
            <div class="excerpt"><?php $excerpt = get_the_excerpt(); echo my_string_limit_words($excerpt,50);?></div>
          <?php } ?>
		<div class="post-meta-bot"><span class="p_comments"><?php comments_popup_link('No comments', 'One comment', '% comments', 'comments-link', 'Comments are closed'); ?></span> <a href="<?php the_permalink() ?>" class="link"><?php _e('Read more','theme1336');?></a></div>
        </div>
      </article>
      
    <?php endwhile; else: ?>
      <div class="no-results">
        <p><strong>There has been an error.</strong></p>
        <p>We apologize for any inconvenience, please <a href="<?php bloginfo('url'); ?>/" title="<?php bloginfo('description'); ?>">return to the home page</a> or use the search form below.</p>
        <?php get_search_form(); ?> <!-- outputs the default Wordpress search form-->
      </div><!--noResults-->
    <?php endif; ?>
    
    <?php if ( $wp_query->max_num_pages > 1 ) : ?>
      <nav class="oldernewer">
        <div class="older">
          <?php next_posts_link('&laquo; Older Entries') ?>
        </div><!--.older-->
        <div class="newer">
          <?php previous_posts_link('Newer Entries &raquo;') ?>
        </div><!--.newer-->
      </nav><!--.oldernewer-->
    <?php endif; ?>



	</div><!--#content-->
<!--#changes made by James-->

<!--?php get_sidebar(); ? old code-->
<?php if (is_front_page()) : get_sidebar(); endif; ?>

<!--#end of James change-->
</div>	
<?php get_footer(); ?>