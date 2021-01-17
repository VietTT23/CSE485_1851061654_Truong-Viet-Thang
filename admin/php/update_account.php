<?php
    session_start();
    include('../../include/config.php');

    if(isset($_POST['uprofile'])){    
    $name=mysqli_real_escape_string($conn,$_POST['username']);
    $password=mysqli_real_escape_string($conn,$_POST['pass']);
    $email=mysqli_real_escape_string($conn,$_POST['email']);
    $query="UPDATE admin_account SET username='$name', email='$email', pass='$password'";
    echo $query;    
    $queryrun=mysqli_query($conn,$query);
    if($queryrun){
        $_SESSION['username']=$name;
        header("location:../?editaccount=true&msg=updated");
    }    

}    
    


