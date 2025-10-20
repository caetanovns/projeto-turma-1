<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Editar Loja') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">

                <form method="POST" action="{{route('lojas.update', $loja->id)}}" class="max-w-sm mx-auto m-4">
                    @method('PUT')
                    @csrf
                    <div class="mb-5">
                        <label for="nome_fantasia" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nome Fantasia</label>
                        <input type="text" id="nome_fantasia" name="nome_fantasia" value="{{$loja->nome_fantasia}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                    </div>
                    <div class="mb-5">
                        <label for="razao_social" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Razão Social</label>
                        <input type="text" id="razao_social" name="razao_social" value="{{$loja->razao_social}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                    </div>

                    <div class="mb-5">
                        <label for="nome_gerente" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nome Gerente</label>
                        <input type="text" id="nome_gerente" name="nome_gerente" value="{{$loja->nome_gerente}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                    </div>

                    <div class="mb-5">
                        <label for="telefone" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Telefone</label>
                        <input type="text" id="telefone" name="telefone" value="{{$loja->telefone}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                    </div>

                    <div class="mb-5">
                        <label for="endereco" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Endereço</label>
                        <input type="text" id="enderco" name="endereco" value="{{$loja->endereco}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                    </div>

                    <div class="mb-5">
                        <label for="is_aberta" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Status</label>
                        <select id="is_aberta" name="is_aberta" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option value="1" {{ $loja->is_aberta ? 'selected' : '' }}>ABERTA</option>
                            <option value="0" {{ !$loja->is_aberta ? 'selected' : '' }}>FECHADA</option>
                        </select>
                    </div>

                    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                        Enviar
                    </button>
                </form>

            </div>
        </div>
    </div>
</x-app-layout>