<?php
/*
Template Name: Fin
*/
?>

<?php
	$title = 'FIN';
	$pageClass = 'page-form';
	get_header();
?>
  
  <div class="top homepage-top">
    <div class="container">
      <a href="<?php echo home_url(); ?>" id="logo">
    	<img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="AutoLoanSaver.com" />
    	</a>
      
            
      <div id="main-content" class="make-content">
        <div id="main" class="first-step form-step">   
          <form action="#" onsubmit="return validateForm(this);">
            <h1>Almost there.</h1>
            <h3 class="text-center">We need a little bit more.</h3> 
            <div class="row">
              <div id="left-column" class="col-md-12 col-sm-12">                
                <div class="form-left">
                  <div class="row">
                    <div class="col-md-6 col-sm-12">
                      <div>
                        <label>Employment type:</label>
                        <select name="make">
                          <option value="" selected></option>
                          <option value="value">Value</option>
                          <option value="value">Value</option>
                        </select>
                      </div>
                      
                      <div>
                        <label>Employment Name:</label>
                        <input type="text" class="input" name="employment_name" />
                       </div>
                       
                      <div>
                        <label>Job Title:</label>
                        <input type="text" class="input" name="job_title" />
                      </div>
                      
                      <div>
                        <label>Work Phone</label>
                        <input type="text" class="input phone" name="work_phone" placeholder="1-555-555-5555" />
                      </div>
                      
                      <div>
                        <label>Gross income per month:</label>
                        <input type="text" class="input" name="gross" />
                      </div>
                    </div>
                    
                    
                    <div class="col-md-6 col-sm-12">
                      <div>
                        <label>Rent/mortgage amount:</label>
                        <select name="rent">
                          <option value="" selected></option>
                          <option value="value">Value</option>
                          <option value="value">Value</option>
                        </select>
                      </div>
                      
                      <div>
                        <label>Time at residence:</label>
                        <select name="time">
                          <option value="" selected></option>
                          <option value="value">Value</option>
                          <option value="value">Value</option>
                        </select>
                      </div>
                      
                      <div>
                        <label>Time at job:</label>
                        <select name="time2">
                          <option value="" selected></option>
                          <option value="value">Value</option>
                          <option value="value">Value</option>
                        </select>
                      </div>
                      
                      <div>
                        <label>Birthdate</label>
                        <input type="text" class="input inputDate" placeholder="yyyy-mm-dd" name="birthdate" />
                      </div>
                      <script type="text/javascript">                   
                      jQuery(document).ready(function() {  
                          var dateToday = new Date();
                          var yrRange = (dateToday.getFullYear() - 50) + ":" + (dateToday.getFullYear());                      
                          jQuery('.inputDate').datepicker({
                              dateFormat : 'dd-mm-yy',
                              changeMonth: true,
                              changeYear: true,
                              showButtonPanel: true,
                              yearRange : yrRange
                          });
                      });                          
                      </script>   
                      
                      <div>
                        <label>Social security number:</label>
                        <input type="text" class="input social-security" name="social_security_number" placeholder="555-55-5555" />                         
                      </div>
                    </div>
                  </div>
                </div>
                
              </div>
              
              <div id="right-column" class="col-md-12">
                <div>
                  <p><input type="checkbox" name="driver_license" />&nbsp;&nbsp;YES, I am at least 18 years old and I have a valid Driver License.</p>
                  <p><input type="checkbox" name="home" />&nbsp;&nbsp;YES, I rent and do not own a home.</p>
                  <p><input type="checkbox" name="cosigner" />&nbsp;&nbsp;YES, a cosigner is available if necessary.</p>
                  <p><input type="checkbox" name="bankruptcy" />&nbsp;&nbsp;NO, I have not declared bankruptcy in the past 7 years. I rent and do not own a home.</p>
                  <p><input type="checkbox" name="credit_report" />&nbsp;&nbsp;YES, I authorize you to check my credit report.</p>
                  <div class="clear"></div>   
                </div>
                
                
                <input type="submit" class="submit big" name="submit" value="Find My Lender"  />        
              </div>
            </div>            
            
          </form>
        </div>
        
        <script type="text/javascript">
        function validateForm(form){
          var theForm = $(form);
          var formID = theForm.attr("id");
          error=0;
          $('.required', theForm).each(function() {
            if(!$(this).hasClass('checkbox')){
              if($(this).val()==""){
                if ($(this).parent().find('.error').length == 0)
                  $(this).parent().append('<div class="error">This field is required</div>');
                error=1;
              }
              else{                                     
                if($(this).hasClass('number')){               
                  number=$(this).val();
                  if(parseInt(number) == number) $(this).parent().find('.error').remove(); 
                  else {
                    error=1;
                    if ($(this).parent().find('.error').length == 0)
                      $(this).parent().append('<div class="error">This field must be a number</div>');
                    else $(this).parent().find('.error').html('This field must be a number');
                  }
                }             
                else if($(this).hasClass('email')){               
                  if(isEmail($(this).val())===true) $(this).parent().find('.error').remove();
                  else {
                    error=1;
                    if ($(this).parent().find('.error').length == 0)
                      $(this).parent().append('<div class="error">Please enter a valid email address</div>');
                    else $(this).parent().find('.error').html('Please enter a valid email address');
                  }
                } 
                else $(this).parent().find('.error').remove();
              }
            }
            else{
              checked=0;         
              $(this).find("input:checked").each(function() {
                checked++;
              });               
              if(checked==0){
                error=1;
                if ($(this).find('.error').length == 0)
                  $(this).append('<div class="error"><br />Make sure at least one dealer is checked<br /><br /></div>');
              }
              else $(this).find('.error').remove();
            }
          });
          
          $('.phone', theForm).each(function() {
            if(getValidPhoneNumber($(this).val())==true){
              $(this).parent().find('.error').remove();
            } 
            else {
              error=1;
              if ($(this).parent().find('.error').length == 0)
                $(this).parent().append('<div class="error">Please enter a valid phone number</div>');
              else $(this).parent().find('.error').html('Please enter a valid phone number');
            }
          });
          
          
          $('.social-security', theForm).each(function() {
            if(validSSN($(this).val())==true){
              $(this).parent().find('.error').remove();
            } 
            else {
              error=1;
              if ($(this).parent().find('.error').length == 0)
                $(this).parent().append('<div class="error">Please enter a valid social security number</div>');
              else $(this).parent().find('.error').html('Please enter a valid social security number');
            }
          });
          
          if(error==0) return true;
          else return false;
        }
        
        function isEmail(email) {
          var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
          return regex.test(email);
        }
        
        function getValidPhoneNumber(value){
          value = $.trim(value).replace(/\D/g, '');      
          if (value.substring(0, 1) == '1') {
            value = value.substring(1);
          }         
          if (value.length == 10) {
            return true;
          }       
          return false;
        }
        
        function validSSN(value) {
          var regex = /^([0-6]\d{2}|7[0-6]\d|77[0-2])([ \-]?)(\d{2})\2(\d{4})$/;
          if (!regex.test(value)) {
              return false;
          }
          var temp = value;
          if (value.indexOf("-") != -1) {
              temp = (value.split("-")).join("");
          }
          if (value.indexOf(" ") != -1) {
              temp = (value.split(" ")).join("");
          }
          if (temp.substring(0, 3) == "000") {
              return false;
          }
          if (temp.substring(3, 5) == "00") {
              return false;
          }
          if (temp.substring(5, 9) == "0000") {
              return false;
          }
          return true;
        }
        </script>

      </div>        
    </div>
  </div>
  
  

  
<?php
get_footer();
?>
