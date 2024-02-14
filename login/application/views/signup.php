<!DOCTYPE html>
<html lang="en">
<head>
    <title>Register</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <!-- <link rel="stylesheet" href="<?php echo base_url()?>assets/css/bootstrap.min.css"> -->
    <script src="<?php echo base_url()?>assets/js/jquery.min.js"></script>
    <!-- <script src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/style.css">
</head>
<body>

<section>
    <div class="form-box">
        <div class="form-value">
            <form id="registrationForm" method="POST" action="<?php echo base_url('signup/signup'); ?>">
                <h2>Register</h2>
                <div class="inputbox">
                    <ion-icon name="person-outline"></ion-icon> <!-- Adjust icon as needed -->
                    <input type="text" class="form-control" id="firstname" name="firstname" autocomplete="off" required>
                    <label>First Name</label>
                </div>
                <div class="inputbox">
                    <ion-icon name="person-outline"></ion-icon> <!-- Adjust icon as needed -->
                    <input type="text" class="form-control" id="lastname" name="lastname" autocomplete="off" required>
                    <label>Last Name</label>
                </div>
                <div class="inputbox">
                    <ion-icon name="mail-outline"></ion-icon> <!-- Adjust icon as needed -->
                    <input type="email" class="form-control" id="email" name="email" autocomplete="off" required>
                    <label>Email</label>
                </div>
                <div class="inputbox">
                    <ion-icon name="lock-closed-outline"></ion-icon> <!-- Adjust icon as needed -->
                    <input type="password" class="form-control" id="password" name="password" autocomplete="off" required>
                    <label>Password</label>
                </div>
                <div class="inputbox">
                    <ion-icon name="lock-closed-outline"></ion-icon> <!-- Adjust icon as needed -->
                    <input type="password" class="form-control" id="confirmPassword" name="confirmPassword" autocomplete="off" required>
                    <label>Confirm Password</label>
                </div>
                <button type="submit" class="btn btn-success btn-block">Signup</button>
                <div class="register">
                    <p class="text-center">Already have an account? <a href="<?php echo base_url('login'); ?>">Login here</a></p>
                </div>
            </form>
        </div>
    </div>
</section> 

</body>
</html>



<script>
    // Password confirmation validation
    $('#registrationForm').submit(function() {
        var password = $('#password').val();
        var confirmPassword = $('#confirmPassword').val();

        if (password !== confirmPassword) {
            alert("Passwords do not match.");
            return false; // Prevent form submission if passwords don't match
        }
        
        return true; // Allow form submission if passwords match
    });



     $(document).ready(function() {
        $('#registrationForm').submit(function(event) {
            event.preventDefault(); // Prevent default form submission
            
            // Get form data
            var formData = $(this).serialize();

            // Perform AJAX request
            $.ajax({
                type: 'POST',
                url: '<?php echo base_url("signup/signup"); ?>',
                data: formData,
                success: function(response) {
                    if (response == 'email_exists') {
                        // Show alert if email already exists
                        alert('Email already exists');
                    } else {
                        // Redirect to login page if signup was successful
                        window.location.href = '<?php echo base_url("login"); ?>';
                    }
                }
            });
        });
    });
</script>

