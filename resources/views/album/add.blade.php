@extends('layouts.app')

@section('content')

<div class="container">

    <h3>Tambah Data Album</h3>
    <form action="{{ url('/album') }}" method="POST">
@csrf 

<div class="form-group">
    <label for="">NAME</label> 
    <input type="text" name="name" class="form-control">
</div>

<div class="form-group">
    <label for="">TEXT</label> 
    <input type="text" name="text" class="form-control">
</div>

<div class="form-group">
    <label for="">PHOTOS</label> 
    <input type="text" name="photo_id" class="form-control">
</div>

<div>
    <div class="form-group">
    <input type="submit" value="SIMPAN" class="btn btn-primary">
</div>

    </form>
</div>

@endsection