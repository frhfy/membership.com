<?php
session_start();
require 'dbcon.php';

if(isset($_POST['delete_membershipp']))
{
    $student_id = mysqli_real_escape_string($con, $_POST['delete_membershipp']);

    $query = "DELETE FROM membership WHERE id='$membershipp_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Data Deleted Successfully";
        header("Location: membership.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Data Not Deleted";
        header("Location: membership.php");
        exit(0);
    }
}

if(isset($_POST['update_membershipp']))
{
    $membershipp_id = mysqli_real_escape_string($con, $_POST['membershipp_id']);

    $name = mysqli_real_escape_string($con, $_POST['name']);
    $address = mysqli_real_escape_string($con, $_POST['address']);
    $picc = mysqli_real_escape_string($con, $_POST['picc']);
    $bNature = mysqli_real_escape_string($con, $_POST['bNature']);
    $website = mysqli_real_escape_string($con, $_POST['website']);
    $products = mysqli_real_escape_string($con, $_POST['products']);
    $emails = mysqli_real_escape_string($con, $_POST['emails']);
    $phone = mysqli_real_escape_string($con, $_POST['phone']);

    $query = "UPDATE membership SET name='$name', address='$address', picc='$picc', bNature='$bNature', website='$website', products='$products', emails='$emails', phone='$phone' WHERE id='$membershipp_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Data Updated Successfully";
        header("Location: membership.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Data Not Updated";
        header("Location: membership.php");
        exit(0);
    }

}


if(isset($_POST['save_membershipp']))
{
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $address = mysqli_real_escape_string($con, $_POST['address']);
    $picc = mysqli_real_escape_string($con, $_POST['picc']);
    $bNature = mysqli_real_escape_string($con, $_POST['bNature']);
    $website = mysqli_real_escape_string($con, $_POST['website']);
    $products = mysqli_real_escape_string($con, $_POST['products']);
    $emails = mysqli_real_escape_string($con, $_POST['emails']);
    $phone = mysqli_real_escape_string($con, $_POST['phone']);

    $query = "INSERT INTO membership (name,address,picc,bNature,website,products,emails,phone) VALUES ('$name','$address', '$picc', '$bNature', '$website', '$products',  '$emails','$phone')";

    $query_run = mysqli_query($con, $query);
    if($query_run)
    {
        $_SESSION['message'] = "Data Created Successfully";
        header("Location: member-create.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Data Not Created";
        header("Location: member-create.php");
        exit(0);
    }
}

?>