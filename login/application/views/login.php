<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <!-- <link rel="stylesheet" href="<?php echo base_url()?>assets/css/bootstrap.min.css"> -->
    <script src="<?php echo base_url()?>assets/js/jquery.min.js"></script>
    <!-- <script src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script> -->
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/style.css">
</head>
<body>

    <body>
        <section>
            <div class="form-box">
                <div class="form-value">
                    <?php echo validation_errors('<div class="alert alert-danger">', '</div>'); ?>
                    <form id="loginForm" method="POST" action="<?php echo base_url('login/authenticate'); ?>">
                        <h2>Login</h2>
                        <div class="inputbox"> <ion-icon name="mail-outline"></ion-icon> <input type="email" class="form-control" id="email" name="email" autocomplete="off" required>
                            <label>Email</label>
                        </div>
                        <div class="inputbox"> <ion-icon name="lock-closed-outline"></ion-icon> <input type="password" class="form-control" id="password" name="password" autocomplete="off" required> <label>Password</label> </div>
                         <button type="submit" class="btn btn-success btn-block">Login</button>
                        <div class="register">
                            <p class="text-center">Don't have an account? <a href="<?php echo base_url('signup'); ?>">Register here</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </section> 
    </body>
</body>
</html>
<script>
        $(document).ready(function(){
            <?php if(isset($error)): ?>
            alert('<?php echo $error; ?>');
            <?php endif; ?>
        });
    </script>