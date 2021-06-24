<form action="{{ route('users.store') }}" method="post">
    @csrf

    <label for="ID">ID</label>
    <input type="text" name="id" id="name">

    <br>

    <label for="title">Title</label>
    <input type="text" name="title" id="text">

    <br>

    <label for="description">Description</label>
    <input type="text" name="description" id="text">

    <br>

    <label for="thumb">Thumb</label>
    <input type="text" name="thumb" id="text">

<br>
    <label for="price">price</label>
    <input type="text" name="thumb" id="text">
<br>
    <label for="series">Series</label>
    <input type="text" name="series" id="text">
<br>
    <label for="sale_date">Sale_date</label>
    <input type="text" name="sale_date" id="text">
<br>
    <label for="type">Type</label>
    <input type="text" name="type" id="text">
<br>
    <input type="submit" value="Invia">
</form>
