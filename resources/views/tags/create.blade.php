<x-layout title="Nova Tag" bodyClass="opi asd">
  <form action="/tags/salvar" method="post">
    <label for="number">Número</label>
    <input type="text" id="number" name="number">
    <label for="text">Texto</label>
    <input type="text" id="text" name="text">
    <button type="submit">Cadastrar Tag</button>
  </form>
</x-layout>
