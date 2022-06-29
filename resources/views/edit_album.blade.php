@extends('layout')

@section('content')



<div class="container">
  <form method="post" action="/edit_album/{{ $album->id }}" 
		enctype="multipart/form-data">
    @csrf
    <div class="image">
      <label><h4>Album Name</h4></label>
      <input type="text" class="form-control" required name="name" value="{{ $album->name }}">
    </div>

    <div class="album">
      <label><h4>Album Description</h4></label>
      <input type="text" class="form-control" required name="description" value="{{ $album->description }}">
    </div>

    <div class="image">
      <label><h4>Change Cover Image</h4></label>
      <input type="file" class="form-control" required name="image"  value="{{ $album->name }}">
    </div>



    <div class="post_button">
      <button type="submit" class="btn btn-success">Update</button>
    </div>
  </form>
</div>

@endsection