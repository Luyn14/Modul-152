@extends('layout')

@section('content')

<script>
    document.getElementById("navAddImage").classList.add('active');
</script>

<div class="container" id="content">
  <form method="post" action="/edit_image/{{ $image->id }}" 
		enctype="multipart/form-data">
    @csrf
    <div class="image">
      <label><h4>Edit image</h4></label>

    <div class="album">

        <label for="album_id" class="form-label">Chosse Album</label> <br>
            <select name="album_id" class="custom-select custom-select-lg mb-3">
                @foreach($albums as $album)

                <option value="{{ $album->id }}" >{{ $album->name }}</option>
                @endforeach 

            </select>

    </div>

    

    <div class="post_button">
      <button type="submit" class="btn btn-success">Add</button>
    </div>
  </form>
</div>

@endsection