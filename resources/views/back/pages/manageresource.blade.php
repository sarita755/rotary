
@extends('back.layouts.main')

@section('content')




    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal"> <i class="fa fa-plus" aria-hidden="true"> </i> Create Resources</button>
             <div class="box">
  
    <h3> All Resources</h3> 
    <!-- Modal -->
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">

            <!-- add about-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title" align="center">Create Resources </div>
                <div class="modal-body">

                   <form role="form" method="post" action="{{route('storeresource')}}" enctype="multipart/form-data">
                        @csrf


                        <div class="form-group{{$errors->has('date')?'has-error':''}}">
                            <label>Date:</label>
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                </div>
                                <input type="date" class="form-control" name="date"  value={{ date('Y-m-d H:i:s') }} required>
                            </div>
                            <div>
                                @if($errors->has('date'))
                                    <span class="help-block">
                                    <span>{{$errors->first('date')}}</span>
                                </span>
                                @endif
                            </div>
                        </div>




                        <div class="form-group{{$errors->has('title')?'has-error':''}}">
                            <label>Title:</label>
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-user"></i>
                                </div>
                                <input type="text" class="form-control" name="title" placeholder="Enter The title" required>
                            </div>
                            <div>
                                @if($errors->has('title'))
                                    <span class="help-block">
                                    <span>{{$errors->first('title')}}</span>
                                </span>
                                @endif
                            </div>
                        </div>
                        
                        
                          
                        <div class="form-group">
                            <label>Resources :</label>
                            <div class="input-group">
                            <div class="input-group-addon">
                                    <i class="fa fa-picture-o"></i>
                                </div>
                            
                              <select class="form-control" name="type" required>
                                 <option disabled selected> Resources type</option>
                                 <option value="Downloads">Downloads</option>
                                 <option value="Library">Library</option>
                                </select>
                           @if($errors->has('type'))
                           <span class="alert-danger">{{$errors->first('type')}}</span>
                          @endif
                        </div>
                          </div>

                        <div class="form-group{{$errors->has('file')?'has-error':''}}">
                            <label>File:</label>
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-file-image-o"></i>
                                </div>
                                <input type="file" class="form-control" name="file" required>
                            </div>
                            <div>
                                @if($errors->has('file'))
                                    <span class="help-block">
                                    <span>{{$errors->first('file')}}</span>
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
                    <th> Date</th>
                    <th>Title</th>
                    <th>Resources</th>
                    <th>File</th>
                    <th>Operations</th>

                </tr>
                </thead>
                <tbody>

                @foreach ($resources as $resource)
                    <tr align="center">
                        <td>{{$loop->iteration }}</td>
                        <td>{{$resource->date }}</td>
                        <td>{{str_limit($resource->title) }}</td>
                        <td>{{   str_limit($resource->type, 20) }}</td>
                        <td><img  src="{{asset('image/resource/'.$resource->file)}}"  width="70px" height="70px;"> </td>

                       

                        <td>

                            <button type="button" class="btn btn-primary edit" value="{{$resource->id }}"  data-toggle="modal" data-target="#editModal">
                                <i class="fa fa-pencil-square-o" aria-hidden="true"> </i> Edit</button>



                            
                            
                                <button type="button" class="btn btn-danger delete" value="{{$resource->id }}"   data-toggle="modal" onclick="return confirm('Are you sure?')">
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

                        <div class="form-group{{$errors->has('title')?'has-error':''}}">
                            <label>Date:</label>
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-calender"></i>
                                </div>
                                <input type="date" name="date" id="date"  class="form-control">
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
                            <label>Title:</label>
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-header"></i>
                                </div>
                                <input type="text" name="title" id="title"  class="form-control">
                            </div>
                            <div>
                                @if($errors->has('title'))
                                    <span class="help-block">
                                    <span>{{$errors->first('title')}}</span>
                                </span>
                                @endif
                            </div>
                        </div>
                        
                         <div class="form-group{{$errors->has('type')?'has-error':''}}">
                            <label> Resources:</label>
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-newspaper-o"></i>
                                </div>
                                <select class="form-control" name="type" id="type"  required>
                                 <option disabled selected> Select Resources</option>
                                 <option value="Downloads">Downloads</option>
                                 <option value="Library">Library</option>
                                
                                </select>
                            </div>
                            <div>
                                @if($errors->has('type'))
                                    <span class="help-block">
                                    <span>{{$errors->first('type')}}</span>
                                </span>
                                @endif
                            </div>
                        </div>
                        
                        
                        
                        
                        
                         <div class="form-group{{$errors->has('file')?'has-error':''}}">
                            <label>File:</label>
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-image"></i>
                                </div>
                               <input type="file" name="file" id="file"  class="form-control">
                            </div>
                            <div>
                                @if($errors->has('file'))
                                    <span class="help-block">
                                    <span>{{$errors->first('file')}}</span>
                                </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label   id="fectchfile"> </label>
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
                id = $(this).val();
                $.ajax({
                    method: 'GET',
                    url: `edit-resource/${id}`,
                    success: function(data){
                        $('#date').val(data.date);
                        $('#title').val(data.title);
                       $('#type').val(data.type);
                        $('#fectchfile').html("<img src={{ URL::to('/') }}/image/resource/" + data.file + " width='70' />");
                       $('form[name="updateform"]').attr('action', `updateresource/${data.id}`);
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
                        url: `delete-resource/${id}`,
                        success: function(data){
                              location.reload();
                                      }

                    });
                });
            });
        </script>
        
        
    
    
    



@endsection












