<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('Editar Produto') }}
    </h2>
  </x-slot>
  <form method="POST" action="{{ route('products.update', $product) }}">
    @csrf
    @method('PUT')
    <label>Nome <input type="text" name="name" value="{{ old('name', $product->name) }}"></label>
    <label>Preço <input type="number" step="0.01" name="price" value="{{ old('price', $product->price) }}"></label>
    <label>Categoria
      <select name="category_id">
        <option value="">Selecione</option>
        @foreach($categories as $id=>$name)
        <option value="{{ $id }}" @selected(old('category_id', $product->category_id)==$id)>{{ $name }}</option>
        @endforeach
      </select>
    </label>
    <button>Atualizar</button>
  </form>
</x-app-layout>