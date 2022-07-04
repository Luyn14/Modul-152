@extends('layout')

@section('content')
    <script>
        document.getElementById("navViewAlbum").classList.add('active');
    </script>

    <div class="container">
        <h3>{{ $album->name }}</h3>
        <h5>{{ $album->description }}</h5>
        <div class="row">
            @foreach ($image as $data)
                <div class="col-lg-4">



                    <img src="{{ url('public/Image/' . $data->image) }}" style="height: 300px; width: 400px;">

                    @isset($user)
                        @if ($user->id == $album->user_id || $user->id == 1)
                            <div class="row">
                                <div class="col-lg-6">
                                    <a href="/edit_image/{{ $data->id }}"> <button class="btn btn-primary"> Edit
                                        </button> </a>
                                </div>
                                <div class="col-lg-6">
                                    <form method="Post" action="/delete_image/{{ $data->id }}">
                                        @method('delete')
                                        @csrf
                                        <button class="btn btn-danger"> Delete </button>
                                </div>
                            </div>
                            </form>
                        @endif
                    @endisset

                </div>
            @endforeach
        </div>


    </div>
@endsection
