<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Nova Categoria') }}
            </h2>

            <a href="{{ route('categories.index') }}"
                class="text-sm text-gray-600 hover:text-gray-900 underline">
                Voltar
            </a>
        </div>
    </x-slot>
    <form action="{{ route('categories.store') }}" method="POST"
        class="max-w-xl mx-auto bg-white p-6 mt-6 rounded-lg shadow-md space-y-4">

        @csrf

        {{-- Nome --}}
        <div>
            <label for="name" class="block font-medium text-gray-700 mb-1">Nome</label>
            <input type="text" id="name" name="name"
                value="{{ old('name') }}"
                class="w-full border border-gray-300 rounded-lg px-3 py-2
                      focus:ring focus:ring-blue-300 focus:outline-none">
        </div>

        {{-- Descrição --}}
        <div>
            <label for="description" class="block font-medium text-gray-700 mb-1">Descrição</label>
            <textarea id="description" name="description" rows="4"
                class="w-full border border-gray-300 rounded-lg px-3 py-2
                         focus:ring focus:ring-blue-300 focus:outline-none">{{ old('description') }}</textarea>
        </div>

        {{-- Botão --}}
        <button type="submit"
            class="w-full bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700 transition">
            Salvar
        </button>

    </form>


</x-app-layout>