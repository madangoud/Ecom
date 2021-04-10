<!DOCTYPE html>
<html lang="en">
<!-- BEGIN HEAD -->


<?php
include_once('include/header.php');
include_once('dbconn.php');
?>
<!-- END HEAD -->
<body class="page-header-fixed sidemenu-closed-hidelogo page-content-cyan page-md header-white dark-sidebar-color logo-dark" scroll="yes">
    <div class="page-wrapper">
        <!-- start header -->
		<div class="page-header navbar navbar-fixed-top">
            <div class="page-header-inner ">
                <!-- logo start -->
		<?php
		include_once('include/head.php');
		?>
        <!-- end header -->
        <!-- start page container -->
        <div class="page-container">
 			<!-- start sidebar menu -->
 			<div class="sidebar-container">
			<?php
			include_once('include/sidebar.php');
			?>
			 <!-- end sidebar menu -->
			<!-- start page content -->
			
            <div class="page-content-wrapper">
                <div class="page-content">
                    
					<div class="row">
					<?php
								$query = "SELECT * FROM product"; //You don't need a ; like you do in SQL
								$result = mysqli_query($connect,$query);
								while($row = mysqli_fetch_array($result)){
								$pic=$row['pic'];
								$sid=$row['id'];
								?>										
					
								<div class="col-lg-4 col-md-6 col-12 col-sm-6"> 
								<div class="blogThumb">
								<?php 
								echo'
								 <p><strong>Product :</strong>&nbsp&nbsp'   .$row["product"] . '</p>'?>
								<div class="thumb-center"><img class="img-responsive" alt="user" src="<?php echo $pic; ?>"></div>
	                        	<?php
								echo'
								<div class="vehicle-name light-dark-bgcolor">
									<div class="user-name">' . $row["Name"] . '</div>
									
								</div>
	                        	<div class="vehicle-box">
		                            <p><strong>Model :</strong>&nbsp&nbsp'   .$row["model"] . '</p>
		                            
		                            <p><strong>Color:</strong>&nbsp&nbsp' . $row["color"] .' </p>
									<p><strong>Cost:</strong>&nbsp&nbsp'  . $row["cost"] .' </p> ';
									echo'
									<a href="addcart.php?id='.$sid.'"><button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" name="btn">Add to cart</button></a>
	                        	</div>
								</div>	
								</div>';
								}
					?>
			        </div>


                </div>
            </div>
            <!-- end page content -->
            <!-- start chat sidebar -->

            <!-- end chat sidebar -->
        </div>
        <!-- end page container -->
          </div>
    <!-- start js include path -->
    <script src="assets/plugins/jquery/jquery.min.js" ></script>
    <script src="assets/plugins/popper/popper.min.js" ></script>
    <script src="assets/plugins/jquery-blockui/jquery.blockui.min.js" ></script>
	<script src="assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js"></script>
    <!-- bootstrap -->
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js" ></script>
    <!-- Common js-->
	<script src="assets/js/app.js" ></script>
    <script src="assets/js/layout.js" ></script>
	<script src="assets/js/theme-color.js" ></script>
	<!-- data tables -->
    <script src="assets/plugins/datatables/jquery.dataTables.min.js" ></script>
 	<script src="assets/plugins/datatables/plugins/bootstrap/dataTables.bootstrap4.min.js" ></script>
 	<script src="assets/js/pages/table/table_data.js" ></script>
	<!-- Material -->
	<script src="assets/plugins/material/material.min.js"></script>
	<!-- animation -->
	<script src="assets/js/pages/ui/animations.js" ></script>
    <!-- end js include path -->
  <!-- start footer -->
		<?php
		include_once('include/foot.php');

		?>
        <!-- end footer -->

</body>


</html>
