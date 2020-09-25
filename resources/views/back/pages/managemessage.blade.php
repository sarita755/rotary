@extends('back.layouts.main')

@section('content')

        
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal"> <i class="fa fa-plus" aria-hidden="true"> </i> Add Message</button>
             <div class="box">
  
    <h3> All Messages</h3>
  


        <!-- Modal -->
        <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog">

                <!-- add about-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title" align="center">Create message</h4>
                    </div>
                    <div class="modal-body">

                        <form role="form" method="post" action="{{route('storemessage')}}" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group{{$errors->has('title')?'has-error':''}}">
                                <label>Post:</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-user"></i>
                                    </div>
                                    <input type="text" class="form-control" name="title" placeholder="Enter The person's post" required>
                                </div>
                                <div>
                                    @if($errors->has('title'))
                                        <span class="help-block">
                                    <span>{{$errors->first('title')}}</span>
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
                                                                 <span>{{$errors->first('title')}}</span>
                                                             </span>
                                                                 @endif
                                                             </div>
                                                         </div>



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







<textarea id="ckview" class="form-control mb-20 editor" name="message" rows="7" cols="20"></textarea>
                                                    <script src="{{asset('assets/ckeditor/ckeditor.js')}}"></script>
                                                    <script>
                                                       var ckview = document.getElementById("ckview");
                                                       CKEDITOR.replace(ckview,{
                                                       language:'en-gb'
                                                     });
                                                    </script>




                         <div class="modal-footer">
                              <input type="hidden" name="hidden_id" id="hidden_id"/>
                           
                            <input type="submit" name="action_button" id="action_button" class="btn btn-primary" value="Add Data">

                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                        </form>

                    </div>
                   >
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
                        <th>Post</th>
                        <th>Name</th>
                        <th> Date</th>
                        <th> Image</th>
                        <th>Message</th>
                        <th>Operations</th>
                    </tr>
                    </thead>
                    <tbody>


                    @foreach ($messages as $message)
                        <tr align="center">
                            <td>{{$loop->iteration }}</td>
                            <td>{{$message->title }}</td>
                            <td>{{$message->name }}</td>
                            <td>{{$message->date }}</td>
                             <td><img  src="{{asset('image/message/'.$message->image)}}"  width="70px" height="70px;"> </td>
                            <td>{{  html_entity_decode(strip_tags(str_limit($message->message,16))) }}</td>




                            <td align="center">
                                <button type="button" class="btn btn-primary edit" value="{{$message->id }}"  data-toggle="modal" data-target="#editModal">
                                    <i class="fa fa-pencil-square-o" aria-hidden="true"> </i> Edit</button>



                                
                                
                                <button type="button" class="btn btn-danger delete" value="{{$message->id }}"   data-toggle="modal" onclick="return confirm('Are you sure?')">
                                <i class="fa fa-pencil-square-o" aria-hidden="true"> </i>   Delete</button>


                        </tr>
                    @endforeach
                    </tbody>

                </table>
            </div>
        </div>


        <!-- Modal -->




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
                                <label>Post:</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-user"></i>
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
                                                                 <span>{{$errors->first('title')}}</span>
                                                             </span>
                                                                 @endif
                                                             </div>
                                                         </div>



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




                            <label>Message</label>
                            <div class="form-group">
                                <textarea name="message" type="text" id="mgs" > </textarea>
                                       <script>
                                            CKEDITOR.replace( 'mgs' );
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
                    //alert('hello');
                    id = $(this).val();
                    $.ajax({
                        method: 'GET',
                        url: `/edit-message/${id}`,
                        success: function(data){
                            //alert(data.title);
                            $('#title').val(data.title);
                            $('#name').val(data.name);
                            $('#date').val(data.date);
                            $('#fectchimage').html("<img src={{ URL::to('/') }}/image/message/" + data.image + " width='70' />");
                            CKEDITOR.instances['mgs'].setData(data.message);
                            $('form[name="updateform"]').attr('action', `/update-message/${data.id}`);
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
                        url: `delete-message/${id}`,
                        success: function(data){
                              location.reload();
                                      }

                    });
                });
            });
        </script>
        


@endsection




