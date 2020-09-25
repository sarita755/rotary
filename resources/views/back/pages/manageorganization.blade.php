@extends('back.layouts.main')

@section('content')
  
        
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal"> <i class="fa fa-plus" aria-hidden="true"> </i> Add Organization</button>
             <div class="box">
  
    <h3> All Organizations</h3>
  
        <!-- Modal -->
        <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog">

                <!-- add about-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title" align="center">Add organization</h4>
                    </div>
                    <div class="modal-body">

                        <form role="form" method="post" action="{{route('storeorganization')}}" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group{{$errors->has('established_year')?'has-error':''}}">
                                <label>Established year:</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <input type="number" class="form-control" name="established_year" placeholder="Enter established year " required>
                                </div>
                                <div>
                                    @if($errors->has('established_year'))
                                        <span class="help-block">
                                    <span>{{$errors->first('established_year')}}</span>
                                </span>
                                    @endif
                                </div>
                            </div>
                            
                            

                            <div class="form-group{{$errors->has('org_name')?'has-error':''}}">
                                <label> Organization Name:</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-home"></i>
                                    </div>
                                    <input type="text" class="form-control" name="org_name" placeholder="Enter The organization name" required>
                                </div>
                                <div>
                                    @if($errors->has('org_name'))
                                        <span class="help-block">
                                                                 <span>{{$errors->first('org_name')}}</span>
                                                             </span>
                                    @endif
                                </div>
                            </div>
                            
                            
                          




                         <div class="form-group">
                            <label>Organization Type :</label>
                            <div class="input-group">
                            <div class="input-group-addon">
                                    <i class="fa fa-home"></i>
                                </div>
                            
                              <select class="form-control" name="org_type" required>
                                 <option disabled selected> Select Organization</option>
                                 <option value="Rotract">Rotract</option>
                                 <option value="Rotary">Rotary</option>
                                 <option value="Intract">Intract</option>
                                  <option value="RDC">RDC</option>
                                 
                                </select>
                           @if($errors->has('org_type'))
                           <span class="alert-danger">{{$errors->first('org_type')}}</span>
                          @endif
                        </div>
                          </div>













  
  
                            
                            <div class="form-group{{$errors->has('pre_name')?'has-error':''}}">
                                <label> President Name:</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-user"></i>
                                    </div>
                                    <input type="text" class="form-control" name="pre_name" placeholder="Enter The president's name" required>
                                </div>
                                <div>
                                    @if($errors->has('pre_name'))
                                        <span class="help-block">
                                                                 <span>{{$errors->first('pre_name')}}</span>
                                                             </span>
                                    @endif
                                </div>
                            </div>
                            
                            
                            
                            
                            
                            
                             <div class="form-group{{$errors->has('pre_contact')?'has-error':''}}">
                                <label> President contact:</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-phone"></i>
                                    </div>
                                    <input type="number" class="form-control" name="pre_contact" placeholder="Enter The president name" required>
                                </div>
                                <div>
                                    @if($errors->has('pre_contact'))
                                        <span class="help-block">
                                                                 <span>{{$errors->first('pre_contact')}}</span>
                                                             </span>
                                    @endif
                                </div>
                            </div>
                            
                            
                            
                            <div class="form-group{{$errors->has('image')?'has-error':''}}">
                                <label>President Image:</label>
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
                            
                            
                            
                            
                            
                            
                            
                            
                            
                             <div class="form-group{{$errors->has('sec_name')?'has-error':''}}">
                                <label> Secratary Name:</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-user"></i>
                                    </div>
                                    <input type="text" class="form-control" name="sec_name" placeholder="Enter The secratary name" required>
                                </div>
                                <div>
                                    @if($errors->has('sec_name'))
                                        <span class="help-block">
                                                                 <span>{{$errors->first('sec_name')}}</span>
                                                             </span>
                                    @endif
                                </div>
                            </div>
                            
                            
                            
                            
                            
                            
                            
                             <div class="form-group{{$errors->has('sec_contact')?'has-error':''}}">
                                <label> Secratary Contact:</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-phone"></i>
                                    </div>
                                    <input type="number" class="form-control" name="sec_contact" placeholder="Enter The secratary contact" required>
                                </div>
                                <div>
                                    @if($errors->has('sec_contact'))
                                        <span class="help-block">
                                                                 <span>{{$errors->first('sec_contact')}}</span>
                                                             </span>
                                    @endif
                                </div>
                            </div>
                            
  
  


                            <div class="form-group{{$errors->has('image1')?'has-error':''}}">
                                <label>Secratary image:</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-file-image-o"></i>
                                    </div>
                                    <input type="file" class="form-control" name="image1"  required>
                                </div>
                                <div>
                                    @if($errors->has('image1'))
                                        <span class="help-block">
                        <span>{{$errors->first('image1')}}</span>
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
                        <th>Organization</th>
                        <th>organization name</th>
                        <th> president </th>
                        <th>image</th>
                        <th> Secretary</th>
                        <th> Image </th>
                        <th>Operations</th>

                    </tr>
                    </thead>
                    <tbody>
                          @foreach ($organizations as $organization)
                  <tr align="center">
                      <td>{{$loop->iteration }}</td>
                      <td>{{$organization->org_type}}</td>
                      <td>{{$organization->org_name }}</td>
                       <td>{{$organization->pre_name }}</td>
                       <td><img  src="{{asset('image/organization/'.$organization->image)}}"  width="70px" height="70px;"> </td>
                      <td>{{$organization->sec_name}}</td>
                       <td><img  src="{{asset('image/organization/'.$organization->image1)}}"  width="70px" height="70px;"> </td>
                      <td align="center">

                           <button type="button" class="btn btn-primary edit" value="{{$organization->id }}"  data-toggle="modal" data-target="#editModal">
                                    <i class="fa fa-pencil-square-o" aria-hidden="true"> </i> Edit</button>


                                
                                <button type="button" class="btn btn-danger delete" value="{{$organization->id }}"   data-toggle="modal" onclick="return confirm('Are you sure?')">
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
                            <h1>Update</h1>
                            
                            
                            
                            
                            
                            
                            <div class="form-group{{$errors->has('established_year')?'has-error':''}}">
                                <label>Established year:</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <input type="number" class="form-control" name="established_year" id="established_year" placeholder="Enter established year">
                                </div>
                                <div>
                                    @if($errors->has('established_year'))
                                        <span class="help-block">
                                    <span>{{$errors->first('established_year')}}</span>
                                </span>
                                    @endif
                                </div>
                            </div>
                            
                            

                            <div class="form-group{{$errors->has('org_name')?'has-error':''}}">
                                <label> Organization Name:</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-home"></i>
                                    </div>
                                    <input type="text" class="form-control" name="org_name" id="org_name" placeholder="Enter The organization name">
                                </div>
                                <div>
                                    @if($errors->has('org_name'))
                                        <span class="help-block">
                                                                 <span>{{$errors->first('org_name')}}</span>
                                                             </span>
                                    @endif
                                </div>
                            </div>
                            
                            
                          




                         <div class="form-group">
                            <label>Organization Type :</label>
                            <div class="input-group">
                            <div class="input-group-addon">
                                    <i class="fa fa-home"></i>
                                </div>
                            
                              <select class="form-control" name="org_type" id="org_type">
                                 <option disabled selected> Select Organization</option>
                                 <option value="Rotract">Rotract</option>
                                 <option value="Rotary">Rotary</option>
                                 <option value="Intract">Intract</option>
                                  <option value="RDC">RDC</option>
                                 
                                </select>
                           @if($errors->has('org_type'))
                           <span class="alert-danger">{{$errors->first('org_type')}}</span>
                          @endif
                        </div>
                          </div>













  
  
                            
                            <div class="form-group{{$errors->has('pre_name')?'has-error':''}}">
                                <label> President Name:</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-user"></i>
                                    </div>
                                    <input type="text" class="form-control" name="pre_name"  placeholder="Enter The president's name" id="pre_name">
                                </div>
                                <div>
                                    @if($errors->has('pre_name'))
                                        <span class="help-block">
                                                                 <span>{{$errors->first('pre_name')}}</span>
                                                             </span>
                                    @endif
                                </div>
                            </div>
                            
                            
                            
                            
                            
                            
                             <div class="form-group{{$errors->has('pre_contact')?'has-error':''}}">
                                <label> President contact:</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-phone"></i>
                                    </div>
                                    <input type="number" class="form-control" name="pre_contact" placeholder="Enter The president name" id="pre_contact">
                                </div>
                                <div>
                                    @if($errors->has('pre_contact'))
                                        <span class="help-block">
                                                                 <span>{{$errors->first('pre_contact')}}</span>
                                                             </span>
                                    @endif
                                </div>
                            </div>
                            
                            
                            
                            <div class="form-group{{$errors->has('image')?'has-error':''}}">
                                <label>President Image:</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-file-image-o"></i>
                                    </div>
                                    <input type="file" class="form-control" name="image" id="image">
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
                            
                            
                            
                            
                            
                            
                            
                             <div class="form-group{{$errors->has('sec_name')?'has-error':''}}">
                                <label> Secratary Name:</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-user"></i>
                                    </div>
                                    <input type="text" class="form-control" name="sec_name" placeholder="Enter The secratary name" id="sec_name">
                                </div>
                                <div>
                                    @if($errors->has('sec_name'))
                                        <span class="help-block">
                                                                 <span>{{$errors->first('sec_name')}}</span>
                                                             </span>
                                    @endif
                                </div>
                            </div>
                            
                            
                            
                            
                            
                            
                            
                             <div class="form-group{{$errors->has('sec_contact')?'has-error':''}}">
                                <label> Secratary Contact:</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-phone"></i>
                                    </div>
                                    <input type="number" class="form-control" name="sec_contact" placeholder="Enter The secratary contact" id="sec_contact">
                                </div>
                                <div>
                                    @if($errors->has('sec_contact'))
                                        <span class="help-block">
                                                                 <span>{{$errors->first('sec_contact')}}</span>
                                                             </span>
                                    @endif
                                </div>
                            </div>
                            
  
  


                            <div class="form-group{{$errors->has('image1')?'has-error':''}}">
                                <label>Secratary image:</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-file-image-o"></i>
                                    </div>
                                    <input type="file" class="form-control" name="image1"  id="image1">
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
                        url: `edit-organization/${id}`,
                        success: function(data){
                            //alert(data.title);
                            $('#established_year').val(data.established_year);
                            $('#org_name').val(data.org_name);
                             $('#org_type').val(data.org_type);
                            $('#pre_name').val(data.pre_name);
                             $('#pre_contact').val(data.pre_contact);
                            $('#sec_name').val(data.sec_name);
                             $('#sec_contact').val(data.sec_contact);
                             $('#fectchimage').html("<img src={{ URL::to('/') }}/image/organization/" + data.image + " width='70' />");
                             $('#fectchimage1').html("<img src={{ URL::to('/') }}/image/organization/" + data.image1 + " width='70' />");
                            $('form[name="updateform"]').attr('action', `updateorganization/${data.id}`);
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
                        url: `delete-organization/${id}`,
                        success: function(data){
                              location.reload();
                                      }

                    });
                });
            });
        </script>
        
  
        
        
        
        
        
        
@endsection


