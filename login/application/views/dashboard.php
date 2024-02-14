<!DOCTYPE html>
<html lang="en">
<head>
    <title>DASHBOARD</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/bootstrap.min.css">
    <script src="<?php echo base_url()?>assets/js/jquery.min.js"></script>
    <script src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
        }

        .sidebar {
            height: 100%;
            width: 250px;
            position: fixed;
            top: 0;
            left: 0;
            background-color: #343a40;
            padding-top: 20px;
            transition: width 0.5s;
            overflow-x: hidden;
        }

        .sidebar h2 {
            color: white;
            text-align: center;
            margin-bottom: 30px;
        }

        .sidebar ul {
            list-style-type: none;
            padding: 0;
            text-align: center;
        }

        .sidebar ul li {
            padding: 15px 0;
        }

        .sidebar ul li a {
            color: white;
            text-decoration: none;
            font-size: 18px;
        }

        .content {
            margin-left: 250px;
            padding: 20px;
        }

        header {
            background-color: #343a40;
            padding: 10px 20px;
            display: flex;
            justify-content: flex-end;
        }

        .logout a {
            color: white;
            text-decoration: none;
            font-weight: bold;
            font-size: 16px;
        }

        .logout a:hover {
            text-decoration: underline;
        }

        .main-content {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .main-content h1 {
            color: #333;
            margin-bottom: 10px;
            font-size: 36px;
        }

        .main-content p {
            color: #666;
            font-size: 20px;
        }

    </style>
</head>
<body>
    <div class="sidebar">
        <h2>Dashboard</h2>
        <ul>
            <li><a href="#">Admin</a></li>
            <li><a href="#">Setting</a></li>
            <li><a href="#">About</a></li>
            <!-- Add more links as needed -->
        </ul>
    </div>

    <div class="content">
        <header>
            <div class="logout">
                <a href="<?php echo base_url('login/logout'); ?>" class="logout-link">Logout</a>
            </div>
        </header>
        <div class="main-content">
            <h1>Welcome</h1>
        </div>
    </div>

    <script src="script.js"></script>
    <script>
        $(document).ready(function(){
            // Function to handle logout confirmation
            $('a.logout-link').on('click', function(e){
                e.preventDefault(); // Prevent the default behavior of the link
                var confirmLogout = confirm('Are you sure you want to logout?'); // Show confirmation dialog
                if(confirmLogout){
                    // If user confirms logout, proceed with the logout action
                    window.location.href = $(this).attr('href');
                }
            });
        });
    </script>
</body>
</html>
