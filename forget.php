<?php

include 'config.php';

if(isset($_POST['submit'])){

   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = mysqli_real_escape_string($conn, $_POST['password']);

   $select_users = mysqli_query($conn, "SELECT * FROM `users` WHERE email = '$email'") or die('query failed');

   if(mysqli_num_rows($select_users) > 0)
    {
        mysqli_query($conn, "UPDATE users SET password='$pass' WHERE email='$email'") or die('query failed');
        echo "<script>alert('Password Update Successfully');</script>";
        echo "<script>window.location.href = 'login.php';</script>";
    }
   else
    {
        echo "<script>alert('Email not found');</script>";
        echo "<script>window.location.href = 'forget.php';</script>";
    }

}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forget Password</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="assets/style.css">
</head>


<body>

    <section class="login">

        <div class="img">
            <img src="assets/images/fbanner2.png" alt="">
        </div>

        <div class="loginbox">

            <h2>Forget Password</h2>
            <p>Please Enter Your Email & New Password</p>

            <div class="loginsection forget">

                <form action="" method="post">

                    <label>Email</label>
                    <input type="email" id="email" name="email" placeholder="abc@gmail.com" required>
                    <p align="center" class="email-error" class="p-marg p1-vis"> Invalid name </p>

                    
                    <div class="password">

                        <label>Enter New Password</label>
                        <input type="password" name="password" placeholder="Enter New Password" id="a1" required>
                        <i onclick="show1()" class="fas fa-eye-slash" id="f1"></i>
                        <p align="center" class="password-error" class="p-marg p1-vis"> Invalid name </p>

                        
                    </div>

                    <div class="password">

                        <label>Confirm New Password</label>
                        <input type="password" placeholder="Confirm New Password" id="a2" required>
                        <i onclick="show2()" class="fas fa-eye-slash" id="f2"></i>
                        <p align="center" class="confirm-error" class="p-marg p1-vis"> Invalid name </p>

                        
                    </div>

                    <button type="button" id="button" name="submit" onclick="check()"> Forget Password <i class="fa fa-long-arrow-right" aria-hidden="true"></i></button>

                </form>

               
            </div>

        </div>

    </section>

    <script  type="text/javascript">

        function show1()
        {
            var a = document.querySelector("#a1");
            var b = document.querySelector("#f1");

                
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

        function show2()
        {
            var a = document.querySelector("#a2");
            var b = document.querySelector("#f2");

                
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
            var b=c=d=0;

            let email      = document.getElementById('email').value;
            let password   = document.getElementById('a1').value;
            let confirm    = document.getElementById('a2').value;
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
                    b++;
                }
                else
                {
                    document.querySelector('.email-error').classList.add('active');
                    document.querySelector('.email-error').innerHTML="Invalid email";
                    b--;
                }
            }


            if(password.length<1)
            {
                document.querySelector('.password-error').classList.add('active');
                document.querySelector('.password-error').innerHTML="Please fill out this field";
            }
            else
            {
                if(password.length<8)
                {
                    document.querySelector('.password-error').classList.add('active');
                    document.querySelector('.password-error').innerHTML="Password length must be 8 character";
                }
                else if(password.search(/[0-9]/)==-1)
                {
                    document.querySelector('.password-error').classList.add('active');
                    document.querySelector('.password-error').innerHTML="Password must contain atleast 1 digit";
                }
                else if(password.search(/[a-z]/)==-1)
                {
                    document.querySelector('.password-error').classList.add('active');
                    document.querySelector('.password-error').innerHTML="Password must contain atleast 1 small alphabet";
                }
                else if(password.search(/[A-Z]/)==-1)
                {
                    document.querySelector('.password-error').classList.add('active');
                    document.querySelector('.password-error').innerHTML="Password must contain atleast 1 capital alphabet";
                }
                else if(password.search(/[!\@\#\$\%\^\&\*\(\)\-\_\+\=\|\[\]\{\}\'\"\:\;\/\?\>\.\<\,]/)==-1)
                {
                    document.querySelector('.password-error').classList.add('active');
                    document.querySelector('.password-error').innerHTML="Password must contain atleast 1 special symbol";
                }
                else
                {
                    document.querySelector('.password-error').classList.remove('active');
                    c++;
                }   
            }


            if(confirm.length<1)
            {
                document.querySelector('.confirm-error').classList.add('active');
                document.querySelector('.confirm-error').innerHTML="Please fill out this field";
            }
            else
            {
                if(password!=confirm)
                {
                    document.querySelector('.confirm-error').classList.add('active');
                    document.querySelector('.confirm-error').innerHTML="Password not match";
                    d--;
                }
                else
                {
                    document.querySelector('.confirm-error').classList.remove('active');
                    d++;
                }  
            }

            if((b==0) && (c==0) && (d==0))
            {
                document.querySelector("#button").setAttribute("type","button");
            }
            else if((b>0) && (c>0) && (d>0))
            {
                document.querySelector("#button").setAttribute("type","submit");
            }

        }

    </script>


</body>

</html>