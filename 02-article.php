<?php
/*
Template Name: Article
*/
?>

<?php
$title = 'Article';
$pageClass = 'page-article';
get_header();
?>
      
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
