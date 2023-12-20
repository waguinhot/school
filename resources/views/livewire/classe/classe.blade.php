<div>

    <div x-data="{ modelOpen: false }">
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <caption
                    class="p-5 text-lg font-semibold text-left rtl:text-right text-gray-900 bg-white dark:text-white dark:bg-gray-800">
                    Classes
                    <p class="mt-1 text-sm font-normal text-gray-500 dark:text-gray-400">Browse a list of Flowbite products
                        designed to help you work and play, stay organized, get answers, keep in touch, grow your business,
                        and more.</p>
                </caption>
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Nome
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Descricao
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Quantidade Alunos
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Ultima Entrada
                    </th>
                    <th scope="col" class="px-6 py-3">
                        <span class="sr-only">Edit</span>
                    </th>
                </tr>
                </thead>
                <tbody>

                @if ($classes)

                    @foreach ($classes as $classe)
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700" wire:key="{{$classe->id_classe}}}">
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{$classe->name}}
                            </th>
                            <td class="px-6 py-4">
                                {{$classe->description}}
                            </td>
                            <td class="px-6 py-4">
                                {{$classe->alunos->count()}} alunos
                            </td>
                            <td class="px-6 py-4">
                                @if(count($classe->alunos) > 0)
                                    {{$classe->alunos->first()->name}}
                                    <span class="block">{{$classe->alunos->first()->created_at}}</span>
                                @else
                                    Sem alunos cadastrados
                                @endif


                            </td>
                            <td class="px-6 py-4 text-right">
                                <a href="#"

                                   class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
                                    <button data-modal-target="authentication-modal" wire:click="loadClasse({{$classe->id_classe}})" @click="modelOpen =!modelOpen" data-modal-toggle="authentication-modal" class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
                                        Editar
                                    </button>

                                </a>
                            </td>
                        </tr>
                    @endforeach

                @endif

                </tbody>
            </table>
        </div>



        <div>

            <!-- Modal toggle -->

            <!-- Main modal -->
            <div x-show="modelOpen"   id="authentication-modal" tabindex="-1" aria-hidden="true" class=" bg-gray-200 bg-opacity-50  flex h-screen justify-center items-center   overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50  w-full md:inset-0 h-[calc(100%-1rem)] max-h-full ">
                <div class="relative p-4 w-3/6 justify-center ">
                    <!-- Modal content -->
                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700 w-full " @click.away="modelOpen = false">
                        <!-- Modal header -->
                        <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                            <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                Edicao de classe
                            </h3>
                            <button @click="modelOpen = false" type="button" class="end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="authentication-modal">
                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                </svg>
                                <span class="sr-only">Close modal</span>
                            </button>
                        </div>
                        <!-- Modal body -->
                        <div class="p-4 md:p-5">
                            <form class="space-y-4" wire:submit="save">
                                <div>
                                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nome da classe</label>
                                    <input type="text" wire:model="name" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" " required>
                                </div>
                                <div>
                                    <label for="desc" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Descricao da classe</label>
                                    <input type="text" wire:model="description" name="desc" id="password"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
                                </div>

                                <button
                                    type="submit"
                                    @click="modelOpen = false"
                                    class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Salvar edicoes</button>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>
