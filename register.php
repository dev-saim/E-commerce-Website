<?php

include 'config.php';

if (isset($_POST['submit'])) 
{

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = mysqli_real_escape_string($conn, $_POST['password']);

   $select_users = mysqli_query($conn, "SELECT * FROM `users` WHERE email = '$email'") or die('query failed');

   if (mysqli_num_rows($select_users) > 0) 
   {
       echo "<script>alert('User already exists');</script>";
       echo "<script>window.location.href = 'register.php';</script>";

   } 
   else 
   {
       mysqli_query($conn, "INSERT INTO `users`(name, email, password) VALUES('$name', '$email', '$pass')") or die('query failed');
       echo "<script>window.location.href = 'login.php';</script>";
   }

}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign-Up Page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="assets/style.css">
</head>


<body>

    <section class="login">

        <div class="img">
            <img src="assets/images/s1.png" alt="">
        </div>

        <div class="loginbox">

            <h2>Register Yourself</h2>
            <p>Please Enter Your Credentials</p>

            <div class="loginsection">

                <form action="" method="post">

                    <label>Name</label>
                    <input type="name" id="name" name="name" placeholder="Enter your name" required>
                    <p align="center" class="name-error" class="p-marg p1-vis"> Invalid name </p>

                    <label>Email</label>
                    <input type="email" id="email" name="email" placeholder="abc@gmail.com" required>
                    <p align="center" class="email-error" class="p-marg p1-vis"> Invalid name </p>


                    <label>Password</label>
                    <div class="password">

                        <input type="password" name="password" placeholder="Strong Password" id="d1" required>
                        <i onclick="show()" class="fas fa-eye-slash" id="b1"></i>
                        <p align="center" class="password-error" class="p-marg p1-vis"> Invalid name </p>
                        
                    </div>

                    <button type="button" id="button" name="submit" onclick="check()"> Register <i class="fa fa-long-arrow-right" aria-hidden="true"></i></button>

                </form>
               
            </div>
        
            <div class="create">
                <h3>Already have an account</h3>
                <a href="login.php"> Login </a>
            </div>

        </div>

    </section>

    <script  type="text/javascript">

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

            var a=b=c=0;

            let user       = document.getElementById('name').value;
            let email      = document.getElementById('email').value;
            let password   = document.getElementById('d1').value;
            var validemail = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
            
            if(user.length<1)
            {
                document.querySelector('.name-error').classList.add('active');
                document.querySelector('.name-error').innerHTML="Please fill out this field";
            }
            else
            {
                if(user.match(/[0-9]/)  || user.match(/[!\@\#\$\%\^\&\*\(\)\-\_\+\=\|\[\]\{\}\'\"\:\;\/\?\>\.\<\,]/))
                {
                    document.querySelector('.name-error').classList.add('active');
                    document.querySelector('.name-error').innerHTML="Invalid name";
                    a--;
                }
                else
                {
                    document.querySelector('.name-error').classList.remove('active');
                    a++;
                }
            }

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


            if( (a==0) && (b==0) && (c==0))
            {
                document.querySelector("#button").setAttribute("type","button");
            }
            else if((a>0) && (b>0) && (c>0))
            {
                document.querySelector("#button").setAttribute("type","submit");
            }

        }

    </script>

</body>

</html>