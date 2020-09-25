@extends('back.layouts.main')

@section('content')

        
             <div class="box">
  
    <h3> All Contact</h3>
  


        <!-- Modal -->
      <div class="box">




            <!-- /.box-header -->
            <div class="box-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>S.N</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Message</th>
                        <th>Operations</th>
                    </tr>
                    </thead>
                    <tbody>


                    @foreach ($contacts as $contact)
                        <tr align="center">
                            <td>{{$loop->iteration }}</td>
                            <td>{{$contact->name }}</td>
                            <td>{{$contact->email }}</td>
                            <td>{{  html_entity_decode(strip_tags(str_limit($contact->message,16))) }}</td>
                            <td align="center">
                           <button type="button" class="btn btn-danger delete" value="{{$contact->id }}"   data-toggle="modal" onclick="return confirm('Are you sure?')">
                                <i class="fa fa-pencil-square-o" aria-hidden="true"> </i>   Delete</button>


                        </tr>
                    @endforeach
                    </tbody>

                </table>
            </div>
        </div>


        <!-- Modal -->




        <!-- Modal -->
        




        <script>
            $(document).ready(function(){
                $(document).on('click', '.edit', function(){
                    //alert('hello');
                    id = $(this).val();
                    $.ajax({
                        method: 'GET',
                        url: `edit-contact/${id}`,
                        success: function(data){
                            //alert(data.title);
                            $('#name').val(data.name);
                            $('#email').val(data.email);
                           
                            CKEDITOR.instances['msg'].setData(data.Message);
                        }

                    });
                });
            });


        </script>
        
        
        
        
             <script>
                $(document).ready(function(){
                $(document).on('click', '.delete', function(){
                    id = $(this).val();
                    $.ajax({
                        
                        method: 'GET',
                        url: `delete-contact/${id}`,
                        success: function(data){
                              location.reload();
                                      }

                    });
                });
            });
        </script>
        


@endsection




