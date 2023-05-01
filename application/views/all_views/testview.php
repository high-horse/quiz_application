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

       .box {
        position: absolute;
        left: 0;
        top: 50%;
        left:8px;
        transform: translateY(-50%);
        width: 150px;
        height: 20px;
        /* background-color: blue; */
        border:2px solid;
        border:none;
        z-index: 0;
        padding:2px;
}


    </style>
    <title>Document</title>
</head>

<body style="background-color: #800080;">
<div class="container mt-5">
  <div class="d-flex justify-content-center row">
    <div class="col-md-10 col-lg-10">
      <!-- <div class="border"> -->
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

          <div class="ans ml-2 position-relative">
            <label class="radio">
              <input type="radio" name="option" value="" id="option-1">
              <span id="option-1-text"></span>
              <!-- here  -->
              <div class="d-inline box mx-2 px-2"></div>
            </label>
          </div>

          <div class="ans ml-2">
            <label class="radio">
              <input type="radio" name="option" value="" id="option-2">
              <span id="option-2-text"></span>
              <div class="d-inline box mx-2 px-2"></div>
            </label>
          </div>

          <div class="ans ml-2">
            <label class="radio">
              <input type="radio" name="option" value="" id="option-3">
              <span id="option-3-text"></span>
              <div class="d-inline box mx-2 px-2"></div>
            </label>
          </div>

          <div class="ans ml-2">
            <label class="radio">
              <input type="radio" name="option" value="" id="option-4">
              <span id="option-4-text"></span>
              <div class="d-inline box mx-2 px-2"></div>
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

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                ...
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
              </div>
            </div>
          </div>
        </div>

      </div>
    <!-- </div> -->
  </div>
</div>



<script>


document.getElementById("question-number").innerHTML= 1;

// $('#question-text').html(data.question);
document.getElementById("option-1-text").innerHTML = "data.options[0]";
document.getElementById("option-2-text").innerHTML = "data.options[1]";
document.getElementById("option-3-text").innerHTML = "data.options[2]";
document.getElementById("option-4-text").innerHTML = "data.options[3]";

</script>

<script>
$("#next").click(function() {
  $("#quiz_form").hide();
  $("#exampleModal").modal('show');

});
</script>


     
<script>
    
// $(document).ready(function() {

//   $("#next").click(function() {
//     console.log("clicked");
//     $('.box').css('border', '2px solid blue');    
//   });

//   $("#previous").click(function() {
//     console.log("clicked");
//     $('.box').css('border', '2px solid red');    
//   });

// });
</script>
</body>
</html>
