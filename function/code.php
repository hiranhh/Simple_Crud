<?php
    session_start();
    include '../components/connection.php';

    if(isset($_POST['delete']))
    {
        $id = mysqli_real_escape_string($con, $_POST['delete']);
        $query = "DELETE FROM crud WHERE id='$id' ";
        $query_run = mysqli_query($con, $query);
        if($query_run)
        {
            $_SESSION['message'] = "Deleted Successfully";
            header("Location: ../index.php");
            exit(0);
        }
        else
        {
            $_SESSION['message'] = "Not Deleted";
            header("Location: ../index.php");
            exit(0);
        }
    }
    if(isset($_POST['update']))
    {
        $id = mysqli_real_escape_string($con, $_POST['id']);
        $name = mysqli_real_escape_string($con, $_POST['name']);
        $email = mysqli_real_escape_string($con, $_POST['email']);
        $postaladdress = mysqli_real_escape_string($con, $_POST['postaladdress']);
        $city = mysqli_real_escape_string($con, $_POST['city']);
        $country = mysqli_real_escape_string($con, $_POST['country']);
        $phonenumber = mysqli_real_escape_string($con, $_POST['phonenumber']);
        $commentsection = mysqli_real_escape_string($con, $_POST['commentsection']);
        $query = "UPDATE crud SET name='$name', email='$email',postal_address='$postaladdress', city='$city', country='$country', phone_number='$phonenumber', comment_section='$commentsection' WHERE id='$id' ";
        $query_run = mysqli_query($con, $query);
        if($query_run)
        {
            $_SESSION['message'] = "Updated Successfully";
            header("Location: ../index.php");
            exit(0);
        }
        else
        {
            $_SESSION['message'] = "Not Updated";
            header("Location: ../index.php");
            exit(0);
        }
    }
    if(isset($_POST['save']))
    {
        
        $name = mysqli_real_escape_string($con, $_POST['name']);
        $email = mysqli_real_escape_string($con, $_POST['email']);
        $postaladdress = mysqli_real_escape_string($con, $_POST['postaladdress']);
        $city = mysqli_real_escape_string($con, $_POST['city']);
        $country = mysqli_real_escape_string($con, $_POST['country']);
        $phonenumber = mysqli_real_escape_string($con, $_POST['phonenumber']);
        $commentsection = mysqli_real_escape_string($con, $_POST['commentsection']);
        $query = "INSERT INTO crud (name,email,postal_address,city,country,phone_number,comment_section) VALUES ('$name','$email','$postaladdress','$city','$country','$phonenumber','$commentsection')";
        $query_run = mysqli_query($con, $query);
        if($query_run)
        {
            $_SESSION['message'] = "Created Successfully";
            header("Location: insert.php");
            exit(0);
        }
        else
        {
            $_SESSION['message'] = "Not Created";
            header("Location: insert.php");
            exit(0);
        }
    }
?>