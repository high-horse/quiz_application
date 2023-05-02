<script>
  window.addEventListener('unload', function() {
    // alert('Are you sure??'); // Optional alert message
    window.location.href = "http://127.0.0.1/assignment1/index.php/Quiz_controller/index";
});
</script>

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
    <title>TESTING LOCALSTORAGE</title>
</head>
<body style="background-color: #800080;">

<div class="container mt-5">
  <div class="d-flex justify-content-center row">
    <div class="col-md-10 col-lg-10">
        <form action="" id = "quiz_form">
          <div id ="preview-status"><h3 class= "text-white">PREVIEWING</h3>  </div>

        <div class="question bg-white p-3 border-bottom">
          <div class="d-flex flex-row justify-content-between align-items-center mcq">


            <div  id="question" class="d-flex flex-row align-items-center space-between w-100">
              <label for="question-number w-100">Q.No:</label> 
              <!-- <input  id="question-number" name="question-number" class="form-control outline-none  border-0" min="1" max="10" value=""> -->
              <span id="question-number" name="question-number" class="form-control outline-none  border-0" min="1" max="10" value=""></span>
              <span id="">Time-></span>
              <span id="timer"></span>
            
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
              <span id="option-1-text" class=""></span>
            </label>
          </div>
          <div class="ans ml-2">
            <label class="radio">
              <input type="radio" name="option" value="" id="option-2">
              <span id="option-2-text" class=""></span>
            </label>
          </div>

          <div class="ans ml-2">
            <label class="radio">
              <input type="radio" name="option" value="" id="option-3">
              <span id="option-3-text" class=""></span>
            </label>
          </div>

          <div class="ans ml-2">
            <label class="radio">
              <input type="radio" name="option" value="" id="option-4">
              <span id="option-4-text" class=""></span>
            </label>
          </div>
        </div>

        <div class="d-flex flex-row justify-content-between align-items-center p-3 bg-white">
          <button id="previous" name="previous" class="btn btn-primary d-flex align-items-center btn-danger d-none" type="button">
            <i class="fa fa-angle-left mt-1 mr-1"></i>&nbsp;Previous
          </button>
          <button id="next" name="next" class="btn btn-primary border-success align-items-center btn-success" type="button">
            Next<i class="fa fa-angle-right ml-2"></i>
          </button>
        </div>
        </form>

        <!-- modal  -->
        <div id ="conformation-modal" class="modal" tabindex="-1" role="dialog" data-backdrop="static"  data-keyboard="false">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title text-danger">Hurray</h4>
                
              </div>
              <div class="modal-body">
                <p>You've completed the quiz.</p>
              </div>
              <div class="modal-footer">
                <button type="preview_button" id="preview_button" class="btn btn-primary">Show Preview</button>
                <button type="result_button" id="result_button" class="btn btn-secondary btn-success" data-dismiss="modal">Show Result</button>
              </div>
            </div>
          </div>
        </div>

        <!-- table  -->
        <table id ="result_table" class="table text-white">
         
          <thead>
            <tr>
              <th scope="col">Name</th>
              <th scope="col">Email</th>
              <th scope="col">Total Question</th>
              <th scope="col">Attempted Questions </th>
              <th scope="col">Correct Questions </th>
              <th scope="col">Time Taken </th>
            </tr>
          </thead>
          <tbody>

          </tbody>
           <div>
            <button type="button" id="exit_quiz" class="btn btn-danger" data-dismiss="modal" onclick="window.location.href='<?php echo base_url('user_controller/logout'); ?>'">Log Out</button>
          </div>
        </table>

    </div>
  </div>
</div>


<script>
  
  $("#exit_quiz").hide();
  $("#preview-status").hide();
  var quiz_id = 1;
  var total_quiz = 10;
  var total_time_per_quiz = 15;
  var timer_array = new Array(10).fill(0);
  var answers_selected = Array(10);
  var question = new Array(10).fill(0);
  var active_status =1;

  var intervalID;
  var time;
  var startPreview = false;
  var correct_questions=0;
  var attempted_questions=0;


  

  $(document).ready(function() {
    // stack_operation();
    $("#result_table").hide();
    $("#quiz_form").show();
    // // // $('#conformation-modal').modal('show');     
    set_modal_data();
    // console.log(timer_array);
  });

  $(document).on("click", "#next", function(e) {
    e.preventDefault();
    console.log("clicked next from "+quiz_id);
    if(!startPreview){

      if(quiz_id > total_quiz-1){
        timer_array[quiz_id-1] = time;
        clearInterval(intervalID);
        console.log(timer_array);

        save_clicked_radiobutton();
        submitBtn();
        $('#conformation-modal').modal('show'); 
        quiz_result();

        $(document).on("click", "#preview_button", function(e) {
          $('#conformation-modal').modal('hide');
          $("#quiz_form").hide();
          $("#preview-status").show();
          // alert("preview button");       

          preview();
          $('#conformation-modal').modal('hide');

        });
        $(document).on("click", "#result_button", function(e) {
          $("#quiz_form").hide();
          $('#conformation-modal').modal('hide');
   
          show_result();
        });
        return;
      }
      timer_array[quiz_id-1] = time;
      clearInterval(intervalID);
      console.log(timer_array);

      save_clicked_radiobutton();
      submitBtn();
      quiz_id++;
      if (question[quiz_id-1] == 0){
        set_modal_data();
        return;
      }
      else{
        load_previous();
      }
    }
    else {
      if(quiz_id > total_quiz-1){
          $("#quiz_form").hide();
          // alert("Get to Quiz result");
          quiz_result();
          show_result();
        }
        if(quiz_id > total_quiz){
          return;
        }
        quiz_id ++;
        load_preview();
        return;
    }
  });



  $(document).on("click", "#previous", function(e) {
    console.log("clicked previous from "+quiz_id);
    e.preventDefault();

    if(!startPreview){
      console.log("no preview "+ quiz_id);
      timer_array[quiz_id-1] = time;
      clearInterval(intervalID);
      console.log(timer_array);

      save_clicked_radiobutton();

      quiz_id--;
      backTrack();
      return;   
    }
    else{
      console.log("preview "+ quiz_id);
      if(quiz_id <= 1){
        quiz_id=1;
        return;
      }

      if(quiz_id > 1 ){
        quiz_id--;
        load_preview();
        return;
      }

    }
  });

  function set_modal_data() {
    $.ajax({
        url: "<?php echo base_url(); ?>Quiz_controller/fetch_data",
        type: "POST",
        dataType: "json",
        data: {
        id : quiz_id
        },
        success: function(data){
      previousBtn();
            localStorage.setItem("item"+quiz_id, JSON.stringify(data));

            set_timer();
            //retrive data from localstorage
            const questionObj = JSON.parse(localStorage.getItem("item"+quiz_id));
            // 
            document.getElementById("question-number").innerHTML=  questionObj.id + " out of "+ total_quiz;

            $('#question-text').html(questionObj.question);
            question[quiz_id-1] = questionObj.question;

            document.getElementById("option-1-text").innerHTML = questionObj.options[0];
            document.getElementById("option-2-text").innerHTML = questionObj.options[1];
            document.getElementById("option-3-text").innerHTML = questionObj.options[2];
            document.getElementById("option-4-text").innerHTML = questionObj.options[3];
            question[quiz_id-1] = questionObj.question;
        }
    });
  }

  function load_previous(){
    previousBtn();
    $('#quiz_form')[0].reset();

    set_timer();
    const questionObj = JSON.parse(localStorage.getItem("item"+quiz_id));
    // console.log(questionObj);
    document.getElementById("question-number").innerHTML= questionObj.id + " out of "+ total_quiz;
    console.log("question object");

    $('#question-text').html(questionObj.question);
    document.getElementById("option-1-text").innerHTML = questionObj.options[0];
    document.getElementById("option-2-text").innerHTML = questionObj.options[1];
    document.getElementById("option-3-text").innerHTML = questionObj.options[2];
    document.getElementById("option-4-text").innerHTML = questionObj.options[3];

    $('input[name="option"]').each(function(index) {
      if ($(this).siblings('span').text() == answers_selected[quiz_id-1]) {
        console.log(answers_selected[quiz_id-1]);
        $('#option-' + (index+1)).prop('checked', true);
      }
    });
  }

  function backTrack() {
    console.log("Backtracking Function initiated");
    console.log("time consumed = "+timer_array[quiz_id-1]+ " by quiz id " + quiz_id);

    for (let i = quiz_id; i >= 1; i--) {
      console.log("For loop itiration i-" +i);
      if (timer_array[i - 1] < total_time_per_quiz) {
        quiz_id = i;
        console.log("quiz id found-"+quiz_id+ "value of i-" +i);
        load_previous();
        return;
      }
    }
    --quiz_id;
    document.getElementById('next').click();
    return;
  }

  function set_timer() {
    if(!startPreview){
      time = timer_array[quiz_id-1];

      // start timer only if time is less than or equal to 15
      if (time <= total_time_per_quiz) {
        intervalID = setInterval(() => {
          time++;
          document.getElementById('timer').innerHTML = time;

          // stop timer and go to next question when time is up
          if (time >= total_time_per_quiz) {
            timer_array[quiz_id-1] = time;
            clearInterval(intervalID);
            document.getElementById('next').click();
          }
        }, 500);
      }
      else {
        document.getElementById('next').click();
        return;
      }
    }
  }


  function save_clicked_radiobutton(){
    var selectedValue;
    var selectedOption = $("input[name='option']:checked");
    if (selectedOption.length > 0) {
      selectedValue = selectedOption.siblings('span').text();
    } 
    // alert(selectedValue);
    console.log(selectedValue);
    answers_selected[quiz_id-1] = selectedValue;
    selectedOption.prop("checked", false);
    return;
  }

  function quiz_result() {
    var count=0;
    var blank=0;
    var q_ids = Array();
    for (let i = 0; i < total_quiz; i++){
      const questionObj = JSON.parse(localStorage.getItem("item"+(i+1)));

      if(questionObj.answer == answers_selected[i]){
        correct_questions++;
        count++;
      }
      else if(typeof answers_selected[i] == "undefined"){
        blank++;
      }
    }
    var time_taken = timer_array.reduce((accumulator, currentValue) => accumulator + currentValue, 0);
    
    console.log(blank);
    attempted_questions = total_quiz - blank; 

    for (var i = 1; i <= total_quiz ; i++){
      const questionObj = JSON.parse(localStorage.getItem("item"+i));
      q_ids.push(questionObj.id);
    }
    console.log("question ids to be sent to db: "+q_ids +"answers selected: "+answers_selected);
    // console.log(answers_selected);
    $.ajax({
      url: "<?php  echo base_url(); ?>Quiz_controller/save_result",
      type: "POST",
      dataType: "json",
      data: {
        total_quiz,
        attempted_questions: attempted_questions,
        correct_questions: correct_questions,
        time_taken: time_taken,
        q_ids,
        answers_selected,
        timer_array
      },
      success: function(data){
        console.log("Quiz result saved to database");
        console.log(data);
         
      }
    });

  }

  function show_result(){
    // $("#exit_quiz").hide();
    $("#exit_quiz").show();
    $("#preview-status").hide();
	
		$("#result_table").show();
    var sessionData = <?php echo json_encode($this->session->userdata()); ?>;

	  var newRow = 
    "<tr><td>" + sessionData.name + "</td><td>" + sessionData.email + "</td><td>" + total_quiz + "</td><td>" + attempted_questions + "</td><td>" + correct_questions + "</td><td>" + calculate_time() + "</td></tr>";
    $("#result_table tbody").append(newRow); 
  }

  function calculate_time(){
    var start_time = "<?php echo $this->session->userdata('start_time'); ?>";
    // Get client's timezone offset in minutes
    var timezone_offset = new Date().getTimezoneOffset();
    // Convert timezone_offset to milliseconds
    var offset_ms = timezone_offset * 60 * 1000;
    // Adjust start_time by adding the offset
    var adjusted_start_time = new Date(new Date(start_time).getTime() + offset_ms);

    // Calculate the elapsed time in seconds
    var elapsed_time = Math.floor((new Date() - adjusted_start_time) / 1000);

    return elapsed_time;
  }

  function load_preview(){
    previousBtn();
    $('#quiz_form')[0].reset();
    if(quiz_id > total_quiz){
      return;
    }
    time = timer_array[quiz_id-1];
    // document.getElementById('timer').innerHTML = time;

    const questionObj = JSON.parse(localStorage.getItem("item"+quiz_id));
    // console.log(questionObj);
    document.getElementById("question-number").innerHTML= questionObj.id + " out of "+ total_quiz;

    console.log("loading first preview");

    $('#question-text').html(questionObj.question);
    document.getElementById("option-1-text").innerHTML = questionObj.options[0];
    document.getElementById("option-2-text").innerHTML = questionObj.options[1];
    document.getElementById("option-3-text").innerHTML = questionObj.options[2];
    document.getElementById("option-4-text").innerHTML = questionObj.options[3];

    $('input[name="option"]').each(function(index) {
      if ($(this).siblings('span').text() == answers_selected[quiz_id-1]) {
        console.log(answers_selected[quiz_id-1]);
        $('#option-' + (index+1)).prop('checked', true);
      }
    });
    document.getElementById('timer').innerHTML = time;

    highlightAnswers();
    submitBtn();
    return;
  }

  function preview(){
    $("#quiz_form").show();
    startPreview = true;
    quiz_id = 1;
    console.log(quiz_id);

    if(quiz_id ==1 ){
     $("#previous").hide();
    }

    // console.log(quiz_id);
    if(quiz_id > total_quiz){
      return;
    }
    load_preview();
  }
  function previousBtn(){
    if(quiz_id <= 1){
      console.log('Method to hide previous button.');
      if(!$('#previous').hasClass('d-none'))
      {
        $('#previous').addClass('d-none');
      }
    }
    else{
      if($('#previous').hasClass('d-none'))
      {
        $('#previous').removeClass('d-none');
      }
    }

  }

  function submitBtn(){
    if(startPreview){
      $('#next').text('Next');
      return;
    }
    else if(quiz_id > total_quiz-2){
      // console.log(quiz_id, total_quiz);
      console.log("show if it is  submit");
      $('#next').text('Submit');
      return;
    }
    else{
      console.log(quiz_id, total_quiz);
      console.log("show if it is next");
      $('#next').text('Next');
      return;
    }
  }

  function highlightAnswers() {
    $('input[type=radio]').next('span').removeClass('correct incorrect');
    // $('input[type=radio]').next('span').removeClass('incorrect');

    const questionObj = JSON.parse(localStorage.getItem("item"+quiz_id));
    var selected = answers_selected[quiz_id-1];
    var correct = questionObj.answer;

    if (selected == correct) {
      $('span:contains("' + selected + '")').addClass('correct');
    } else {
      $('span:contains("' + selected + '")').addClass('incorrect');
      $('span:contains("' + correct + '")').addClass('correct');
    }
  }

</script>

</body>
</html>