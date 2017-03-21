<?php
/*
Template Name: Articles
*/
?>

<?php
$title = 'Articles';
$pageClass = 'page-article';
get_header();
?>
  
  <div class="top page-top">
    <div class="container">
      <a href="<?php echo home_url(); ?>" id="logo">
    	<img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="AutoLoanSaver.com" />
    	</a>
      
      <div id="main-content">
          <h1 class="text-left"><?php echo get_the_title(); ?></h1> 
          <?php
          $args = array(
            'post_type' => 'page',
            'posts_per_page' => -1,
            'orderby' => 'title',
            'post_status' => array('publish'),
            'order' => 'ASC',
            'meta_query' => array(
          		array(
          			'key'     => 'type',
          			'value'   => 'article',
          			'compare' => '=',
          		),
          	),
          );
          
          $loop = new WP_Query($args);
          ?>
          <?php if (!$loop->have_posts()) : ?>
          <div class="alert alert-warning">
            <?php _e('Sorry, no results were found.', 'roots'); ?>
          </div>
          <?php get_search_form(); ?>
        <?php endif; ?>
        
        <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
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
        <?php wp_reset_postdata(); ?>
      </div>
    </div>
  </div>
  
<?php
get_footer();
?>