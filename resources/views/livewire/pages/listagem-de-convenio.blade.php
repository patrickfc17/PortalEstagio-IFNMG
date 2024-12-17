<div>
    <section class="bg-paper">
        <div class="grid max-w-screen-xl px-4 py-8 mx-auto lg:gap-8 xl:gap-0 lg:py-8 lg:grid-cols-12">
            <div class="mr-auto place-self-center lg:col-span-7">
                <h1
                    class="max-w-2xl mb-4 text-4xl font-extrabold tracking-tight leading-none md:text-5xl xl:text-6xl">
                    Lista de Convênios</h1>
                <p
                    class="max-w-2xl mb-6 font-light text-ink lg:mb-8 md:text-lg lg:text-xl dark:text-paper-400">
                    O
                    processo para realização do estágio é composto por
                    uma série de passos que devem ser seguidos adequadamente.</p>
            </div>
            <div class="hidden lg:mt-0 lg:col-span-5 lg:flex">
                <img src="{{ asset('img/imagemlistaconvenios.png') }}" alt="mockup">
            </div>
        </div>
        <h1
            class="max-w-2xl mb-4 text-4xl font-medium tracking-tight leading-none md:text-3xl xl:text-6xl grid max-w-screen-xl px-4 py-4 mx-auto">
            Encontre Parceiros Conveniados</h1>

        <div class="mx-auto max-w-screen-xl px-4 lg:px-12">
            <div class="bg-paper relative shadow-md shadow-ink sm:rounded-lg overflow-hidden">
                <div
                    class="flex flex-col md:flex-row items-center justify-between space-y-3 md:space-y-0 md:space-x-4 p-4">
                    <div class="w-full md:w-1/2">
                        <form class="flex items-center">
                            <label for="simple-search" class="sr-only">Search</label>
                            <div class="relative w-full">
                                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                    <svg aria-hidden="true" class="w-5 h-5 text-paper-500 dark:text-paper-400"
                                        fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </div>
                                <input type="text" id="simple-search"
                                    class="bg-paper-50 border border-paper-300 text-paper-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full pl-10 p-2 dark:bg-paper-700 dark:border-paper-600 dark:placeholder-paper-400 dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                    placeholder="Search" required="">
                            </div>
                        </form>
                    </div>
                    <div class="w-full md:w-auto flex flex-col md:flex-row space-y-2 md:space-y-0 items-stretch md:items-center justify-end md:space-x-3 flex-shrink-0">
                        <div class="flex items-center space-x-3 w-full md:w-auto">
                            <button id="filterDropdownButton" data-dropdown-toggle="filterDropdown"
                                class="w-full md:w-auto flex items-center justify-center py-2 px-4 text-sm font-medium text-paper-900 focus:outline-none bg-paper rounded-lg border border-paper-200 hover:bg-paper-100 hover:text-primary-700 focus:z-10 focus:ring-4 focus:ring-paper-200 dark:focus:ring-paper-700 dark:bg-paper-800 dark:text-paper-400 dark:border-paper-600 dark:hover:text-white dark:hover:bg-paper-700"
                                type="button">
                                <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true"
                                    class="h-4 w-4 mr-2 text-paper-400" viewbox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M3 3a1 1 0 011-1h12a1 1 0 011 1v3a1 1 0 01-.293.707L12 11.414V15a1 1 0 01-.293.707l-2 2A1 1 0 018 17v-5.586L3.293 6.707A1 1 0 013 6V3z"
                                        clip-rule="evenodd" />
                                </svg>
                                Filtro
                                <svg class="-mr-1 ml-1.5 w-5 h-5" fill="currentColor" viewbox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                    <path clip-rule="evenodd" fill-rule="evenodd"
                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" />
                                </svg>
                            </button>
                            <div id="filterDropdown"
                                class="z-10 hidden w-48 p-3 bg-paper rounded-lg shadow">
                                <ul class="space-y-2 text-sm" aria-labelledby="filterDropdownButton">
                                    <li class="flex items-center">
                                        <input id="apple" type="checkbox" value=""
                                            class="w-4 h-4 bg-paper-100 border-paper-300 rounded text-primary-600 focus:ring-primary-500 dark:focus:ring-primary-600 dark:ring-offset-paper-700 focus:ring-2 dark:bg-paper-600 dark:border-paper-500">
                                        <label for="apple"
                                            class="ml-2 text-sm font-medium text-paper-900 dark:text-paper-100">Agropecuaria</label>
                                    </li>
                                    <li class="flex items-center">
                                        <input id="fitbit" type="checkbox" value=""
                                            class="w-4 h-4 bg-paper-100 border-paper-300 rounded text-primary-600 focus:ring-primary-500 dark:focus:ring-primary-600 dark:ring-offset-paper-700 focus:ring-2 dark:bg-paper-600 dark:border-paper-500">
                                        <label for="fitbit"
                                            class="ml-2 text-sm font-medium text-paper-900 dark:text-paper-100">Administração</label>
                                    </li>
                                    <li class="flex items-center">
                                        <input id="razor" type="checkbox" value=""
                                            class="w-4 h-4 bg-paper-100 border-paper-300 rounded text-primary-600 focus:ring-primary-500 dark:focus:ring-primary-600 dark:ring-offset-paper-700 focus:ring-2 dark:bg-paper-600 dark:border-paper-500">
                                        <label for="razor"
                                            class="ml-2 text-sm font-medium text-paper-900 dark:text-paper-100">Informatica</label>
                                    </li>
                                    <li class="flex items-center">
                                        <input id="nikon" type="checkbox" value=""
                                            class="w-4 h-4 bg-paper-100 border-paper-300 rounded text-primary-600 focus:ring-primary-500 dark:focus:ring-primary-600 dark:ring-offset-paper-700 focus:ring-2 dark:bg-paper-600 dark:border-paper-500">
                                        <label for="nikon"
                                            class="ml-2 text-sm font-medium text-paper-900 dark:text-paper-100">Zootecnia</label>
                                    </li>
                                    <li class="flex items-center">
                                        <input id="benq" type="checkbox" value=""
                                            class="w-4 h-4 bg-paper-100 border-paper-300 rounded text-primary-600 focus:ring-primary-500 dark:focus:ring-primary-600 dark:ring-offset-paper-700 focus:ring-2 dark:bg-paper-600 dark:border-paper-500">
                                        <label for="benq"
                                            class="ml-2 text-sm font-medium text-paper-900 dark:text-paper-100">Analise e Desenvolvimento de Sistemas</label>
                                    </li>
                                    <li class="flex items-center">
                                        <input id="benq" type="checkbox" value=""
                                            class="w-4 h-4 bg-paper-100 border-paper-300 rounded text-primary-600 focus:ring-primary-500 dark:focus:ring-primary-600 dark:ring-offset-paper-700 focus:ring-2 dark:bg-paper-600 dark:border-paper-500">
                                        <label for="benq"
                                            class="ml-2 text-sm font-medium text-paper-900 dark:text-paper-100">Engenharia Agronomica</label>
                                    </li>
                                    <li class="flex items-center">
                                        <input id="benq" type="checkbox" value=""
                                            class="w-4 h-4 bg-paper-100 border-paper-300 rounded text-primary-600 focus:ring-primary-500 dark:focus:ring-primary-600 dark:ring-offset-paper-700 focus:ring-2 dark:bg-paper-600 dark:border-paper-500">
                                        <label for="benq"
                                            class="ml-2 text-sm font-medium text-paper-900 dark:text-paper-100">Processos Gerencias</label>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="overflow-x-auto">
                    <table class="w-full text-sm text-left rtl:text-right text-ink">
                        <thead class="text-xs text-ink uppercase">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    <div class="flex items-center">
                                        Empresa
                                        <a href="#"><svg class="w-3 h-3 ms-1.5 " aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                viewBox="0 0 24 24">
                                                <path
                                                    d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z" />
                                            </svg></a>
                                    </div>
                                </th>
                                <th scope="col" class="px-12 py-3">
                                    <div class="flex items-center">
                                        Curso
                                        <a href="#"><svg class="w-3 h-3 ms-1.5" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                viewBox="0 0 24 24">
                                                <path
                                                    d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z" />
                                            </svg></a>
                                    </div>
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    <div class="flex items-center">
                                        Vagas
                                        <a href="#"><svg class="w-3 h-3 ms-1.5" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                viewBox="0 0 24 24">
                                                <path
                                                    d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z" />
                                            </svg></a>
                                    </div>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b dark:border-paper-700">
                                <th scope="row"
                                    class="px-4 py-3 font-medium text-paper-900 whitespace-nowrap">
                                  Genesius</th>
                                <td class="px-4 py-3">Análise e Desenvolvimento de Sistemas</td>
                                <td class="px-12 py-3">5</td>
                                <td class="px-4 py-3 flex items-center justify-end">
                                    <button id="apple-imac-27-dropdown-button"
                                        data-dropdown-toggle="apple-imac-27-dropdown"
                                        class="inline-flex items-center p-0.5 text-sm font-medium text-center text-paper-500 hover:text-paper-800 rounded-lg focus:outline-none dark:text-paper-400 dark:hover:text-paper-100"
                                        type="button">
                                        <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewbox="0 0 20 20"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z" />
                                        </svg>
                                    </button>
                                    <div id="apple-imac-27-dropdown"
                                        class="hidden z-10 w-44 bg-paper rounded divide-y divide-paper-100 shadow dark:bg-paper-700 dark:divide-paper-600">
                                        <ul class="py-1 text-sm text-paper-700 dark:text-paper-200"
                                            aria-labelledby="apple-imac-27-dropdown-button">
                                            <li>
                                                <a href="#"
                                                    class="block py-2 px-4 hover:bg-paper-100 dark:hover:bg-paper-600 dark:hover:text-white">Show</a>
                                            </li>
                                            <li>
                                                <a href="#"
                                                    class="block py-2 px-4 hover:bg-paper-100 dark:hover:bg-paper-600 dark:hover:text-white">Edit</a>
                                            </li>
                                        </ul>
                                        <div class="py-1">
                                            <a href="#"
                                                class="block py-2 px-4 text-sm text-grade hover:bg-paper">Delete</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr class="border-b dark:border-paper-700">
                                <th scope="row"
                                    class="px-4 py-3 font-medium text-paper-900 whitespace-nowrap">
                                    Cerealista Magno</th>
                                <td class="px-4 py-3">Agropecuaria</td>
                                <td class="px-12 py-3">4</td>
                                <td class="px-4 py-3 flex items-center justify-end">
                                    <button id="apple-imac-20-dropdown-button"
                                        data-dropdown-toggle="apple-imac-20-dropdown"
                                        class="inline-flex items-center p-0.5 text-sm font-medium text-center text-paper-500 hover:text-paper-800 rounded-lg focus:outline-none dark:text-paper-400 dark:hover:text-paper-100"
                                        type="button">
                                        <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewbox="0 0 20 20"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z" />
                                        </svg>
                                    </button>
                                    <div id="apple-imac-20-dropdown"
                                        class="hidden z-10 w-44 bg-paper rounded divide-y divide-paper-100 shadow dark:bg-paper-700 dark:divide-paper-600">
                                        <ul class="py-1 text-sm text-paper-700 dark:text-paper-200"
                                            aria-labelledby="apple-imac-20-dropdown-button">
                                            <li>
                                                <a href="#"
                                                    class="block py-2 px-4 hover:bg-paper-100 dark:hover:bg-paper-600 dark:hover:text-white">Show</a>
                                            </li>
                                            <li>
                                                <a href="#"
                                                    class="block py-2 px-4 hover:bg-paper-100 dark:hover:bg-paper-600 dark:hover:text-white">Edit</a>
                                            </li>
                                        </ul>
                                        <div class="py-1">
                                            <a href="#"
                                                class="block py-2 px-4 text-sm text-grade hover:bg-paper">Delete</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr class="border-b dark:border-paper-700">
                                <th scope="row"
                                    class="px-4 py-3 font-medium text-paper-900 whitespace-nowrap">
                                   Info Projectk</th>
                                <td class="px-4 py-3">Informática</td>
                                <td class="px-12 py-3">4</td>
                                <td class="px-4 py-3 flex items-center justify-end">
                                    <button id="apple-iphone-14-dropdown-button"
                                        data-dropdown-toggle="apple-iphone-14-dropdown"
                                        class="inline-flex items-center p-0.5 text-sm font-medium text-center text-paper-500 hover:text-paper-800 rounded-lg focus:outline-none dark:text-paper-400 dark:hover:text-paper-100"
                                        type="button">
                                        <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewbox="0 0 20 20"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z" />
                                        </svg>
                                    </button>
                                    <div id="apple-iphone-14-dropdown"
                                        class="hidden z-10 w-44 bg-paper rounded divide-y divide-paper-100 shadow dark:bg-paper-700 dark:divide-paper-600">
                                        <ul class="py-1 text-sm text-paper-700 dark:text-paper-200"
                                            aria-labelledby="apple-iphone-14-dropdown-button">
                                            <li>
                                                <a href="#"
                                                    class="block py-2 px-4 hover:bg-paper-100 dark:hover:bg-paper-600 dark:hover:text-white">Show</a>
                                            </li>
                                            <li>
                                                <a href="#"
                                                    class="block py-2 px-4 hover:bg-paper-100 dark:hover:bg-paper-600 dark:hover:text-white">Edit</a>
                                            </li>
                                        </ul>
                                        <div class="py-1">
                                            <a href="#"
                                                class="block py-2 px-4 text-sm text-grade hover:bg-paper">Delete</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr class="border-b dark:border-paper-700">
                                <th scope="row"
                                    class="px-4 py-3 font-medium text-paper-900 whitespace-nowrap">
                                    Fazendas</th>
                                <td class="px-4 py-3">Zootecnia</td>
                                    <td class="px-12 py-3">4</td>                                
                                    <td class="px-4 py-3 flex items-center justify-end">
                                    <button id="apple-ipad-air-dropdown-button"
                                        data-dropdown-toggle="apple-ipad-air-dropdown"
                                        class="inline-flex items-center p-0.5 text-sm font-medium text-center text-paper-500 hover:text-paper-800 rounded-lg focus:outline-none dark:text-paper-400 dark:hover:text-paper-100"
                                        type="button">
                                        <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewbox="0 0 20 20"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z" />
                                        </svg>
                                    </button>
                                    <div id="apple-ipad-air-dropdown"
                                        class="hidden z-10 w-44 bg-paper rounded divide-y divide-paper-100 shadow dark:bg-paper-700 dark:divide-paper-600">
                                        <ul class="py-1 text-sm text-paper-700 dark:text-paper-200"
                                            aria-labelledby="apple-ipad-air-dropdown-button">
                                            <li>
                                                <a href="#"
                                                    class="block py-2 px-4 hover:bg-paper-100 dark:hover:bg-paper-600 dark:hover:text-white">Show</a>
                                            </li>
                                            <li>
                                                <a href="#"
                                                    class="block py-2 px-4 hover:bg-paper-100 dark:hover:bg-paper-600 dark:hover:text-white">Edit</a>
                                            </li>
                                        </ul>
                                        <div class="py-1">
                                            <a href="#"
                                                class="block py-2 px-4 text-sm text-grade hover:bg-paper">Delete</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr class="border-b dark:border-paper-700">
                                <th scope="row"
                                    class="px-4 py-3 font-medium text-paper-900 whitespace-nowrap">
                                    Escritorio de Contabilidade</th>
                                <td class="px-4 py-3">Administração</td>
                                <td class="px-12 py-3">4</td>
                                <td class="px-4 py-3 flex items-center justify-end">
                                    <button id="xbox-series-s-dropdown-button"
                                        data-dropdown-toggle="xbox-series-s-dropdown"
                                        class="inline-flex items-center p-0.5 text-sm font-medium text-center text-paper-500 hover:text-paper-800 rounded-lg focus:outline-none dark:text-paper-400 dark:hover:text-paper-100"
                                        type="button">
                                        <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewbox="0 0 20 20"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z" />
                                        </svg>
                                    </button>
                                    <div id="xbox-series-s-dropdown"
                                        class="hidden z-10 w-44 bg-paper rounded divide-y divide-paper-100 shadow dark:bg-paper-700 dark:divide-paper-600">
                                        <ul class="py-1 text-sm text-paper-700 dark:text-paper-200"
                                            aria-labelledby="xbox-series-s-dropdown-button">
                                            <li>
                                                <a href="#"
                                                    class="block py-2 px-4 hover:bg-paper-100 dark:hover:bg-paper-600 dark:hover:text-white">Show</a>
                                            </li>
                                            <li>
                                                <a href="#"
                                                    class="block py-2 px-4 hover:bg-paper-100 dark:hover:bg-paper-600 dark:hover:text-white">Edit</a>
                                            </li>
                                        </ul>
                                        <div class="py-1">
                                            <a href="#"
                                                class="block py-2 px-4 text-sm text-grade hover:bg-paper">Delete</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr class="border-b dark:border-paper-700">
                                <th scope="row"
                                    class="px-4 py-3 font-medium text-paper-900 whitespace-nowrap">
                                    AgroMax</th>
                                <td class="px-4 py-3">Engenharia Agronomica</td>
                                <td class="px-12 py-3">4</td>
                                <td class="px-4 py-3 flex items-center justify-end">
                                    <button id="playstation-5-dropdown-button"
                                        data-dropdown-toggle="playstation-5-dropdown"
                                        class="inline-flex items-center p-0.5 text-sm font-medium text-center text-paper-500 hover:text-paper-800 rounded-lg focus:outline-none dark:text-paper-400 dark:hover:text-paper-100"
                                        type="button">
                                        <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewbox="0 0 20 20"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z" />
                                        </svg>
                                    </button>
                                    <div id="playstation-5-dropdown"
                                        class="hidden z-10 w-44 bg-paper rounded divide-y divide-paper-100 shadow dark:bg-paper-700 dark:divide-paper-600">
                                        <ul class="py-1 text-sm text-paper-700 dark:text-paper-200"
                                            aria-labelledby="playstation-5-dropdown-button">
                                            <li>
                                                <a href="#"
                                                    class="block py-2 px-4 hover:bg-paper-100 dark:hover:bg-paper-600 dark:hover:text-white">Show</a>
                                            </li>
                                            <li>
                                                <a href="#"
                                                    class="block py-2 px-4 hover:bg-paper-100 dark:hover:bg-paper-600 dark:hover:text-white">Edit</a>
                                            </li>
                                        </ul>
                                        <div class="py-1">
                                            <a href="#"
                                                class="block py-2 px-4 text-sm text-grade hover:bg-paper">Delete</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr class="border-b dark:border-paper-700">
                                <th scope="row"
                                    class="px-4 py-3 font-medium text-paper-900 whitespace-nowrap">
                                    Escritorio de Contabilidade
                                </th>
                                <td class="px-4 py-3">Processo Gerencias</td>
                                <td class="px-12 py-3">4</td>
                                <td class="px-4 py-3 flex items-center justify-end">
                                    <button id="xbox-series-x-dropdown-button"
                                        data-dropdown-toggle="xbox-series-x-dropdown"
                                        class="inline-flex items-center p-0.5 text-sm font-medium text-center text-paper-500 hover:text-paper-800 rounded-lg focus:outline-none dark:text-paper-400 dark:hover:text-paper-100"
                                        type="button">
                                        <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewbox="0 0 20 20"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z" />
                                        </svg>
                                    </button>
                                    <div id="xbox-series-x-dropdown"
                                        class="hidden z-10 w-44 bg-paper rounded divide-y divide-paper-100 shadow dark:bg-paper-700 dark:divide-paper-600">
                                        <ul class="py-1 text-sm text-paper-700 dark:text-paper-200"
                                            aria-labelledby="xbox-series-x-dropdown-button">
                                            <li>
                                                <a href="#"
                                                    class="block py-2 px-4 hover:bg-paper-100 dark:hover:bg-paper-600 dark:hover:text-white">Show</a>
                                            </li>
                                            <li>
                                                <a href="#"
                                                    class="block py-2 px-4 hover:bg-paper-100 dark:hover:bg-paper-600 dark:hover:text-white">Edit</a>
                                            </li>
                                        </ul>
                                        <div class="py-1">
                                            <a href="#"
                                                class="block py-2 px-4 text-sm text-grade hover:bg-paper">Delete</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <nav class="flex flex-col md:flex-row justify-between items-start md:items-center space-y-3 md:space-y-0 p-4"
                    aria-label="Table navigation">
                    <span class="text-sm font-normal text-paper-500 dark:text-paper-400">
                        Showing
                        <span class="font-semibold text-grade">1-10</span>
                        of
                        <span class="font-semibold text-grade">1000</span>
                    </span>
                    <ul class="inline-flex items-stretch -space-x-px">
                        <li>
                            <a href="#"
                                class="flex items-center justify-center h-full py-1.5 px-3 ml-0 text-leaf bg-paper rounded-l-lg border border-paper-300 hover:bg-paper-100 hover:text-paper-700">
                                <span class="sr-only">Previous</span>
                                <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewbox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                                        clip-rule="evenodd" />
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a href="#"
                                class="flex items-center justify-center text-sm py-2 px-3 leading-tight text-leaf bg-paper border border-paper-300 hover:bg-paper-100 hover:text-paper-700">1</a>
                        </li>
                        <li>
                            <a href="#"
                                class="flex items-center justify-center text-sm py-2 px-3 leading-tight text-leaf bg-paper border border-paper-300 hover:bg-paper-100 hover:text-paper-700">2</a>
                        </li>
                        <li>
                            <a href="#" aria-current="page"
                                class="flex items-center justify-center text-sm z-10 py-2 px-3 leading-tight text-leaf bg-primary-50 border border-primary-300 hover:bg-primary-100 hover:text-primary-700">3</a>
                        </li>
                        <li>
                            <a href="#"
                                class="flex items-center justify-center text-sm py-2 px-3 leading-tight text-leaf bg-paper border border-paper-300 hover:bg-paper-100 hover:text-paper-700">...</a>
                        </li>
                        <li>
                            <a href="#"
                                class="flex items-center justify-center text-sm py-2 px-3 leading-tight text-leaf bg-paper border border-paper-300 hover:bg-paper-100 hover:text-paper-700">100</a>
                        </li>
                        <li>
                            <a href="#"
                                class="flex items-center justify-center h-full py-1.5 px-3 leading-tight text-leaf bg-paper rounded-r-lg border border-paper-300 hover:bg-paper-100 hover:text-paper-700">
                                <span class="sr-only">Next</span>
                                <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewbox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                        clip-rule="evenodd" />
                                </svg>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </section>
</div>