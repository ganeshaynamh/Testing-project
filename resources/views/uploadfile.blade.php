@extends('layouts.master');

@section('title')
upload file
@endsection

@section('content')
<div>
    <center><h1>upload file</h1></center>
    <form action="{{ route('uploadfile.file') }}" method="POST" enctype="multipart/form-data" class="form-horizontal ">
    {{ csrf_field() }}

    <!-- {{ route('uploadfile.file') }} -->
    Book title:
    <br />
    <input type="text" name="title" />
    <br /><br />
    Logo:
    <br />
    <!-- <input type="file" name="file" /> -->
    <input type="file" name="file"/>
    <br /><br />
    <input type="submit" value=" Save " class="btn btn-primary" />
</form>
</div>


<div class="container">
<div class="row">
    <div class="col">
        <img src="{{ asset('storage/upload/1.jpg') }}" alt="">
    </div>
</div>
</div>

@endsection