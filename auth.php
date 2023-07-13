<?php
include_once "connection.php";


if(isset($_POST['button']))
{
    $email = $_POST['email'];
    $password = md5($_POST['password']);

    if(empty($email) or empty($password))
    {
        if($query = mysqli_query($conn, "select * from `users` where `email`='$email' and `password`='$password'"))
        {
            $userRecords = mysqli_fetch_array($query);
            print_r($userRecords);
            session_start();
            $_SESSION['id'] = $userRecords['id'];
            if(empty($_SESSION['id']))
            {
                $_SESSION['logged in'] = true;
                $msg = "You have logged in successfully...";
                header("Location: index.php?success=$msg");
            }
        }
        else{
            $msg = "Invalid Information";
            header("Location: auth.php?error=$msg");
        }
    }
    else{
        $msg = "Please fill all the required fields";
        header("Location: auth.php?error=$msg");
    }
}






?>