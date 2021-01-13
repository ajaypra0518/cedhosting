<?php
session_start();
include "../dbconnection.php";
$obj=new dbConnection();
$con=$obj->dbconnect();
$mobile=$_SESSION['mobile'];

if(isset($_POST['signup'])){
    $name=trim($_POST['name']);
    $email=trim($_POST['email']);
    $password=md5(trim($_POST['password']));  
    $dropdown=trim($_POST['dropdown']);
    $answer=trim($_POST['answer']);
    $query="select email from tbl_user where email='$email' OR mobile='$mobile'";
     $result=mysqli_query($con,$query);
     if(mysqli_num_rows($result)>0){
       header('location:account1.php?id=1');
         die;
     }
     else{
     $query="INSERT INTO `tbl_user` ( `email`, `name`, `mobile`, `email_approved`, `phone_approved`, `active`, `is_admin`, `sign_up_date`, `password`, `security_question`, `security_answer`) VALUES ('$email', '$name', '$mobile', '1', '1', '1', '0', current_timestamp(), '$password', '$dropdown', '$answer');";
     $sql=mysqli_query($con,$query);
     unset($_SESSION['mobile']);

     if ($sql==true) {
        //  echo "insert";
        header('location:account1.php?id=2');
         
     }else{
        header('location:account1.php?id=3');
     }
   

     }
   
}

?>