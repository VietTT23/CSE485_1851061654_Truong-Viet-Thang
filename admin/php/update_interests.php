<?php
include('../../include/config.php');
//$id=$_POST['id'];
// $query="SELECT * FROM interests";

// $queryrun=mysqli_query($conn,$query);
// $data=mysqli_fetch_array($queryrun);


if(isset($_POST['iupdate'])){
    $id=$_POST['id'];
    $title=mysqli_real_escape_string($conn,$_POST['title']);
    $description=mysqli_real_escape_string($conn,$_POST['description']);
    $query="UPDATE interests SET title='$title',description='$description' WHERE id='$id'";
    $run=mysqli_query($conn,$query);
    if($run){
        header("location:../?editinterests=true#interests");
    }
}

if(isset($_POST['addinterests'])){
    $id=$_POST['id'];
    $title=mysqli_real_escape_string($conn,$_POST['title']);
    $description=mysqli_real_escape_string($conn,$_POST['description']);
    $query="INSERT INTO interests (title,description) VALUES ('$title','$description')";
    $run=mysqli_query($conn,$query);
    if($run){
        header("location:../?editinterests=true#interests");
    }
}

if(isset($_GET['del'])){
    $id=$_GET['del'];
    $query="DELETE FROM interests WHERE id='$id'";
    $run=mysqli_query($conn,$query);
    if($run){
        header("location:../?editinterests=true#interests");
    }
}
