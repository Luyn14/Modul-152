@extends('layout')

@section('content')

    <title>User Bearbeiten</title>
    <h3>Edit User</h3>

    <div class="container">
        <h3 class="text-center"> Benutzer bearbeiten </h3>
        <form method="POST" class="needs-validation" novalidate action="/edit_user/{{ $user->id }}">
            @csrf
            <div class="mb-3">
                <label for="firstname" class="form-label">Firstname</label>
                <input type="firstname" class="form-control" id="firstname" aria-describedby="firstname" name="firstname"
                    value="{{ $user->firstname }}">

            </div>
            <div class="mb-3">
                <label for="lastname" class="form-label">Lastname</label>
                <input type="lastname" class="form-control" id="lastname" name="lastname" value="{{ $user->lastname }}">

            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" value="" required>
                <input type="password" class="form-control" id="password" name="password_confirmation" value=""
                    required>
            </div>

            <button type=" submit" name="submit" class="btn btn-primary">Submit</button>
            <a href="/welcome" class="btn btn-danger">Zurück</a>
        </form>

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
