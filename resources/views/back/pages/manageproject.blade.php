
@extends('back.layouts.main')

@section('content')




    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal"> <i class="fa fa-plus" aria-hidden="true"> </i> Create project</button>
             <div class="box">
  
    <h3> All Project</h3> 
    <!-- Modal -->
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">

            <!-- add about-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title" align="center">Create Project </div>
                <div class="modal-body">

                   <form role="form" method="post" action="{{route('storeproject')}}" enctype="multipart/form-data">
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





                        <div class="form-group{{$errors->has('name')?'has-error':''}}">
                            <label>Project Name:</label>
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
                        
                        <div class="form-group{{$errors->has('image')?'has-error':''}}">
                            <label>Image:</label>
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-file-image-o"></i>
                                </div>
                                <input type="file" class="form-control" name="image" required>
                            </div>
                            <div>
                                @if($errors->has('image'))
                                    <span class="help-block">
                                    <span>{{$errors->first('image')}}</span>
                                </span>
                                @endif
                            </div>
                        </div>




                       

                 
                     <label>Description</label>
                             <textarea name="Description"></textarea>
                             <script>
                                CKEDITOR.replace( 'Description' );
                             </script>
                     
                

                           




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
                    <th>Date</th>
                    <th>Project Name</th>
                    <th>Image</th>
                    <th>Description</th>
                    <th>Operations</th>

                </tr>
                </thead>
                <tbody>

                @foreach ($projects as $project)
                    <tr align="center">
                        <td>{{$loop->iteration }}</td>
                        <td>{{$project->date}}</td>
                        <td>{{str_limit($project->name)}}</td>
                        <td><img  src="{{asset('image/project/'.$project->image)}}"  width="70px" height="70px;"> </td>
                        <td>{{  html_entity_decode(strip_tags(str_limit($project->Description,100))) }}</td>
                        <td>

                            <button type="button" class="btn btn-primary edit" value="{{$project->id }}"  data-toggle="modal" data-target="#editModal">
                                <i class="fa fa-pencil-square-o" aria-hidden="true"> </i> Edit</button>



                            
                            
                                <button type="button" class="btn btn-danger delete" value="{{$project->id }}"   data-toggle="modal" onclick="return confirm('Are you sure?')">
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

                        <div class="form-group{{$errors->has('date')?'has-error':''}}">
                            <label>Date:</label>
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-calender"></i>
                                </div>
                                <input type="date" name="date" id="date"  class="form-control">
                            </div>
                            <div>
                                @if($errors->has('date'))
                                    <span class="help-block">
                                    <span>{{$errors->first('date')}}</span>
                                </span>
                                @endif
                            </div>
                        </div>
                        
                         <div class="form-group{{$errors->has('project')?'has-error':''}}">
                            <label>Project Name:</label>
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-header"></i>
                                </div>
                                <input type="text" name="project" id="project"  class="form-control">
                            </div>
                            <div>
                                @if($errors->has('project'))
                                    <span class="help-block">
                                    <span>{{$errors->first('project')}}</span>
                                </span>
                                @endif
                            </div>
                        </div>
                        

                         <div class="form-group{{$errors->has('image')?'has-error':''}}">
                            <label>Image:</label>
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-image"></i>
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


                        <label>Description</label>
                        <div class="form-group">
                            <textarea name="Description" type="text" id="dsc" > </textarea>
                              <script>
                                              CKEDITOR.replace( 'dsc' );
                              </script>
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
                    url: `edit-project/${id}`,
                    success: function(data){
                        $('#date').val(data.date);
                        $('#name').val(data.name);
                        $('#fectchimage').html("<img src={{ URL::to('/') }}/image/project/" + data.image + " width='70' />");
                        CKEDITOR.instances['dsc'].setData(data.Description);
                       $('form[name="updateform"]').attr('action', `updateproject/${data.id}`);
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
                        url: `delete-project/${id}`,
                        success: function(data){
                              location.reload();
                                      }

                    });
                });
            });
  </script>
        
        
    
    
    



@endsection












