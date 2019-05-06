@extends('layouts.master');

@section('title')
upload file
@endsection

@section('content')
<div>
    <center><h1>upload file</h1></center>
    <form action="/store" method="POST" enctype="multipart/form-data">
    {{ csrf_field() }}
    Book title:
    <br />
    <input type="text" name="title" />
    <br /><br />
    Logo:
    <br />
    <input type="file" name="logo" />
    <br /><br />
    <input type="submit" value=" Save " />
</form>
</div>
@endsection