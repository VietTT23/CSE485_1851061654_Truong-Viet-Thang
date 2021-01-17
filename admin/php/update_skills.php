<?php
include('../../include/config.php');

//skill section
if(isset($_POST['supdate'])){
    $id=$_POST['id'];
    $skill=mysqli_real_escape_string($conn,$_POST['skill']);
    $score=mysqli_real_escape_string($conn,$_POST['score']);
    $query="UPDATE skills SET skill='$skill',score='$score' WHERE id='$id'";
    $run=mysqli_query($conn,$query);
    if($run){
        header("location:../?editskills=true#skillsection");
    }
}

if(isset($_POST['addskill'])){
    $id=$_POST['id'];
    $skill=mysqli_real_escape_string($conn,$_POST['skill']);
    $score=mysqli_real_escape_string($conn,$_POST['score']);
    $query="INSERT INTO skills (skill,score) VALUES ('$skill','$score')";
    $run=mysqli_query($conn,$query);
    if($run){
        header("location:../?editskills=true#skillsection");
    }
}

if(isset($_GET['del'])){
    $id=$_GET['del'];
    $query="DELETE FROM skills WHERE id='$id'";
    $run=mysqli_query($conn,$query);
    if($run){
        header("location:../?editskills=true#skillsection");
    }
}

//more skill section
if(isset($_POST['msupdate'])){
    $id=$_POST['id'];
    $skill=mysqli_real_escape_string($conn,$_POST['skill']);
    $score=mysqli_real_escape_string($conn,$_POST['score']);
    $query="UPDATE more_skills SET skill='$skill',score='$score' WHERE id='$id'";
    $run=mysqli_query($conn,$query);
    if($run){
        header("location:../?editskills=true#moreskillsection");
    }
}

if(isset($_POST['addmoreskill'])){
    $id=$_POST['id'];
    $skill=mysqli_real_escape_string($conn,$_POST['skill']);
    $score=mysqli_real_escape_string($conn,$_POST['score']);
    $query="INSERT INTO more_skills (skill,score) VALUES ('$skill','$score')";
    $run=mysqli_query($conn,$query);
    if($run){
        header("location:../?editskills=true#moreskillsection");
    }
}

if(isset($_GET['mdel'])){
    $id=$_GET['mdel'];
    $query="DELETE FROM more_skills WHERE id='$id'";
    $run=mysqli_query($conn,$query);
    if($run){
        header("location:../?editskills=true#moreskillsection");
    }
}