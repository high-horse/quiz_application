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

    <!-- <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script> -->

    <style>
        .correct { color: green;
          font-weight: bold;}
        .incorrect { color: red; 
          font-weight: bold;}
    </style>
    <title>GAME</title>
</head>
<body style="background-color: #800080;">

<div class="container mt-5">
  <div class="d-flex justify-content-center row">
    <div class="col-md-10 col-lg-10">
        <form action="" id = "quiz_form">

        <div class="question bg-white p-3 border-bottom">
          <div class="d-flex flex-row justify-content-between align-items-center mcq">


            <div  id="question" class="d-flex flex-row align-items-center">
              <label for="question-number w-100">Q.No:</label> 
              <!-- <input  id="question-number" name="question-number" class="form-control outline-none  border-0" min="1" max="10" value=""> -->
              <span id="question-number" name="question-number" class="form-control outline-none  border-0" min="1" max="10" value=""></span>
            </div>
            
          </div>
        </div>
        <div class="question bg-white p-3 border-bottom">

          <div class="d-flex flex-row align-items-center question-title">
            <h3 class="text-danger">Q.</h3>
            <h5 class="mt-1 ml-2" id="question-text"></h5>
          </div>

          <div class="ans ml-2">
            <label class="radio">
              <input type="radio" name="option" value="" id="option-1">
              <span id="option-1-text"></span>
            </label>
          </div>

          <div class="ans ml-2">
            <label class="radio">
              <input type="radio" name="option" value="" id="option-2">
              <span id="option-2-text"></span>
            </label>
          </div>

          <div class="ans ml-2">
            <label class="radio">
              <input type="radio" name="option" value="" id="option-3">
              <span id="option-3-text"></span>
            </label>
          </div>

          <div class="ans ml-2">
            <label class="radio">
              <input type="radio" name="option" value="" id="option-4">
              <span id="option-4-text"></span>
            </label>
          </div>
        </div>

        <div class="d-flex flex-row justify-content-between align-items-center p-3 bg-white">
          <button id="previous" name="previous" class="btn btn-primary d-flex align-items-center btn-danger" type="button">
            <i class="fa fa-angle-left mt-1 mr-1"></i>&nbsp;Previous
          </button>
          <button id="next" name="next" class="btn btn-primary border-success align-items-center btn-success" type="button">
            Next<i class="fa fa-angle-right ml-2"></i>
          </button>
        </div>
        </form>

        <!-- modal  -->

    </div>
  </div>
</div>


<script>
  var quiz_id =1;
  var total_quiz =10;
  var question = ["0","0","0","0","0","0","0","0","0","0"];

  var answers_selected = new Array(10).fill(0);
  var actual_answers = new Array();
  var options = new Array();
  var complete = false ;

$(document).ready(function(){
  set_modal_data();
  console.log(question);
});

function set_modal_data(){
  $.ajax({
    url: "<?php echo base_url(); ?>Quiz_controller/fetch_data",
    type: "POST",
    dataType: "json",
    data: {
      id : quiz_id
    },
    success: function(data){
      $("input[name='option']").prop("checked", false);

      // console.log(data);
      // document.getElementById("question-number").value= data.id;
      document.getElementById("question-number").innerHTML= data.id;

      $('#question-text').html(data.question);
      document.getElementById("option-1-text").innerHTML = data.options[0];
      document.getElementById("option-2-text").innerHTML = data.options[1];
      document.getElementById("option-3-text").innerHTML = data.options[2];
      document.getElementById("option-4-text").innerHTML = data.options[3];

      question[quiz_id-1] = data.question;
      actual_answers.push(data.answer);
      options.push(data.options);
      // console.log(actual_answers, options);
      return;
    }
  });
  // $('#quizModal').modal('show');
}

$(document).on("click","#next", function(e){
  e.preventDefault();
  save_clicked_radiobutton();

 
    if (quiz_id > (total_quiz-1) ){    
      console.log(quiz_id-1, question, answers_selected, actual_answers);
      alert("quiz completed");
      $("#quiz_form").hide();

      quiz_id = 1;
      preview();
      return;
      //now ask to preview.
    }

    quiz_id++ ;
    // console.log(quiz_id, answers_selected);

    console.log(quiz_id-1, question, answers_selected);
    if (question[quiz_id-1] == "0"){
      set_modal_data();
      return;
    }
    else{
      set_previous_data();
      return;
    }
 



});

$(document).on("click","#previous", function(e){
  e.preventDefault();
  save_clicked_radiobutton();
  if(quiz_id == 1){
    return;
  }
  else{
  quiz_id-- ;
  set_previous_data();
  }
});

function set_previous_data(){
  // $('#quizModal select').prop('selectedIndex', 0);
  // $("input[name='option']").prop("checked", false);
  $('#quiz_form')[0].reset();

  document.getElementById("question-number").innerHTML= quiz_id;
  $('#question-text').html(question[(quiz_id-1)]);
  document.getElementById("option-1-text").innerHTML = options[quiz_id-1][0];
  document.getElementById("option-2-text").innerHTML = options[quiz_id-1][1];
  document.getElementById("option-3-text").innerHTML = options[quiz_id-1][2];
  document.getElementById("option-4-text").innerHTML = options[quiz_id-1][3];

  $('input[name="option"]').each(function(index) {
    if ($(this).siblings('span').text() == answers_selected[quiz_id-1]) {
      console.log(answers_selected[quiz_id-1]);
      $('#option-' + (index+1)).prop('checked', true);
    }
  });
  }

  function save_clicked_radiobutton(){
    var selectedValue;
    var selectedOption = $("input[name='option']:checked");
    if (selectedOption.length > 0) {
      selectedValue = selectedOption.siblings('span').text();
    } 
    // alert(selectedValue);
    answers_selected[quiz_id-1] = selectedValue;
    return;
  }

  // preview code goes here 






  function preview(){
    quiz_id = 1;
    $("#quiz_form").show();
    set_previous_data();
    highlightAnswers();

    
  }

  function highlightAnswers() {
  var selected = answers_selected[quiz_id-1];
  var correct = actual_answers[quiz_id-1];

  if (selected == correct) {
    $('input[type=radio]:checked').next('span').addClass('correct');
  } else if (selected != correct) {
    $('input[type=radio]:checked').next('span').addClass('incorrect');
    $('input[id=option-' + correct + ']').next('span').addClass('correct');
  }
}

</script>

</body>
</html>