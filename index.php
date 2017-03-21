<?php
$title = 'Article';
$pageClass = 'page-article';
get_header();
?>
  
  <div class="top page-top">
    <div class="container">
      <a href="<?php echo home_url(); ?>" id="logo">
    	<img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="AutoLoanSaver.com" />
    	</a>
      
      <div id="main-content">
          <h1 class="text-left">Blog</h1> 
          <?php if (!have_posts()) : ?>
          <div class="alert alert-warning">
            <?php _e('Sorry, no results were found.', 'roots'); ?>
          </div>
          <?php get_search_form(); ?>
        <?php endif; ?>
        
        <?php while (have_posts()) : the_post(); ?>
          <article <?php post_class(); ?>>
            <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <header class="small">
              <span class="published" datetime="<?php echo get_the_time('c'); ?>"><?php echo get_the_date(); ?></span>  
            </header>
            <div class="entry-summary">
              <?php the_excerpt(); ?>
            </div>
          </article>
          
          <hr />

        <?php endwhile; ?>
        
        <?php if ($wp_query->max_num_pages > 1) : ?>
          <nav class="post-nav">
            <ul class="pager">
              <li class="previous"><?php next_posts_link(__('&larr; Older posts', 'roots')); ?></li>
              <li class="next"><?php previous_posts_link(__('Newer posts &rarr;', 'roots')); ?></li>
            </ul>
          </nav>
        <?php endif; ?>
      </div>
    </div>
  </div>
  
<?php
get_footer();
?>