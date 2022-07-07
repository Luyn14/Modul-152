@extends('layout')

@section('content')
    <script>
        document.getElementById("navHome").classList.add('active');
    </script>

    <div class="container">
        <h1 class="center">Photo/Gallery</h1>
        <div class="row">


            <div class="card" style="width: 25rem;" id="user_loggedin">
                <div class="card-body" id="user_loggedin">
                    <h3>Eingelogt als: </h3>

                    <h3 class="card-title">
                        <?php if( $user != null) { ?>
                        <a href="/profil">
                            {{ $user->firstname }} {{ $user->lastname }}
                        </a>
                        <?php } else { ?>
                        <h3> Guest </h3 style="black">
                        <?php } ?>

                </div>
            </div>

        </div>
        <hr>
        <div class="row">
            @foreach ($albums as $album)
                <div class="col-lg-4 col-sm-6">
                    <div class="thumbnail img-responsive">
                        <a href="/view_album/{{ $album->id }}" title="Album {{ $album->id }}"><img
                                src="{{ url('public/Image/' . $album->cover_image) }}"> </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <div class="container">
        <button class="btn btn-danger" href="{{ route('logout') }}"
            onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> Logout </button>
        <form id="logout-form" action="{{ route('logout') }}" method="POST">
            @csrf
        </form>

    </div>
@endsection
