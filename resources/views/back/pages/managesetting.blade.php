







@extends('back.layouts.main')

@section('content')


     
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal"> <i class="fa fa-plus" aria-hidden="true"> </i> Add setting</button>
             <div class="box">
  
    <h3> All setting</h3>

        <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog">

                <!-- add about-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title" align="center">Create setting</h4>
                    </div>
                    <div class="modal-body">

                        <form role="form" method="post" action="{{route('storesetting')}}" enctype="multipart/form-data">
                        @csrf


                        <div class="form-group{{$errors->has('title')?'has-error':''}}">
                            <label>Project Category:</label>
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-user"></i>
                                </div>
                                <input type="text" class="form-control" name="pro_category" placeholder="Enter The Project Category" required>
                            </div>
                            <div>
                                @if($errors->has('title'))
                                    <span class="help-block">
                                    <span>{{$errors->first('title')}}</span>
                                </span>
                                @endif
                            </div>
                        </div>

                                 <div class="form-group{{$errors->has('title')?'has-error':''}}">
                            <label>Business Category:</label>
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-user"></i>
                                </div>
                                <input type="text" class="form-control" name="business_category" placeholder="Enter The Business Category" required>
                            </div>
                            <div>
                                @if($errors->has('title'))
                                    <span class="help-block">
                                    <span>{{$errors->first('title')}}</span>
                                </span>
                                @endif
                            </div>
                        </div>


                        

                        
                         <div class="modal-footer">
                              <input type="hidden" name="hidden_id" id="hidden_id"/>
                           
                            <input type="submit" name="action_button" id="action_button" class="btn btn-primary" value="Add Data">

                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </form>

                    </div>
                    
                   
                </div>

            </div>
        </div>







        <div class="box">




            <!-- /.box-header -->
            <div class="box-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Project Category</th>
                        <th>Bisiness Category</th>
                        
                        <th>Operations</th>

                    </tr>
                    </thead>
                    <tbody>
                        
                        @foreach ($Settings as $Setting)
                        <tr align="center">
                            <td>{{$loop->iteration }}</td>
                            <td>{{$Setting->pro_category }}</td>
                            <td>{{$Setting->business_category }}</td>
                           
                            <td align="center">

                            <button type="button" class="btn btn-primary edit" value="{{$Setting->id }}"  data-toggle="modal" data-target="#editModal">
                                <i class="fa fa-pencil-square-o" aria-hidden="true"> </i> Edit</button>

                                
                                
                                
                                <button type="button" class="btn btn-danger delete"    data-toggle="modal" onclick="return confirm('Are you sure?')">
                                <i class="fa fa-pencil-square-o" aria-hidden="true"> </i>   Delete</button>


                        </tr>
                    @endforeach
                    


                    </tbody>
                </table>
            </div>
        </div>


       
       
       
       

        <!-- Modal -->
        <div class="modal fade" id="editModal" role="dialog">
            <div class="modal-dialog">

                <!-- add about-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        
                        
                        
                        
                         <form role="form" method="post" name="updateform"  action="" enctype="multipart/form-data">
                            @csrf
                            {{method_field('PUT')}}
                            <h1>Update </h1>
                            
                            
                            
                            
                            
                              <div class="form-group{{$errors->has('title')?'has-error':''}}">
                            <label>Project Category:</label>
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-user"></i>
                                </div>
                                <input type="text" class="form-control" name="pro_category" id="pro_category" placeholder="Enter The Project Category" required>
                            </div>
                            <div>
                                @if($errors->has('title'))
                                    <span class="help-block">
                                    <span>{{$errors->first('title')}}</span>
                                </span>
                                @endif
                            </div>
                        </div>

                                 <div class="form-group{{$errors->has('title')?'has-error':''}}">
                            <label>Business Category:</label>
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-user"></i>
                                </div>
                                <input type="text" class="form-control" name="business_category" id="business_category" placeholder="Enter The Business Category" required>
                            </div>
                            <div>
                                @if($errors->has('title'))
                                    <span class="help-block">
                                    <span>{{$errors->first('title')}}</span>
                                </span>
                                @endif
                            </div>
                        </div>


                        

                       
                            

                        </div>


                         <div class="modal-footer">
                              <input type="hidden" name="hidden_id" id="hidden_id"/>
                           
                            <input type="submit" name="action_button" id="action_button" class="btn btn-primary" value="Update Data">

                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                        </form>

                    </div>
                </div>

            </div>
        </div>




           <script>
        $(document).ready(function(){
            $(document).on('click', '.edit', function(){
                alert('hello');
                id = $(this).val();
                $.ajax({
                    alert('gg');
                    method: 'GET',
                    url: `/edit-setting/${id}`,
                    success: function(data){
                             
                        $('#pro_category').val(data.pro_category);
                        $('#business_category').val(data.business_category);
                       $('form[name="updateform"]').attr('action', `/update-media/${data.id}`);
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
                        url: `delete-media/${id}`,
                        success: function(data){
                              location.reload();
                                      }

                    });
                });
            });
        </script>
        


@endsection




