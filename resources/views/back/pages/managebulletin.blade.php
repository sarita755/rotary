

@extends('back.layouts.main')

@section('content')
   
   
   
   
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal"> <i class="fa fa-plus" aria-hidden="true"> </i> Create Business</button>
             <div class="box">
  
    <h3> All Businesses</h3> 
        <!-- Modal -->
        <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog">

                <!-- add about-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title" align="center">Create Business</h4>
                    </div>
                    <div class="modal-body">

                        <form role="form" method="post" action="{{route('storebulletin')}}" enctype="multipart/form-data">
                            @csrf


                           <div class="form-group">
                            <label>Select The Member :</label>
                            <div class="input-group">
                            <div class="input-group-addon">
                                    <i class="fa fa-picture-o"></i>
                                </div>
                            
                              <select class="form-control" name="member" required>
                                 <option disabled selected> Select The Member </option>  
                                  @foreach ($members as $member)
                                 <option value="{{$member->name }}">{{$member->name }}</option>
                                 
                                  @endforeach
                                 
                                 
                                 
                                </select>
                           @if($errors->has('type'))
                           <span class="alert-danger">{{$errors->first('type')}}</span>
                          @endif
                        </div>
                          </div>


                            
                            <div class="form-group{{$errors->has('name')?'has-error':''}}">
                                <label>Business name:</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-user"></i>
                                    </div>
                                    <input type="text" class="form-control" name="business" placeholder="Enter The business" required>
                                </div>
                                <div>
                                    @if($errors->has('name'))
                                        <span class="help-block">
                                    <span>{{$errors->first('name')}}</span>
                                </span>
                                    @endif
                                </div>
                            </div>
                            
                            
                            
                            
                            
                            <div class="form-group{{$errors->has('name')?'has-error':''}}">
                                <label>Address:</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-user"></i>
                                    </div>
                                    <input type="text" class="form-control" name="address" placeholder="Enter The title" required>
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
                                <label>Select Sliders:</label>
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
                            
                            
                            <div class="form-group{{$errors->has('image')?'has-error':''}}">
                               
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-file-image-o"></i>
                                    </div>
                                    <input type="file" class="form-control" name="image1" required>
                                      
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
                                <label>Select Logo:</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-file-image-o"></i>
                                    </div>
                                    <input type="file" class="form-control" name="image2" required>
                                </div>
                                <div>
                                    @if($errors->has('image'))
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
                    <tr align="center">
                        <th>S.N</th>
                        <th>Member</th>
                        <th>Business</th>
                        <th>  Sliders</th>
                        <th> Logo</th>
                        <th> Operations</th>
                    </tr>
                    </thead>
                    <tbody>

              @foreach ($bulletins as $bulletin)
                  <tr align="center">
                      <td>{{$loop->iteration }}</td>
                      <td>{{$bulletin->member }}</td>
                      <td>{{$bulletin->business }}</td>
                        <td><img  src="{{asset('image/business/'.$bulletin->image)}}"  width="70px" height="70px;"> <img  src="{{asset('image/business/'.$bulletin->image1)}}"  width="70px" height="70px;"> </td>
                       <td><img  src="{{asset('image/business/'.$bulletin->image)}}"  width="70px" height="70px;"> 
                       
                            </td>
                              
                            <td>
                             <button type="button" class="btn btn-primary edit" value="{{$bulletin->id}}"  data-toggle="modal" data-target="#editModal">
                                    <i class="fa fa-pencil-square-o" aria-hidden="true"> </i> Edit</button>
                                    
                            
                                <button type="button" class="btn btn-danger delete" value="{{$bulletin->id }}"   data-toggle="modal" onclick="return confirm('Are you sure?')">
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
                            <h1>Update Bulletins</h1>
                            
                            
                            
                            
                        
                           <div class="form-group">
                            <label>Select The Member :</label>
                            <div class="input-group">
                            <div class="input-group-addon">
                                    <i class="fa fa-picture-o"></i>
                                </div>
                            
                              <select class="form-control" name="member" id="member" required>
                                 <option disabled selected> Select The Member </option>  
                                  @foreach ($members as $member)
                                 <option value="{{$member->name }}">{{$member->name }}</option>
                                 
                                  @endforeach
                                 
                                 
                                 
                                </select>
                           @if($errors->has('type'))
                           <span class="alert-danger">{{$errors->first('type')}}</span>
                          @endif
                        </div>
                          </div>

                        
                        















                            
                            <div class="form-group{{$errors->has('name')?'has-error':''}}">
                                <label>Business name:</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-user"></i>
                                    </div>
                                    <input type="text" class="form-control" name="business" id="business" placeholder="Enter The business" required>
                                </div>
                                <div>
                                    @if($errors->has('name'))
                                        <span class="help-block">
                                    <span>{{$errors->first('name')}}</span>
                                </span>
                                    @endif
                                </div>
                            </div>
                            
                            
                            
                            
                            
                            <div class="form-group{{$errors->has('name')?'has-error':''}}">
                                <label>Address:</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-user"></i>
                                    </div>
                                    <input type="text" class="form-control" name="address" id="address" placeholder="Enter The title" required>
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
                                <label>Select Sliders:</label>
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

                            
                            
                            <div class="form-group{{$errors->has('image')?'has-error':''}}">
                               
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-file-image-o"></i>
                                    </div>
                                    <input type="file" class="form-control" name="image1">
                                      
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
                                <label   id="fectchimage1"> </label>
                            </div>

                            
                            
                            
                            
                            <div class="form-group{{$errors->has('image1')?'has-error':''}}">
                                <label>Select Logo:</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-file-image-o"></i>
                                    </div>
                                    <input type="file" class="form-control" name="image2">
                                </div>
                                <div>
                                    @if($errors->has('image'))
                                        <span class="help-block">
                                    <span>{{$errors->first('image1')}}</span>
                                </span>
                                    @endif
                                </div>
                            </div>
                            
                             <div class="form-group">
                                <label   id="fectchimage2"> </label>
                            </div>



                 
                     <label>Description</label>
                             <textarea name="Description" id="Description"></textarea>
                             <script>
                                CKEDITOR.replace( 'Description' );
</script>

                


                            
                         <div class="modal-footer">
                              <input type="hidden" name="hidden_id" id="hidden_id"/>
                           
                            <input type="submit" name="action_button" id="action_button" class="btn btn-primary" value="Update Data">

                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
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
                        url: `edit-bulletin/${id}`,
                        success: function(data){
                            $('#member').val(data.member);
                            $('#business').val(data.business);  
                            $('#address').val(data.address);  
                              CKEDITOR.instances['Description'].setData(data.Description);
                             $('#fectchimage').html("<img src={{ URL::to('/') }}/image/business/" + data.image + " width='70' />");
                             
                             $('#fectchimage1').html("<img src={{ URL::to('/') }}/image/business/" + data.image1 + " width='70' />");
                             
                             $('#fectchimage2').html("<img src={{ URL::to('/') }}/image/business/" + data.image2 + " width='70' />");
                            $('form[name="updateform"]').attr('action', `update-bulletin/${data.id}`);
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
                        url: `delete-bulletin/${id}`,
                        success: function(data){
                              location.reload();
                                      }

                    });
                });
            });
        </script>
        
       
       
       
       
       
       
       


@endsection