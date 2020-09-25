@extends('back.layouts.main')

@section('content')
    
    
    
    <h3 align="center" style="color:blue;"> All Projects</h3> 
    <div class="box">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal"> <i class="fa fa-plus" aria-hidden="true"> </i> Create Project</button>

        <!-- Modal -->
        <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog">

                <!-- add about-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title" align="center">Create Project</h4>
                    </div>
                    <div class="modal-body">

                        <form role="form" method="post" action="{{route('storefile')}}" enctype="multipart/form-data">
                            @csrf



                            
                        <div class="form-group{{$errors->has('date')?'has-error':''}}">
                            <label>Date:</label>
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                </div>
                                <input type="date" class="form-control" name="date" value={{ date('Y-m-d H:i:s') }} required>
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
                                    <input type="text" class="form-control" name="name" placeholder="Enter The File Name" required>
                                </div>
                                <div>
                                    @if($errors->has('name'))
                                        <span class="help-block">
                                    <span>{{$errors->first('name')}}</span>
                                </span>
                                    @endif
                                </div>
                            </div>
 
 
 
                        <div class="form-group">
                    <label>Service Project :</label>
                            <div class="input-group">
                            <div class="input-group-addon">
                                    <i class="fa fa-picture-o"></i>
                                </div>
                    <select class="form-control" name="protype" required>
                    <option disabled selected>Select Project</option>
                        <option value="Health">Heath</option>
                        <option value="Education">Education</option>
                        <option value="water">Water</option>
                        <option value="Community">Community</option>
                    </select>
                    @if($errors->has('protype'))
                       <span class="alert-danger">{{$errors->first('protype')}}</span>
                    @endif
                </div>
</div>

                            <div class="form-group{{$errors->has('file')?'has-error':''}}">
                                <label>File:</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-file"></i>
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


                            <label>Message</label>
                             <textarea name="Description" type="text"  > </textarea>
                                                      <script>
                                                        CKEDITOR.replace( 'Description' );
                                                      </script>
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

        <div class="box">
 <!-- /.box-header -->
            <div class="box-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr align="center">
                        <th>S.N</th>
                      <th>Date</th>
                      <th>Project Name</th>
                        <th>Service Project</th>
                        <th>File</th>
                        <th>Description</th>
                        <th> Operations</th>
                    </tr>
                    </thead>
                    <tbody>

              @foreach ($files as $file)
                  <tr align="center">
                      <td>{{$loop->iteration }}</td>
                      <td>{{$file->date}}</td>
                      <td>{{$file->name }}</td>
                      <td>{{$file->protype }}</td>
                      <td>{{  html_entity_decode(strip_tags(str_limit($file->Description,55))) }}</td>

                      <td align="center">

                           <button type="button" class="btn btn-primary edit" value="{{$file->id}}"  data-toggle="modal" data-target="#editModal">
                                    <i class="fa fa-pencil-square-o" aria-hidden="true"> </i> Edit</button>


                          <button onClick="delete()"> <a href="{{route('delete-file',$file->id)}}" class="btn btn-danger"> <i class="fa fa-trash-o" aria-hidden="true"> </i> Delete</a></button>

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
                            
                            
                            
                               
                        <div class="form-group{{$errors->has('date')?'has-error':''}}">
                            <label>Date:</label>
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                </div>
                                <input type="date" class="form-control" name="date"  id="date" value={{ date('Y-m-d H:i:s') }} required>
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
                                <label>File Name:</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-user"></i>
                                    </div>
                                    <input type="text" class="form-control" name="name" id="name" placeholder="Enter The File Name" required>
                                </div>
                                <div>
                                    @if($errors->has('name'))
                                        <span class="help-block">
                                    <span>{{$errors->first('name')}}</span>
                                </span>
                                    @endif
                                </div>
                            </div>
 
 
 
                        <div class="form-group">
                    <label>Service Project :</label>
                            <div class="input-group">
                            <div class="input-group-addon">
                                    <i class="fa fa-picture-o"></i>
                                </div>
                    <select class="form-control" name="protype" id="protype" required>
                        <option disabled selected>Select Project</option>
                        <option value="Health">Heath</option>
                        <option value="Education">Education</option>
                        <option value="water">Water</option>
                        <option value="Community">Community</option>
                    </select>
                    @if($errors->has('protype'))
                       <span class="alert-danger">{{$errors->first('protype')}}</span>
                    @endif
                </div>
                </div

                            <div class="form-group{{$errors->has('file')?'has-error':''}}">
                                <label>File:</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-file"></i>
                                    </div>
                                    <input type="file" class="form-control" name="file" id="file" required>
                                </div>
                                <div>
                                    @if($errors->has('file'))
                                        <span class="help-block">
                                    <span>{{$errors->first('file')}}</span>
                                </span>
                                    @endif
                                </div>
                            </div>



                            <label>Message</label>
                            <div class="form-group">
                                <textarea name="Description" type="text" id="Description" > </textarea>
                                       <script>
                                            CKEDITOR.replace( 'Description' );
</script>

                            </div>
                            



                        </div


                            
                            
                            <div class="form-group center"> 
                                              
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
                        url: `/edit-file/${id}`,
                        success: function(data){
                            $('#name').val(data.name);
                            CKEDITOR.instances['Description'].setData(data.Description);
                            $('#protype').val(data.protype);
                            $('#date').val(data.date);
                            $('form[name="updateform"]').attr('action', `/update-file/${data.id}`);
                        }

                    });
                });
            });


        </script>

       
       
       
       
       
       
       
       


@endsection