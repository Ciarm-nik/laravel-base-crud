@extends('layout.default')

<button type="button" class="btn btn-success">
    <a href="{{ route('users.index') }}">Torna alla home</a>
</button>


<form class="form" action="{{ route('users.store') }}" method="post">
    @csrf


    <div class="mb-3">
        <label class="form-label" for="ID">ID</label>
        <input class="form-control" type="text" name="id" id="name">
    </div>

    <div class="mb-3">
        <label class="form-label" for="title">Title</label>
        <input class="form-control" type="text" name="title" id="text">

    </div>

    <div class="mb-3">
        <label for="description">Description</label>
        <input class="form-control" type="text" name="description" id="text">
    </div>


    <div class="mb-3">
        <label for="thumb">Thumb</label>
        <input class="form-control" type="text" name="thumb" id="text">
    </div>

    <div class="mb-3">
        <label for="price">Price</label>
        <input class="form-control" type="text" name="price" id="text">
    </div>


    <div class="mb-3">
        <label for="series">Series</label>
        <input class="form-control" type="text" name="series" id="text">

    </div>

    <div class="mb-3">
        <label for="sale_date">Sale_date</label>
        <input class="form-control" type="text" name="sale_date" id="text">

    </div>

    <div class="mb-3">
        <label for="type">Type</label>
        <input class="form-control" type="text" name="type" id="text">
    </div>
    <div>
        <input class="btn btn-primary" type="submit" value="Invia">
    </div>
</form>
