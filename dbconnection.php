<?php
class dbConnection{
    public $con;
    public function dbconnect(){
      $this->con=mysqli_connect('localhost','root','','cedhosting');
    //   if($this->con){
    //       echo "connected";
    //   } 
     
   return  $this->con;  
    } 
   }


?>