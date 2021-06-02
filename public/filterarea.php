<?php require_once("../includes/helpers/initialize.php"); ?>

<!-- if(isset($_POST['area'])){

	$area=$_POST['area'];
$callDb=$conn->query("SELECT * FROM house_details WHERE address='$area'");
$callAll=$conn->query("SELECT * FROM house_details");
if($area==""|| $area=="Select Location"){
	while($row=mysqli_fetch_assoc($callAll)){
	?> -->
	<?php
	if (isset($_POST['area'])) {

$sort = $_POST['area'];
$page = !empty($_GET['page']) ? (int)$_GET['page']: 1;


//2. Records per page($per_page)
$per_page = 6;


//3. total record count ($total_count)
$total_count = Photograph::count_all();

//Find all photos
//use pagination instead
//$photos = Photograph::find_all();

$pagination = new Pagination($page, $per_page, $total_count);
//instead of finding all records, just find the record 
//for this page
$sql  = "SELECT * FROM house_details WHERE address='{$sort}' ORDER BY RAND() ";
$sql .= "LIMIT {$per_page} ";
$sql .= "OFFSET {$pagination->offset()}";
$houses = Photograph::find_by_sql($sql);

//Need to add ?page=$page to all links we want to
//maintain the current page (or store $page in session)
	}
	?>

<?php foreach ($houses as $house): ?>
							<!-- Listing -->
						<div class="listing_box house sale">
							<div class="listing">
								<div class="listing_image">
									<div class="listing_image_container">
										<img src="<?php  echo $house->outside; ?>" alt="">
									</div>
									<div class="tags d-flex flex-row align-items-start justify-content-start flex-wrap">
										<div class="tag tag_house"><a href="listings.php">house</a></div>
										<div class="tag tag_sale"><a href="listings.php">for Sale</a></div>
									</div>
									<div class="tag_price listing_price">&#8358; <?php  echo $house->price; ?></div>
								</div>
								<div class="listing_content">
									<div class="prop_location listing_location d-flex flex-row align-items-start justify-content-start">
										<img src="images/icon_1.png" alt="">
										<a href="single_land.php?id=<?php echo $house->id; ?>"><?php  echo $house->address; ?></a>
									</div>
									<div class="listing_info">
										<ul class="d-flex flex-row align-items-center justify-content-start flex-wrap">
											<li class="property_area d-flex flex-row align-items-center justify-content-start">
												<img src="images/icon_2.png" alt="">
												<span>60ft by 78ft</span>
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

					<?php endforeach; ?>

					<div id="pagination" style="clear: both; ">
					    