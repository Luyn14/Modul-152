@extends('layout')

@section('content')
    <script>
        document.getElementById("navAddImage").classList.add('active');
    </script>

    <div class="container" id="content">
        <form method="post" action="{{ route('images.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="image">
                <label>
                    <h4>Add image</h4>
                </label>
                <input type="file" class="form-control" required name="image">
            </div>
            @if ($albums->count() == 0)
                <div class="container">
                    <h3> Bitte erstellen sie zuerst ein Album bevor sie ein Bild Hochladen </h3>
                </div>
            @endif
            @if ($albums->count() > 0)
                <div class="album">
                    <label for="album_id" class="form-label">Chosse Album</label> <br>
                    <select name="album_id" class="custom-select custom-select-lg mb-3">
                        @foreach ($albums as $album)
                            <option value="{{ $album->id }}">{{ $album->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="post_button">
                    <button type="submit" class="btn btn-success">Add</button>
                </div>
            @endif
        </form>
    </div>
@endsection
