
	<!---header--->
        <?php 
        session_start();
        include "header.php"; ?>
    <!---header--->

    <?php
    include_once "../classess.php";
    $productTBobj= new ProductTable();
    if(isset($_POST['submit'])){
        $plan=$_POST['plan'];
        $product_id=$_POST['product_id'];
       $data=$productTBobj->getCartData($product_id);
    //   

       $arr=array(
           'product_id'=>$product_id,
           'plan'=>$plan,
           'mon_price'=>$data[0]['mon_price'],
           'annual_price'=>$data[0]['annual_price'],
           'prod_name'=>$data[0]['prod_name']

       );
     
       $_SESSION['cart'][]=$arr;
    //    echo "<pre>";
    //    print_r($_SESSION);
    //    unset($_SESSION);
    //    session_destroy();
    //   

    
    }
    ?>
	<div class="container" style="margin-bottom:80px;">
	<table class="table align-items-center table-flush" id="showProduct">
                <thead class="thead-light">
                    <tr>
                        <th>Product Name</th>
                        <th>Plan</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php for($i=0;$i<count($_SESSION['cart']);$i++){?>
					<tr>
				
                        <td><?php echo  $_SESSION['cart'][$i]['prod_name'] ;?></td>
                        <td><?php
                      if($plan=="1")
                      echo "Annual";
                      else
                      echo "Monthly";
                        ?></td>
                        <td> <?php
                      if($plan=="1")
                      echo  $_SESSION['cart'][$i]['annual_price'];
                      else
                      echo  $_SESSION['cart'][$i]['mon_price'];
                        ?></td>
                       
                        <td>1</td>
                        <td><a href="#"><button class="btn btn-danger">Remove</button></a></td>
					</tr>
					<tr>
					
                    <?php } ?>

                </tbody>
              </table>
              <a href="checkout.php"><button class="btn btn-success" style="margin-top:20px; font-size:18px;">Check out</button></a>
	</div>


    			<!---footer--->
				<?php include "footer.php";?>
			<!---footer--->

			<script>

$(document).ready( function () {

$('#showProduct').DataTable();
} );

</script>
			
			
</body>
</html>