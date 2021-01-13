<?php
 include "../classess.php";
if(isset($_POST['insert_new_product'])){

    $productname=$_POST['productname'];
    $productlink=$_POST['productlink'];
    $obj=new ProductTable();
     $result=$obj->insertNewProduct($productname,$productlink);
     header("location:createcategory.php?res=$result");

}

?>