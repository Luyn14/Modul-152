@extends('layout')

@section('content')
    <script>
        document.getElementById("navAdmin").classList.add('active');
    </script>

    <div class="container">
        <h1 class="center">Admin</h1>
    </div>

    <hr>
    <div class="container">
        <h3 class="center">Benutzer</h3>
        <div class="row">
            @foreach ($users as $user)
                <div class="col-lg-3 col-sm-6">
                    <h2>
                        {{ $user->firstname }} {{ $user->lastname }}
                    </h2>
                    <a href="/edit_user/{{ $user->id }}"> <button class="btn btn-primary"> Edit </button> </a>
                    <form method="Post" action="/delete_user/{{ $user->id }}">
                        @method('delete')
                        @csrf
                        <button class="btn btn-danger"> Delete </button>
                    </form>
                </div>
            @endforeach
        </div>
    </div>
    <div class="container">
        <h3 class="center">Alben</h3>
        <div class="row">
            @foreach ($albums as $album)
                <div class="col-lg-4 col-sm-6">
                    <div class="thumbnail img-responsive">
                        <a href="/view_album/{{ $album->id }}" title="Album {{ $album->id }}"><img
                                src="{{ url('public/Image/' . $album->cover_image) }}"> </a>
                        <a href="/edit_album/{{ $album->id }}"> <button class="btn btn-primary"> Edit </button> </a>
                        <form method="Post" action="/delete_album/{{ $album->id }}">
                            @method('delete')
                            @csrf
                            <button class="btn btn-danger"> Delete </button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
