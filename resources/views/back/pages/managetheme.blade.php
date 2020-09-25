
@extends('back.layouts.main')

@section('content')




    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal"> <i class="fa fa-plus" aria-hidden="true"> </i> Create Theme</button>
             <div class="box">
  
    <h3> Themes</h3> 
    <!-- Modal -->
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">

            <!-- add about-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title" align="center">Create Themes </div>
                <div class="modal-body">

                   <form role="form" method="post" action="{{route('storetheme')}}" enctype="multipart/form-data">
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

                        <div class="form-group{{$errors->has('image1')?'has-error':''}}">
                                <label>Theme:</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-file-image-o"></i>
                                    </div>
                                    <input type="file" class="form-control" name="image1" required>
                                </div>
                                <div>
                                    @if($errors->has('image1'))
                                        <span class="help-block">
                                    <span>{{$errors->first('image1')}}</span>
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
                    <th>Title</th>
                    <th>Image</th>
                    <th>Theme</th>
                    <th>Description</th>
                    <th>Operations</th>

                </tr>
                </thead>
                <tbody>

                  @foreach ($themes as $theme)
                    <tr align="center">
                        <td>{{$loop->iteration }}</td>
                        <td>{{$theme->date }}</td>
                        <td>{{str_limit($theme->title) }}</td>
                       <td><img  src="{{asset('image/theme/'.$theme->image)}}"  width="70px" height="70px;"> </td>
                       <td><img  src="{{asset('image/theme/'.$theme->image1)}}"  width="70px" height="70px;"> </td>
                       <td>{{$theme->Description}}</td>
                    <td>

                            <button type="button" class="btn btn-primary edit" value="{{$theme->id }}"  data-toggle="modal" data-target="#editModal">
                                <i class="fa fa-pencil-square-o" aria-hidden="true"> </i> Edit</button>
                             <button type="button" class="btn btn-danger delete" value="{{$theme->id }}"   data-toggle="modal" onclick="return confirm('Are you sure?')">
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
                        
                        
                         <div class="form-group{{$errors->has('title')?'has-error':''}}">
                            <label>Title:</label>
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-header"></i>
                                </div>
                                <input type="text" class="form-control" name="title" id="title"  placeholder="Enter your title">
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
                                    <i class="fa fa-image"></i>
                                </div>
                               <input type="file" name="image" id="image" onchange="readURL(this)" class="form-control">
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

                        <div class="form-group{{$errors->has('image1')?'has-error':''}}">
                            <label>Theme:</label>
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-image"></i>
                                </div>
                               <input type="file" name="image1" id="image1"  class="form-control">
                            </div>
                            <div>
                                @if($errors->has('image1'))
                                    <span class="help-block">
                                    <span>{{$errors->first('image1')}}</span>
                                </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label   id="fectchimage1"> </label>
                        </div>

                        <label>Description</label>
                        <div class="form-group">
                            <textarea name="Description" type="text" id="Description" > </textarea>
                              <script>
                                              CKEDITOR.replace( 'Description' );
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
                    url: `edit-theme/${id}`,
                    success: function(data){
                        $('#date').val(data.date);
                        $('#title').val(data.title);
                        $('#fectchimage').html("<img src={{ URL::to('/') }}/image/theme/" + data.image + " width='70' />");
                        $('#fectchimage1').html("<img src={{ URL::to('/') }}/image/theme/" + data.image1 + " width='70' />");
                        CKEDITOR.instances['Description'].setData(data.Description);
                       $('form[name="updateform"]').attr('action', `updatetheme/${data.id}`);
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
                        method: 'DELETE',
                        url: `theme/${id}`,
                        data: {
                            "_token": "{{ csrf_token() }}"
                        },
                        success: function(data){
                            if(data.status === 200){
                              location.reload();
                            }
                        }

                    });
                });
            });
        </script>


        
        
    
    
    



@endsection












