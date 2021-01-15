<?php
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
                        $_SESSION['customer_id']=$row['id'];
                        echo "<script>window.location.href='index.php'</script>";
                        exit;
                       
                    }
                    }
            else{
                return 1;
            
            }

    }

    function showDropDown(){
        $query= "select * from tbl_product where prod_parent_id=1";
        $x=mysqli_query($this->con,$query);
        return $x;
    }
    
} 

?>