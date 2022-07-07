@extends('layout')

@section('content')
    <script>
        document.getElementById("navAddAlbum").classList.add('active');
    </script>
    <h3>Add Album</h3>
    <div class="container">
        <form method="post" action="{{ route('albums.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="image">
                <label>
                    <h4>Album Name</h4>
                </label>
                <input type="text" class="form-control" required name="name">
            </div>

            <div class="album">
                <label>
                    <h4>Album Description</h4>
                </label>
                <input type="text" class="form-control" required name="description">
            </div>

            <div class="image">
                <label>
                    <h4>Add Cover Image</h4>
                </label>
                <input type="file" class="form-control" required name="image">
            </div>



            <div class="post_button">
                <button type="submit" class="btn btn-success">Add</button>
            </div>
        </form>
    </div>
@endsection
