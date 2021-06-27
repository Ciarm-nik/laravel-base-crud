@extends('layout.default')



<button type="button" class="btn btn-success">
    <a href="{{ route('users.index') }}">Torna alla home</a>
</button>

<form class="form" action="{{route("users.update", $user->id)}}" method="post">
    @csrf

    @method('PATCH')

<div class="mb-3">
    <label class="form-label" for="ID">ID</label>
    <input class="form-control" type="text" name="id" id="name" value={{$user->id}}>
</div>

<div class="mb-3">
    <label class="form-label" for="title">Title</label>
    <input class="form-control" type="text" name="title" id="text" value={{$user->title}}>
</div>
   
<div class="mb-3">
    <label class="form-label" for="description">Description</label>
    <input class="form-control" type="text" name="description" id="text" value={{$user->description}}>
</div>
  
<div class="mb-3">
    <label class="form-label" for="thumb">Thumb</label>
    <input class="form-control" type="text" name="thumb" id="text" value={{$user->thumb}}>
</div>

    <div class="mb-3">
    <label class="form-label" for="price">price</label>
    <input class="form-control" type="text" name="thumb" id="text" value={{$user->price}}>
</div>

    <div class="mb-3">
    <label class="form-label" class="form-label" for="series">Series</label>
    <input class="form-control" type="text" name="series" id="text" value={{$user->series}}>
</div>

    <div class="mb-3">
    <label class="form-label" for="sale_date">Sale_date</label>
    <input class="form-control" type="text" name="sale_date" id="text" value={{$user->sale_date}}>
</div>

    <div class="mb-3">
    <label class="form-label" for="type">Type</label>
    <input class="form-control" type="text" name="type" id="text" value={{$user->type}}>
</div>

    <div>
     <input class="btn btn-primary" type="submit" value="Invia">
    </div>
</form>
