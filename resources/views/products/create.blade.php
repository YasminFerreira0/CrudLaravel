<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('Novo Produto') }}
    </h2>
  </x-slot>
  <form method="POST" action="{{ route('products.store') }}">
    @csrf
    <label>Nome <input type="text" name="name" value="{{ old('name') }}"></label>
    <label>Preço <input type="number" step="0.01" name="price" value="{{ old('price',0) }}"></label>
    <label>Categoria
      <select name="category_id">
        <option value="">Selecione</option>
        @foreach($categories as $id=>$name)
        <option value="{{ $id }}" @selected(old('category_id')==$id)>{{ $name }}</option>
        @endforeach
      </select>
    </label>
    <button>Salvar</button>
  </form>
</x-app-layout>