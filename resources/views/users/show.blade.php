 <a href="{{ route('users.index') }}">Torna alla home</a>
 <a href="{{ route('users.edit', $user->id) }}">Modifica</a>

 <form action="{{route('users.destroy', $user->id)}}" method="post">
     @csrf
     @method('DELETE')

     <input type="submit" value="Cancella">

 </form>

 <ul>
     <li>ID: {{$user->id}}</li>
     <li>Title: {{$user->title}}</li>
     <li>Description: {{$user->description}}</li>
     <li>Thumb: {{$user->thumb}}</li>
     <li>Price: {{$user->price}}</li>
     <li>Series: {{$user->series}}</li>
     <li>Sale_date: {{$user->sale_date}}</li>
     <li>Type: {{$user->type}}</li>
 </ul>
