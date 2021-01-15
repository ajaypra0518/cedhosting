<?php
// session_start();
// include_once "dbconnection.php";
// class UserTable extends dbConnection{

//     public $con;
//      function __construct(){
//     $obj= new dbConnection();
//     $this->con=$obj->dbconnect();
  
//     }

// }




class ProductTable{
    public $con;
     function __construct(){
    include_once "dbconnection.php";
    $obj= new dbConnection();
    $this->con=$obj->dbconnect();
  
    }
    function insertNewProduct($productname,$productlink){
        $query="select prod_name from tbl_product where prod_name='$productname'";
        $result=mysqli_query($this->con,$query);
        if(mysqli_num_rows($result)>0){
            return 1;
        }
        else{
            $query1="INSERT INTO `tbl_product` ( `prod_parent_id`, `prod_name`, `link`, `prod_available`, `prod_launch_date`) VALUES ( '1', '$productname', '$productlink', '1', NOW())";
            $result1=mysqli_query($this->con,$query1);
            if($result==true){
                return 2;
            }
            else{
                return 3;
            }
        }
    }


    function getSubCategory(){
        $query= "select * from tbl_product where prod_parent_id=1";
        $result=mysqli_query($this->con,$query);
        $data=array();
        while($row=mysqli_fetch_assoc($result))
        {
            array_push($data,$row);
        }
        return $data;
    }



    function deleteProduct($id){
        $query="DELETE FROM `tbl_product` WHERE `tbl_product`.`id` = '$id'";
        $result=mysqli_query($this->con,$query);
        if($result==true){
            return 1;
        }
        else{
            return 2;
        }
    }


    function updateProduct($id){
        
        $query="select * from tbl_product where id='$id'";
        $result=mysqli_query($this->con,$query);
        $data=mysqli_fetch_assoc($result);
        return $data;
    }


    function ProductUpdate($productname,$link,$prod_available,$id){
         $query="UPDATE `tbl_product` SET `prod_name` = '$productname', `link` = '$link', `prod_available` = '$prod_available' WHERE `tbl_product`.`id` = $id;";
         $result=mysqli_query($this->con,$query);
         if($result==true){
            return 1;
        }
        else{
            return 2;
        }
         
    }
    function addProduct($productcategory,$productname,$pageurl,$monthlyprice,$annualprice,$sku,$description){
        $query ="INSERT INTO `tbl_product` ( `id`,`prod_parent_id`, `prod_name`, `link`, `prod_available`, `prod_launch_date`) VALUES (NULL,'$productcategory', '$productname', '$pageurl', '1', NOW())";
        $result=mysqli_query($this->con,$query);
 
        $last=mysqli_insert_id($this->con);   
        $query1="INSERT INTO `tbl_product_description` (`prod_id`, `description`, `mon_price`, `annual_price`, `sku`) VALUES ('$last', '$description', '$monthlyprice', '$annualprice', '$sku')";
        $result1=mysqli_query($this->con,$query1);

        if($result && $result1){
          return 1;
        }
        else{
            return 2;
        }
       
    }

    function getProductData(){
        $query="SELECT * FROM `tbl_product` INNER JOIN `tbl_product_description` ON tbl_product.id=tbl_product_description.prod_id";
        $result=mysqli_query($this->con,$query);
        // $data=array();
        while($row=mysqli_fetch_assoc($result))
        {
            $parent_id=$row['prod_parent_id'];
            $query1="select * from tbl_product where id='$parent_id'";
            $result1=mysqli_query($this->con,$query1);
            $row1=mysqli_fetch_assoc($result1);
            $prod_name=$row1['prod_name'];
           
            $decoded_description=json_decode($row['description']);
            $webspace=$decoded_description->{'webspace'};
            $bandwidth=$decoded_description->{'bandwidth'};
            $freedomain=$decoded_description->{'freedomain'};
            $languagetechnology=$decoded_description->{'languagetechnology'};
            $mailbox=$decoded_description->{'mailbox'};
            $arr[]=array(
                "prod_id"=>$row['prod_id'],
                "sku"=>$row['sku'],
                "mon_price"=>$row['mon_price'],
                "annual_price"=>$row['annual_price'],
                "prod_parent_id"=>$row['prod_parent_id'],
                "prod_name"=>$row['prod_name'],
                "link"=>$row['link'],
                "prod_available"=>$row['prod_available'],
                "prod_launch_date"=>$row['prod_launch_date'],
                "webspace"=>$webspace,
                "bandwidth"=>$bandwidth,
                "freedomain"=>$freedomain,
                "languagetechnology"=>$languagetechnology,
                "mailbox"=>$mailbox,
                "prod_parent_name"=>$prod_name

            );


            // array_push($data,$row);
          

        }

        return $arr;
    }




    function updateAddProduct($id){
        // $query="SELECT * FROM `tbl_product` INNER JOIN `tbl_product_description` ON tbl_product.id=tbl_product_description.prod_id WHERE tbl_product.id=$id";
        $query="SELECT `tbl_product`.*,`tbl_product_description`.* FROM tbl_product JOIN tbl_product_description ON `tbl_product`.`id` = `tbl_product_description`.`prod_id` WHERE `tbl_product`.`id`='$id'";
        $result=mysqli_query($this->con,$query);
        $row=mysqli_fetch_assoc($result);

            $parent_id=$row['prod_parent_id'];
            $query1="select * from tbl_product where id='$parent_id'";
            $result1=mysqli_query($this->con,$query1);
            $row1=mysqli_fetch_assoc($result1);
            $prod_name=$row1['prod_name'];
           
            $decoded_description=json_decode($row['description']);
            $webspace=$decoded_description->{'webspace'};
            $bandwidth=$decoded_description->{'bandwidth'};
            $freedomain=$decoded_description->{'freedomain'};
            $languagetechnology=$decoded_description->{'languagetechnology'};
            $mailbox=$decoded_description->{'mailbox'};
            $arr[]=array(
                "prod_id"=>$row['prod_id'],
                "sku"=>$row['sku'],
                "mon_price"=>$row['mon_price'],
                "annual_price"=>$row['annual_price'],
                "prod_parent_id"=>$row['prod_parent_id'],
                "prod_name"=>$row['prod_name'],
                "link"=>$row['link'],
                "prod_available"=>$row['prod_available'],
                "prod_launch_date"=>$row['prod_launch_date'],
                "webspace"=>$webspace,
                "bandwidth"=>$bandwidth,
                "freedomain"=>$freedomain,
                "languagetechnology"=>$languagetechnology,
                "mailbox"=>$mailbox,
                "prod_parent_name"=>$prod_name

            );
          
     
        return $arr;
    }

//////////////////////////////////////cat log product data////////////////////////////////////////////////
    function getAddProduct($id){
       
        $query="SELECT `tbl_product`.*,`tbl_product_description`.* FROM tbl_product JOIN tbl_product_description ON `tbl_product`.`id` = `tbl_product_description`.`prod_id` WHERE `tbl_product`.`prod_parent_id`='$id'";
    

        $result=mysqli_query($this->con,$query);
        // $data=array();
        while($row=mysqli_fetch_assoc($result))
        {
            $parent_id=$row['prod_parent_id'];
            $query1="select * from tbl_product where id='$parent_id'";
            $result1=mysqli_query($this->con,$query1);
            $row1=mysqli_fetch_assoc($result1);
            $prod_name=$row1['prod_name'];
           
            $decoded_description=json_decode($row['description']);
            $webspace=$decoded_description->{'webspace'};
            $bandwidth=$decoded_description->{'bandwidth'};
            $freedomain=$decoded_description->{'freedomain'};
            $languagetechnology=$decoded_description->{'languagetechnology'};
            $mailbox=$decoded_description->{'mailbox'};
            $arr[]=array(
                "prod_id"=>$row['prod_id'],
                "sku"=>$row['sku'],
                "mon_price"=>$row['mon_price'],
                "annual_price"=>$row['annual_price'],
                "prod_parent_id"=>$row['prod_parent_id'],
                "prod_name"=>$row['prod_name'],
                "link"=>$row['link'],
                "prod_available"=>$row['prod_available'],
                "prod_launch_date"=>$row['prod_launch_date'],
                "webspace"=>$webspace,
                "bandwidth"=>$bandwidth,
                "freedomain"=>$freedomain,
                "languagetechnology"=>$languagetechnology,
                "mailbox"=>$mailbox,
                "prod_parent_name"=>$prod_name

            );
          
        }
        return $arr;
    }


//////////////////////////////////////cat log product data////////////////////////////////////////////////



}



?>



