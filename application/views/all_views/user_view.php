<!-- user sign in page  -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="../resources/animation.css"> -->
    <link rel="stylesheet" href="<?php echo base_url().'resources/animation.css'?>">

    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <style>
        body {
            background-color: #800080;
        }
        
        .form-control {
            background-color: white;
            color: black;
        }
        </style>
    <title>User SignIn</title>
</head>

<body>
<div class='light x1'></div>
<div class='light x2'></div>
<div class='light x3'></div>
<div class='light x4'></div>
<div class='light x5'></div>
<div class='light x6'></div>
<div class='light x7'></div>
<div class='light x8'></div>
<div class='light x9'></div>

<?php if ($this->session->flashdata('email_error')): ?>
   <span class="alert alert-danger"><?= $this->session->flashdata('email_error') ?></span>
   <script>
       setTimeout(function(){
           $('.alert').fadeOut('slow');
       }, 3000); // 3 seconds
   </script>
<?php endif; ?>

<div style="background-color: #800080;">
    <form method="post" action="<?php echo base_url('user_controller/signin') ?>" class="vh-100" style="color: black;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card" style="border-radius: 1rem; background-color: white; color: black;">
                        <div class="card-body p-5 text-center">
                            <h2 class="fw-bold mb-2 text-uppercase">Student Details Input</h2>
                            <p class="mb-5">Please enter your information!</p>
                            <div class="form-outline mb-4">
                                <input name="name" type="name" id="name" placeholder="Full Name" class="form-control form-control-lg" style="background-color: white; color: black;" />
                                <label class="form-label" for="name">Full Name</label>
                                <span class="text-danger" id="name-error"></span>
                            </div>
                            <div class="form-outline mb-4">
                                <input type="email" name="email" id="email" placeholder="email@mail.com" class="form-control form-control-lg" style="background-color: white; color: black;" value="<?php echo set_value('email'); ?>" />
                                <label class="form-label" for="email">Email Address</label>
                                <span class="text-danger" id="email-error"></span>
                            </div>
                            <button class="btn btn-outline-dark btn-lg px-5 mt-auto" type="submit" onclick="validateForm(event)" style="margin-top: auto;">Sign In</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>

<script>
    function validateForm(event) {
        event.preventDefault();
        
        // Clear any previous error messages
        document.getElementById('name-error').innerHTML = '';
        document.getElementById('email-error').innerHTML = '';

        // Get form values
        var name = document.getElementById('name').value;
        var email = document.getElementById('email').value;

        // Perform validation
        if (name.trim() === '') {
            document.getElementById('name-error').innerHTML = 'Please enter your name';
            return;
        }
        if (email.trim() === '') {
            document.getElementById('email-error').innerHTML = 'Please enter your email';
            return;
        }

        var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailPattern.test(email)) {
            document.getElementById('email-error').innerHTML = 'Please enter a valid email address';
            return;
        }

        // Validation passed, submit the form
        document.querySelector('form').submit();
    }
</script>




<!-- <div style="background-color: #800080;">
    <form method="post" action="<?php// echo base_url('user_controller/signin')?> " class="vh-100" style="color: black;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card" style="border-radius: 1rem; background-color: white; color: black;">
                        <div class="card-body p-5 text-center">
                            <h2 class="fw-bold mb-2 text-uppercase">Student Details Input</h2>
                            <p class="mb-5">Please enter your information!</p>
                            <div class="form-outline mb-4">
                                <input name="name" type="name" id="name" placeholder="Full Name" class="form-control form-control-lg" style="background-color: white; color: black;" />
                                <label class="form-label" for="name">Full Name</label>
                                <span class="text-danger">
                                    <?php// echo form_error('name'); ?>
                                </span>
                            </div>
                            <div class="form-outline mb-4">
                                <input type="email" name="email" id="email" placeholder="email@mail.com" class="form-control form-control-lg" style="background-color: white; color: black;" value="<?php echo set_value('email'); ?>" />
                                <label class="form-label" for="email">Email Address</label>
                                <span class="text-danger">
                                    <?php// echo form_error('email'); ?>
                                </span>
                            </div>
                            <button class="btn btn-outline-dark btn-lg px-5 mt-auto" type="submit"  style="margin-top: auto;">Sign In</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div> -->

<!-- <script>
    function myFunction(e) {
        e.preventDefault();
        console.log("hello");
        var x = document.getElementById("name").value;
        var y = document.getElementById("email").value;
        if (x == "" || y == "") {
            alert("Please fill out the form");
            return 0;
        }
        else{
            //  window.location.href='<?php //echo base_url('user_controller/signin'); ?>';
            var url = '<?php echo base_url('user_controller/signin'); ?>';
            url += '?name=' + encodeURIComponent(x);
            url += '&email=' + encodeURIComponent(y);
            window.location.href = url;
        }
    }
</script> -->
<!-- <div style="background-color: #800080;">
    <form method="post" action="<?php //echo base_url('user_controller/signin')?> "
    class="vh-100" style="color: black;">

        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card" style="border-radius: 1rem; background-color: white; color: black;">
                    <div class="card-body p-5 text-center">
                        <div class="mb-md-5 mt-md-4 pb-5">

                    <h2 class="fw-bold mb-2 text-uppercase">Student Details Input</h2>
                    <p class="mb-5">Please enter your information!</p>

                    <div class="form-outline mb-4">
                        <input name="name" type="name" id="name" placeholder="Full Name"
                        class="form-control form-control-lg" style="background-color: white; color: black;" />
                        <label class="form-label" for="name">Full Name</label>
                        <span class="text-danger">
                        <?php //echo form_error('name'); ?>
                        </span>

                    </div>

                    <div class="form-outline mb-4">
                        <input type="email" name="email" id="email" placeholder="email@mail.com" 
                        class="form-control form-control-lg" style="background-color: white; color: black;" value="<?php echo set_value('email'); ?>" />
                        <label class="form-label" for="email">Email Address</label>
                        <br>
                        <span class="text-danger">
                            <?php //echo form_error('email'); ?>
                        </span>
                        
                    </div>

                    <button class="btn btn-outline-dark btn-lg px-5 mb-0" onclick="myFunction(event)" type="submit">Sign In</button>

                    </div>

                </div>
            </div>
        </div>

    </form>
</div> -->

</body>
</html>