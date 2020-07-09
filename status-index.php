<?php require_once("../config/connection.php"); ?>
<?php require_once("../includes/functions.php"); ?>

<?php include("../includes/header.php"); ?> 
<!-- Page Content -->
<div id="page-content">
    <div class="container">
        <div class="row">
            <!--MAIN Content-->
            <div class="col-md-6" style="min-height: 207px;">
            	<p></p>
                <div id="page-main">
                    <section id="contact-form" class="clearfix">
                        <header>
                          <h2>Admission Status</h2></header>
                          <?php 
						  //include("../includes/sidebar.php"); 
						  $student_no = false;
							if(isset($_POST['student_no'])){
								$student_no = mysql_prep($_POST['student_no']);
							 }
							 
							//Strip tags and Speial characters
							$student_no = preg_replace("/[^a-zA-Z0-9]+/", "", $student_no);
							//Convert all characters to Uppercase
							$student_no = strtoupper($student_no);
													 
						 if ($student_no == "") {
							header("Location: ../");
							exit();
						 }
						  //Set Cookie: $sn1 = $_GET['student_no'];
						  if (isset($_COOKIE['test'])){
							  $student_no = $_COOKIE['student_no'];
						  }
						  //Test Cookie
						  //echo $student_no;
						  
						  $result = mysql_query("SELECT jambnumber,firstname, middlename, lastname, programid, levelid, sessionid, status, supervisor FROM tbljamblist_Admitted WHERE jambnumber='$student_no' ", $connection);
							if (!$result) {
								die("Database query failed: " . mysql_error());
							}
							$row = mysql_fetch_array($result);
							$a = $row["jambnumber"];
							$b = $row["firstname"];
							$c = $row["middlename"];
							$d = $row["lastname"];
							$e = $row["programid"];
							$f = $row["levelid"];
							$g = $row["sessionid"];
							$h = $row["status"];
							$i = $row["supervisor"];
							
							
						 if ($student_no != $a){
								echo "<h2 style='color:red;'>Your Application Status is either Pending or No Admission.";
								echo "<br /> Kindly wait for the next admission list.<br />Thank you</h2>";
							} else {
								echo "<p><h2 style='color:green;'>CONGRATULATIONS!</h2> <br />
										You have been offered admission into the <br />
										<strong>Federal University of Agriculture, Makurdi,</strong><br /> 
										Benue State, <br />
										Nigeria</strong></p>";
							}
							
						 if ($student_no !== $a){
							 echo "";
						 } else {
							// Display Applicants Name:
							echo "<h2>" . $b . "&nbsp;" . $c . "&nbsp;" . $d ."</h2>";
							//echo ("<h3>" . $a . "</h3>" );
							//echo ("<br />". $i);
							
							//Display Program of Study
							$programid = @mysql_query("SELECT program FROM tblpos WHERE id=$e", $connection);
							if (!$programid) {
								die("Database query failed: " . mysql_error());
							}
							$row2 = mysql_fetch_array($programid);
							$ee = $row2["program"];
							//echo ("<br />");
							//echo ($ee);
							//echo ("<br />");
							
							//Display Department
							//Get Department ID
							$programid = @mysql_query("SELECT deptid FROM tblpos WHERE id=$e", $connection);
							if (!$programid) {
								die("Database query failed: " . mysql_error());
							}
							$row2 = mysql_fetch_array($programid);
							$ed = $row2["deptid"];
							//Get Department Name
							$deptid = @mysql_query("SELECT departmentname FROM tbldepartments WHERE id=$ed", $connection);
							$row3 = mysql_fetch_array($deptid);
							$edept = $row3["departmentname"];
							//echo ($edept);
							//echo ("<br />");
							
							//Display College
							$programid = @mysql_query("SELECT collegenameid FROM tbldepartments WHERE id=$ed", $connection);
							if (!$programid) {
								die("Database query failed: " . mysql_error());
							}
							$row4 = mysql_fetch_array($programid);
							$ecol = $row4["collegenameid"];
							//Get College Name
							$colid = @mysql_query("SELECT collegename FROM tblcollegename WHERE id=$ecol", $connection);
							$row3 = mysql_fetch_array($colid);
							$ecol = $row3["collegename"];
							//echo ($ecol);
							//echo ("<br />");
							
							//Display Level
							//Get Level
							$levelid = @mysql_query("SELECT levelname FROM tbllevel WHERE id=$f", $connection);
							$row3 = mysql_fetch_array($levelid);
							$ff = $row3["levelname"];
							//echo ($ff);
							//echo ("<br />");
							
							//Display Session
							//Get Session
							$sessionid = @mysql_query("SELECT session FROM tblsession WHERE id=$g", $connection);
							if (!$sessionid) {
								die("Database query failed: " . mysql_error());
								echo "";
							}
							$row3 = mysql_fetch_array($sessionid);
							$gg = $row3["session"];
							//echo ($gg);
							//echo ("<br />");
							
							//Display Supervisor
							//echo ($i);
							//echo ("<br />");
							
							//Display Status
							$status = $h;
							if ($status==0) $progstatus="REMEDIAL SCIENCE";
							if ($status==1) $progstatus="UNDERGRADUATE";
							if ($status==2) $progstatus="POSTGRADUATE";
							if ($status==3) $progstatus="SANDWICH";
							//echo ("<br />");
							//echo ($progstatus);
							
							//Show Table
							include("../includes/table.php"); 
						 }
						 ?>

					</section>
                    
                </div><!-- /#page-main -->
               
            </div><!-- /.col-md-8 -->

            <!--SIDEBAR Content-->
            <div class="col-md-6">
            	<p></p>
                <div id="page-sidebar" class="sidebar">
					<?php include("../includes/sidebar.php"); ?> 
                </div>
            <!-- /#sidebar -->
            </div><!-- /.col-md-4 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</div>
<!-- end Page Content -->

<?php include("../includes/footer.php"); ?>

