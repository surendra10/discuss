<?php

session_start();
include ('../client/db.php'); 

if(isset($_POST['signup'])){

    
    $username = $_POST['username'];
    $email = $_POST['email'];
    $add = $_POST['address'];
    $password = $_POST['password'];

   $user = $conn->prepare("insert into user_table(`username`,`email`,`address`,`password`) 
                     value('$username', '$email', '$add', '$password') ");

         $result = $user->execute();
         if($result){
           
            $_SESSION['user'] = ["username"=>$username, "email"=>$email];
            header("location: /discuss");
         }else{
            echo "Failed add New user....";
            header("location: /discuss/?signup=true");
         }            

}else if(isset($_POST['login'])){

   $username = 0;
 echo  $email = $_POST['email'];
 echo  $password = $_POST['password'];
   
   $query = "SELECT * FROM user_table where `email` = '$email' and `password` = '$password'";
   $result =$conn->query($query);
   if($result->num_rows == 1){

      foreach($result as $row){

         $username = $row ['username'];
      }
       
      // echo "found some data";
       $_SESSION['user'] = ["username"=>$username, "email"=>$email];
       header("location: /discuss");
   }else{
      echo "Not! found any data";
   }

}else if(isset($_GET['logout'])){
   session_unset();
   header("location: /discuss");
}

?>