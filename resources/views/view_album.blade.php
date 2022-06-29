@extends('layout')

@section('content')

<script>
    document.getElementById("navViewAlbum").classList.add('active');
</script>

<div class="container">
  <h3>{{$album->name}}</h3>
  <h5>{{$album->description}}</h5>
<div class="row">
  @foreach($image as $data)
    <div class="col-lg-4">

    <table class="table">
      <thead>
        <tr>
          <th scope="col">Image id</th>
          <th scope="col">Album id</th>
        </tr>
      </thead>
    <tbody>


      <tr>
        <td>{{$data->id}}</td>
        <td>{{$data->album_id}}</td>

      </tr>
      <tr>
          <td colspan="2"><img src="{{ url('public/Image/'.$data->image) }}" style="height: 300px; width: 400px;"></td>
      </tr>
              <?php 
                if ($user != null) {
                  if ( $user->id == $album->user_id || $user->id == 1) { ?>
      <tr>
                <td> <a href="/edit_image/{{ $data->id}}"> <button class="btn btn-primary"> Edit </button> </a>
            <button class="btn btn-danger"> Delete </button>  </td>
      </tr>
              <?php  }} ?>
        </tbody>
      </table>
    </div>

  @endforeach
</div>


  </div>
</div>

@endsection