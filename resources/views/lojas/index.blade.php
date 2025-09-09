<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <table class="w-full text-left border-collapse">
                        <thead>
                            <tr>
                            <th class="px-4 py-2 border-b border-gray-300">Nome Fantasia</th>
                            <th class="px-4 py-2 border-b border-gray-300">Razão Social</th>
                            <th class="px-4 py-2 border-b border-gray-300">Gerente</th>
                            <th class="px-4 py-2 border-b border-gray-300">Telefone</th>
                            <th class="px-4 py-2 border-b border-gray-300">Cidade/UF</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($lojas as $loja)
                                <tr>
                                    <td class="px-4 py-2 border-b border-gray-300">{{$loja->nome_fantasia}}</td>
                                    <td class="px-4 py-2 border-b border-gray-300">{{$loja->razao_social}}</td>
                                    <td class="px-4 py-2 border-b border-gray-300">{{$loja->nome_gerente}}</td>
                                    <td class="px-4 py-2 border-b border-gray-300">{{$loja->telefone}}</td>
                                    <td class="px-4 py-2 border-b border-gray-300">{{$loja->cidade}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
