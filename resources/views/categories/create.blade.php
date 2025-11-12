<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Nova Categoria') }}
        </h2>
    </x-slot>

    <form action="{{ route('categories.store') }}" method="POST">
        @csrf
        <div>
            <label for="name">Nome:</label>
            <input type="text" id="name" name="name" value="{{old('name')}}">
        </div>
        <div>
            <label for="description">Descrição:</label>
            <textarea name="description">{{ old('description') }}</textarea>
        </div>
        <button type="submit">Salvar</button>
    </form>

</x-app-layout>