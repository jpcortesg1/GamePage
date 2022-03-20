@extends('adminlte::page')

@section('title', 'CRUD con Laravel 8')

@section('content_header')
    <h1>Listado de games</h1>
@stop

@section('content')
   <a href="games/create" class="btn btn-primary mb-3">Create</a>

   <table id="games" class="table table-striped table-bordered shadow-lg mt-4" style="width:100%">
    <thead class="bg-primary text-white">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Developer</th>
            <th scope="col">Description</th>
            <th scope="col">Id Category</th>
            <th scope="col">Release Date</th>
            <th scope="col">Price</th>
            <th scope="col">Age Rating</th>
            <th scope="col">Buy Quantity</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($games as $game)
        <tr>
            <td>{{$game->id}}</td>
            <td>{{$game->name}}</td>
            <td>{{$game->developer}}</td>
            <td>{{$game->description}}</td>
            <td>{{$game->id_category}}</td>
            <td>{{$game->releasedate}}</td>
            <td>{{$game->price}}</td>
            <td>{{$game->agerating}}</td>
            <td>{{$game->buyquantity}}</td>
            <td>
                <form action="{{ route ('games.destroy',$game->id)}}" method="POST">
                <a href="/games/{{ $game->getId()}}/edit" class="btn btn-info">Edit</a>
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection