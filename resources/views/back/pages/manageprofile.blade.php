
@extends('back.layouts.main')

@section('content')




    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal"> <i class="fa fa-plus" aria-hidden="true"> </i> Create Profile</button>
             <div class="box">
  
    <h3> All Profiles</h3> 
    <!-- Modal -->
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">

            <!-- add about-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title" align="center">Create Profiles </div>
                <div class="modal-body">

                   <form role="form" method="post" action="{{route('storearticle')}}" enctype="multipart/form-data">
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
                        
                        
                          
                        <div class="form-group">
                            <label>Profile for :</label>
                            <div class="input-group">
                            <div class="input-group-addon">
                                    <i class="fa fa-picture-o"></i>
                                </div>
                            
                              <select class="form-control" name="type" required>
                                 <option disabled selected> Select Profile</option>
                                 <option value="President">President</option>
                                 <option value="Secretary">Secretary</option>
                                 <option value="Treasurer">Treasurer</option>
                                 </select>
                           @if($errors->has('type'))
                           <span class="alert-danger">{{$errors->first('type')}}</span>
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

                     <label>Profile Details:</label>
                             <textarea name="Details"></textarea>
                             <script>
                                CKEDITOR.replace( 'Details' );
                             </script>
                     
                     <div class="form-group{{$errors->has('url')?'has-error':''}}">
                            <label>Fb link:</label>
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-user"></i>
                                </div>
                                <input type="url" class="form-control" name="url" placeholder="Enter The title" required>
                            </div>
                            <div>
                                @if($errors->has('url'))
                                    <span class="help-block">
                                    <span>{{$errors->first('url')}}</span>
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
                    <th>Title</th>
                    <th>Profile for</th>
                    <th>Image</th>
                    <th>Fb link</th>
                    <th>Details</th>
                   <th>Operations</th>

                </tr>
                </thead>
                <tbody>

                @foreach ($profiles as $profile)
                    <tr align="center">
                        <td>{{$loop->iteration }}</td>
                        <td>{{$profile->title}}</td>
                        <td>{{$profile->type}}</td>
                       <td><img  src="{{asset('image/profile/'.$profile->image)}}"  width="70px" height="70px;"> </td>
                       <td>{{$profile->url}}</td>
                       <td>{{  html_entity_decode(strip_tags($profile->Details)) }}</td>
                      <td>

                            <button type="button" class="btn btn-primary edit" value="{{$profile->id }}"  data-toggle="modal" data-target="#editModal">
                                <i class="fa fa-pencil-square-o" aria-hidden="true"> </i> Edit</button>



                            
                            
                                <button type="button" class="btn btn-danger delete" value="{{$profile->id }}"   data-toggle="modal" onclick="return confirm('Are you sure?')">
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
                            <label>Profile for:</label>
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-newspaper-o"></i>
                                </div>
                                <select class="form-control" name="type" id="type"  required>
                                 <option disabled selected> Select Profile</option>
                                 <option value="President">President</option>
                                 <option value="Secretary">Secretary</option>
                                 <option value="Treasurer">Treasurer</option>
                                 
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

                        <div class="form-group{{$errors->has('url')?'has-error':''}}">
                            <label>Fb link:</label>
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-header"></i>
                                </div>
                                <input type="url" name="url" id="url"  class="form-control">
                            </div>
                            <div>
                                @if($errors->has('url'))
                                    <span class="help-block">
                                    <span>{{$errors->first('url')}}</span>
                                </span>
                                @endif
                            </div>
                        </div>

                        <label>Details</label>
                        <div class="form-group">
                            <textarea name="Details" type="text" id="dsc" > </textarea>
                              <script>
                                              CKEDITOR.replace( 'dsc' );
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
                    url: `edit-profile/${id}`,
                    success: function(data){
                        $('#title').val(data.title);
                         CKEDITOR.instances['dsc'].setData(data.Details);
                        $('#url').val(data.url);
                        $('#type').val(data.type);
                        $('#fectchimage').html("<img src={{ URL::to('/') }}/image/profile/" + data.image + " width='70' />");
                       $('form[name="updateform"]').attr('action', `updateprofile/${data.id}`);
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
                        url: `delete-profile/${id}`,
                        success: function(data){
                              location.reload();
                                      }

                    });
                });
            });
        </script>
        
        
    
    
    



@endsection












