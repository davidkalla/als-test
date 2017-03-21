<?php
/*
Template Name: Form
*/
?>

<?php
$title = 'Form 1';
$pageClass = 'page-form';
get_header();
?>

	<?php
	require('wgt/wgt-ajax-form.php');
	wgtAJAXForm();
	?>
	    
    </div>
  </div>
 
<?php
get_footer();
?>