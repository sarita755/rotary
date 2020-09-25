@extends('back.layouts.main')

@section('content')

    <form role="form" method="post"  action="{{route('updatearticle',$id)}}">
         @csrf
        {{method_field('PUT')}}
        <h1>Update</h1>



        <div class="form-group
            {{$errors->has('title')?'has-error':''}}">
            <label>Title</label>
            <input type="text" name="title" class="form-control" placeholder="Enter The title"  value="{{old('title')?old('name'):$Article->title}}">
            @if($errors->has('title'))
                <span class="help-block">
                                    <span>{{$errors->first('title')}}</span>
                                </span>
            @endif
        </div>


        <input type="submit"  class="btn btn-success">
    </form>
@endsection