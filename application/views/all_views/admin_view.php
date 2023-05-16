<!-- This is admiin login view page. -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url().'resources/animation.css'?>">
    <!-- <link rel="stylesheet" href="../resources/animation.css"> -->



    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/js/bootstrap.min.js"></script>

    <title>Admin Login</title>
    <style>
        body {
            background-color: #800080;
        }

        .form-control {
            background-color: white;
            color: black;
        }
    </style>

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

<?php if ($this->session->flashdata('error_msg')): ?>
   <div class="alert alert-danger alert-dismissible fade w-20 show py-1 px-2" role="alert" style="display: inline-block;">
      <span class="p-4 ps-0">
      <?= $this->session->flashdata('error_msg') ?>
      </span>
      <button type="button" class="btn-close btn-sm p-0 m-2" data-bs-dismiss="alert" aria-label="Close"></button>
   </div>
<?php endif; ?>



<div>
    <form method="post" action="<?php echo base_url('admin_controller/signin')?>" class="vh-100" style="color: black;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card" style="border-radius: 1rem; background-color: white; color: black;">
                        <div class="card-body p-5 text-center">
                            <div class="mb-md-5 mt-md-4 pb-0">
                                <h2 class="fw-bold mb-2 text-uppercase">ADMIN LOGIN</h2>
                                <p class="mb-5">Please enter your username and password!</p>
                                <div class="form-outline mb-4">
                                    <input name="username" type="username" id="username" placeholder="username" class="form-control form-control-lg" style="background-color: white; color: black;" />
                                    <label class="form-label" for="username">Username</label>
                                </div>
                                <div class="form-outline mb-4">
                                    <input type="password" name="password" id="typePasswordX" placeholder="password" class="form-control form-control-lg" style="background-color: white; color: black;" />
                                    <label class="form-label" for="typePasswordX">Password</label>
                                </div>
                                <button class="btn btn-outline-dark btn-lg px-5" type="submit">Login</button>
                            </div>
                            <div class="mt-0">
                                <p>Play Quiz instead <a href="<?php echo base_url('User_controller/index') ?>" class="fw-bold" style="color: blue;">QUIZ GAME</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>


    <!-- <div style="background-color: #800080;">
        <form method="post" action="<?php echo base_url('admin_controller/signin')?> "
        class="vh-100" style="color: black;">

            <div class="container py-5 h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                        <div class="card" style="border-radius: 1rem; background-color: white; color: black;">
                        <div class="card-body p-5 text-center">
                            <div class="mb-md-5 mt-md-4 pb-5">

                        <h2 class="fw-bold mb-2 text-uppercase">ADMIN LOGIN</h2>
                        <p class="mb-5">Please enter your username and password!</p>

                        <div class="form-outline mb-4">
                            <input name="username" type="username" id="username" placeholder="username"
                            class="form-control form-control-lg" style="background-color: white; color: black;" />
                            <label class="form-label" for="username">Username</label>

                        </div>

                        <div class="form-outline mb-4">
                            <input type="password" name="password" id="typePasswordX" placeholder="password" 
                            class="form-control form-control-lg" style="background-color: white; color: black;" />
                            <label class="form-label" for="typePasswordX">Password</label> 
                        
                        </div>

                        <button class="btn btn-outline-dark btn-lg px-5" type="submit">Login</button>

                        </div>

                        <div>
                        <p class="mb-0">Play Quiz instead <a href="<?php echo base_url('User_controller/index') ?>" 
                        class="fw-bold" style="color: blue;">QUIZ GAME</a>
                        </p>
                        </div>

                    </div>
                </div>
            </div>

        </form>
    </div> -->
</body>
</html>