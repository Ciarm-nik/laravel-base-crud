{{-- @dump($users); --}}


<table>
  <thead>
    <tr>
    <th>ID</th>
      <th>Title</th>
      <th>Description</th>
      <th>Thumb</th>
      <th>Price</th>
      <th>Series</th>
      <th>Sale_date</th>
      <th>Type</th>

    </tr>
  </thead>

  <tbody>
    @foreach($users as $user)
    <tr>
      <td>{{ $user->id}}</td>
      <td>{{ $user->title}}</td>
      <td>{{ $user->description }}</td>
      <td>{{ $user->thumb}}</td>
      <td>{{ $user->price}}</td>
      <td>{{ $user->series}}</td>
      <td>{{ $user->sale_date}}</td>
      <td>{{ $user->type}}</td>

      <td><a href="{{ route('users.show', $user->id) }}">Dettagli...</a></td>
    </tr>
    @endforeach
  </tbody>

</table>
