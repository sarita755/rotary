
@extends('back.layouts.main')

@section('content')


     
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal"> <i class="fa fa-plus" aria-hidden="true"> </i> Add Media</button>
             <div class="box">
  
    <h3> All Media</h3>

        <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog">

                <!-- add about-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title" align="center">Create Media</h4>
                    </div>
                    <div class="modal-body">

                        <form role="form" method="post" action="{{route('storemedia')}}" enctype="multipart/form-data">
                        @csrf


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



                        <div class="form-group">
                    <label>Select Media :</label>
                            <div class="input-group">
                            <div class="input-group-addon">
                                    <i class="fa fa-picture-o"></i>
                                </div>
                    <select class="form-control" name="mediatype" required>
                        <option disabled selected>Select Media</option>
                        <option value="Logo">Logo</option>
                        <option value="Slider">Slider</option>
                        <option value="Gallery">Gallery</option>
                        <option value="Team">Team</option>
                    </select>
                    @if($errors->has('mediatype'))
                       <span class="alert-danger">{{$errors->first('mediatype')}}</span>
                    @endif
                </div>
                </div>




                         <div></div>

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
        </div>

        <div class="box">
  <!-- /.box-header -->
            <div class="box-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Date</th>
                        <th>Image</th>
                        <th>Media Type</th>
                        <th>Description</th>
                        <th>Operations</th>

                    </tr>
                    </thead>
                    <tbody>


                    @foreach ($medias as $media)
                        <tr align="center">
                            <td>{{$loop->iteration }}</td>
                            <td>{{$media->title }}</td>
                            <td>{{$media->date }}</td>
                            <td align="center"><img  src="{{asset('image/media/'.$media->image)}}"  width="70px" height="70px;"> </td>
                            <td>{{$media->mediatype }}</td>
                            
                            <td>{{  html_entity_decode(strip_tags(str_limit($media->Description,15))) }}</td>
                            <td align="center">

                                <button type="button" class="btn btn-primary edit" value="{{$media->id }}"  data-toggle="modal" data-target="#editModal">
                                    <i class="fa fa-pencil-square-o" aria-hidden="true"> </i> Edit</button>
                                
                                
                                
                                <button type="button" class="btn btn-danger delete" value="{{$media->id }}"   data-toggle="modal" onclick="return confirm('Are you sure?')">
                                <i class="fa fa-pencil-square-o" aria-hidden="true"> </i>   Delete</button></td>


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
                                <label>Title:</label>
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





                            <div class="form-group{{$errors->has('date')?'has-error':''}}">
                                <label>Date:</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
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




                          <div class="form-group">
                    <label>Select Media :</label>
                            <div class="input-group">
                            <div class="input-group-addon">
                                    <i class="fa fa-picture-o"></i>
                                </div>
                    <select class="form-control" name="mediatype"  id="mediatype" required>
                        <option disabled selected>Select Media</option>
                        <option value="Logo">Logo</option>
                        <option value="Slider">Slider</option>
                        <option value="Gallery">Gallery</option>
                        <option value="Team">Team</option>
                    </select>
                    @if($errors->has('mediatype'))
                       <span class="alert-danger">{{$errors->first('mediatype')}}</span>
                    @endif
                </div>
                </div

                   



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
                                <textarea name="Description" type="text" id="Description" > </textarea>
                                       <script>
                                            CKEDITOR.replace( 'Description' );
</script>

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
                //alert('hello');
                id = $(this).val();
                $.ajax({
                    method: 'GET',
                    url: `edit-media/${id}`,
                    success: function(data){
                        //alert(data.title);
                        $('#title').val(data.title);
                        CKEDITOR.instances['Description'].setData(data.Description);
                        $('#date').val(data.date);
                        $('#mediatype').val(data.mediatype);
                        $('#fectchimage').html("<img src={{ URL::to('/') }}/image/media/" + data.image + " width='70' />");
                       $('form[name="updateform"]').attr('action', `update-media/${data.id}`);
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




