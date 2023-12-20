<div>
    <div class="w-full">
        <input type="text" wire:model.live="search" class="w-full rounded-lg h-14 mt-4 mb-4" placeholder="SEARCH">
    </div>
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">

        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <caption
                class="p-5 text-lg font-semibold text-left rtl:text-right text-gray-900 bg-white dark:text-white dark:bg-gray-800">
                Alunos
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
                    Email
                </th>
                <th scope="col" class="px-6 py-3">
                    Cpf
                </th>
                <th scope="col" class="px-6 py-3">
                    Data de Nascimento
                </th>
                <th scope="col" class="px-6 py-3">
                    Data Matricula
                </th>
                <th scope="col" class="px-6 py-3">
                    <span class="sr-only">Edit</span>
                </th>
            </tr>
            </thead>
            <tbody>

            @if ($alunos)

                @foreach ($alunos as $aluno)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700" wire:key="{{$aluno->id_aluno}}}">
                        <th scope="row"
                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{$aluno->name}}
                        </th>
                        <td class="px-6 py-4">
                            {{$aluno->email}}
                        </td>
                        <td class="px-6 py-4">
                            {{$aluno->cpf}}
                        </td>
                        <td class="px-6 py-4">
                            {{ date('d/m/Y ', strtotime($aluno->birthdate)) }}
                        </td>
                        <td class="px-6 py-4">
                            {{ date('d/m/Y H:i:s', strtotime($aluno->created_at)) }}


                        </td>
                        <td class="px-6 py-4 text-right">
                            <a href="#"

                               class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
                                <button data-modal-target="authentication-modal"  @click="modelOpen =!modelOpen" data-modal-toggle="authentication-modal" class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
                                    Editar
                                </button>

                            </a>
                        </td>
                    </tr>
                @endforeach

            @endif

            </tbody>

        </table>
        <div class="mt-4 p-4">
            {{$alunos->links()}}
        </div>
    </div>
</div>
