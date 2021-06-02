<?php require("header.php"); ?>
<?php
$server="localhost";
 $password="";
 $username="root";
 $db="alabama";
 $conn=new mysqli($server,$username,$password,$db);
 $location= $_GET['location'];
 $getLocation=$conn->query("SELECT * FROM house_details WHERE address='$location'");
 while($row=mysqli_fetch_assoc($getLocation)){
 	?>
 
 		<div class="listing_box house sale col-lg-4" style="padding-top:150px">
							<div class="listing">
								<div class="listing_image">
									<div class="listing_image_container">
										<img src="<?php  echo $row['outside']; ?>" alt="">
									</div>
									<div class="tags d-flex flex-row align-items-start justify-content-start flex-wrap">
										<div class="tag tag_house"><a href="listings.php">house</a></div>
										<div class="tag tag_sale"><a href="listings.php">for rent</a></div>
									</div>
									<div class="tag_price listing_price"># <?php  echo $row['price']; ?></div>
								</div>
								<div class="listing_content">
									<div class="prop_location listing_location d-flex flex-row align-items-start justify-content-start">
										<img src="images/icon_1.png" alt="">
										<a href="single.php?id=<?php echo $row['id']; ?>"><?php  echo $row['address']; ?></a>
									</div>
									<div class="listing_info">
										<ul class="d-flex flex-row align-items-center justify-content-start flex-wrap">
											<li class="property_area d-flex flex-row align-items-center justify-content-start">
												<img src="images/icon_2.png" alt="">
												<span><!-- <?php echo $row['size']; ?> --></span>
											</li>
											<li class="d-flex flex-row align-items-center justify-content-start">
												<img src="images/icon_3.png" alt="">
												<span>2</span>
											</li>
											<li class="d-flex flex-row align-items-center justify-content-start">
												<img src="images/icon_4.png" alt="">
												<span>5</span>
											</li>
											<li class="d-flex flex-row align-items-center justify-content-start">
												<img src="images/icon_5.png" alt="">
												<span>2</span>
											</li>
										</ul>
									</div>
								</div>
							</div>
						
						</div>
 
 	<?php
 }

?>
<?php require("footer.php"); ?>