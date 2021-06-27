@extends('layout.default')


<button type="button" class="btn btn-success">
<a  href="{{ route('users.index') }}">Torna alla home</a>
</button>

<button type="button" class="btn btn-warning">
<a  href="{{ route('users.edit', $user->id) }}">Modifica</a>
</button>

<form class="contents" action="{{route('users.destroy', $user->id)}}" method="post">
    @csrf
    @method('DELETE')


    <input type="submit" value="Cancella" type="button" class="btn btn-danger">

</form>

<ul>
    <li><strong>ID:</strong> {{$user->id}}</li>
    <li><strong>Title:</strong> {{$user->title}}</li>
    <li><strong>Description:</strong> {{$user->description}}</li>
    <li><strong>Thumb:</strong> {{$user->thumb}}</li>
    <li><strong>Price: </strong> {{$user->price}}</li>
    <li><strong>Series: </strong> {{$user->series}}</li>
    <li><strong>Sale_date: </strong> {{$user->sale_date}}</li>
    <li><strong>Type:</strong> {{$user->type}}</li>
</ul>
