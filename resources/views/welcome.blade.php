@extends('layout')

@section('content')
    <div class="container">
        <div class="container" id="loginT">
            <h1 id="text-underlay"> Gallerie </h1>
            <h4 id="text-underlay">Willkommen zur Gallerie</h4>
            <div class=" card" style="width: 35rem;" id="login">
                <div class="card-body">
                    <h5 class="card-title"><a href="/register">Sign Up</a></h5>
                    <p class="card-text">Schon Angemeldet? Loggen sie sich ein.
                    <form method="POST" action="/login">
                        @csrf
                        <div class="row">
                            <div class="col">
                                <h1> Login </h1>
                                <div class="mb-3">
                                    <label for="firstname" class="form-label">Firstname</label>
                                    <input type="text" class="form-control" id="firstname" name="firstname">
                                </div>
                                <div class="mb-3">
                                    <label for="password" class="form-label">Password</label>
                                    <input type="password" class="form-control" id="password" name="password">
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <a href="/home">
                                <button type="button" class="btn btn-primary">Guest</button>
                                </a>
                                <div>

                                </div>
                            </div>
                        </div>
                    </form>
                        
                    </p>
                </div>
            </div>

        </div> 

        @if ($errors->any())
        <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

</div>
 
@endsection

