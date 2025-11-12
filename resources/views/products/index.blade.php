<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Products') }}
            </h2>

            <a href="{{ route('products.create') }}"
                class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg text-sm font-medium transition">
                + Novo produto
            </a>
        </div>
    </x-slot>
    <table class="min-w-full bg-white border border-gray-200 mt-6 shadow-sm rounded-lg">
        <thead class="bg-gray-100 border-b">
            <tr>
                <th class="px-4 py-2 text-left">Produto</th>
                <th class="px-4 py-2 text-left">Preço</th>
                <th class="px-4 py-2 text-left">Categoria</th>
                <th class="px-4 py-2 text-center">Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
            <tr class="border-b hover:bg-gray-50">
                <td class="px-4 py-2">{{ $product->name }}</td>
                <td class="px-4 py-2">R$ {{ number_format($product->price,2,',','.') }}</td>
                <td class="px-4 py-2">{{ $product->category->name }}</td>
                <td class="px-4 py-2 text-center">
                    <div class="flex justify-center gap-4">
                        <a href="{{ route('products.edit',$product) }}"
                            class="text-blue-600 hover:underline">
                            Editar
                        </a>

                        <form action="{{ route('products.destroy',$product) }}" method="POST">
                            @csrf @method('DELETE')
                            <button class="text-red-600 hover:underline"
                                onclick="return confirm('Excluir?')">
                                Excluir
                            </button>
                        </form>
                    </div>
                </td>

            </tr>
            @endforeach
        </tbody>
    </table>

    {{ $products->links() }}

</x-app-layout>