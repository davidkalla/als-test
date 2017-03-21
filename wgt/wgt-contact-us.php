<?php
function wgtContactUs() {
?>

<?php
if (count($_POST) > 0) {

 if (
     ISO_validate('fullname', $_POST['fullname']) &&
     ISO_validate('email', $_POST['email']) &&
     ISO_validate('subject', $_POST['subject']) &&
     ISO_validate('message', $_POST['message']) &&
     ISO_validate('captcha', $_POST['captcha'])
     ) {
 
  $ISO_valid = true; 

  $ISO_email = get_option('ISO_CONTACT_FORM_MAIL_LIST');
  if (empty($ISO_email)) $ISO_email = get_option('admin_email');
  $ISO_is_sent = mail($ISO_email, $_POST['subject'], $_POST['fullname']."\n\r".$_POST['message'], "From: ".$_POST['email']." \r\n");

  if ($ISO_is_sent) {
    print "<script type=\"text/javascript\">\n";
    print "window.location = \"".$_SERVER['PHP_SELF']."?status=sent\";\n";
    print "</script>\n";
  }
 
 } else {
  $ISO_valid = false;
 }
 
}
?>

<?php if ($_GET['status'] == "sent") { ?>

<div>
<h1>Thank you</h1>
<p align="center"><b>Your email has been received.  We will get back to you shortly.</b></p>
</div>

<script type="text/javascript">
setTimeout(function(){ window.close(); }, 5000);
</script>

<?php } else if (count($_POST) > 0 && $ISO_valid == false) { ?>

<div>
<p><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;It appears there is invalid data. Please correct your contact information.</b></p>
</div>

<?php } else if (count($_POST) > 0 && $ISO_is_sent == false) { ?>

<div>
<p align="center"><b><br /><br /><br /><br /><br />Submission failed. Please try again.</b></p>
</div>

<?php } ?>

<?php if (count($_GET) == 0) { ?>

<form name="frm_contact" action="<?= $_SERVER['PHP_SELF'] ?>" method="post" onsubmit="">
  <div class="row">
    <div id="left-column" class="col-sm-6">
      
      <div class="form-left">
        <h2>Contact Us</h2>
            
        <div>    
          <label<?php (count($_POST) > 0 && ISO_validate('fullname', $_POST['fullname']) == false) ? print " style=\"color: red\"" : "" ?>>Full name</label>
          <input class="input required" type="text" name="fullname" id="fullname" value="<?= $_POST['fullname'] ?>" />
        </div>
            
        <div>
          <label<?php (count($_POST) > 0 && ISO_validate('email', $_POST['email']) == false) ? print " style=\"color: red\"" : "" ?>>E-mail</label>
          <input class="input required" type="text" name="email" id="email" value="<?= $_POST['email'] ?>" />
        </div>
                
        <div>
          <label<?php (count($_POST) > 0 && ISO_validate('subject', $_POST['subject']) == false) ? print " style=\"color: red\"" : "" ?>>Subject</label>
          <input class="input required" type="text" name="subject" id="subject" value="<?= $_POST['subject'] ?>" />
        </div>
            
        <div>
          <label<?php (count($_POST) > 0 && ISO_validate('message', $_POST['message']) == false) ? print " style=\"color: red\"" : "" ?>>Message</label>
          <textarea class="required" name="message" id="message" rows="5" cols="7" /></textarea>
        </div>
            
        <div>
          <label<?php (count($_POST) > 0 && ISO_validate('captcha', $_POST['captcha']) == false) ? print " style=\"color: red\"" : "" ?>>Type the code below:</label>
          <input type="text" class="input required" name="captcha" id="captcha" />
          <img src=" http://<?= $_SERVER['HTTP_HOST'] ?>/captcha.php" alt="secret code"><br /><br />
        </div>
           
        <input type="submit" class="submit" name="btn_submit" value="Submit" />
      </div>             
    </div>

  </div>
</form>

<?php
}
?>

<?php
}
?>