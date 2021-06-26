<a href="{{route('users.index')}}">Torna alla home</a>

<form action="{{route("users.update", $user->id)}}" method="post">
    @csrf

    @method('PATCH')

    <label for="ID">ID</label>
    <input type="text" name="id" id="name" value={{$user->id}}>

    <br>

    <label for="title">Title</label>
    <input type="text" name="title" id="text" value={{$user->title}}>

    <br>

    <label for="description">Description</label>
    <input type="text" name="description" id="text" value={{$user->description}}>

    <br>

    <label for="thumb">Thumb</label>
    <input type="text" name="thumb" id="text" value={{$user->thumb}}>

    <br>
    <label for="price">price</label>
    <input type="text" name="thumb" id="text" value={{$user->price}}>
    <br>
    <label for="series">Series</label>
    <input type="text" name="series" id="text" value={{$user->series}}>
    <br>
    <label for="sale_date">Sale_date</label>
    <input type="text" name="sale_date" id="text" value={{$user->sale_date}}>
    <br>
    <label for="type">Type</label>
    <input type="text" name="type" id="text" value={{$user->type}}>
    <br>
    <input type="submit" value="Invia">
</form>
