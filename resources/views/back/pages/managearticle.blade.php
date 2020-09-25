
@extends('back.layouts.main')

@section('content')




    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal"> <i class="fa fa-plus" aria-hidden="true"> </i> Create Articel</button>
             <div class="box">
  
    <h3> All Articles</h3> 
    <!-- Modal -->
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">

            <!-- add about-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title" align="center">Create Article </div>
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
                            <label>Select Article :</label>
                            <div class="input-group">
                            <div class="input-group-addon">
                                    <i class="fa fa-picture-o"></i>
                                </div>
                            
                              <select class="form-control" name="type" required>
                                 <option disabled selected> Select Article type</option>
                                 <option value="ri intro">RI Introduction</option>
                                 <option value="intro">Introduction</option>
                                 <option value="plan action">Plan of action</option>
                                 <option value="Featured news">Featured news</option>
                                 <option value="six area focused">Six area focused</option>
                                 <option value="Project">Project</option>
                                 
                                 
                                 
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
                    <th>Title</th>
                        <th> Date</th>
                    <th> Article Type</th>
                 
                    <th>Image</th>
                   
                    <th>Operations</th>

                </tr>
                </thead>
                <tbody>

                @foreach ($articles as $article)
                    <tr align="center">
                        <td>{{$loop->iteration }}</td>
                        <td>{{   str_limit($article->title) }}</td>
                         <td>{{$article->date }}</td>
                        <td>{{   str_limit($article->type, 20) }}</td>
                       
                  
                        <td><img  src="{{asset('image/article/'.$article->image)}}"  width="70px" height="70px;"> </td>

                       

                        <td>

                            <button type="button" class="btn btn-primary edit" value="{{$article->id }}"  data-toggle="modal" data-target="#editModal">
                                <i class="fa fa-pencil-square-o" aria-hidden="true"> </i> Edit</button>



                            
                            
                                <button type="button" class="btn btn-danger delete" value="{{$article->id }}"   data-toggle="modal" onclick="return confirm('Are you sure?')">
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
                        
                        
                        
                        
                        
                         <div class="form-group{{$errors->has('title')?'has-error':''}}">
                            <label>Date</label>
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
                            <label>Select Article:</label>
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-newspaper-o"></i>
                                </div>
                                <select class="form-control" name="type" id="type"  required>
                                 <option disabled selected> Select Article type</option>
                                 <option value="RI Introduction">RI Introduction</option>
                                 <option value="Introduction">Introduction  </option>
                                 <option value="Plan action">Plan of action</option>
                                 <option value="Featured news">Featured news</option>
                                 <option value="Six area focused">Six area focused</option>
                                 <option value="Project">Project</option>
                                </select>
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
                            <label>Image</label>
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-image"></i>
                                </div>
                               <input type="file" name="image" id="image"  class="form-control">
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
                    url: `edit-article/${id}`,
                    success: function(data){
                        $('#title').val(data.title);
                         CKEDITOR.instances['dsc'].setData(data.Description);
                        $('#date').val(data.date);
                        $('#type').val(data.type);
                        $('#fectchimage').html("<img src={{ URL::to('/') }}/image/article/" + data.image + " width='70' />");
                       $('form[name="updateform"]').attr('action', `updatearticle/${data.id}`);
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
                        url: `delete-article/${id}`,
                        success: function(data){
                              location.reload();
                                      }

                    });
                });
            });
        </script>
        
        
    
    
    



@endsection












