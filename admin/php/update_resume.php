<?php
include('../../include/config.php');
if(isset($_POST['addtoresume'])){        
$category=mysqli_real_escape_string($conn,$_POST['category']);
$degree=mysqli_real_escape_string($conn,$_POST['degree']);
$name=mysqli_real_escape_string($conn,$_POST['name']);
$year=mysqli_real_escape_string($conn,$_POST['year']);
$description=mysqli_real_escape_string($conn,$_POST['description']);   
$query="INSERT INTO education_and_experience(category,degree,name,year,description) VALUES ('$category','$degree','$name','$year','$description')";
$queryrun=mysqli_query($conn,$query);
if($queryrun){
    header("location:../?editresume=true&msg=updated");
}    

}    
    

if(isset($_POST['rupdate'])){
    $id=$_POST['id'];
    $category=mysqli_real_escape_string($conn,$_POST['category']);
    $degree=mysqli_real_escape_string($conn,$_POST['degree']);
    $name=mysqli_real_escape_string($conn,$_POST['name']);
    $year=mysqli_real_escape_string($conn,$_POST['year']);
    $description=mysqli_real_escape_string($conn,$_POST['description']); 
    $query="UPDATE education_and_experience SET category='$category',degree='$degree',name='$name',year='$year',description='$description' WHERE id='$id'";
    $run=mysqli_query($conn,$query);
    if($run){
        header("location:../?editresume=true#resumelist");
    }
}

if(isset($_GET['del'])){
    $id=$_GET['del'];
    $query="DELETE FROM education_and_experience WHERE id='$id'";
    $run=mysqli_query($conn,$query);
    if($run){
        header("location:../?editresume=true#resumelist");
    }
}
?>