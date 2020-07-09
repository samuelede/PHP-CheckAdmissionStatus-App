<?php require_once("config/connection.php"); ?>
<?php //require_once("includes/functions.php"); ?> 

<?php include("includes/header.php"); ?> 
<!-- Page Content -->
<div id="page-content">
    <div class="container">
        <div class="row">
            <!--MAIN Content-->
            <div class="col-md-6">
            	<p></p>
                <div id="page-main">
                    <section id="contact-form" class="clearfix">
                        <header>
                          <h2>Admission Status</h2></header>
           <form class="contact-form" name="login" id="login" method="post" action="status/">
                            <div class="row">
                                <div class="col-md-">
                                    <div class="input-group">
                                          <div class="controls">
                                           Matric Number
                                             /Application Number/JAMB Number
											 <input type="hidden" name="txtaction" id="txtaction" value="CASE Sentitive, Please use Capital Letters.">
                                             <input type="text" name="student_no" id="student_no" required>
                                        </div><!-- /.controls -->
                                    </div><!-- /.control-group -->
                                </div><!-- /.col-md-4 -->
                            
                            <div class="pull-left">
                                <input type="submit"  class="btn btn-color-primary" id="Submit"  value="Check Status" name="Submit" onClick="">
			
           </div>                 </div><!-- /.form-actions -->
                           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   <input type="hidden" name="txtaction" id="txtaction">
                            <div id="form-status"></div>
                        <!-- /.footer-form -->
                        </form>
						
                    </section>
                    
                </div><!-- /#page-main -->
               
            </div><!-- /.col-md-8 -->

            <!--SIDEBAR Content-->
            <div class="col-md-6">
            	<p></p>
                <div id="page-sidebar" class="sidebar">
                   <aside class="news-small" id="news-small">
                        <header>
                            <h2>Details</h2>
                        </header>
                        <div class="section-content">
                        <img src="img/admission3.png" class="" width="100%" width="auto">
                          <p>Key in your Application Number/JAMB Number/Form Number in the field provided. Click on <strong>Check Status</strong> to View your admission Status. 
                          <p>If your dmission status is successfull, <a href="http://fees.uam.edu.ng/" class="read-more">click here</a> to <strong>Pay your Acceptance Fee.</strong> Follow the steps to proceed to make payments online or in the bank. <strong>Print</strong> the Invoice or <strong>copy</strong> the <strong>RRR</strong> and visit the nearest bank of your choice. Write the RRR on the teller. Request to make payment for University of Agriculture Makurdi using <strong>Remita</strong>. 
                          <p>After making payment, <a href="http://entry.uam.edu.ng/adm" class="read-more">click here</a> to complete your admission acceptance process. Print your admission letter and acceptance letter, then go for screening.
                      </div><!-- /.section-content -->
                        
                    </aside><!-- /.news-small -->
  
                </div>
            <!-- /#sidebar -->
            </div><!-- /.col-md-4 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</div>
<!-- end Page Content -->

<?php include("includes/footer.php"); ?>

