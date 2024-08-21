<?php

    include 'config.php';
    session_start();

    if (!isset($_SESSION['user_id'])) 
    {
        header('Location: login.php');
        exit();
    }

    $user_name = $_SESSION['user_name'];
    $user_email = $_SESSION['user_email'];
    $user_id = $_SESSION['user_id'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="assets/style.css">
    <title>Admin Page</title>
    
</head>
<body>


    <div class="header">

        <section class="adminheader">

            <h2>Admin Dashboard</h2>
            <button><i class="fa fa-user temp" aria-hidden="true"></i></button>

        </section>

        <div class="userbox">

            <p>ID : <span><?php echo htmlspecialchars($user_id); ?></span></p>
            <p>Name : <span><?php echo htmlspecialchars($user_name); ?></span></p>
            <p>Email : <span><?php echo htmlspecialchars($user_email); ?></span></p>
            <a href="logout.php" class="delete-btn">logout</a>

        </div>

    </div>


    <script>

        let userBox = document.querySelector('.header .userbox');
        let usericon = document.querySelector('.header .adminheader .temp');


        document.querySelector('.temp').onclick = () =>
        {
            userBox.classList.toggle('active');
            usericon.classList.toggle('fa-times');
        }


    </script>


</body>
</html>
