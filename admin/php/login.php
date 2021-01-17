<?php
session_start();
if(isset($_SESSION['username'])){
    header('location:../index.php');
}
include("../../include/config.php");
if(isset($_POST['login-btn'])){
    $email = mysqli_real_escape_string($conn,$_POST['email']);
    $password = mysqli_real_escape_string($conn,$_POST['password']);
    
    $query="SELECT * FROM admin_account WHERE email='$email' AND pass='$password'";
    $run = mysqli_query($conn,$query);
    $result = mysqli_fetch_array($run);
    if($result){
        $_SESSION['id']=$result['id'];
        $_SESSION['username']=$result['username'];
        header('location:../');
    }
    else{
        header('location:../login/?msg=iuser');   
    }
    
    
}