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

    <title>Document</title>
</head>
<body style="background-color: #800080;">
<div class="container mt-5">
    <div class="d-flex justify-content-center row">

    <form action="" id="quiz_form">

        <div class="question bg-white p-3 border-bottom">
        <div class="d-flex flex-row justify-content-between align-items-center mcq">
            <div id="question" class="d-flex flex-row align-items-center">
            <label for="question-number w-100">Q.No:</label>  
            <span id="question-number" name="question-number" class="form-control outline-none border-0" min="1" max="10" value=""></span>
            </div>
        </div>
        </div>

        <div class="question bg-white p-3 border-bottom">
        <div class="d-flex flex-row align-items-center question-title">
            <h3 class="text-danger">Q.</h3>
            <h5 class="mt-1 ml-2" id="question-text"></h5>
        </div>

        <div class="ans ml-2 position-relative">
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


    </div>
</div>



<script>

// document.getElementById("question-number").innerHTML= 1;

// $('#question-text').html(data.question);
document.getElementById("option-1-text").innerHTML = "Paris";
document.getElementById("option-2-text").innerHTML = "Berlin";
document.getElementById("option-3-text").innerHTML = "London";
document.getElementById("option-4-text").innerHTML = "Rome";

// var selectedAnswer = $('input[name=option]:checked').val();
// var correctAnswer = // your correct answer value here;

// get the answer box element
// var answerBox = $('#option-1 .box');

// // check if the selected answer is correct
// if (selectedAnswer == correctAnswer) {
//   // if the selected answer is correct, change the box color to green
//   answerBox.css('background-color', 'green');
// } else {
//   // if the selected answer is incorrect, change the box color to red
//   answerBox.css('background-color', 'red');
// }





// if (selectedAnswer === correctAnswer) {
//     // show green check mark icon
//     $selectedAnswerIcon.show();
// } else {
//     // show red X icon
//     $selectedAnswerIcon.next().show();
// }
// // show correct answer text in green color as a tooltip
// $correctAnswerText.text(correctAnswer).show();
</script>

<script>
// $(document).ready(function(){
$('#next').click(function(){



    // Sample arrays of correct and selected answers
    var correctAnswers = [ "London", "Mount Everest", "Russia", "Alexander Graham Bell", "Bengal Tiger", "Yen", "Pacific Ocean", "Giraffe", "Jupiter", "Harper Lee" ];
    var selectedAnswers = [ "London", "Mount Everest", "United States", "Alexander Graham Bell", "Bengal Tiger", "Pound", "Indian Ocean", "Hippopotamus", "Saturn", "Mark Twain" ];
    // highlightAnswers();
    // Function to highlight answer boxes based on correct/incorrect answers
    var correct = "Paris";
    var selected = "London";



    // if (selected === correct) {
    //     $('input[id=option-'+selected+']').next('span').addClass('correct');
    // } else if (selected !== '') {
    //     $('input[id=option-'+correct+']').next('span').addClass('correct');
    //     $('input[id=option-'+selected+']').next('span').addClass('incorrect');
    // }
    if (selected == correct) {
        $('input[type=radio]:checked').next('span').addClass('correct');
    } else if (selected != '') {
        $('input[type=radio]:checked').next('span').addClass('incorrect');
        $('input[id=option-' + correct + ']').next('span').addClass('correct');
    }else{
        $('input[id=option-' + correct + ']').next('span').addClass('correct');
    }
    // function highlightAnswers() {
    // // Loop through all radio inputs
    // $('input[type=radio]').each(function(index) {
    //     // Get the index of the option
    //     var option = $(this).attr('id').split('-')[1];
    //     // Get the selected answer for the current question
    //     var selected = selectedAnswers[index];
    //     // Get the correct answer for the current question
    //     var correct = correctAnswers[index];
    //     // Check if the selected answer is correct
    //     if (selected == correct) {
    //         // If yes, add a 'correct' class to the corresponding span element
    //         $(this).next('span').addClass('correct');
    //     } else if (selected != '') {
    //         // If no, add an 'incorrect' class to the corresponding span element
    //         $(this).next('span').addClass('incorrect');
    //         // Add a 'correct' class to the span element for the correct answer
    //         $('input[id=option-'+correct+']').next('span').addClass('correct');
    //     }
    // });
// }


    // Call the function on page load
    // highlightAnswers();

});
</script>

<style>
    .correct { color: green; }
    .incorrect { color: red; }
</style>


</body>
</html>