@extends('layout.default')

{{-- @dump($users); --}}


    <table class="table">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Title</th>
            <th scope="col">Description</th>
            <th scope="col">Thumb</th>
            <th scope="col">Price</th>
            <th scope="col">Series</th>
            <th scope="col">Sale_date</th>
            <th scope="col">Type</th>

        </tr>
    </thead>

    <tbody>
        @foreach($users as $user)
        <tr>
            <td scope="row">{{ $user->id}}</td>
            <td>{{ $user->title}}</td>
            <td>{{ $user->description }}</td>
            <td>{{ $user->thumb}}</td>
            <td>{{ $user->price}} $</td>
            <td>{{ $user->series}}</td>
            <td>{{ $user->sale_date}}</td>
            <td>{{ $user->type}}</td>
            <td>
                <button type="button" class="btn btn-primary">
                <a href="{{ route('users.show', $user->id) }}">Dettagli</a>
                </button>
            
                <button type="button" class="btn btn-warning">
                <a href="{{ route('users.edit', $user->id) }}">Modifica</a>
                </button>

                <form action="{{route('users.destroy', $user->id)}}" method="post">
                    @csrf
                    @method('DELETE')

                    <input type="submit" value="Cancella" type="button" class="btn btn-danger">

                </form>
            </td>
        </tr>
        @endforeach
    </tbody>

    </table>


    <h1  class="text-center"><a href="{{ route('users.create') }}">Aggiungi un nuovo film all'archivio</a></h1>





