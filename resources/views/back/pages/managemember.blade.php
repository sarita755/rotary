@extends('back.layouts.main')

@section('content')
  
   
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal"> <i class="fa fa-plus" aria-hidden="true"> </i> Add Member</button>
             <div class="box">
  
    <h3> All members</h3>
  
        <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog">

                <!-- add about-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title" align="center">Add Member</h4>
                    </div>
                    <div class="modal-body">

                        <form role="form" method="post" action="{{route('storemember')}}" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group{{$errors->has('Ri_id')?'has-error':''}}">
                                <label>Ri id:</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-id-card"></i>
                                    </div>
                                    <input type="number" class="form-control" name="Ri_id" placeholder="Enter your Ri id" required>
                                </div>
                                <div>
                                </div>
                            </div>



                            <div class="form-group{{$errors->has('Degination')?'has-error':''}}">
                                <label>Degination:</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-graduation-cap"></i>
                                    </div>
                                    <input type="text" class="form-control" name="Degination" placeholder="Enter your Degination" required>
                                </div>
                                <div>
                                </div>
                            </div>



                            <div class="form-group{{$errors->has('name')?'has-error':''}}">
                                <label>Member's Name:</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-user"></i>
                                    </div>
                                    <input type="text" class="form-control" name="name" placeholder="Enter The name" required>
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
                                <label>Member's Image:</label>
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
                            
                             <div class="form-group{{$errors->has('name')?'has-error':''}}">
                                <label>Date Of Birth:</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                   <input  class="form-control" name="date"   value={{ date('M-d  H:i:s')}} required>
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
                            <label>Select Martial Status :</label>
                            <div class="input-group">
                            <div class="input-group-addon">
                                    <i class="fa fa-picture-o"></i>
                                </div>
                            
                              <select class="form-control" name="martial_status" required>
                                 <option disabled selected> Select Martial Status</option>
                                 <option value="Married">Married</option>
                                 <option value="Unmarried">Unmarried</option>
                                 
                                </select>
                           @if($errors->has('type'))
                           <span class="alert-danger">{{$errors->first('type')}}</span>
                          @endif
                        </div>
                          </div>

                            
                            
                            
                            
                             <div class="form-group{{$errors->has('name')?'has-error':''}}">
                                <label>Marriage Anniversary:</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                   <input  class="form-control" name="anniversary"  value={{ date('M-d  H:i:s')}} required>
                                </div>
                                <div>
                                    @if($errors->has('name'))
                                        <span class="help-block">
                                    <span>{{$errors->first('name')}}</span>
                                </span>
                                    @endif
                                </div>
                            </div>
                            
                            



                            <div class="form-group{{$errors->has('Spouse')?'has-error':''}}">
                                <label>Spouse's name:</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-user"></i>
                                    </div>
                                    <input type="text" class="form-control" name="Spouse" placeholder="Enter your Spouse's name">
                                </div>
                                <div>
                                </div>
                            </div>




                            <div class="form-group{{$errors->has('image1')?'has-error':''}}">
                                <label>Spouse's Image:</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-file-image-o"></i>
                                    </div>
                                    <input type="file" class="form-control" name="image1" required>
                                </div>
                                <div>
                                    @if($errors->has('image'))
                                        <span class="help-block">
                                    <span>{{$errors->first('image1')}}</span>
                                </span>
                                    @endif
                                </div>
                            </div>




                            <div class="form-group{{$errors->has('email')?'has-error':''}}">
                                <label>Email:</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-envelope"></i>
                                    </div>
                                    <input type="email" class="form-control" name="email" placeholder="Enter The email">
                                </div>
                                <div>
                                    @if($errors->has('email'))
                                        <span class="help-block">
                                    <span>{{$errors->first('email')}}</span>
                                </span>
                                    @endif
                                </div>
                            </div>




                            <div class="form-group{{$errors->has('address')?'has-error':''}}">
                                <label>Address:</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-map-marker"></i>
                                    </div>
                                    <input type="text" class="form-control" name="address" placeholder="Enter Your address" required>
                                </div>
                                <div>
                                    @if($errors->has('address'))
                                        <span class="help-block">
                                    <span>{{$errors->first('address')}}</span>
                                </span>
                                    @endif
                                </div>
                            </div>


                           <div class="form-group{{$errors->has('Work')?'has-error':''}}">
                                <label>Profession:</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-tasks"></i>
                                    </div>
                                    <input type="text" class="form-control" name="Work" placeholder="Enter The Profession" required>
                                </div>
                                <div>
                                </div>
                            </div>

                              <div class="form-group{{$errors->has('mobile')?'has-error':''}}">
                                <label>mobile:</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-mobile"></i>
                                    </div>
                                    <input type="number" class="form-control" name="Mobile" placeholder="Enter the mobile number" required>
                                </div>
                                <div>
                                </div>
                            </div>
                            <div class="form-group{{$errors->has('phone')?'has-error':''}}">
                                <label>phone:</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-phone"></i>
                                    </div>
                                    <input type="number" class="form-control" name="phone" placeholder="Enter The phone number" required>
                                </div>
                                <div>
                                </div>
                            </div>




                                     
                        <div class="form-group">
                            <label>Select Blood Group :</label>
                            <div class="input-group">
                            <div class="input-group-addon">
                                    <i class="fa fa-picture-o"></i>
                                </div>
                            
                              <select class="form-control" name="Blood_group" required>
                                 <option disabled selected> Select Blood Group </option>
                                 <option value="A +">A +</option>
                                 <option value="A -">A -</option>
                                 
                                 <option value="B +">B +</option>
                                 
                                 <option value="B -">B -</option>
                                 <option value="AB +">AB +</option>
                                 
                                 <option value="AB -">AB -</option>
                                 
                                  <option value="O +">O +</option>
                                 
                                 <option value="O -">O -</option>
                                 
                                 
                                 
                                 
                                </select>
                           @if($errors->has('type'))
                           <span class="alert-danger">{{$errors->first('type')}}</span>
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
                        <th>Name    </th>
                        <th> Images</th>
                        <th>Address     </th>
                        
                        <th>Operations</th>

                    </tr>
                    </thead>
                    <tbody>


                    @foreach ($members as $member)
                        <tr align="center">
                            <td>{{$loop->iteration }}</td>
                            <td>  {{str_limit($member->name)}}</td>
                            <td><img  src="{{asset('image/member/'.$member->image)}}"  width="70px" height="70px;"> <img  src="{{asset('image/member/'.$member->image1)}}"  width="70px" height="70px;"> </td>
                            <td>  {{str_limit($member->address, 20)}}</td></td>
                            



                            <td>

                                <button type="button" class="btn btn-primary edit" value="{{$member->id }}"  data-toggle="modal" data-target="#editModal">
                                    <i class="fa fa-pencil-square-o" aria-hidden="true"> </i> Edit</button>



                                
                                <button type="button" class="btn btn-danger delete" value="{{$member->id }}"   data-toggle="modal" onclick="return confirm('Are you sure?')">
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
                            <h1>Update Member's Informations</h1>
                              
                              
                                 
                           



                   <div class="form-group{{$errors->has('Ri_id')?'has-error':''}}">
                                <label>Ri id:</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-id-card"></i>
                                    </div>
                                    <input type="number" class="form-control" name="Ri_id" id="Ri_id" placeholder="Enter your Ri id" required>
                                </div>
                                <div>
                                </div>
                            </div>



                            <div class="form-group{{$errors->has('Degination')?'has-error':''}}">
                                <label>Degination:</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-graduation-cap"></i>
                                    </div>
                                    <input type="text" class="form-control" name="Degination" id="Degination" placeholder="Enter your Degination" required>
                                </div>
                                <div>
                                </div>
                            </div>



                            <div class="form-group{{$errors->has('name')?'has-error':''}}">
                                <label>Member's Name:</label>
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
                            
                             <div class="form-group{{$errors->has('name')?'has-error':''}}">
                                <label>Date Of Birth:</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                   <input  class="form-control" name="date" id="date"   value={{ date('M-d  H:i:s')}} required>
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
                            <label>Select Martial Status :</label>
                            <div class="input-group">
                            <div class="input-group-addon">
                                    <i class="fa fa-picture-o"></i>
                                </div>
                            
                              <select class="form-control" name="martial_status" id="martial_status" required>
                                 <option disabled selected> Select Martial Status</option>
                                 <option value="Married">Married</option>
                                 <option value="Unmarried">Unmarried</option>
                                 
                                </select>
                           @if($errors->has('type'))
                           <span class="alert-danger">{{$errors->first('type')}}</span>
                          @endif
                        </div>
                          </div>

                            
                            
                            
                            
                             <div class="form-group{{$errors->has('name')?'has-error':''}}">
                                <label>Marriage Anniversary:</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                   <input  class="form-control" name="anniversary" id="anniversary"  value={{ date('M-d  H:i:s')}} required>
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
                                <label>Member's Image:</label>
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



                            <div class="form-group{{$errors->has('Spouse')?'has-error':''}}">
                                <label>Spouse's name:</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-user"></i>
                                    </div>
                                    <input type="text" class="form-control" name="Spouse" id="Spouse" placeholder="Enter your Spouse's name">
                                </div>
                                <div>
                                </div>
                            </div>




                            <div class="form-group{{$errors->has('image1')?'has-error':''}}">
                                <label>Spouse's Image:</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-file-image-o"></i>
                                    </div>
                                    <input type="file" class="form-control" name="image1">
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
                                <label   id="fectchimage1"> </label>
                            </div>



                            <div class="form-group{{$errors->has('email')?'has-error':''}}">
                                <label>Email:</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-envelope"></i>
                                    </div>
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Enter The email">
                                </div>
                                <div>
                                    @if($errors->has('email'))
                                        <span class="help-block">
                                    <span>{{$errors->first('email')}}</span>
                                </span>
                                    @endif
                                </div>
                            </div>




                            <div class="form-group{{$errors->has('address')?'has-error':''}}">
                                <label>Address:</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-map-marker"></i>
                                    </div>
                                    <input type="text" class="form-control" name="address" id="address" placeholder="Enter Your address">
                                </div>
                                <div>
                                    @if($errors->has('address'))
                                        <span class="help-block">
                                    <span>{{$errors->first('address')}}</span>
                                </span>
                                    @endif
                                </div>
                            </div>


                           <div class="form-group{{$errors->has('Work')?'has-error':''}}">
                                <label>Profession:</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-tasks"></i>
                                    </div>
                                    <input type="text" class="form-control" name="Work" id="Work" placeholder="Enter The Profession" required>
                                </div>
                                <div>
                                </div>
                            </div>

                              <div class="form-group{{$errors->has('mobile')?'has-error':''}}">
                                <label>mobile:</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-mobile"></i>
                                    </div>
                                    <input type="number" class="form-control" name="Mobile" id="Mobile" placeholder="Enter the mobile number">
                                </div>
                                <div>
                                </div>
                            </div>
                            <div class="form-group{{$errors->has('phone')?'has-error':''}}">
                                <label>phone:</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-phone"></i>
                                    </div>
                                    <input type="number" class="form-control" name="phone" id="phone" placeholder="Enter The phone number">
                                </div>
                                <div>
                                </div>
                            </div>




                                     
                        <div class="form-group">
                            <label>Select Blood Group :</label>
                            <div class="input-group">
                            <div class="input-group-addon">
                                    <i class="fa fa-picture-o"></i>
                                </div>
                            
                              <select class="form-control" name="Blood_group" id="Blood_group">
                                 <option disabled selected> Select Blood Group </option>
                                 <option value="A +">A +</option>
                                 <option value="A -">A -</option>
                                 
                                 <option value="B +">B +</option>
                                 
                                 <option value="B -">B -</option>
                                 <option value="AB +">AB +</option>
                                 
                                 <option value="AB -">AB -</option>
                                 
                                  <option value="O +">O +</option>
                                 
                                 <option value="O -">O -</option>
                                 
                                 
                                 
                                 
                                </select>
                           @if($errors->has('type'))
                           <span class="alert-danger">{{$errors->first('type')}}</span>
                          @endif
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
                    id = $(this).val();
                    $.ajax({
                        method: 'GET',
                        url: `edit-member/${id}`,
                        success: function(data){  
                            $('#date').val(data.date);
                            $('#martial_status').val(data.martial_status);
                            $('#anniversary').val(data.anniversary);
                            $('#name').val(data.name);
                            $('#address').val(data.address);
                            $('#email').val(data.email);
                            $('#Work').val(data.Work);
                            $('#Degination').val(data.Degination);
                            $('#Blood_group').val(data.Blood_group);
                            $('#Mobile').val(data.Mobile);
                            $('#Spouse').val(data.Spouse);
                            $('#Ri_id').val(data.Ri_id);
                            $('#phone').val(data.phone);
                            $('#fectchimage').html("<img src={{ URL::to('/') }}/image/member/" + data.image + " width='70' />");
                            $('#fectchimage1').html("<img src={{ URL::to('/') }}/image/member/" + data.image1 + " width='70' />");
                            $('form[name="updateform"]').attr('action', `update-member/${data.id}`);
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
                        url: `delete-member/${id}`,
                        success: function(data){
                              location.reload();
                                      }

                    });
                });
            });
        </script>

@endsection
