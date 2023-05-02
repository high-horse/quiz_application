<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
  <script src ="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css">

  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.min.js"></script>

    <title>Play Quiz</title>
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
                <p>5. You'll get points on the basis of your correct answers.</p></i>
            </div>

            <div class="container-fluid d-flex justify-content-center align-items-center ">
            <button class="btn btn-primary btn-lg fs-3" onclick="location.href='<?php echo base_url('Quiz_controller/play_quiz') ?>'"> 
            <!-- <button class="btn btn-primary btn-lg fs-3" onclick="location.href='<?php //echo base_url('test/test_method') ?>'"> -->
                Start Quiz
              </button>
            </div>

        </div>
    </div>
  </div>

  
</body>
</html>