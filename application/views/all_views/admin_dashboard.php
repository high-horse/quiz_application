<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.1/js/bootstrap.bundle.min.js"></script>

  <!-- datatable cdn  -->
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" />
  <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>

    <style>
    @media (min-width: 576px){
      .modal-dialog {
        max-width: 800px;
        margin: 1.75rem auto;
      }
    }
  </style>


    <title>Admin Dashboard</title>
</head>
<body style="background-color: #800080;">

<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-12 mt-5">
    <button type="button" id="exit_quiz" class="btn btn-danger" data-dismiss="modal" onclick="window.location.href='<?php echo base_url('admin_controller/logout'); ?>'">Log Out</button>

      <div class="card">
        <div class="card-header">
          <legend class="text-center"><b>Admin Dashboard</b></legend>
        </div>

        <div class="card-body table-responsive-sm table-responsive-md table-responsive-lg">
          <!-- Your content here -->
          <table class="table table-striped ">
            <thead>
                <tr>
                <th scope="col">ID</th>
                <th scope="col">Username</th>
                <th scope="col">Email</th>
                <th scope="col">Total Questions</th>
                <th scope="col">Attempted Questions</th>
                <th scope="col">Correct Questions</th>
                <th scope="col">Time Taken (sec)</th>
                <th scope="col">Preview</th>
                </tr>
            </thead>
            <tbody id="tbody">

            </tbody>
            </table>

        </div>
      </div>

      <!-- Modal -->
      <div class="modal fade" id="preview-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel"> </h5>
            </div>
            <div class="modal-body">
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th scope="col-3">SN</th>
                    <th scope="col-3">Question</th>
                    <th scope="col-3">Correct Answer</th>
                    <th scope="col-3">Selected Answer</th>
                    <th scope="col-3">Time Taken</th>
                  </tr>
                </thead>
                <tbody>
                <tbody id="tbody-preview">
                </tbody>
              </table>
            


            </div>
            <div class="modal-footer">
              <button type="button" id = "close" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
            </div>
          </div>
        </div>
      </div>
    
  </div>
</div>



<script>
  var $j = jQuery.noConflict();
  $(document).ready(function(){
    $('#preview-modal').modal('hide');
    // $('.preview-modal').hide();
    fetch();
  });


   function fetch() {
    $j('.table-striped').DataTable({
        "ajax": {
            "url": "<?php echo base_url(); ?>admin_controller/fetch_all_data",
            "type": "POST",
            "dataType": "json",
            "dataSrc": ""
        },
        "columns": [
            {"data": "sn"},
            {"data": "name"},
            {"data": "email"},
            {"data": "total_question"},
            {"data": "attempted_question"},
            {"data": "correct_question"},
            {"data": "time_taken"},
            {"render": function (data, type, row) {
                return '<button href="#" class="preview btn btn-primary btn-sm" onclick="get_sn(' + row.sn + ')">Preview</button>';
            }}
        ]
    });
}

  // function fetch(){
  //   console.log("fetch finction");
  //   $.ajax({
  //     url: "<?php echo base_url(); ?>admin_controller/fetch_all_data",
  //     type: "POST",
  //     dataType: "json",
  //     success: function(data){
  //       console.log("from success");
  //       console.log(data);

  //       var i = 1;
  //           for (var key in data) {
  //                   tbody += "<tr>";
  //                   tbody += "<td>" + i++ + "</td>";
  //                   tbody += "<td>" + data[key]['name'] + "</td>";
  //                   tbody += "<td>" + data[key]['email'] + "</td>";
  //                   tbody += "<td>" + data[key]['total_question'] + "</td>";
  //                   tbody += "<td>" + data[key]['attempted_question'] + "</td>";
  //                   tbody += "<td>" + data[key]['correct_question'] + "</td>";
  //                   tbody += "<td>" + data[key]['time_taken'] + "</td>";
  //                   tbody += `<td> 
  //                     <button  href="#" class="preview btn btn-primary btn-sm" 
  //                     onclick = 'get_sn(${data[key]['sn']})'>Preview</button >
  //                   </td>`;

  //               }

  //               $("#tbody").html(tbody);

  //       }
  //     });
  //   }  

    function get_sn(id){
      // return id;
      $('#preview-modal').modal('show');
      // var buttonValue = $('.preview').val();
      load_preview(id);
    }

    $(document).on("click", "#close", function(e){
      e.preventDefault();
      $('#preview-modal').modal('hide');
    });

    function load_preview(id){
      console.log(id);
      $.ajax({
        url : "<?php echo base_url(); ?>Admin_controller/preview",
        type: "POST",
        dataType: "json",
        data: { id },

        success: function(data){
          // console.log(data);
          // select the modal title element by its ID and update the text
          $("#exampleModalLabel").text("Name: "+data['name']);

          var tbody ="";
            console.log(data);
            var long = data['question'].length;
            // console.log();

            for (var i=0; i<long; i++) {
                    tbody += "<tr>";
                    tbody += "<td>" + parseInt(i+1) + "</td>";
                    tbody += "<td class='col-6'>" + data['question'][i] + "</td>";
                    tbody += "<td class='col-2'>" + data['answer'][i] + "</td>";
                    tbody += "<td class='col-2'>" + data['selected_answer'][i] + "</td>";
                    tbody += "<td class='col-2'>" + data['time'][i] + "</td>";

                    var highlightedRow = highlightRow(data['answer'][i], data['selected_answer'][i]);
                    tbody = tbody.replace("<tr>", '<tr style="' + highlightedRow + '">');

                    
                };
                $("#tbody-preview").html(tbody); 
          }   
        
   
      });
    }


    function highlightRow(correctAns, selectedAns) {
    console.log("Correct answer and selected answer are: ", correctAns, selectedAns);
    if (correctAns === selectedAns) {
      console.log("inside highlight row 1");
      return "background-color: lightgreen";
    } 
    else if(selectedAns == "") {
      return "background-color: #E5E4E2";
    }
    else {
      console.log("inside highlight row 2");
      return "background-color: #FF7377";
    }
  }


</script>

<script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>

</body>
</html>