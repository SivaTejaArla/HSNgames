<?php


    if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['submit'])){

    
        $conn = mysqli_connect('localhost','root','','logins') or die("Connection Failed");
        $new="connected";
        if(isset($_POST['name']) && isset($_POST['email']))
        {

            $username=$_POST['username'];
            $password=$_POST['password'];
            $sql = "INSERT INTO logindetails VALUES ('$username','$password')" ;
           if(mysqli_query($conn,$sql))
           
           {
            echo "connected";
           }else{
            echo "error";
           }


        }
      
        

    }
    


?>