<form action="{{ route('api.maestria') }}" method="POST">
  @csrf
  <label for="name">Nome</label>
  <input type="text" name="name" id="name">
  <label for="tag">TagLine</label>
  <input type="text" name="tag" id="tag">
  <input type="submit" value="Enviar">
</form>
