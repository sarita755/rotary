@extends('back.layouts.main')

@section('content')

    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal"> <i class="fa fa-plus" aria-hidden="true"> </i> Add past president</button>
             <div class="box">
  
    <h3> All Past Presidents</h3>

         
        
        <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog">

                <!-- add about-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title" align="center">Add past president council</h4>
                    </div>
                    <div class="modal-body">

                        <form role="form" method="post" action="{{route('storecouncil')}}" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group{{$errors->has('year')?'has-error':''}}">
                                <label>Ri-Year:</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-user"></i>
                                    </div>
                                    <input type="text" class="form-control" name="year" placeholder="Enter The ri year" required>
                                </div>
                                <div>
                                    @if($errors->has('year'))
                                        <span class="help-block">
                                    <span>{{$errors->first('year')}}</span>
                                </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{$errors->has('post')?'has-error':''}}">
                                <label>Post:</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-user"></i>
                                    </div>
                                    <input type="text" class="form-control" name="post" placeholder="Enter The person's post" required>
                                </div>
                                <div>
                                    @if($errors->has('post'))
                                        <span class="help-block">
                                    <span>{{$errors->first('post')}}</span>
                                </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{$errors->has('name')?'has-error':''}}">
                                <label>Name:</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-user"></i>
                                    </div>
                                    <input type="text" class="form-control" name="name" placeholder="Enter The name" required>
                                </div>
                                <div>
                                    @if($errors->has('name'))
                                        <span class="help-block">
                                        <span>{{$errors->first('name')}}</span>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{$errors->has('Designation')?'has-error':''}}">
                                <label>Designation:</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-user"></i>
                                    </div>
                                    <input type="text" class="form-control" name="Designation" placeholder="Enter The name" required>
                                </div>
                                <div>
                                    @if($errors->has('Designation'))
                                        <span class="help-block">
                                        <span>{{$errors->first('Designation')}}</span>
                                        </span>
                                    @endif
                                </div>
                            </div>





                            <div class="form-group{{$errors->has('image')?'has-error':''}}">
                                <label>Image:</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-file-image-o"></i>
                                    </div>
                                    <input type="file" class="form-control" name="image"  required>
                                </div>
                                <div>
                                    @if($errors->has('image'))
                                        <span class="help-block">
                                        <span>{{$errors->first('image')}}</span>
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
                        <th>S.N</th>
                        <th>Ri-Year</th>
                        <th>Post</th>
                        <th>Name</th>
                        <th>Designation</th>
                        <th>Image</th>
                        <th>Operations</th>

                    </tr>
                    </thead>
                    <tbody>


                    @foreach ($councils as $council)
                        <tr align="center">
                            <td>{{$loop->iteration }}</td>
                            <td>{{$council->year}}</td>
                            <td>{{$council->post }}</td>
                            <td>{{$council->name }}</td>
                            <td>{{$council->Designation }}</td>
                            <td><img  src="{{asset('image/council/'.$council->image)}}"  width="70px" height="70px;"> </td>




                            <td>

                                <button type="button" class="btn btn-primary edit" value="{{$council->id }}"  data-toggle="modal" data-target="#editModal">
                                    <i class="fa fa-pencil-square-o" aria-hidden="true"> </i> Edit</button>



                                
                                <button type="button" class="btn btn-danger delete" value="{{$council->id }}"   data-toggle="modal" onclick="return confirm('Are you sure?')">
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
                            <h1>Update</h1>

                            <div class="form-group{{$errors->has('year')?'has-error':''}}">
                                <label>Ri-Year:</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-user"></i>
                                    </div>
                                   <input type="text" name="year" id="year"  class="form-control">
                                </div>
                                <div>
                                    @if($errors->has('year'))
                                        <span class="help-block">
                                    <span>{{$errors->first('year')}}</span>
                                </span>
                                    @endif
                                </div>
                            </div>
                            
                            
                            
                            
                            <div class="form-group{{$errors->has('post')?'has-error':''}}">
                                <label>Post:</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-user"></i>
                                    </div>
                                   <input type="text" name="post" id="post"  class="form-control">
                                </div>
                                <div>
                                    @if($errors->has('post'))
                                        <span class="help-block">
                                    <span>{{$errors->first('post')}}</span>
                                </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{$errors->has('name')?'has-error':''}}">
                                <label>Name:</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-user"></i>
                                    </div>
                                     <input type="text" name="name" id="name"  class="form-control">
                                </div>
                                <div>
                                    @if($errors->has('name'))
                                        <span class="help-block">
                                        <span>{{$errors->first('name')}}</span>
                                        </span>
                                    @endif
                                </div>
                            </div>


                            <div class="form-group{{$errors->has('Designation')?'has-error':''}}">
                                <label>Designation:</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-user"></i>
                                    </div>
                                     <input type="text" name="Designation" id="Designation"  class="form-control">
                                </div>
                                <div>
                                    @if($errors->has('Designation'))
                                        <span class="help-block">
                                        <span>{{$errors->first('Designation')}}</span>
                                        </span>
                                    @endif
                                </div>
                            </div>





                            <div class="form-group{{$errors->has('image')?'has-error':''}}">
                                <label>Image:</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-file-image-o"></i>
                                    </div>
                                     <input type="file" name="image" id="image"  class="form-control">
                                </div>
                                <div>
                                    @if($errors->has('image'))
                                        <span class="help-block">
                                        <span>{{$errors->first('image')}}</span>
                                        </span>
                                    @endif
                                </div>
                            </div>
                           
                            <div class="form-group">
                                <label   id="fectchimage"> </label>
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
                    //alert('hello');
                    id = $(this).val();
                    $.ajax({
                        method: 'GET',
                        url: `edit-council/${id}`,
                        success: function(data){
                            //alert(data.title);
                            $('#year').val(data.year);
                            $('#post').val(data.post);
                            $('#name').val(data.name);
                            $('#Designation').val(data.Designation);
                             $('#fectchimage').html("<img src={{ URL::to('/') }}/image/council/" + data.image + " width='70' />");
                            $('form[name="updateform"]').attr('action', `update-council/${data.id}`);
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
                        url: `delete-council/${id}`,
                        success: function(data){
                              location.reload();
                                      }

                    });
                });
            });
        </script>
        
        
        
        


@endsection




