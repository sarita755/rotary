@extends('back.layouts.main')

@section('content')
    <!-- /.box-header -->
       
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal"> <i class="fa fa-plus" aria-hidden="true"> </i> Add Past President</button>
             <div class="box">
  
    <h3> All Past Presidents</h3>
  
        <!-- Modal -->
        <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog">

                <!-- add about-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title" align="center">Add Past President</h4>
                    </div>
                    <div class="modal-body">

                        <form role="form" method="post" action="{{route('storepresident')}}" enctype="multipart/form-data">
                            @csrf






                    <div class="form-group{{$errors->has('ri_year')?'has-error':''}}">
                                <label>Ri year:</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-graduation-cap"></i>
                                    </div>
                                    <input type="text" class="form-control" name="ri_year" placeholder="Enter  ri year" required>
                                </div>
                                <div>
                                </div>
                            </div>




                         <div class="form-group{{$errors->has('pre_name')?'has-error':''}}">
                                <label>President name:</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-graduation-cap"></i>
                                    </div>
                                    <input type="text" class="form-control" name="pre_name" placeholder="Enter  president name" required>
                                </div>
                                <div>
                                </div>
                            </div>
                            
                            <div class="form-group{{$errors->has('image1')?'has-error':''}}">
                                <label> Image:</label>
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
                            
                            
                            
                             <div class="form-group{{$errors->has('sec_name')?'has-error':''}}">
                                <label>secratary name:</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-graduation-cap"></i>
                                    </div>
                                    <input type="text" class="form-control" name="sec_name" placeholder="Enter secratary" required>
                                </div>
                                <div>
                                </div>
                            </div>
                            
                            
                            
                            
                            
                             
                            
                            
                            
                            
                             <div class="form-group{{$errors->has('image2')?'has-error':''}}">
                                <label>Image:</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-file-image-o"></i>
                                    </div>
                                    <input type="file" class="form-control" name="image2" required>
                                </div>
                                <div>
                                    @if($errors->has('image2'))
                                        <span class="help-block">
                                    <span>{{$errors->first('image2')}}</span>
                                </span>
                                    @endif
                                </div>
                            </div>
                            
                            
                            
                            
                            
                            
                             <div class="form-group{{$errors->has('image3')?'has-error':''}}">
                                <label>Theme:</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-file-image-o"></i>
                                    </div>
                                    <input type="file" class="form-control" name="image3" required>
                                </div>
                                <div>
                                    @if($errors->has('image3'))
                                        <span class="help-block">
                                    <span>{{$errors->first('image3')}}</span>
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
                    <tr align="center">
                        <th>S.N</th>
                        <th>Ri Year</th>
                        <th>President Name</th>
                        <th>Image</th>
                        <th>secretary Name</th>
                        <th>Image</th>
                        <th>Theme  </th>
                        
                        <th> Operations</th>
                    </tr>
                    </thead>
                    <tbody>

              @foreach ($pastpres as $pastpre)
                  <tr align="center">
                      <td>{{$loop->iteration }}</td>
                       <td>{{$pastpre->ri_year }}</td>
                       <td>{{$pastpre->pre_name }}
                       <td><img  src="{{asset('image/president/'.$pastpre->image1)}}"  width="70px" height="70px;"> 
                       </td>
                        
                       <td>{{$pastpre->sec_name }}</td>
                       <td>
                       <img  src="{{asset('image/president/'.$pastpre->image2)}}"  width="70px" height="70px;">
                       </td>
                       
                       <td><img  src="{{asset('image/president/'.$pastpre->image3)}}"  width="70px" height="70px;">
                       </td>
                       
                       
                      
                      <td align="center">

                           <button type="button" class="btn btn-primary edit" value="{{$pastpre->id }}"  data-toggle="modal" data-target="#editModal">
                                    <i class="fa fa-pencil-square-o" aria-hidden="true"> </i> Edit</button>


                          
                          
                                
                                <button type="button" class="btn btn-danger delete" value="{{$pastpre->id }}"   data-toggle="modal" onclick="return confirm('Are you sure?')">
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
                            <h1>Update </h1>
                            
                            
                            
                            
                            

                    <div class="form-group{{$errors->has('ri_year')?'has-error':''}}">
                                <label>Ri year:</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-graduation-cap"></i>
                                    </div>
                                    <input type="text" name="ri_year" id="ri_year"  class="form-control">
                                </div>
                                <div>
                                </div>
                            </div>




                         <div class="form-group{{$errors->has('pre_name')?'has-error':''}}">
                                <label>President name:</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-graduation-cap"></i>
                                    </div>
                                    <input type="text" name="pre_name" id="pre_name"  class="form-control">
                                </div>
                                <div>
                                </div>
                            </div>
                            
                            
                            
                            <div class="form-group{{$errors->has('image1')?'has-error':''}}">
                                <label> President Image:</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-file-image-o"></i>
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
                           
                            
                            
                            
                             <div class="form-group{{$errors->has('sec_name')?'has-error':''}}">
                                <label>secratary name:</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-graduation-cap"></i>
                                    </div>
                                    <input type="text" name="sec_name" id="sec_name"  class="form-control">
                                </div>
                                <div>
                                </div>
                            </div>
                            
                            
                            
                            
                            
                             
                            
                            
                            
                            
                             <div class="form-group{{$errors->has('image2')?'has-error':''}}">
                                <label> Secratary Image:</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-file-image-o"></i>
                                    </div>
                                    <input type="file" name="image2" id="image2"  class="form-control">
                                </div>
                                <div>
                                    @if($errors->has('image2'))
                                        <span class="help-block">
                                    <span>{{$errors->first('image2')}}</span>
                                </span>
                                    @endif
                                </div>
                            </div>
                            
                            
                            <div class="form-group">
                             <label   id="fectchimage2"> </label>
                           </div>
                            
                            
                            
                            
                            
                             <div class="form-group{{$errors->has('image3')?'has-error':''}}">
                                <label>Theme:</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-file-image-o"></i>
                                    </div>
                                   <input type="file" name="image3" id="image3"  class="form-control">
                                </div>
                                <div>
                                    @if($errors->has('image3'))
                                        <span class="help-block">
                                    <span>{{$errors->first('image3')}}</span>
                                </span>
                                    @endif
                                </div>
                            </div>



                           
                            
                             <div class="form-group">
                             <label   id="fectchimage3"> </label>
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
                        url: `edit-pesident/${id}`,
                        success: function(data){
                            $('#pre_name').val(data.pre_name);
                            $('#sec_name').val(data.sec_name);
                            $('#ri_year').val(data.ri_year);
                            
                             $('#fectchimage1').html("<img src={{ URL::to('/') }}/image/president/" + data.image1 + " width='70' />");
                             
                              $('#fectchimage2').html("<img src={{ URL::to('/') }}/image/president/" + data.image2 + " width='70' />");
                             
                               $('#fectchimage3').html("<img src={{ URL::to('/') }}/image/president/" + data.image3 + " width='70' />");
                              
                              
                              
                            $('form[name="updateform"]').attr('action', `update-pastpre/${data.id}`);
                            
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
                        url: `delete-presient/${id}`,
                        success: function(data){
                              location.reload();
                                      }

                    });
                });
            });
        </script>
        
        
        
        
        
        


@endsection