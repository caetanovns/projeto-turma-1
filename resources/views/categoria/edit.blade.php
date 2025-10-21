<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Editar Oferta') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">

                <form method="POST" action="{{route('categorias.update', $categoria->id)}}" class="max-w-sm mx-auto m-4">
                    @method('PUT')
                    @csrf
                    <div class="mb-5">
                        <label for="nome" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nome</label>
                        <input type="text" id="nome" name="nome" value="{{ $categoria->nome }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                    </div>
                    <div class="mb-5">
                        <label for="descricao" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Descrição</label>
                        <input type="text" id="descricao" name="descricao" value="{{$categoria->descricao}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                    </div>

                    <div class="mb-5">
                        <label for="preco_diaria" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Preço</label>
                        <input type="number" id="preco_diaria" name="preco_diaria" value="{{$categoria->preco_diaria}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                    </div>

                    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                        Enviar
                    </button>
                </form>

            </div>
        </div>
    </div>
</x-app-layout>