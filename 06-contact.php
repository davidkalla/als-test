<?php
/*
Template Name: Contact Us
*/
?>

<?php
	$title = 'Contact';
	$pageClass = 'contact';
	get_header();
?>
      
      <div id="main-content" class="make-content">
        <div id="main" class="contact form-step">
	<?php
	require('wgt/wgt-contact-us.php');
	wgtContactUs();
	?>
      </div>
      
      </div>
    </div>
  </div>
  
  
<?php
get_footer();
?>
