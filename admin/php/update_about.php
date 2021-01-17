<?php
include('../../include/config.php');
include('checkupload.php');
$query="SELECT * FROM brofile";

$queryrun=mysqli_query($conn,$query);
$data=mysqli_fetch_array($queryrun);

$target_dir = "../../images/";

if(isset($_POST['saveabout'])){
    
    $avartar=$_FILES['avartar']['name'];    
    
    if($avartar==""){
        $avartar=$data['avartar'];
    }else{
     $pdone = Upload('avartar',$target_dir);
    }
           
    $name=mysqli_real_escape_string($conn,$_POST['name']);
    $email=mysqli_real_escape_string($conn,$_POST['email']);
    $phone=mysqli_real_escape_string($conn,$_POST['phone']);
    $dob=mysqli_real_escape_string($conn,$_POST['dob']);  
    $nationality=mysqli_real_escape_string($conn,$_POST['nationality']);  
    $address=mysqli_real_escape_string($conn,$_POST['address']);  
    $objective=mysqli_real_escape_string($conn,$_POST['objective']);
    $icando=mysqli_real_escape_string($conn,$_POST['icando']);

    if($pdone=="error"){
        header("location:../?editabout=true&msg=error");
    }
    else{
    $query1="UPDATE brofile SET name='$name',email='$email',phone='$phone',dob='$dob',nationality='$nationality',address='$address',objective='$objective',icando='$icando',avartar='$avartar' WHERE 1";
    $queryrun=mysqli_query($conn,$query1);
        if($queryrun){
            header("location:../?editabout=true&msg=updated");
        }    

    }    
} 

    

