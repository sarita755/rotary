<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.0.min.js"></script>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

</head>
<body>







    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#testModal">
      Launch demo modal
    </button>

    <!-- Modal -->
    <!-- The Modal -->
      <div class="modal fade" id="testModal">
        <div class="modal-dialog">
          <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
              <h4 class="modal-title">Modal Heading</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
              <form id="addform">
                {{csrf_field()}}
                             <div class="form-group">
                                    <label>Name</label>
                                   <input type="text" name="name"  class="form-control">
                              </div>

            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                                   <button type="submit" class="btn btn-primary">Save</button>
              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>

                </form>
          </div>
        </div>
      </div>











     <table id="testData" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>

                    </tr>
                    </thead>
                    <tbody >

                    @foreach ($tests as $test)
                        <tr>
                            <td>{{$test->id }}</td>
                            <td>{{$test->name }}</td>

                            <td>

                                <button type="button" class="btn btn-primary edit"   data-toggle="modal" data-target="#editModal">
                                    <i class="fa fa-pencil-square-o" aria-hidden="true"> </i> Edit</button>



                                <a href="" class="btn btn-danger delete"> <i class="fa fa-trash-o" aria-hidden="true"> </i> Delete</a>

                        </tr>
                    @endforeach
                    </tbody>
                    <tfoot>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>


                    </tr>
                    </tfoot>
                </table>












<script
  src="https://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>




<script type="text/javascript">
  $(document).ready(function(){
    $('#none').on('submit',function(e){
       e.preventDefault();
         $.ajax({
         method: 'POST',
          url:'testadd',
          data:$('#addform').serialize(),
          success:function (response){
                alert('Data Saved');
              },
              error:function(error){
                alert('Data Not Saved');
             $('#testModal').modal('close');
            $("#testData").find("tbody").empty(); //clear all the content from tbody here.
              $.each(response, function (index, itemData) {
                   /*do stuff*/
                   $("#testData").find("tbody").append("<tr><td>" + response.id + "</td><td>" + response.name + "</td></tr>");
              });
          }
       });
    });

    $("#addform").submit(function(e){
            e.preventDefault();

        var formdata = new FormData(this);

            $.ajax({
                url: "ajax_upload_image.php",
                type: "POST",
                data: formdata,
                mimeTypes:"multipart/form-data",
                contentType: false,
                cache: false,
                processData: false,
                success: function(){
                    alert("file successfully submitted");
                },error: function(){
                    alert("okey");
                }
             });
          });
        });

  });
</script>





</body>
</html>

