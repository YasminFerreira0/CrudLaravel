<x-app-layout>
  <x-slot name="header">
    <div class="flex items-center justify-between">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Editar Produto') }}
      </h2>

      <a href="{{ route('products.index') }}"
        class="text-sm text-gray-600 hover:text-gray-900 underline">
        Voltar
      </a>
    </div>
  </x-slot>

  <form method="POST" action="{{ route('products.update', $product) }}"
    class="max-w-xl mx-auto bg-white p-6 mt-6 rounded-lg shadow-md space-y-4">

    @csrf
    @method('PUT')

    {{-- Nome --}}
    <div>
      <label class="block font-medium text-gray-700 mb-1">Nome</label>
      <input type="text" name="name" value="{{ old('name', $product->name) }}"
        class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring focus:ring-blue-300 focus:outline-none">
    </div>

    {{-- Preço --}}
    <div>
      <label class="block font-medium text-gray-700 mb-1">Preço</label>
      <input type="number" step="0.01" name="price" value="{{ old('price', $product->price) }}"
        class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring focus:ring-blue-300 focus:outline-none">
    </div>

    {{-- Categoria --}}
    <div>
      <label class="block font-medium text-gray-700 mb-1">Categoria</label>
      <select name="category_id"
        class="w-full border border-gray-300 rounded-lg px-3 py-2 bg-white focus:ring focus:ring-blue-300 focus:outline-none">
        <option value="">Selecione</option>
        @foreach($categories as $id => $name)
        <option value="{{ $id }}"
          @selected(old('category_id', $product->category_id) == $id)>
          {{ $name }}
        </option>
        @endforeach
      </select>
    </div>

    {{-- Botão --}}
    <button
      class="w-full bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700 transition">
      Atualizar
    </button>
  </form>

</x-app-layout>