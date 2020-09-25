@extends('back.layouts.main')

@section('content')
    
    
    
    <h3 align="center" style="color:blue;"> All Plan Of Action</h3> 
    <div class="box">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal"> <i class="fa fa-plus" aria-hidden="true"> </i> Create Plan Of Action</button>

        <!-- Modal -->
        <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog">

                <!-- add about-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title" align="center">Create Plan Of Action</h4>
                    </div>
                    <div class="modal-body">

                        <form role="form" method="post" action="{{route('storeplan')}}" enctype="multipart/form-data">
                            @csrf

          

                     <div class="form-group{{$errors->has('name')?'has-error':''}}">
                                <label>Plan Name:</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-user"></i>
                                    </div>
                                    <input type="text" class="form-control" name="name" placeholder="Enter The File Plan Name" required>
                                </div>
                                <div>
                                    @if($errors->has('name'))
                                        <span class="help-block">
                                    <span>{{$errors->first('name')}}</span>
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
                            <label>Select Month :</label>
                            <div class="input-group">
                            <div class="input-group-addon">
                                    <i class="fa fa-picture-o"></i>
                                </div>
                            
                              <select class="form-control" name="month" required>
                                 <option disabled selected> Select month</option>
                                 <option value="Jan">Jan</option>
                                  <option value="Feb">Feb</option>
                                 
                                  <option value="Mar">Mar</option>
                                 
                                  <option value="Apr">Apr</option>
                                 
                                  <option value="May">May</option>
                                 
                                  <option value="Jun">Jun</option>
                                 
                                  <option value="Jul">Jul</option>
                                 
                                  <option value="Aug">Aug</option>
                                 
                                  <option value="Sep">Sep</option>
                                 
                                  <option value="Oct">Oct</option>
                                 
                                  <option value="Nov">Nov</option>
                                  
                                  <option value="Dec">Dec</option>
                                 
                                 
                        
                                 
                                 
                                </select>
                           @if($errors->has('type'))
                           <span class="alert-danger">{{$errors->first('type')}}</span>
                          @endif
                        </div>
                          </div>

                        


 
                                      
                        <div class="form-group">
                    <label>category :</label>
                            <div class="input-group">
                            <div class="input-group-addon">
                                    <i class="fa fa-picture-o"></i>
                                </div>
                    <select class="form-control" name="category" required>
                        <option disabled selected>Select category</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                    </select>
                    @if($errors->has('mediatype'))
                       <span class="alert-danger">{{$errors->first('mediatype')}}</span>
                    @endif
                </div>
                </div


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







        <div class="box">




            <!-- /.box-header -->
            <div class="box-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr align="center">
                        <th>S.N</th>
                        <th>Plan  Name</th>
                        <th>Category </th>
                        <th> Month</th>
                        <th> Operations</th>
                    </tr>
                    </thead>
                    <tbody>

              @foreach ($plans as $plan)
                  <tr align="center">
                      <td>{{$loop->iteration }}</td>
                      <td>{{$plan->name }}</td>
                      <td>{{$plan->category }}</td>
                      <td>{{$plan->month }}</td>
                      <td align="center">

                            <button type="button" class="btn btn-primary edit" value="{{$plan->id}}"  data-toggle="modal" data-target="#editModal">
                                    <i class="fa fa-pencil-square-o" aria-hidden="true"> </i> Edit</button>


                          <button onClick="delete()"> <a href="{{route('delete-file',$plan->id)}}" class="btn btn-danger"> <i class="fa fa-trash-o" aria-hidden="true"> </i> Delete</a></button>

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
                            
                            
                            
                                <div class="form-group{{$errors->has('name')?'has-error':''}}">
                                <label>Plan Name:</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-user"></i>
                                    </div>
                                    <input type="text" class="form-control" name="name" id="name" placeholder="Enter The File Plan Name" required>
                                </div>
                                <div>
                                    @if($errors->has('name'))
                                        <span class="help-block">
                                    <span>{{$errors->first('name')}}</span>
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
                                <input type="date" class="form-control" name="date" id="date"  required>
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
                            <label>Select Month :</label>
                            <div class="input-group">
                            <div class="input-group-addon">
                                    <i class="fa fa-picture-o"></i>
                                </div>
                            
                              <select class="form-control" name="month" id="month" required>
                                 <option disabled selected> Select month</option>
                                 <option value="Jan">Jan</option>
                                  <option value="Feb">Feb</option>
                                 
                                  <option value="Mar">Mar</option>
                                 
                                  <option value="Apr">Apr</option>
                                 
                                  <option value="May">May</option>
                                 
                                  <option value="Jun">Jun</option>
                                 
                                  <option value="Jul">Jul</option>
                                 
                                  <option value="Aug">Aug</option>
                                 
                                  <option value="Sep">Sep</option>
                                 
                                  <option value="Oct">Oct</option>
                                 
                                  <option value="Nov">Nov</option>
                                  
                                  <option value="Dec">Dec</option>
                                 
                                 
                        
                                 
                                 
                                </select>
                           @if($errors->has('type'))
                           <span class="alert-danger">{{$errors->first('type')}}</span>
                          @endif
                        </div>
                          </div>

                        


 
                                      
                        <div class="form-group">
                    <label>category :</label>
                            <div class="input-group">
                            <div class="input-group-addon">
                                    <i class="fa fa-picture-o"></i>
                                </div>
                    <select class="form-control" name="category" id="category" required>
                        <option disabled selected>Select category</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                    </select>
                    @if($errors->has('mediatype'))
                       <span class="alert-danger">{{$errors->first('mediatype')}}</span>
                    @endif
                </div>
                </div


                            <label>Description</label>
                             <textarea name="Description" id="Description"></textarea>
                             <script>
                                CKEDITOR.replace( 'Description' );
                             </script>
                     




                            
                            
                            <div class="form-group center"> 
                                              
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
                        url: `/edit-plan/${id}`,
                        success: function(data){
                            alert('hello');
                             $('#name').val(data.name);
                            CKEDITOR.instances['Description'].setData(data.Description);
                            $('#category').val(data.category);
                            $('#month').val(data.month);
                            $('#date').val(data.date);
                            $('form[name="updateform"]').attr('action', `/update-file/${data.id}`);
                        }

                    });
                });
            });


        </script>

       
       
       
       
       
       


@endsection