

@extends('layout')

@section('content')

<script>
    document.getElementById("navHome").classList.add('active');
</script>

<div class="container">
<h1 class="center">Benutzer-Alben</h1>
<div class="row">




</div>
<hr>
	<div class="row">
		@foreach($albums as $album)
        <?php 
            if ($user != null) {
                if ( $user->id == $album->user_id) { ?>
		            <div class="col-lg-4 col-sm-6">
			            <div class="thumbnail img-responsive">
				            <a href="/view_album/{{ $album->id }}" title="Album {{$album->id}}"><img src="{{ url('public/Image/'.$album->cover_image) }}"> </a>
                                <a href="/edit_album/{{ $album->id}}"> <button class="btn btn-primary"> Edit </button> </a>
                                <button class="btn btn-danger"> Delete </button>
                        </div>  
		            </div>
                <?php  }} ?>
		@endforeach
	</div>
</div>

    <div class="container">
                            <button class="btn btn-danger" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> Logout </button>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST">
                            @csrf
                            </form>

    </div>




@endsection