<!-- Footer -->
<footer id="page-footer">
    <section id="footer-content">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-12">
                    <aside class="logo">
                        <img src="assets/img/logo-white.png" class="vertical-center">
                    </aside>
                </div><!-- /.col-md-3 -->
                <div class="col-md-3 col-sm-4">
                    <aside>
                        <address>
                            <strong>University of Agriculture, Makurdi</strong>
                            <br>
                            <span>P.M.B. 2373</span>
                            <br><br>
                            <span>Benue State, Nigeria</span>
                            <br>
                            <abbr title="Telephone">Telephone:</abbr> 08111753334, 08186570255
                            <br>
                            <abbr title="Email">Email:</abbr> <a href="#">uss@uam.edu.ng</a>
                        </address>
                    </aside>
                </div><!-- /.col-md-3 -->
              
                
            </div><!-- /.row -->
        </div><!-- /.container -->
        <div class="background"><img src="assets/img/background-city.png" class="" alt=""></div>
    </section><!-- /#footer-content -->

    <section id="footer-bottom">
        <div class="container">
            <div class="footer-inner">
                <div class="copyright">© 2015 University of Agriculture, Makurdi. All rights reserved </div><!-- /.copyright -->
              <div align="right"><a href="http://uam.edu.ng/Privacy">Privacy Statement</a> | <a href="http://uam.edu.ng/Terms">Term of Use</a>            </div>
                <!-- /.footer-inner -->
        </div><!-- /.container -->
    </section><!-- /#footer-bottom -->

</footer>
<!-- end Footer -->

</div>
<!-- end Wrapper -->

</script>
<script type="text/javascript" src="assets/js/jquery-2.1.0.min.js"></script>
<script type="text/javascript" src="assets/js/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="assets/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/js/selectize.min.js"></script>
<script type="text/javascript" src="assets/js/owl.carousel.min.js"></script>
<script type="text/javascript" src="assets/js/jquery.validate.min.js"></script>
<script type="text/javascript" src="assets/js/jquery.placeholder.js"></script>
<script type="text/javascript" src="assets/js/jQuery.equalHeights.js"></script>
<script type="text/javascript" src="assets/js/icheck.min.js"></script>
<script type="text/javascript" src="assets/js/jquery.vanillabox-0.1.5.min.js"></script>
<script type="text/javascript" src="assets/js/retina-1.1.0.min.js"></script>
<script type="text/javascript" src="assets/js/custom.js"></script>

</body>

</html>
<?php
	// 5. Close connection
	@mysql_close($connection);
?>
<script language ="javascript">
function view_client() {
	var user  =document.login.txtusername.value
	if (user=="") {
		alert('Please enter your Unique number (Matric/JAMB/ Application No')
		document.login.txtusername.focus()
	}
	else
		document.login.txtaction.value='login'
	   document.login.submit()
}
