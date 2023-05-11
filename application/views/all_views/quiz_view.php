<!-- This is user dashboard / rules page. -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <!-- <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css"> -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

    <title>Quiz Rules</title>
</head>
<body style="background-color: #800080;">

  <div class="container">
    <div class="row">
      <div class="col-mt-12 mt-5 border rounded-lg border-3  p-4">
        <div class="text-center mt-5 text-white ">
          <h1><b>Welcome to quiz game.</b></h1>
          </div>
            <div class="info-list text-white text-center"><i>
              <legend>  RULES </legend>
                <p>1. You will have only 15 seconds per each question.</p>
                <p>2. Once you select your answer, it can't be undone.</p>
                <p>3. You can't select any option once time goes off.</p>
                <p>4. You can't exit from the Quiz while you're playing. </br>If you do, you'll have to start over.</p>
                <p>5. Your time starts at 0 and ends at 15.</p>
                <p>6. Once your time goes off, you'll not be able</br> to view corresponding question.</p>
                <p>7. If you reload the page while playing the quiz,</br> you'll be redirected to this page.</p>
                <p>8. You have to use UNIQUE EMAIL to play the game.</p></i>
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