<?php
/*
Template Name: Complete
*/
?>

<?php
	$title = 'Complete';
	$pageClass = 'page-form';
	get_header();
?>
  
  <div class="top homepage-top">
    <div class="container">
      <a href="<?php echo home_url(); ?>" id="logo">
    	<img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="AutoLoanSaver.com" />
    	</a>
      
      <div id="main-content" class="make-content">
        <div id="main"  class="fourth-step form-step">

          <h1>Congratulations!</h1> 
                
          <div class="green-border text-center">
            Please be patient while your application is processed. You'll be contacted shortly. 
          </div>
                
          <h2 class="text-center">In the meantime you can take a look on our partners oppotrunities</h2>
          <br />      
          <div class="row">
            <div class="col-sm-6 text-center">
              <p><img src="./assets/img/u255.png" /></p>
            </div>
            <div class="col-sm-6 text-center">
              <p><img src="./assets/img/u255.png" /></p>
            </div>
            <div class="col-sm-6 text-center">
              <p><img src="./assets/img/u255.png" /></p>
            </div>
            <div class="col-sm-6 text-center">
              <p><img src="./assets/img/u255.png" /></p>
            </div>
          </div>

        </div>  
      </div>
    </div>
  </div>
  
                   

  
  

<?php
get_footer();
?>
