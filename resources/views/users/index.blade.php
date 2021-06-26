{{-- @dump($users); --}}

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
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
            <td>{{ $user->price}}</td>
            <td>{{ $user->series}}</td>
            <td>{{ $user->sale_date}}</td>
            <td>{{ $user->type}}</td>
            <td>
                <a href="{{ route('users.show', $user->id) }}">Dettagli</a>
                <a href="{{ route('users.edit', $user->id) }}">Modifica</a>

                <form action="{{route('users.destroy', $user->id)}}" method="post">
                    @csrf
                    @method('DELETE')

                    <input type="submit" value="Cancella">

                </form>
            </td>
        </tr>
        @endforeach
    </tbody>

    </table>


    <a href="{{ route('users.create') }}">Aggiungi utente...</a>


</body>
</html>


<
