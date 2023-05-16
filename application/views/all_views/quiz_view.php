<!-- This is user dashboard / rules page. -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="../resources/animation.css"> -->
    <link rel="stylesheet" href="<?php echo base_url().'resources/animation.css'?>">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <!-- <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css"> -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

    <title>Quiz Rules</title>

</head>

<body >

<div class='light x1'></div>
<div class='light x2'></div>
<div class='light x3'></div>
<div class='light x4'></div>
<div class='light x5'></div>
<div class='light x6'></div>
<div class='light x7'></div>
<div class='light x8'></div>
<div class='light x9'></div>

  <div class="container" >
    <div class="row" >
      <div class="col-mt-12 mt-5 border rounded-lg border-3  p-4">
        <div class="text-center mt-5 text-white " >
          <h1><b>Welcome to quiz game.</b></h1>
          </div>
            <div class="info-list text-white text-center"><i>
              <legend>  RULES </legend>
                <p>I. Each question has a 15-second time limit (0-15).</p>
                <p>II. Your answer selection is final once the time is up.</p>
                <p>III. After the time runs out, the question, options, and answer will be hidden.</p>
                <p>IV. Reloading the page during the quiz will redirect you to this page.</p>
                <p>V. Use UNIQUE EMAIL to play the game each time.</p>
                <p>VI. You cannot exit the game once it has started.</p></i>
            </div>

            <div class="container-fluid d-flex justify-content-center align-items-center ">
            <button class="btn btn-primary btn-lg fs-3" onclick="location.href='<?php echo base_url('Quiz_controller/play_quiz') ?>'"> 
            <!-- <button class="btn btn-primary btn-lg fs-3" onclick="location.href='<?php //echo base_url('test/test_method') ?>'"> -->
                Start Quiz
              </button>
            </div>
            <div class='d-flex justify-content-end'>
              <button class="btn btn-primary btn-sm btn-danger float-right" onclick="location.href='<?php echo base_url('user_controller/logout') ?>'"> 
                Log Out
              </button>
            </div>

        </div>
    </div>
  </div>

  
</body>
</html>