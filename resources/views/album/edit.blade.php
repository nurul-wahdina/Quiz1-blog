@extends('layouts.app')

@section('content')

<div class="container">

    <h3>Edit Data Album</h3>
    <form action="{{ url('/album/' . $row->id) }}" method="POST"> 
        <input name="_method" type="hidden" value="PATCH">
        @csrf

    <div class="form-group">
        <label for="">NAME</label> 
        <input type="text" name="name" class="form-control" value="{{ $row->name }}">
    </div>

    <div class="form-group">
        <label for="">TEXT</label> 
        <input type="text" name="text" class="form-control" value="{{ $row->text }}">
    </div>

    <div class="form-group">
        <label for="">PHOTOS</label> 
        <input type="text" name="photo_id" class="form-control" value="{{ $row->photo_id }}">
    </div>

    <div>
        <div class="form-group">
        <input type="submit" value="UPDATE" class="btn btn-primary">
    </div>

    </form>
</div>
@endsection