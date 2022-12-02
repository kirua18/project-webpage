<?php
session_start();
require 'dbcon.php';







if(isset($_POST['delete_data']))
{
    $project_id = mysqli_real_escape_string($con, $_POST['delete_data']);

    $query = "DELETE FROM project WHERE id='$project_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Deleted Successfully";
        header("Location: index.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Not Deleted";
        header("Location: index.php");
        exit(0);
    }
}

if(isset($_POST['update_data']))
{
    $project_id = mysqli_real_escape_string($con, $_POST['project_id']);

    $name = mysqli_real_escape_string($con, $_POST['name']);
    $refnum = mysqli_real_escape_string($con, $_POST['refnum']);
    $reg = mysqli_real_escape_string($con, $_POST['reg']);
    $yearp = mysqli_real_escape_string($con, $_POST['yearp']);
    $fits = mysqli_real_escape_string($con, $_POST['fits']);
    $prov = mysqli_real_escape_string($con, $_POST['prov']);
    $comm = mysqli_real_escape_string($con, $_POST['comm']);

    $query = "UPDATE project SET name='$name',refnum='$refnum',reg='$reg',yearp='$yearp',fits='$fits',prov='$prov',comm='$comm' WHERE id='$project_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Updated Successfully";
        header("Location: index.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Not Updated";
        header("Location: index.php");
        exit(0);
    }

}


if(isset($_POST['save_data']))
{
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $refnum = mysqli_real_escape_string($con, $_POST['refnum']);
    $reg = mysqli_real_escape_string($con, $_POST['reg']);
    $yearp = mysqli_real_escape_string($con, $_POST['yearp']);
    $fits = mysqli_real_escape_string($con, $_POST['fits']);
    $prov = mysqli_real_escape_string($con, $_POST['prov']);
    $comm = mysqli_real_escape_string($con, $_POST['comm']);

    $query = "INSERT INTO project (name,refnum,reg,yearp,fits,prov,comm) VALUES ('$name','$refnum','$reg','$yearp','$fits','$prov','$comm')";

    $query_run = mysqli_query($con, $query);
    if($query_run)
    {
        $_SESSION['message'] = "Created Successfully";
        header("Location: project-create.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Not Created";
        header("Location: project-create.php");
        exit(0);
    }
}






?>