
@extends('back.layouts.main')

@section('content')




    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal"> <i class="fa fa-plus" aria-hidden="true"> </i> Create plan</button>
             <div class="box">
  
    <h3> All Plan</h3> 
    <!-- Modal -->
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">

            <!-- add about-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title" align="center">Create plan </div>
                <div class="modal-body">

                   <form role="form" method="post" action="{{route('storeplanofaction')}}" enctype="multipart/form-data">
                        @csrf




                        <div class="form-group{{$errors->has('name')?'has-error':''}}">
                            <label>Plan Name:</label>
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-user"></i>
                                </div>
                                <input type="text" class="form-control" name="name" placeholder="Enter The plan name" required>
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
                           @if($errors->has('month'))
                           <span class="alert-danger">{{$errors->first('month')}}</span>
                          @endif
                        </div>
                          </div>
                        
                        
                          
                        <div class="form-group">
                            <label>Category :</label>
                            <div class="input-group">
                            <div class="input-group-addon">
                                    <i class="fa fa-picture-o"></i>
                                </div>
                            
                              <select class="form-control" name="category" required>
                                 <option disabled selected> Select category</option>
                                 <option value="ri intro">RI Introduction</option>
                                 <option value="intro">Introduction</option>
                                 <option value="plan action">Plan of action</option>
                                 <option value="Featured news">Featured news</option>
                                 <option value="six area focused">Six area focused</option>
                                 <option value="Project">Project</option>
                                </select>
                           @if($errors->has('category'))
                           <span class="alert-danger">{{$errors->first('category')}}</span>
                          @endif
                        </div>
                          </div>

                        
                 <div class="form-group">
                     <label>Description</label>
                             <textarea name="Description"></textarea>
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
                    <th>S.N</th>
                    <th>Plan Name</th>
                    <th>Date</th>
                    <th>Month</th>
                    <th>Category</th>
                    <th>Description</th>
                    <th>Operation</th>

                </tr>
                </thead>
                <tbody>

                @foreach ($plans as $plan)
                    <tr align="center">
                        <td>{{$loop->iteration }}</td>
                        <td>{{$plan->name}}</td>
                         <td>{{$plan->date}}</td>
                         <td>{{$plan->month}}</td>
                         <td>{{$plan->category}}</td>
                         <td>{{str_limit($plan->Description, 20) }}</td>
                       
                        <td>

                            <button type="button" class="btn btn-primary edit" value="{{$plan->id }}"  data-toggle="modal" data-target="#editModal">
                                <i class="fa fa-pencil-square-o" aria-hidden="true"> </i> Edit</button>



                            
                            
                                <button type="button" class="btn btn-danger delete" value="{{$plan->id }}"   data-toggle="modal" onclick="return confirm('Are you sure?')">
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
                        
                         <div class="form-group{{$errors->has('name')?'has-error':''}}">
                            <label>Plan Name:</label>
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-header"></i>
                                </div>
                                <input type="text" name="name" id="name"  class="form-control">
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

                        <div class="form-group{{$errors->has('month')?'has-error':''}}">
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
                           @if($errors->has('month'))
                           <span class="alert-danger">{{$errors->first('month')}}</span>
                          @endif
                        </div>
                          </div>
                        
                        
                        
                        
                         <div class="form-group{{$errors->has('category')?'has-error':''}}">
                            <label>Category:</label>
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-newspaper-o"></i>
                                </div>
                                <select class="form-control" name="category" id="category"  required>
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
                                @if($errors->has('category'))
                                    <span class="help-block">
                                    <span>{{$errors->first('category')}}</span>
                                </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group{{$errors->has('Description')?'has-error':''}}">
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
                    url: `edit-planofaction/${id}`,
                    success: function(data){
                        $('#name').val(data.name);
                        $('#date').val(data.date);
                        $('#month').val(data.month);
                        $('#category').val(data.category);
                         CKEDITOR.instances['Description'].setData(data.Description);
                        $('form[name="updateform"]').attr('action', `updateplanofaction/${data.id}`);
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
                        url: `delete-planofaction/${id}`,
                        success: function(data){
                              location.reload();
                                      }

                    });
                });
            });
        </script>
        
        
    
    
    



@endsection












