@extends('layout')

@section('content')
    <script>
        document.getElementById("navViewImage").classList.add('active');
    </script>

    <div class="container">
        <h3>View all Images</h3>
        <hr>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Image id</th>
                    <th scope="col">Album id</th>
                    <th scope="col">Image</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($imageData as $data)
                    <tr>
                        <td>{{ $data->id }}</td>
                        <td>{{ $data->album_id }}</td>
                        <td>
                            <img src="{{ url('public/Image/' . $data->image) }}" style="height: 100px; width: 150px;">
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
