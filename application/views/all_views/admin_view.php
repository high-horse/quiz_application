<!-- This is admiin login view page. -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <!-- <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css"> -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

    <!-- <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script> -->

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
<?php if ($this->session->flashdata('error_msg')): ?>
   <span class="alert alert-danger"><?= $this->session->flashdata('error_msg') ?></span>
<?php endif; ?>

    <div style="background-color: #800080;">
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
    </div>




<!-- Login Modal -->
<!-- <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" style="max-height: 80vh;">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="loginModalLabel">Admin Login</h5>
      </div>
      <div class="modal-body">
        <form>
          <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input type="name" class="form-control" id="username" >
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" id="password">
          </div>
          <div class="mb-3 form-check">
            <a href="#">Play Quiz instead</a>
          </div>
          <button type="submit" id="login" name="login" class="btn btn-primary">Login</button>
        </form>
      </div>
    </div>
  </div>
</div> -->



<!-- <script type="text/javascript">
    $(document).ready(function(){
        $('#loginModal').modal('show');
    });

    $(document).on("click", "#login", function(e){
        e.preventDefault();

        var username = $('#username').val();
        var password = $('#password').val();

        // console.log(username, password);
        // alert(username);

        $.ajax({
            url: "<?php //base_url("admin_controller/signin"); ?>",
            type: "POST",
            dataType: "json",
            data: {
                username:  username,
                password: password 
            },
            success: function(data){
                console.log("inside success function")
            }
        });
    });
</script> -->
</body>


<!-- </body> -->

</html>