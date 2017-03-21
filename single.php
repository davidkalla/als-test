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
          <h1><?php echo get_the_title(); ?></h1> 
          <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      	  <?php the_content(); ?>        
      	  <?php endwhile; else: ?>
      	  <?php endif; ?>
      </div>
    </div>
  </div>
  
<?php
get_footer();
?>