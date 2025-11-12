<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Editar Categoria') }}
        </h2>
    </x-slot>

    <form action="{{ route('categories.update', $category) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="name">Nome:</label>
            <input type="text" id="name" name="name" value="{{old('name', $category->name)}}">
        </div>
        <div>
            <label for="description">Descrição:</label>
            <textarea name="description">{{ old('description', $category->description) }}</textarea>
        </div>
        <button type="submit">Atualizar</button>
    </form>

</x-app-layout>