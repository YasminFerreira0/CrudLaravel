<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Categories') }}
            </h2>

            <a href="{{ route('categories.create') }}"
                class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg text-sm font-medium transition">
                + Nova Categoria
            </a>
        </div>
    </x-slot>
    <table class="min-w-full bg-white border border-gray-200 mt-6 shadow-sm rounded-lg">
        <thead class="bg-gray-100 border-b">
            <tr>
                <th class="px-4 py-2 text-left">ID</th>
                <th class="px-4 py-2 text-left">Nome</th>
                <th class="px-4 py-2 text-left">Descrição</th>
                <th class="px-4 py-2 text-center">Ações</th>
            </tr>
        </thead>

        <tbody>
            @foreach($categories as $category)
            <tr class="border-b hover:bg-gray-50">
                <td class="px-4 py-2">{{ $category->id }}</td>
                <td class="px-4 py-2">{{ $category->name }}</td>
                <td class="px-4 py-2">{{ $category->description }}</td>

                <td class="px-4 py-2 text-center">
                    <div class="flex justify-center gap-4">

                        <a href="{{ route('categories.edit', $category) }}"
                            class="text-blue-600 hover:underline">
                            Editar
                        </a>

                        <form action="{{ route('categories.destroy', $category) }}" method="POST">
                            @csrf @method('DELETE')
                            <button class="text-red-600 hover:underline"
                                onclick="return confirm('Excluir categoria?')">
                                Excluir
                            </button>
                        </form>

                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <div class="mt-4">
        {{ $categories->links() }}
    </div>
</x-app-layout>