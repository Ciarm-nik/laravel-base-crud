<form action="{{ route('users.store') }}" method="post">
  @csrf

  <label for="name">ID</label>
  <input type="text" name="id" id="name">

  <label for="lastname">Title</label>
  <input type="email" name="title" id="lastname">

  <label for="password">Description</label>
  <input type="password" name="description" id="password">

  <input type="submit" value="Invia">
</form>