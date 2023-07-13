
<?php
    include_once "connection.php";

    if(isset($_POST['button']))
    {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = md5($_POST['password']);
        $conf_password = md5($_POST['conf_password']);

        
        if(empty($name) or empty($email) or empty($pass) )
        {
            if($password === $conf_password)
            {
                if(mysqli_query($conn, "insert into `users` (`name`, `email`, `password`) values ('$name','$email','$password')"))
                {   
                    $msg = "Congratulations you account has been Created Successfully..";
                    header("Location: index.php?success=$msg");
                    echo ($msg);
                }   
                else{
                    $msg = "Sorry Something Went Wrong Please try again";
                    header("Location: register.php?error=$msg");
                   
                    echo ($msg);
                }

            }
            else{
                $msg = "Passwords are not matched";
             header("Location: register.php?error=$msg");
            }
        }
        else{
            $msg = "Please fill all the required fields";
            header("Location: register.php?error=$msg");
        }
    }

?>




<?php

//     if(isset($_POST['submit']))
//     {
// $DATABASE_HOST = 'localhost';
// $DATABASE_USER = 'root';
// $DATABASE_PASS = '';
// $DATABASE_NAME = 'account';

// $conn = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
//         $name = $_POST['name'];
//         $email = $_POST['email'];
//         $password = md5($_POST['password']);
//         $conf_password = md5($_POST['conf_password']);


    
        
//         if($name != "" && $email != "" && $password != "")
//         {
//             if($password == $conf_password)
//             {
//                 if(mysqli_query($conn, "insert into `users` (`name`, `email`, `password`) values ('$name','$email','$password')"))
//                 {   
//                     $msg = "Congratulations you account has been Created Successfully..";
//                     echo ($msg);
//                 }   
//                 else{
//                     $msg = "Sorry Something Went Wrong Please try again";
//                     echo ($msg);
//                 }

//             }
//             else{
//                 $msg = "Passwords are not matched";
//                 echo ($msg);
//             }
//         }
//         else{
//             $msg = "Please fill all the required fields";
//             echo ($msg);
//         }
//     }

?>

