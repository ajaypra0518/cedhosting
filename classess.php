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

class UserTable{
    public $con;
     function __construct(){
    include_once "dbconnection.php";
    $obj= new dbConnection();
    $this->con=$obj->dbconnect();
  
    }

    function UserAdminCheck($email,$password){
        $query="select * from tbl_user where email='$email' AND password='$password'";
        $result=mysqli_query($this->con,$query);
         
            if(mysqli_num_rows($result)>0){
                    $row=mysqli_fetch_assoc($result);
                    if($row['is_admin']==1){
                        $_SESSION['adminlogin']="Hi,Admin";
                        $_SESSION['user_id']=$row['id'];
                        echo "<script>window.location.href='../admin'</script>";
                        exit;
                       
                    }
                    if($row['is_admin']==0){
                        $_SESSION['userlogin']="Hi,".$row['name'];
                        $_SESSION['customer_id']=$row['user_id'];
                        echo "<script>window.location.href='user.php'</script>";
                        exit;
                       
                    }
                    }
            else{
                return 1;
            
            }

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
    


}


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
        // $query="UPDATE `tbl_product` SET `prod_name` = '$productname', `link` = '$link', `prod_available` = '$prod_available' WHERE `tbl_product`.`id` = $id;";
        $query="select * from tbl_product where id='$id'";
        $result=mysqli_query($this->con,$query);
        $data=mysqli_fetch_assoc($result);
        return $data;
    }



}



?>



