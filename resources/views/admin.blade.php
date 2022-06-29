

@extends('layout')

@section('content')

<script>
    document.getElementById("navAdmin").classList.add('active');
</script>

<div class="container">
<h3 class="center">Admin</h3>
</div>

</div>
<hr>
<div class="container"> 
    	<div class="row">
		@foreach($users as $user)

		                <div class="col-lg-3 col-sm-6">
                                <h2>    
                                    {{ $user->firstname }} {{ $user->lastname }}
                                </h2>
                                <a href="/edit_user/{{ $user->id}}"> <button class="btn btn-primary"> Edit </button> </a>
                                <button class="btn btn-danger"> Delete </button>
                        </div>  
                    
		@endforeach
	</div>
</div>
<div class="container">
	<div class="row">
		@foreach($albums as $album)

		            <div class="col-lg-4 col-sm-6">
			            <div class="thumbnail img-responsive">
				            <a href="/view_album/{{ $album->id }}" title="Album {{$album->id}}"><img src="{{ url('public/Image/'.$album->cover_image) }}"> </a>
                                <a href="/edit_album/{{ $album->id}}"> <button class="btn btn-primary"> Edit </button> </a>
                                <button class="btn btn-danger"> Delete </button>
                        </div>  
                    </div>
		@endforeach
	</div>
</div>

    <div class="container">
                            <button class="btn btn-danger" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> Logout </button>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST">
                            @csrf
                            </form>

    </div>
</div>
@endsection