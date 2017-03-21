<?php
/*
Template Name: Homepage
*/
?>

<?php
  $title = 'Homepage';
  $pageClass = 'page-homepage';
  get_header();
?>

      <div class="row">
        <div class="col-sm-1 col-md-2"></div>
        <div class="col-sm-10 col-md-8">
	<?php
	require('wgt/wgt-finding-loan.php');
	wgtFindingLoan();
	?>
	</div>
        <div class="col-sm-1 col-md-2"></div>
      </div>  
    </div>
  </div>
  
  <div class="grey-block">
    <div class="container">
      <div class="row">
        <div class="col-sm-3"><img src="/components/assets/img/question-mark.png" alt="" /></div>
        <div class="col-sm-9">
          <h1>Empower Yourself. It's Easy and Free.</h1>
          <div class="row">
            <div class="col-sm-6">
              <h2 class="title">Spend a Few Minutes, Save Lots of Money and Time</h2>
              <p>You could visit dozens of lenders' websites and request quotes from each of them. Or, you could fill out a single simple form and receive quotes from our broad network of financial companies. Get competitive quotes and compare them to find the best one for you.</p>
            </div>
            <div class="col-sm-6">
              <h2 class="title">Options Regardless of Your Financial Situation</h2>
              <p>Do you have bad credit or no credit? We'll help you find a lender who is willing to work with you and help you save as much money as possible. When you have all of the options at your fingertips, life is easy!</p>
            </div>
          </div>
          <div class="row">            
            <div class="col-sm-6"> 
              <h2 class="title">Be Prepared Before Negotiating Your Auto Deal</h2>
              <p>Getting pre-approved is an advantage that is often overlooked by drivers. Have a good loan offer with you when you sit down with an auto sales representative. This way, you can focus on the sale price of the car and avoid losing site of expenses that disappear into the loan principal. Get your finances squared away beforehand!</p>
            </div>
            <div class="col-sm-6">
              <h2 class="title">No Payments or Obligations</h2>
              <p>You do not have to enter an agreement with any lenders who prepare quotes for you. You don't have to pay to receive quotes, either. This is a free service.</p>
            </div>
          </div>
        </div>           
      </div>
    </div>
  </div>
  
  
  <div class="testimonials">
    <div class="container">
      <div class="title">AutoLoanSaver In others’ words</div>
      <div class="row">
        <div class="col-lg-1"></div>
        <div class="col-lg-4 col-sm-6">
          <div class="card">
            <img src="/components/assets/img/content/Reid_Stancil.jpg" alt="Reid Stancil" title="Reid Stancil" />
            <div class="body">
              <div class="text">It's so much easier to finance a car and start driving when you locate the best rate online, at Auto Loan Saver. The salesperson at the dealership was impressed that I had gotten pre-approved. I just asked for a price, signed a few papers, and drove away.</div>
              <div class="name">Reid Stancil</div>
              <div class="city">Boulder, CO</div>
            </div>
            <div class="clear"></div>
          </div>
          
          <div class="card">
            <img src="/components/assets/img/content/Melissa_Cardoza.jpg" alt="Melissa Cardoza" title="Melissa Cardoza" />
            <div class="body">
              <div class="text">Last time I looked for a loan, I did all the legwork. It took hours and hours. This time, I spent a few minutes at Auto Loan Saver. I'm so glad I saved all of that time.</div>
              <div class="name">Melissa Cardoza</div>
              <div class="city">New York, NY</div>
            </div>
            <div class="clear"></div>
          </div>
          
          <?php /*<div class="card">
            <img src="/components/assets/img/content/Nick_Hamilton.jpg" alt="Nick Hamilton" title="Nick Hamilton" />
            <div class="body">
              <div class="text">I mean, it's just simple and fast...and it saves money. Those are the advantages and there are no disadvantages. I definitely recommend it.</div>
              <div class="name">Nick Hamilton</div>
              <div class="city">Philadelphia, PA</div>
            </div>
            <div class="clear"></div>
          </div>        */ ?>
          
        </div>
        <div class="col-lg-2"></div>
        <div class="col-lg-4 col-sm-6">
          
          
          <div class="card">
            <img src="/components/assets/img/content/Jenny_Lewis.jpg" alt="Jenny Lewis" title="Jenny Lewis" />
            <div class="body">
              <div class="text">I didn't know much about auto loans. I thought having no credit was going to be a problem but my representative at the dealer said I'd found a good lender and a good rate. That made me happy.</div>
              <div class="name">Jenny Lewis</div>
              <div class="city">Hollywood, FL</div>
            </div>
            <div class="clear"></div>
          </div>
          
          <div class="card">
            <img src="/components/assets/img/content/Ben_Roberts.jpg" alt="Ben Roberts" title="" />
            <div class="body">
              <div class="text">I'm a millennial at heart. I believe in convenience and technology. That's why I tried Auto Loan Saver. I'm glad I did, because the dealer I purchased from was not able to offer me a rate this good.</div>
              <div class="name">Ben Roberts</div>
              <div class="city">Charlotte, NC</div>
            </div>
            <div class="clear"></div>
          </div>
        </div>
        
        <div class="col-lg-1"></div>
        </div>
      </div>
    </div>
  </div>
  
<?php
get_footer();
?>