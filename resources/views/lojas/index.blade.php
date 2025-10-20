<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="flex justify-end">
                    <a href="{{route('lojas.create')}}" class="m-4 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Adicionar</a>
                </div>
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <table class="w-full text-left border-collapse">
                        <thead>
                            <tr>
                                <th class="px-4 py-2 border-b border-gray-300">Nome Fantasia</th>
                                <th class="px-4 py-2 border-b border-gray-300">Razão Social</th>
                                <th class="px-4 py-2 border-b border-gray-300">Gerente</th>
                                <th class="px-4 py-2 border-b border-gray-300">Telefone</th>
                                <th class="px-4 py-2 border-b border-gray-300 text-center">Status</th>
                                <th class="px-4 py-2 border-b border-gray-300 text-center">Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($lojas as $loja)
                            <tr>
                                <td class="px-4 py-2 border-b border-gray-300">{{$loja->nome_fantasia}}</td>
                                <td class="px-4 py-2 border-b border-gray-300">{{$loja->razao_social}}</td>
                                <td class="px-4 py-2 border-b border-gray-300">{{$loja->nome_gerente}}</td>
                                <td class="px-4 py-2 border-b border-gray-300">{{$loja->telefone}}</td>
                                <td class="px-4 py-2 border-b border-gray-300 text-center">
                                    @if($loja->is_aberta)
                                    <span class="bg-green-100 text-green-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded-sm dark:bg-green-900 dark:text-green-300">ABERTA</span>
                                    @else
                                    <span class="bg-red-100 text-red-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded-sm dark:bg-red-900 dark:text-red-300">FECHADA</span>
                                    @endif
                                </td>
                                <td class="px-4 py-2 border-b border-gray-300 text-center flex justify-center gap-4">
                                    <a href="{{route('lojas.edit', $loja->id)}}" class="flex items-center justify-center p-2 rounded bg-blue-500 hover:bg-blue-600 text-white">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                            <path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z" />
                                            <path fill-rule="evenodd" d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" clip-rule="evenodd" />
                                        </svg>
                                    </a>

                                    <form action="{{route('lojas.destroy', $loja->id)}}" method="POST" onsubmit="return confirm('Tem certeza que deseja excluir esta loja?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="flex items-center justify-center p-2 rounded bg-red-500 hover:bg-red-600 text-white">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zm3 6a1 1 0 10-2 0v6a1 1 0 102 0V8zm-3-1a1 1 0 112 0v6a1 1 0 11-2 0V7z" clip-rule="evenodd" />
                                            </svg>
                                        </button>
                                    </form>
                                    
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>