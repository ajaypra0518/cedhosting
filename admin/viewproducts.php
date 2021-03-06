
<?php
require_once "header.php";
include_once "../classess.php";
$obj=new ProductTable();
$data=$obj->getProductData();
// print_r($data);

?>
  <!-- Main content -->
  <div class="main-content" id="panel">
    <!-- Topnav -->
    <nav class="navbar navbar-top navbar-expand 
    navbar-dark bg-primary border-bottom">
      <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <!-- Search form -->
          <form class="navbar-search navbar-search-light 
          form-inline mr-sm-3" id="navbar-search-main">
            <div class="form-group mb-0">
              <div class="input-group input-group-alternative input-group-merge">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fas fa-search"></i></span>
                </div>
                <input class="form-control" placeholder="Search" type="text">
              </div>
            </div>
            <button type="button" class="close" data-action="search-close" 
            data-target="#navbar-search-main" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </form>
          <!-- Navbar links -->
          <ul class="navbar-nav align-items-center  ml-md-auto ">
            <li class="nav-item d-xl-none">
              <!-- Sidenav toggler -->
              <div class="pr-3 sidenav-toggler sidenav-toggler-dark" 
              data-action="sidenav-pin" data-target="#sidenav-main">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                </div>
              </div>
            </li>
            <li class="nav-item d-sm-none">
              <a class="nav-link" href="#" data-action="search-show" 
              data-target="#navbar-search-main">
                <i class="ni ni-zoom-split-in"></i>
              </a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link" href="#" role="button" 
              data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="ni ni-bell-55"></i>
              </a>
              <div class="dropdown-menu dropdown-menu-xl  
              dropdown-menu-right  py-0 overflow-hidden">
                <!-- Dropdown header -->
                <div class="px-3 py-3">
                  <h6 class="text-sm text-muted m-0">
                  You have <strong class="text-primary">
                  13</strong> notifications.</h6>
                </div>
                <!-- List group -->
                <div class="list-group list-group-flush">
                  <a href="#!" class="list-group-item list-group-item-action">
                    <div class="row align-items-center">
                      <div class="col-auto">
                        <!-- Avatar -->
                        <img alt="Image placeholder" 
                        src="assets/img/theme/team-1.jpg" 
                        class="avatar rounded-circle">
                      </div>
                      <div class="col ml--2">
                        <div class="d-flex justify-content-between 
                        align-items-center">
                          <div>
                            <h4 class="mb-0 text-sm">John Snow</h4>
                          </div>
                          <div class="text-right text-muted">
                            <small>2 hrs ago</small>
                          </div>
                        </div>
                        <p class="text-sm mb-0">Let's 
                        meet at Starbucks at 11:30. Wdyt?</p>
                      </div>
                    </div>
                  </a>
                  <a href="#!" class="list-group-item list-group-item-action">
                    <div class="row align-items-center">
                      <div class="col-auto">
                        <!-- Avatar -->
                        <img alt="Image placeholder" 
                        src="assets/img/theme/team-2.jpg" c
                        lass="avatar rounded-circle">
                      </div>
                      <div class="col ml--2">
                        <div class="d-flex justify-content-between 
                        align-items-center">
                          <div>
                            <h4 class="mb-0 text-sm">John Snow</h4>
                          </div>
                          <div class="text-right text-muted">
                            <small>3 hrs ago</small>
                          </div>
                        </div>
                        <p class="text-sm mb-0">A new issue 
                        has been reported for Argon.</p>
                      </div>
                    </div>
                  </a>
                  <a href="#!" class="list-group-item list-group-item-action">
                    <div class="row align-items-center">
                      <div class="col-auto">
                        <!-- Avatar -->
                        <img alt="Image placeholder" 
                        src="assets/img/theme/team-3.jpg" 
                        class="avatar rounded-circle">
                      </div>
                      <div class="col ml--2">
                        <div class="d-flex justify-content-between 
                        align-items-center">
                          <div>
                            <h4 class="mb-0 text-sm">John Snow</h4>
                          </div>
                          <div class="text-right text-muted">
                            <small>5 hrs ago</small>
                          </div>
                        </div>
                        <p class="text-sm mb-0">Your posts have been liked a lot.</p>
                      </div>
                    </div>
                  </a>
                  <a href="#!" class="list-group-item list-group-item-action">
                    <div class="row align-items-center">
                      <div class="col-auto">
                        <!-- Avatar -->
                        <img alt="Image placeholder" 
                        src="assets/img/theme/team-4.jpg" 
                        class="avatar rounded-circle">
                      </div>
                      <div class="col ml--2">
                        <div class="d-flex justify-content-between 
                        align-items-center">
                          <div>
                            <h4 class="mb-0 text-sm">John Snow</h4>
                          </div>
                          <div class="text-right text-muted">
                            <small>2 hrs ago</small>
                          </div>
                        </div>
                        <p class="text-sm mb-0">Let's 
                        meet at Starbucks at 11:30. Wdyt?</p>
                      </div>
                    </div>
                  </a>
                  <a href="#!" class="list-group-item list-group-item-action">
                    <div class="row align-items-center">
                      <div class="col-auto">
                        <!-- Avatar -->
                        <img alt="Image placeholder" 
                        src="assets/img/theme/team-5.jpg" 
                        class="avatar rounded-circle">
                      </div>
                      <div class="col ml--2">
                        <div class="d-flex justify-content-between 
                        align-items-center">
                          <div>
                            <h4 class="mb-0 text-sm">John Snow</h4>
                          </div>
                          <div class="text-right text-muted">
                            <small>3 hrs ago</small>
                          </div>
                        </div>
                        <p class="text-sm mb-0">A new issue 
                        has been reported for Argon.</p>
                      </div>
                    </div>
                  </a>
                </div>
                <!-- View all -->
                <a href="#!" class="dropdown-item 
                text-center text-primary font-weight-bold py-3">View all</a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link" href="#" role="button" 
              data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="ni ni-ungroup"></i>
              </a>
              <div class="dropdown-menu dropdown-menu-lg 
              dropdown-menu-dark bg-default  dropdown-menu-right ">
                <div class="row shortcuts px-4">
                  <a href="#!" class="col-4 shortcut-item">
                    <span class="shortcut-media avatar 
                    rounded-circle bg-gradient-red">
                      <i class="ni ni-calendar-grid-58"></i>
                    </span>
                    <small>Calendar</small>
                  </a>
                  <a href="#!" class="col-4 shortcut-item">
                    <span class="shortcut-media 
                    avatar rounded-circle bg-gradient-orange">
                      <i class="ni ni-email-83"></i>
                    </span>
                    <small>Email</small>
                  </a>
                  <a href="#!" class="col-4 shortcut-item">
                    <span class="shortcut-media avatar 
                    rounded-circle bg-gradient-info">
                      <i class="ni ni-credit-card"></i>
                    </span>
                    <small>Payments</small>
                  </a>
                  <a href="#!" class="col-4 shortcut-item">
                    <span class="shortcut-media avatar 
                    rounded-circle bg-gradient-green">
                      <i class="ni ni-books"></i>
                    </span>
                    <small>Reports</small>
                  </a>
                  <a href="#!" class="col-4 shortcut-item">
                    <span class="shortcut-media avatar 
                    rounded-circle bg-gradient-purple">
                      <i class="ni ni-pin-3"></i>
                    </span>
                    <small>Maps</small>
                  </a>
                  <a href="#!" class="col-4 shortcut-item">
                    <span class="shortcut-media avatar 
                    rounded-circle bg-gradient-yellow">
                      <i class="ni ni-basket"></i>
                    </span>
                    <small>Shop</small>
                  </a>
                </div>
              </div>
            </li>
          </ul>
          <ul class="navbar-nav align-items-center  ml-auto ml-md-0 ">
            <li class="nav-item dropdown">
              <a class="nav-link pr-0" href="#" 
              role="button" data-toggle="dropdown" 
              aria-haspopup="true" aria-expanded="false">
                <div class="media align-items-center">
                  <span class="avatar avatar-sm rounded-circle">
                    <img alt="Image placeholder" 
                    src="assets/img/theme/user-avatar.png">
                  </span>
                  <div class="media-body  ml-2  d-none d-lg-block">
                    <span class="mb-0 text-sm  font-weight-bold">Hello, Admin</span>
                  </div>
                </div>
              </a>
              <div class="dropdown-menu  dropdown-menu-right ">
                <div class="dropdown-header noti-title">
                  <h6 class="text-overflow m-0">Welcome!</h6>
                </div>
                <a href="#!" class="dropdown-item">
                  <i class="ni ni-single-02"></i>
                  <span>My profile</span>
                </a>
                <a href="#!" class="dropdown-item">
                  <i class="ni ni-settings-gear-65"></i>
                  <span>Settings</span>
                </a>
                <a href="#!" class="dropdown-item">
                  <i class="ni ni-calendar-grid-58"></i>
                  <span>Activity</span>
                </a>
                <a href="#!" class="dropdown-item">
                  <i class="ni ni-support-16"></i>
                  <span>Support</span>
                </a>
                <div class="dropdown-divider"></div>
                <a href="../logout.php" class="dropdown-item">
                  <i class="ni ni-user-run"></i>
                  <span>Logout</span>
                </a>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Header -->
    <!-- Header -->
    <div class="header bg-primary pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
              <h6 class="h2 text-white d-inline-block mb-0">ViewProducts</h6>
              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                  <li class="breadcrumb-item">
                  <a href="index.php"><i class="fas fa-home"></i></a></li>
                  <li class="breadcrumb-item"><a href="index.php">Dashboards</a></li>
                  <li class="breadcrumb-item active" 
                  aria-current="page">ViewProducts</li>
                </ol>
              </nav>
            </div>
            <div class="col-lg-6 col-5 text-right">
              <a href="#" class="btn btn-sm btn-neutral">New</a>
              <a href="#" class="btn btn-sm btn-neutral">Filters</a>
            </div>
          </div>
          <!-- Card stats -->
        <div class="row">
            <div class="col-xl-3 col-md-6">
                <div class="card card-stats">

                </div>
            </div>
        </div>
        </div>
    </div>
</div>
    <!-- Page content -->
    <div class="container mt--8 pb-5">
<!-- table display -->
      <div class="row">
        <div class="col-xl-12">
          <div class="card">
            <div class="table-responsive">
              <!-- Projects table -->
              <table class="table align-items-center table-flush" id="showProduct">
                <thead class="thead-light">
                    <tr>
                        <th>Product Parent Name</th>
                        <th>Product Name</th>
                        <th>Link</th>
                        <th>Product Availability</th>
                        <th>Product Launch Date</th>
                        <th>Monthly Price</th>
                        <th>Annual price</th>
                        <th>SKU</th>
                        <th>Webspace</th>
                        <th>Bandwidth</th>
                        <th>Free Domain</th>
                        <th>Language Technology</th>
                        <th>MailBox</th>
                        <th>Delete</th>
                        <th>Update</th>
                      
                    </tr>
                </thead>

                <tbody>
                <?php if ($data!=false) {
                        for ($i=0;$i<count($data);$i++) { ?>
                        <tr>
                        <td><?php echo $data[$i]['prod_parent_name']?></td>
                        <td><?php echo $data[$i]['prod_name'];?></td>
                        <td><?php echo $data[$i]['link']; ?></td>
                        <td><?php if($data[$i]['prod_available']==1) echo "Available";?></td>
                        <td><?php echo $data[$i]['prod_launch_date'];?></td>
                        <td><?php echo $data[$i]['mon_price'];?></td>
                        <td><?php echo $data[$i]['annual_price'];?></td>
                        <td><?php echo $data[$i]['sku'];?></td>
                        <td><?php echo $data[$i]['webspace'];?></td>
                        <td><?php echo $data[$i]['bandwidth'];?></td>
                        <td><?php echo $data[$i]['freedomain'];?></td>
                        <td><?php echo $data[$i]['languagetechnology'];?></td>
                        <td><?php echo $data[$i]['mailbox'];?></td>
                        
                        <td><a style="text-decoration: none; text-style: none;" class=" btn-danger"
                        href="viewproducts.php?delete=<?php echo $data[$i]['prod_id'];?>"><button type="button" class="btn btn-danger"
                        name="d1" style="font-size:10px;"
                          onclick="return confirm('Are you sure you want to delete data from the database?')">Delete</button></a>
                        </td>
                        <td><a style="text-decoration: none; text-style: none;" class=" btn-danger"
                          href="viewproducts.php?upd=<?php echo $data[$i]['prod_id'];?>"><button type="button" class="btn btn-success"  style="font-size:10px;"
                          name="d1"
                        >Update</button></a>
                          </td>
                        </tr>
              <?php     }
                    }?>
    
              </tbody>




              </table>
            </div>
          </div>
        </div>
      </div>
<!-- table display -->



<?php 
// if(isset($_POST['updatecategory'])){
//    print_r($_POST);
//  $productname=$_POST['productname_update'];
//  $link=$_POST['productlink_update'];
//  $availabilty=$_POST['availability_update'];
//  $upadteId=$_POST['upadte_id'];

//   $backresult=$obj->ProductUpdate($productname,$link,$availabilty,$upadteId);
//   // echo $backresult;
//   if($backresult==1){
//     echo "<script>alert('Upadted SuccesFully')</script>";
//     echo "<script>window.location.href='createcategory.php'</script>";
//   }
// }


if(isset($_GET['upd'])){
  $update=$_GET['upd'];
  echo $update;
  $data3=$obj->updateAddProduct($update);
  print_r($data3);
  if(!isset($_POST['updatecategory'])){
  echo "<script>$(document).ready(function(){ $('#exampleModalSignUp').modal('show'); });</script>";
  }
}



  ?>



<div class="col-md-12">
    <!-- Modal -->
    <div class="modal fade" id="exampleModalSignUp" 
    tabindex="-1" role="dialog" aria-labelledby="exampleModalSignTitle" 
    aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-body p-0">
            <div class="card bg-secondary shadow border-0 mb-0">
              <div class="card-header bg-white pb-5">
                <div class="text-muted text-center mb-3">
                <button type="button" class="close" 
                data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
                    <h1 class="mb-0">Update Product</h1>
                    <div class="mb-0">Product Details </div>
                      <small class="important-field"> * Mandatory Fields</small>
                    </div>
                  </div>
                </div>
                <form action="" method="POST">
                <div class="pl-lg-4">
                  <div class="row pr-3">
                    <div class="form-group col-lg-6">
                      <label for="inputState">Select Product Category
                      <span class="important-field"> *</span></label>
                      <select id="inputState" class="form-control" 
                      name="productcategory">
                        <option value="Please select">Please select</option>
                        <?php
                  
                        $data2=$obj->getSubCategory();
                        if ($data2!=false) {
                            for ($i=0;$i<count($data2);$i++) {
                                echo '<option value="'.$data2[$i]['id'].'">'.$data2[$i]['prod_name'].'</option>';
                            }
                        }
                       ?>
                      </select>
                      <div class="invalid-feedback">
                        Please Select a Product Category.
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="productname">
                        Enter Product Name<span class="important-field"> 
                        *</span></label>
                        <input type="text" id="productname" 
                        class="form-control" placeholder="product Name" n
                        ame="productname">
                        <div class="invalid-feedback">
                          Please provide a valid Product Name.
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" 
                        for="pageurl">Page URL</label>
                        <input type="text" id="pageurl" 
                        class="form-control" placeholder="Page URL" name="pageurl">
                      </div>
                    </div>
                  </div>
                  <hr class="my-4">
                  <div class="card-header">
                    <div class="row align-items-center">
                      <div class="col-8">
                        <h1 class="mb-0">Product Description</h1>
                          <div class="mb-0">Enter Product Description Below </div>
                      </div>
                    </div>
                  </div>
                  <div class="row pr-3">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="monthlyprice">
                        Enter Monthly Price<span class="important-field"> 
                        *</span></label>
                        <input type="text" id="monthlyprice"
                         class="form-control" placeholder="Monthly Price"
                          name="monthlyprice">
                        <small class="text-muted">This would be Monthly Plan</small>
                        <div class="invalid-feedback">
                          Please Enter valid Monthly price.
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" 
                        for="annualprice">Enter Annual Price<span 
                        class="important-field"> *</span> </label>
                        <input type="text" id="annualprice" 
                        class="form-control" placeholder="Annual Price" 
                        name="annualprice">
                        <small class="text-muted">This would be Annual Price</small>
                        <div class="invalid-feedback">
                          Please Enter Valid Annual Price.
                        </div>
                      </div>  
                    </div>   
                    <div class="row pr-3 pl-3">
                      <div class="col-lg-6">
                        <div class="form-group">
                          <label class="form-control-label" 
                          for="sku">SKU<span class="important-field"> 
                          *</span></label>
                          <input type="text" id="sku" 
                          class="form-control" placeholder="SKU" name="sku">
                          <div class="invalid-feedback">
                            Please Enter valid SKU.
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                  <hr class="my-4">
                  <div class="card-header">
                    <div class="row align-items-center">
                      <div class="col-8">
                        <h1 class="mb-0">Features</h1>
                      </div>
                    </div>
                  </div>
                  <div class="row pr-3 pl-3">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" 
                        for="webspace">Web Space(in GB)<span 
                        class="important-field"> *</span></label>
                        <input type="text" id="webspace" 
                        class="form-control" placeholder="Web Space" name="webspace">
                        <small class="text-muted">Enter 0.5 for 512 MB</small>
                        <div class="invalid-feedback">
                          Please Enter Valid Web Space.
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="bandwidth">
                        Bandwidth (in GB)
                        <span class="important-field"> *</span></label>
                        <input type="text" id="bandwidth" 
                        class="form-control" placeholder="Bandwidth" 
                        name="bandwidth">
                        <small class="text-muted">Enter 0.5 for 512 MB</small>
                        <div class="invalid-feedback">
                          Please Enter bandwidth.
                        </div>
                      </div>
                    </div>
                  </div> 
                </div>  
                <div class="row pr-3 pl-3">
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label class="form-control-label" 
                      for="freedomain">Free Domain<span 
                      class="important-field"> *</span> </label>
                      <input type="text" id="freedomain" 
                      class="form-control" placeholder="Free Domain" 
                      name="freedomain">
                      <small class="text-muted">
                      Enter 0 if no domain available in this service</small>
                      <div class="invalid-feedback">
                        Please Enter Valid Free Domain.
                      </div>
                    </div>
                  </div>
                <div class="col-lg-6">
                  <div class="form-group">
                    <label class="form-control-label" 
                    for="languagetechnology">Language/ Technology Support
                    <span class="important-field"> *</span> </label>
                    <input type="text" id="languagetechnology" 
                    class="form-control" placeholder="Language or 
                    Technology Support" name="languagetechnology">
                    <small class="text-muted">Separate by (,) 
                    Ex: PHP, MySQL, MongoDB</small>
                    <div class="invalid-feedback">
                      Please Enter Valid Language or Technology Support.
                    </div>
                  </div>
                </div>
              </div>
              <div class="row pr-3 pl-3">
                <div class="col-lg-6">
                  <div class="form-group">
                    <label class="form-control-label" 
                    for="mailbox">Mailbox
                    <span class="important-field"> *</span> </label>
                    <input type="text" id="mailbox" 
                    class="form-control" placeholder="Mailbox" name="mailbox">
                    <small class="text-muted">Enter 
                    Number of mailbox will be provided, enter 0 if none</small>
                    <div class="invalid-feedback">
                      Please Enter Valid Number of Mailbox.
                    </div>
                  </div>
                </div>
              </div>
            <div class="text-center pb-4">
            <input type="hidden" id="id" class="form-control"  name="id">
            <button type="button" 
            class="btn btn-danger mt-4" data-dismiss="modal">Close</button>
              <input type="submit" class="btn btn-primary mt-4" 
              id="createcategory" value="Update Product" name="updateproduct" disabled="">
            </div>
          
        </div>
      </div>
    </div>
  </div>
</div>

<script>

// $(document).ready(function(){ $('#exampleModalSignUp').modal('show'); });

$(document).ready( function () {
  // $('#exampleModalSignUp').modal('show');
$('#showProduct').DataTable();
} );

</script>


   <script>
    $( document ).ready(function() {
          $("#createcategory").prop('disabled', true);
    });
    $('#inputState').focusout(function(){
          inputState();
    });
    function inputState(){
      var value=($('#inputState').val()).trim();
      if (value=="Please select") {
        $("select").addClass("is-invalid");
        $("#createcategory").prop('disabled', true);
        return false;
      }
      else {
        $("select").removeClass("is-invalid");
        $("#createcategory").prop('disabled', false);
        return true;
      }
    }
    $('#productname').focusout(function(){
      productName();
    });
    function productName(){
      var regproductname=/(^([a-zA-Z]+\-[0-9]+$))|(^([a-zA-Z])+$)/;
      var value=($('#productname').val()).trim();
      if (value=="" || !(value.match(regproductname))) {
        $("#productname").addClass("is-invalid");
        $("#createcategory").prop('disabled', true);
        return false;
      } else {
        $("#productname").removeClass("is-invalid");
        $("#createcategory").prop('disabled', false);
        return true;
      }
    }
    $('#monthlyprice').focusout(function(){
      monthlyPrice();
    });
    function monthlyPrice(){
      var regprice=/^([0-9]+\.[0-9]+$)|(^([0-9])+$)/;
      var value=($('#monthlyprice').val()).trim();
      if (value=="" || !(value.match(regprice)) || value.length>15) {
        $("#monthlyprice").addClass("is-invalid");
        $("#createcategory").prop('disabled', true);
        return false;
      }
      else {
        $("#monthlyprice").removeClass("is-invalid");
        $("#createcategory").prop('disabled', false);
        return true;
      }
    }
    $('#annualprice').focusout(function(){
      annualPrice();
    });
    function annualPrice(){
      var regprice=/^([0-9]+\.[0-9]+$)|(^([0-9])+$)/;
      var value=($('#annualprice').val()).trim();
      if (value=="" || !(value.match(regprice)) || value.length>15) {
        $("#annualprice").addClass("is-invalid");
        $("#createcategory").prop('disabled', true);
        return false;
      }
      else {
        $("#annualprice").removeClass("is-invalid");
        $("#createcategory").prop('disabled', false);
        return true;
      }
    }
    $('#sku').focusout(function(){
      sku();
    });
    function sku(){
      var regsku=/^(?![!@#$%^&*()_+=-`~?|]*$)[a-zA-Z0-9-#]+$/;
      var value=($('#sku').val()).trim();
      if (value=="" || !(value.match(regsku))) {
        $("#sku").addClass("is-invalid");
        $("#createcategory").prop('disabled', true);
        return false;
      }
      else {
        $("#sku").removeClass("is-invalid");
        $("#createcategory").prop('disabled', false);
        return true;
      }
    }
    $('#webspace').focusout(function(){
      webSpace();
    });
    function webSpace(){
      var regwebspace=/^([0-9]+\.[0-9]+$)|(^([0-9])+$)/;
      var value=($('#webspace').val()).trim();
      if (value=="" || !(value.match(regwebspace)) || value.length>5) {
        $("#webspace").addClass("is-invalid");
        $("#createcategory").prop('disabled', true);
        return false;
      }
      else {
        $("#webspace").removeClass("is-invalid");
        $("#createcategory").prop('disabled', false);
        return true;
      }
    }
    $('#bandwidth').focusout(function(){
      bandWidth();
    });
    function bandWidth(){
      var regbandwidth=/^([0-9]+\.[0-9]+$)|(^([0-9])+$)/;
      var value=($('#bandwidth').val()).trim();
      if (value=="" || !(value.match(regbandwidth)) || value.length>5) {
        $("#bandwidth").addClass("is-invalid");
        $("#createcategory").prop('disabled', true);
        return false;
      }
      else {
        $("#bandwidth").removeClass("is-invalid");
        $("#createcategory").prop('disabled', false);
        return true;
      }
    }
    $('#freedomain').focusout(function(){
      freeDomain();
    });
    function freeDomain(){
      var regfreedomain=/^([a-zA-Z]+$)|(^([0-9])+$)/;
      var value=($('#freedomain').val()).trim();
      if (value=="" || !(value.match(regfreedomain))) {
        $("#freedomain").addClass("is-invalid");
        $("#createcategory").prop('disabled', true);
        return false;
      }
      else {
        $("#freedomain").removeClass("is-invalid");
        $("#createcategory").prop('disabled', false);
        return true;
      }
    }

    $('#languagetechnology').focusout(function(){
      languageTechnology();
    });
    function languageTechnology(){
      var reglanguagetech=/^((?![0-9]+$)[a-zA-Z0-9]+\,?\s?)+$/;
      var value=($('#languagetechnology').val()).trim();
      if (value=="" || !(value.match(reglanguagetech))) {
        $("#languagetechnology").addClass("is-invalid");
        $("#createcategory").prop('disabled', true);
        return false;
      }
      else {
        $("#languagetechnology").removeClass("is-invalid");
        $("#createcategory").prop('disabled', false);
        return true;
      }
    }
    $('#mailbox').focusout(function(){
      mainBox();
    });
    function mainBox(){
      var regmailbox=/^([0-9])+$/;
      var value=($('#mailbox').val()).trim();
      if (value=="" || !(value.match(regmailbox))) {
        $("#mailbox").addClass("is-invalid");
        $("#createcategory").prop('disabled', true);
        return false;
      }
      else {
        $("#mailbox").removeClass("is-invalid");
        $("#createcategory").prop('disabled', false);
        return true;
      }
    }
    function validateAddProduct(){
      var productcategory=($('#inputState').val()).trim();
      var productname=($('#productname').val()).trim();
      var pageurl=($('#pageurl').val()).trim();
      var monthlyprice=($('#monthlyprice').val()).trim();
      var annualprice=($('#annualprice').val()).trim();
      var sku=($('#sku').val()).trim();
      var webspace=($('#webspace').val()).trim();
      var bandwidth=($('#bandwidth').val()).trim();
      if(monthlyprice>annualprice){
        alert("Please Enter monthly price less than annual price");
        return false;
      }
      else {
        return true;
      }
    }
  </script>
<?php
require_once "footer.php";
?>
