<?php

include 'config.php';
session_start();

if(isset($_POST['submit']))
{

   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = mysqli_real_escape_string($conn, $_POST['password']);

   $select_users = mysqli_query($conn, "SELECT * FROM `users` WHERE email = '$email' AND password = '$pass'") or die('query failed');

   if(mysqli_num_rows($select_users) > 0)
   {

        $row = mysqli_fetch_assoc($select_users);
        $_SESSION['user_name'] = $row['name'];
        $_SESSION['user_email'] = $row['email'];
        $_SESSION['user_id'] = $row['id'];
        header('location:admin.php');

   }
    else
    {
        echo "<script>alert('Incorrect Email or Password');</script>";
        echo "<script>window.location.href = 'login.php';</script>";
    }

}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="assets/style.css">
</head>


<body>


    <section class="login">

        <div class="img">
            <img src="assets/images/loginbanner.png" alt="">
        </div>

        <div class="loginbox">

            <h2>Welcome Back</h2>
            <p>Please Enter Your Email & Password</p>

            <div class="loginsection">

                <form action="" method="post">

                    <label>Email</label>
                    <input type="email" name="email" placeholder="abc@gmail.com" id="email" required>
                    <p align="center" class="email-error" class="p-marg p1-vis"> Invalid name </p>

                    <label>Password</label>
                    <div class="password">

                        <input type="password" name="password" placeholder="Enter Password" id="d1" required>
                        <i onclick="show()" class="fas fa-eye-slash" id="b1"></i>
                        <p align="center" class="password-error" class="p-marg p1-vis"> Invalid name </p>

                    </div>

                    <a href="forget.php">Forget Password?</a><br>
                    <button type="button" name="submit" onclick="check()" id="button"> Login <i class="fa fa-long-arrow-right" aria-hidden="true"></i></button>

                </form>

            </div>

        
            <div class="create">
                <h3>Don't Have an Account?</h3>
                <a href="register.php"> Create Account </a>
            </div>

        </div>

    </section>


    <script type="text/javascript">

        function show()
        {
            var a = document.querySelector("#d1");
            var b = document.querySelector("#b1");

                
            if(a.type=="password")
            {

                b.setAttribute("class","fas fa-eye");
                a.setAttribute("type","text");
            }
            else
            {   
                b.setAttribute("class","fas fa-eye-slash");
                a.setAttribute("type","password");
            }
        }


        function check()
        {
            var a=b=0;
           
            let email      = document.getElementById('email').value;
            let password   = document.getElementById('d1').value;

            var validemail = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;


            if(email.length<1)
            {
            document.querySelector('.email-error').classList.add('active');
            document.querySelector('.email-error').innerHTML="Please fill out this field";
            }
            else
            {
            if(email.match(validemail))
                {
                    document.querySelector('.email-error').classList.remove('active');
                    document.querySelector('.email-error').innerHTML="";
                    a++;
                }
                else
                {
                    document.querySelector('.email-error').classList.add('active');
                    document.querySelector('.email-error').innerHTML="Invalid email";
                    a--;
                }
            }


            if(password.length<1)
            {
                document.querySelector('.password-error').classList.add('active');
                document.querySelector('.password-error').innerHTML="Please fill out this field";
                b--;
            }
            else
            {
                document.querySelector('.password-error').classList.remove('active');
                document.querySelector('.password-error').innerHTML="";
                b++;
            }

            if( (a==0) && (b==0))
            {
                document.querySelector("#button").setAttribute("type","button");
            }
            else if((a>0) && (b>0))
            {
                document.querySelector("#button").setAttribute("type","submit");
            }

        }

    </script>


</body>


</html>