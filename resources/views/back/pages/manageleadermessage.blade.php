@extends('back.layouts.main')

@section('content')
  
   
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal"> <i class="fa fa-plus" aria-hidden="true"> </i> Add Leader Message</button>
             <div class="box">
  
    <h3> All Leaders Message</h3>
  
        <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog">

                <!-- add about-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title" align="center">Add Leader Message</h4>
                    </div>
                    <div class="modal-body">

                        <form role="form" method="post" action="{{route('storeleadermessage')}}" enctype="multipart/form-data">
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
                            

                            <div class="form-group{{$errors->has('post')?'has-error':''}}">
                                <label>Post:</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-id-card"></i>
                                    </div>
                                    <input type="text" class="form-control" name="post" placeholder="Enter your Post" required>
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
                                        <i class="fa fa-graduation-cap"></i>
                                    </div>
                                    <input type="text" class="form-control" name="name" placeholder="Enter your Name" required>
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
                                <label>Leader's Image:</label>
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
                            
                           
                            
                        <label>Message</label>
                             <textarea name="Message"></textarea>
                             <script>
                                CKEDITOR.replace( 'Message' );
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
                        <th>Post</th>
                        <th>Name</th>
                        <th>Leader's Image</th>
                        <th>Message</th>
                        <th>Operations</th>

                    </tr>
                    </thead>
                    <tbody>


                    @foreach ($leadermessages as $leadermessage)
                        <tr align="center">
                            <td>{{$loop->iteration }}</td>
                            <td>{{$leadermessage->date}}</td>
                            <td>  {{str_limit($leadermessage->post)}}</td>
                            <td>  {{str_limit($leadermessage->name)}}</td>
                            <td><img  src="{{asset('image/leadermessage/'.$leadermessage->image)}}"  width="70px" height="70px;">  </td>
                            <td>{{  html_entity_decode(strip_tags(str_limit($leadermessage->Message,200))) }}</td>
                            
                            <td>

                                <button type="button" class="btn btn-primary edit" value="{{$leadermessage->id }}"  data-toggle="modal" data-target="#editModal">
                                    <i class="fa fa-pencil-square-o" aria-hidden="true"> </i> Edit</button>



                                
                                <button type="button" class="btn btn-danger delete" value="{{$leadermessage->id }}"   data-toggle="modal" onclick="return confirm('Are you sure?')">
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
                            <h1>Update Leader Message</h1>
                             
                            <div class="form-group{{$errors->has('date')?'has-error':''}}">
                                <label>Date:</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <input type="text" name="date" id="date"  class="form-control">
                                </div>
                                <div>
                                    @if($errors->has('date'))
                                        <span class="help-block">
                                    <span>{{$errors->first('date')}}</span>
                                </span>
                                    @endif
                                </div>
                            </div>



                            <div class="form-group{{$errors->has('post')?'has-error':''}}">
                                <label>Post:</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-graduation-cap"></i>
                                    </div>
                                    <input type="text" class="form-control" name="post" id="post" placeholder="Enter your post" required>
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
                                <label> Name:</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-user"></i>
                                    </div>
                                    <input type="text" class="form-control" name="name" id="name" placeholder="Enter The name" required>
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
                                <label>Leader's Image:</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-file-image-o"></i>
                                    </div>
                                    <input type="file" class="form-control" name="image">
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

                            <label>Message:</label>
                            <div class="form-group">
                                <textarea name="Message" type="text" id="Message" > </textarea>
                                       <script>
                                            CKEDITOR.replace( 'Message' );
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
                        url: `edit-leadermessage/${id}`,
                        success: function(data){  
                            $('#date').val(data.date);
                            $('#post').val(data.post);
                            $('#name').val(data.name);
                            $('#fectchimage').html("<img src={{ URL::to('/') }}/image/leadermessage/" + data.image + " width='70' />");
                            CKEDITOR.instances['Message'].setData(data.Message);
                            $('form[name="updateform"]').attr('action', `update-leadermessage/${data.id}`);
                            
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
                        url: `delete-leadermessage/${id}`,
                        success: function(data){
                              location.reload();
                                      }

                    });
                });
            });
        </script>

@endsection
