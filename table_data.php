<?php
session_start();
if($_SESSION["admin"]=="")
{
	?>
	<script type="text/javascript">
		window.location = "admin_login.php";
	</script>
<?php
}
include "connection.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Table Data</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <?php #include "header_part.php";?>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <?php include "menu.php";?>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <?php include "header_desktop.php";?>
            <!-- END HEADER DESKTOP-->
 
            <!-- MAIN CONTENT-->
			<form name="form1" action="" method="post" enctype="multipart/form-data">
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                           <div class="au-card m-b-30">
						   <!--Camera produtes Start-->
                            <div class="au-card-inner">
							
							
										<div class="row">
											<div class="col-md-12">
												<div class="overview-wrap">
													<h3 class="title-2 m-b-40"><div class="fa fa-camera"></div>&nbsp;&nbsp;Camera Products</h3> 
													<a href="Add_camera.php">		
													<button class="au-btn au-btn-icon au-btn--green au-btn--small">
													<i class="zmdi zmdi-plus"></i>add item</button></a>
												</div>
											</div>
										</div>

								<div class="row m-t-30">
									<div class="col-md-12">
										<div class="table-responsive m-b-40">
											<table class="table table-borderless table-data3">
												<thead>
													<tr>
														<th></th>
														
														<th>ID</th>
														<th>IMAGE</th>
														<th>B_NAME</th>
														<th>P_QTY</th>
														<th>COLOR</th>
														<th>E_PIXELS</th>
														<th>IMG_TYPE</th>
														<th>D_ZOOM</th>
														<th>V_RESOLUTION</th>
														<th>F_MEMORY</th>
														<th>BATTERY</th>
														<th>WEIGHT</th>
														<th>WARRANTY</th>
														<th>PRICE</th>
													</tr>
												</thead>
													<div class="table-data-feature">
                                                       
                                                        
                                                        
                                                    </div>          
												<?php
													$res = mysqli_query($link,"SELECT * FROM `add_camera` order by c_id asc");
													while($row=mysqli_fetch_array($res))
													{
														echo "<tbody>";
															echo "<tr>";
																echo "<td>";?> 
																				<div class="table-data-feature">
																					<a href="delete_c.php?c_id=<?php echo $row["c_id"];?>">
																					<button class="item" data-toggle="tooltip" data-placement="top"  title="Delete">
																						<i class="zmdi zmdi-delete"></i>
																					</button> </a>
																					<!--<a href="#">
																					<button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
																						<i class="zmdi zmdi-edit"></i>
																					</button></a>-->																				
																				</div>
																			<?php 
																echo "</td>";
																
																echo "<td>";echo $row["c_id"];echo "</td>";
																echo "<td>";?> <img src="<?php echo $row["img1"]; ?>" height="200" width="200"> <?php echo "</td>";
																echo "<td>";echo $row["brand_name"];echo "</td>";
																echo "<td>";echo $row["product_qty"];echo "</td>";
																echo "<td>";echo $row["color"];echo "</td>";
																echo "<td>";echo $row["effective_pixels"];echo "</td>";
																echo "<td>";echo $row["img_type"];echo "</td>";
																echo "<td>";echo $row["digital_zoom"];echo "</td>";
																echo "<td>";echo $row["video_resolution"];echo "</td>";
																echo "<td>";echo $row["flash_memory"];echo "</td>";
																echo "<td>";echo $row["battery"];echo "</td>";
																echo "<td>";echo $row["weight"];echo "</td>";
																echo "<td>";echo $row["warranty"];echo "</td>";
																echo "<td>";echo $row["price"];echo "</td>";
											
															echo "</tr>";
														echo "</tbody>";
									
													}
													echo "</table>";
												?>
                                
                                        
                                
										</div>
									</div>
								</div>
                        </div>
						<!--Camera produtes End-->
						<!--Head Phone Start-->
						<hr class="line-seprate">
						<div><div>&nbsp;&nbsp;&nbsp;</div></div>
						<div class="au-card-inner">
						
							<div class="row">
											<div class="col-md-12">
												<div class="overview-wrap">
													<h3 class="title-2 m-b-40"><div class="fa fa-headphones"></div>&nbsp;&nbsp;HeadPhone Products</h3> 
													<a href="Add_headphone.php">
													<button class="au-btn au-btn-icon au-btn--green au-btn--small">
													<i class="zmdi zmdi-plus"></i>add item</button></a>
												</div>
											</div>
										</div>
			
							<div class="row m-t-30">
								<div class="col-md-12">
									<div class="table-responsive m-b-40">
										<table class="table table-borderless table-data3">
											<thead>
												<tr>
													<th></th>
													<th>ID</th>
													<th>IMAGE</th>
													<th>B_NAME</th>
													<th>P_QTY</th>
													<th>COLOR</th>
													<th>H_TYPE</th>
													<th>CONNECTIVITY</th>
													<th>WEIGHT</th>
													<th>WARRANTY</th>
													<th>PRICE</th>
												</tr>
											</thead>
											<?php
												$res = mysqli_query($link,"SELECT * FROM `add_headphone` order by h_id asc");
												while($row=mysqli_fetch_array($res))
												{
													echo "<tbody>";
														echo "<tr>";
															echo "<td>";?> 
																				<div class="table-data-feature">
																					<a href="delete_h.php?h_id=<?php echo $row["h_id"];?>">
																					<button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
																						<i class="zmdi zmdi-delete"></i>
																					</button>  </a>
																					<!--<a href="#">
																					<button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
																						<i class="zmdi zmdi-edit"></i>
																					</button></a>-->
																				</div>
																			<?php 
															echo "</td>";
															echo "<td>";echo $row["h_id"];echo "</td>";
															echo "<td>";?> <img src="<?php echo $row["img1"]; ?>" height="50" width="50"> <?php echo "</td>";
															echo "<td>";echo $row["brand_name"];echo "</td>";
															echo "<td>";echo $row["product_qty"];echo "</td>";
															echo "<td>";echo $row["color"];echo "</td>";
															echo "<td>";echo $row["headphone_type"];echo "</td>";
															echo "<td>";echo $row["connectivity"];echo "</td>";
															echo "<td>";echo $row["weight"];echo "</td>";
															echo "<td>";echo $row["warranty"];echo "</td>";
															echo "<td>";echo $row["price"];echo "</td>";										
														echo "</tr>";
													echo "</tbody>";
									
												}
												echo "</table>";
											?>
									</div>
								</div>
							</div>
                        </div>
						<!--Head Phone End-->
						<!--Laptop Start-->	
						<hr class="line-seprate">
						<div><div>&nbsp;&nbsp;&nbsp;</div></div>
						<div class="au-card-inner">
						
										<div class="row">
											<div class="col-md-12">
												<div class="overview-wrap">
													<h3 class="title-2 m-b-40"><div class="fa fa-laptop"></div>&nbsp;&nbsp;Laptop Products</h3> 
													<a href="Add_laptop.php">		
													<button class="au-btn au-btn-icon au-btn--green au-btn--small">
													<i class="zmdi zmdi-plus"></i>add item</button></a>
												</div>
											</div>
										</div>
							<div class="row m-t-30">
								<div class="col-md-12">
									<div class="table-responsive m-b-40">
										<table class="table table-borderless table-data3">
											<thead>
												<tr>
													<th></th>
													<th>ID</th>
													<th>IMAGE</th>
													<th>B_NAME</th>
													<th>P_QTY</th>
													<th>COLOR</th>
													<th>RAM</th>
													<th>HARDDISK</th>
													<th>DIS_SIZE</th>
													<th>OS</th>
													<th>PROCESSOR</th>
													<th>P_GENERATION</th>
													<th>G_CARD</th>
													<th>C_FRONT</th>
													<th>BATTERY</th>
													<th>WEIGHT</th>
													<th>WARRANTY</th>
													<th>PRICE</th>
												</tr>
											</thead>
											<?php
												$res = mysqli_query($link,"SELECT * FROM `add_laptop` order by l_id asc");
												while($row=mysqli_fetch_array($res))
												{
													echo "<tbody>";
														echo "<tr>";
															echo "<td>";?> 
																				<div class="table-data-feature">
																					<a href="delete_l.php?l_id=<?php echo $row["l_id"];?>">
																						<button class="item" data-toggle="tooltip" data-placement="top" title="Delete" >
																						<i class="zmdi zmdi-delete"></i>
																					</button> </a>
																					<!--<a href="#">
																					<button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
																						<i class="zmdi zmdi-edit"></i>
																					</button></a>-->
																				</div>
																			<?php 
															echo "</td>";
															echo "<td>";echo $row["l_id"];echo "</td>";
															echo "<td>";?> <img src="<?php echo $row["img1"]; ?>" height="100" width="100"> <?php echo "</td>";
															echo "<td>";echo $row["brand_name"];echo "</td>";
															echo "<td>";echo $row["product_qty"];echo "</td>";
															echo "<td>";echo $row["color"];echo "</td>";
															echo "<td>";echo $row["ram"];echo "</td>";
															echo "<td>";echo $row["hard_disk"];echo "</td>";
															echo "<td>";echo $row["dis_size"];echo "</td>";
															echo "<td>";echo $row["os"];echo "</td>";
															echo "<td>";echo $row["processor"];echo "</td>";
															echo "<td>";echo $row["processor_g"];echo "</td>";
															echo "<td>";echo $row["graphics_card"];echo "</td>";
															echo "<td>";echo $row["camera_f"];echo "</td>";
															echo "<td>";echo $row["battery"];echo "</td>";
															echo "<td>";echo $row["weight"];echo "</td>";
															echo "<td>";echo $row["warranty"];echo "</td>";
															echo "<td>";echo $row["price"];echo "</td>";										
														echo "</tr>";
													echo "</tbody>";
									
												}
												echo "</table>";
											?>
									</div>
								</div>
							</div>
                        </div>
						<!--Laptop End-->
                        <!--Mobile Start-->	
						<hr class="line-seprate">
						<div><div>&nbsp;&nbsp;&nbsp;</div></div>
						<div class="au-card-inner">
						
										<div class="row">
											<div class="col-md-12">
												<div class="overview-wrap">
													<h3 class="title-2 m-b-40"><div class="fa fa-mobile"></div>&nbsp;&nbsp;Mobile Products</h3> 
													<a href="Add_mobile.php">		
													<button class="au-btn au-btn-icon au-btn--green au-btn--small">
													<i class="zmdi zmdi-plus"></i>add item</button></a>
												</div>
											</div>
										</div>
							<div class="row m-t-30">
								<div class="col-md-12">
									<div class="table-responsive m-b-40">
										<table class="table table-borderless table-data3">
											<thead>
												<tr>
													<th></th>
													<th>ID</th>
													<th>IMAGE</th>
													<th>B_NAME</th>
													<th>P_QTY</th>
													<th>COLOR</th>
													<th>RAM</th>
													<th>ROM</th>
													<th>DIS_SIZE</th>
													<th>A_OS</th>
													<th>C_REAR</th>
													<th>C_FRONT</th>
													<th>BATTERY</th>
													<th>WEIGHT</th>
													<th>WARRANTY</th>
													<th>PRICE</th>
												</tr>
											</thead>
											<?php
												$res = mysqli_query($link,"SELECT * FROM `add_mobile` order by m_id asc");
												while($row=mysqli_fetch_array($res))
												{
													echo "<tbody>";
														echo "<tr>";
															echo "<td>";?> 
																				<div class="table-data-feature">
																					<a href="delete_m.php?m_id=<?php echo $row["m_id"];?>">
																					<button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
																						<i class="zmdi zmdi-delete"></i>
																					</button></a>
																					
																				</div>
																			<?php 
															echo "</td>";
															echo "<td>";echo $row["m_id"];echo "</td>";
															echo "<td>";?> <img src="<?php echo $row["img1"]; ?>" height="50" width="50"> <?php echo "</td>";
															echo "<td>";echo $row["brand_name"];echo "</td>";
															echo "<td>";echo $row["product_qty"];echo "</td>";
															echo "<td>";echo $row["color"];echo "</td>";
															echo "<td>";echo $row["ram"];echo "</td>";
															echo "<td>";echo $row["rom"];echo "</td>";
															echo "<td>";echo $row["dis_size"];echo "</td>";
															echo "<td>";echo $row["android_os"];echo "</td>";
															echo "<td>";echo $row["camera_real"];echo "</td>";
															echo "<td>";echo $row["camera_front"];echo "</td>";
															echo "<td>";echo $row["battery"];echo "</td>";
															echo "<td>";echo $row["weight"];echo "</td>";
															echo "<td>";echo $row["warranty"];echo "</td>";
															echo "<td>";echo $row["price"];echo "</td>";										
														echo "</tr>";
													echo "</tbody>";
									
												}
												echo "</table>";
											?>
									</div>
								</div>
							</div>
                        </div>
						<!--Mobile End-->
                        <!--Pen Drive Start-->
						<hr class="line-seprate">
						<div><div>&nbsp;&nbsp;&nbsp;</div></div>
						<div class="au-card-inner">
						
										<div class="row">
											<div class="col-md-12">
												<div class="overview-wrap">
													<h3 class="title-2 m-b-40"><div class="fa fa-code-fork"></div>&nbsp;&nbsp;PenDrive Products</h3> 
													<a href="Add_pendrive.php">		
													<button class="au-btn au-btn-icon au-btn--green au-btn--small">
													<i class="zmdi zmdi-plus"></i>add item</button></a>
												</div>
											</div>
										</div>
							<div class="row m-t-30">
								<div class="col-md-12">
									<div class="table-responsive m-b-40">
										<table class="table table-borderless table-data3">
											<thead>
												<tr>
													<th></th>
													<th>ID</th>
													<th>IMAGE</th>
													<th>B_NAME</th>
													<th>P_QTY</th>
													<th>COLOR</th>
													<th>CAPACITY</th>
													<th>USB_V</th>
													<th>TYPE</th>
													<th>SPEED</th>
													<th>WEIGHT</th>												
													<th>WARRANTY</th>
													<th>PRICE</th>
													
													<td>
                                                    
                                                </td>
												</tr>
											</thead>
											<?php
												$res = mysqli_query($link,"SELECT * FROM `add_pendrive` order by p_id asc");
												while($row=mysqli_fetch_array($res))
												{
													echo "<tbody>";
														echo "<tr>";
															echo "<td>";?> 
																				<div class="table-data-feature">
																					<a href="delete_p.php?p_id=<?php echo $row["p_id"];?>">
																					<button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
																						<i class="zmdi zmdi-delete"></i>
																					</button></a>
																					<!--<a href="#">
																					<button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
																						<i class="zmdi zmdi-edit"></i>
																					</button></a>-->
																				</div>
																			<?php 
															echo "</td>";
															echo "<td>";echo $row["p_id"];echo "</td>";
															echo "<td>";?> <img src="<?php echo $row["img1"]; ?>" height="80" width="80"> <?php echo "</td>";
															echo "<td>";echo $row["brand_name"];echo "</td>";
															echo "<td>";echo $row["product_qty"];echo "</td>";
															echo "<td>";echo $row["color"];echo "</td>";
															echo "<td>";echo $row["capacity"];echo "</td>";
															echo "<td>";echo $row["usb_version"];echo "</td>";
															echo "<td>";echo $row["type"];echo "</td>";
															echo "<td>";echo $row["speed"];echo "</td>";
															echo "<td>";echo $row["weight"];echo "</td>";
															echo "<td>";echo $row["warranty"];echo "</td>";
															echo "<td>";echo $row["price"];echo "</td>";										
														echo "</tr>";
													echo "</tbody>";
									
												}
												echo "</table>";
											?>
									</div>
								</div>
							</div>
                        </div>
						<!--PenDrive End-->
						<hr class="line-seprate">
						<div><div>&nbsp;&nbsp;&nbsp;</div></div>
						<div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>Copyright © 2018 .</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
        </div>
		</form>
		
        <!-- END PAGE CONTAINER-->

    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="js/main.js"></script>

</body>

</html>
<!-- end document-->
