
<!---header--->
	
<?php 
session_start();
include "header.php";
error_reporting(0);
include_once "../classess.php";
$productTBobj= new ProductTable();

if(isset($_GET['id'])){
	$id=$_GET['id'];
	$data=$productTBobj->getAddProduct($id);
	// echo "<pre>";
    // print_r($data);
}

?>
		
		<!---header--->
	
				<div class="content">
					<div class="linux-section">
						<div class="container">
							<div class="linux-grids">
								<div class="col-md-8 linux-grid">
								<h2><?php echo $data[0]['prod_parent_name']; ?></h2>
								<ul>
									<li><span>Unlimited </span> domains, email and disk space</li>
									<li><span>99.9% uptime </span> with dedicated 24/7 technical support</li>
									<li><span>1 click</span> WordPress Installation with cPanel (demo) platform</li>
									<li><span>Launch  </span> your business with Rs. 1000* Google AdWords Credit *</li>
									<li><span>30 day </span> Money Back Guarantee</li>
								</ul>
									<a href="#">view plans</a>
								</div>
								<div class="col-md-4 linux-grid1">
									<?php
									
									 if($data[0]['prod_parent_id']==2)
									{
									echo "<img src='images/linux.png' class='img-responsive' alt=''/>";
									} else if($data[0]['prod_parent_id']==3)
									{
									echo "<img src='images/word.png' class='img-responsive' alt=''/>";
									} else if($data[0]['prod_parent_id']==4)
									{
									echo "<img src='images/cms.png' class='img-responsive' alt=''/>";
									}else
									{
									echo "<img src='images/window.png' class='img-responsive' alt=''/>";
									}
									?>
								</div>
								<div class="clearfix"></div>
							</div>
						</div>
					</div>


					    <!-- Button trigger modal -->
=
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    
	 <div class="modal-body">
			<form action="cart.php" method="POST">
			<input type="text" id="product_id" name="product_id">
			<select name="plan" id="" class="btn-block">
			<option value="">Choose Plan</option>
			<option value="1">Annual Plan</option>
			<option value="0">Monthly Plan</option>
			</select>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
				<button type="submit" class="btn btn-primary" name="submit">Add</button>
			</div>
			</form>
		</div>
			
			
     
    </div>
  </div>
</div>

					<div class="tab-prices">
						<div class="container">
							<div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
								<ul id="myTab" class="nav nav-tabs left-tab" role="tablist">
									<li role="presentation" class="active"><a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">IN Hosting</a></li>
									<li role="presentation"><a href="#profile" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile">US Hosting</a></li>
									</ul>
								<div id="myTabContent" class="tab-content">
									<div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledby="home-tab">
										<div class="linux-prices"> 
										<?php for($i=0;$i<count($data);$i++) {
													?>
											<div class="col-md-3 linux-price">
												<div class="linux-top">
												<h4>Standard</h4>
												</div>											
												<div class="linux-bottom">
													<h5>$<?php echo $data[$i]['annual_price']?><span class="month">per year</span></h5>
													<h4>$<?php echo $data[$i]['mon_price'] ?><span class="month">per month</span></h4>
													<h6>Single Domain</h6>
													<ul>
													<li><strong><?php echo $data[$i]['webspace']?> </strong> Web Space</li>
													<li><strong><?php echo $data[$i]['bandwidth']?> </strong> Band Width</li>
													<li><strong><?php echo $data[$i]['mailbox']?> </strong> Mail Box</li>
													<li><strong><?php echo $data[$i]['freedomain']?> </strong>Free Domain</li>
													<li><strong><?php echo $data[$i]['languagetechnology']?> </strong> Language/Technology</li>
													<li><strong> High Performance</strong>  Servers</li>
													<li><strong>Servers</strong> : <img src="images/india.png"></li>
													</ul>
												</div>
												<a class="open-homeEvents" data-toggle="modal" data-target="#exampleModal" data-prodid="<?php echo $data[$i]['prod_id'] ?>">Add To Cart</a>
											</div>
										<?php } ?>
											<div class="clearfix"></div>
										</div>
									</div>
									<div role="tabpanel" class="tab-pane fade" id="profile" aria-labelledby="profile-tab">
									<div class="linux-prices">
											<div class="col-md-3 linux-price">
												<div class="linux-top us-top">
												<h4>Standard</h4>
												</div>
												<div class="linux-bottom us-bottom">
													<h5>$259 <span class="month">per month</span></h5>
													<h6>Single Domain</h6>
													<ul>
													<li><strong>Unlimited</strong> Disk Space</li>
													<li><strong>Unlimited</strong> Data Transfer</li>
													<li><strong>Unlimited</strong> Email Accounts</li>
													<li><strong>Includes </strong>  Global CDN</li>
													<li><strong>High Performance</strong>  Servers</li>
													<li><strong>location</strong> : <img src="images/us.png"></li>
													</ul>
												</div>
												<a href="#" class="us-button">buy now</a>
											</div>
											<div class="col-md-3 linux-price">
												<div class="linux-top us-top">
												<h4>Advanced</h4>
												</div>
												<div class="linux-bottom us-bottom">
													<h5>$359 <span class="month">per month</span></h5>
													<h6>2 Domains</h6>
													<ul>
													<li><strong>Unlimited</strong> Disk Space</li>
													<li><strong>Unlimited</strong> Data Transfer</li>
													<li><strong>Unlimited</strong> Email Accounts</li>
													<li><strong>Includes </strong>  Global CDN</li>
													<li><strong>High Performance</strong>  Servers</li>
													<li><strong>location</strong> : <img src="images/us.png"></li>
													</ul>
												</div>
												<a href="#" class="us-button">buy now</a>
											</div>
											<div class="col-md-3 linux-price">
												<div class="linux-top us-top">
												<h4>Business</h4>
												</div>
												<div class="linux-bottom us-bottom">
													<h5>$539 <span class="month">per month</span></h5>
													<h6>3 Domains</h6>
													<ul>
													<li><strong>Unlimited</strong> Disk Space</li>
													<li><strong>Unlimited</strong> Data Transfer</li>
													<li><strong>Unlimited</strong> Email Accounts</li>
													<li><strong>Includes </strong>  Global CDN</li>
													<li><strong>High Performance</strong>  Servers</li>
													<li><strong>location</strong> : <img src="images/us.png"></li>
													</ul>
												</div>
												<a href="#" class="us-button">buy now</a>
											</div>
											<div class="col-md-3 linux-price">
												<div class="linux-top us-top">
												<h4>Pro</h4>
												</div>
												<div class="linux-bottom us-bottom">
													<h5>$639 <span class="month">per month</span></h5>
													<h6>Unlimited Domains</h6>
													<ul>
													<li><strong>Unlimited</strong> Disk Space</li>
													<li><strong>Unlimited</strong> Data Transfer</li>
													<li><strong>Unlimited</strong> Email Accounts</li>
													<li><strong>Includes </strong>  Global CDN</li>
													<li><strong>High Performance</strong>  Servers</li>
													<li><strong>location</strong> : <img src="images/us.png"></li>
													</ul>
												</div>
												<a href="#" class="us-button">buy now</a>
											</div>
											<div class="clearfix"></div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- clients -->
				<div class="clients">
					<div class="container">
						<h3>Some of our satisfied clients include...</h3>
						<ul>
							<li><a href="#"><img src="images/c1.png" title="disney" /></a></li>
							<li><a href="#"><img src="images/c2.png" title="apple" /></a></li>
							<li><a href="#"><img src="images/c3.png" title="microsoft" /></a></li>
							<li><a href="#"><img src="images/c4.png" title="timewarener" /></a></li>
							<li><a href="#"><img src="images/c5.png" title="disney" /></a></li>
							<li><a href="#"><img src="images/c6.png" title="sony" /></a></li>
						</ul>
					</div>
				</div>
       <!-- clients -->
					<!-- Wordpress Features -->
					<div class="features">
						<div class="container">
							<h3>Wordpress Features</h3>
							<div class="features-grids">
								<div class="col-md-4 features-grid">
									<img src="images/f1.png">
										<h4>Expert Web Design</h4>
										<p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore </p>
									</div>
									<div class="col-md-4 features-grid">
										<img src="images/f2.png">
										<h4>Expert Web Design</h4>
										<p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore </p>
									</div>
									<div class="col-md-4 features-grid">
										<img src="images/f3.png">
										<h4>Expert Web Design</h4>
										<p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore </p>
									</div>
								<div class="clearfix"></div>
							</div>
							<div class="features-grids">
								<div class="col-md-4 features-grid">
									<img src="images/f4.png">
										<h4>Expert Web Design</h4>
										<p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore </p>
									</div>
									<div class="col-md-4 features-grid">
										<img src="images/f5.png">
										<h4>Expert Web Design</h4>
										<p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore </p>
									</div>
									<div class="col-md-4 features-grid">
										<img src="images/f6.png">
										<h4>Expert Web Design</h4>
										<p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore </p>
									</div>
								<div class="clearfix"></div>
							</div>
						</div>
					</div>
					<!-- Wordpress Features -->
				</div>
			<!---footer--->
	
		<?php include "footer.php";?>
		
		<!---footer--->
			<script>
			$(document).on("click", ".open-homeEvents", function () {
				var eventId = $(this).data('prodid');
				console.log(eventId)
				$('#product_id').val(eventId );
			});

			</script>
			
</body>
</html>