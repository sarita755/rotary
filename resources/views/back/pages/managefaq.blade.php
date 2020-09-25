@extends('back.layouts.main')

@section('content')
   
   
    
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal"> <i class="fa fa-plus" aria-hidden="true"> </i> Add FAQ</button>
             <div class="box">
  
    <h3> All FAQS</h3>
   
   
        <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog">

                <!-- add about-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title" align="center">Create FAQ</h4>
                    </div>
                    <div class="modal-body">

                        <form role="form" method="post" action="{{route('storefaq')}}" enctype="multipart/form-data">
                            @csrf

             
             
               <h4>Write a Question: </h4>
<textarea id="ckview" class="form-control mb-20 editor" name="mgs1" rows="7" cols="20"></textarea>
                                                    <script src="{{asset('assets/ckeditor/ckeditor.js')}}"></script>
                                                    <script>
                                                       var ckview = document.getElementById("ckview");
                                                       CKEDITOR.replace(ckview,{
                                                       language:'en-gb'
                                                     });
                                                    </script>
                                                   
               <h4>Write a Answer: </h4>
       <textarea id="ckvieww" class="form-control mb-20 editor" name="mgs2" rows="7" cols="20"></textarea>
                                                    <script src="{{asset('assets/ckeditor/ckeditor.js')}}"></script>
                                                    <script>
                                                       var ckview = document.getElementById("ckvieww");
                                                       CKEDITOR.replace(ckview,{
                                                       language:'en-gb'
                                                     });
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
                        <th>Question</th>
                        <th>  Answer</th>
                        <th> Operations</th>
                    </tr>
                    </thead>
                    <tbody>

              @foreach ($faqs as $faq)
                  <tr align="center">
                      <td>{{$loop->iteration }}</td>
                     
                      <td>{{  html_entity_decode(strip_tags(str_limit($faq->mgs1,16))) }}</td>
                      <td>{{  html_entity_decode(strip_tags(str_limit($faq->mgs2,16))) }}</td>
                      <td align="center">

                           
                                 <button type="button" class="btn btn-danger delete" value="{{$faq->id }}"   data-toggle="modal" onclick="return confirm('Are you sure?')">
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
                            
                            
                            <div class="form-group{{$errors->has('name')?'has-error':''}}">
                                <label>File Name:</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-user"></i>
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


                            <div class="form-group{{$errors->has('file')?'has-error':''}}">
                                <label>File:</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-file"></i>
                                    </div>
                                     <input type="file" name="file" id="file"  class="form-control">
                                </div>
                                <div>
                                    @if($errors->has('file'))
                                        <span class="help-block">
                                    <span>{{$errors->first('file')}}</span>
                                </span>
                                    @endif
                                </div>
                            </div>

                            
                            
                            


                           <div class="form-group">
                             <label   id="fectchimage"> </label>
                           </div>
                            
                            
                            <div class="form-group center"> 
                        
                        <div align="center" >
                            <input type="submit" class="btn btn-primary">
                            </div>
                        </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>

            </div>
        </div>




          <script>
                $(document).ready(function(){
                $(document).on('click', '.delete', function(){
                    id = $(this).val();
                    $.ajax({
                        
                        method: 'GET',
                        url: `delete-faq/${id}`,
                        success: function(data){
                              location.reload();
                                      }

                    });
                });
            });
        </script>
       
       
       
       
       
       
       


@endsection