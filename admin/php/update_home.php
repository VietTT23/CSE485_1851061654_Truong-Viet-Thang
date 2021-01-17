<?php
include('../../include/config.php');

$query="SELECT * FROM home";
$queryrun=mysqli_query($conn,$query);
$data1=mysqli_fetch_array($queryrun);

if(isset($_POST['savehome'])){
    $title =  mysqli_real_escape_string($conn,$_POST['title']); 
    $name=mysqli_real_escape_string($conn,$_POST['name1']);
    $navname=mysqli_real_escape_string($conn,$_POST['navname']);
    $iam=mysqli_real_escape_string($conn,$_POST['iam']);
    $twitter=mysqli_real_escape_string($conn,$_POST['twitter']);
    $facebook=mysqli_real_escape_string($conn,$_POST['facebook']);
    $github=mysqli_real_escape_string($conn,$_POST['github']);
    $instagram=mysqli_real_escape_string($conn,$_POST['instargram']);

    $query1="UPDATE home SET title='$title',navname='$navname',iam='$iam',facebook='$facebook',instargram='$instagram',twitter='$twitter',github='$github' WHERE 1";
    $queryrun=mysqli_query($conn,$query1);
    if($queryrun){
        header("location:../?edithome=true&msg=updated");
    }        
    
}

