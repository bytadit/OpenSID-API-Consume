<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
</head>

<body>
    <nav class="shadow-md sticky top-0">
        <div class="m-auto max-w-6xl flex justify-between items-center">
            <div class="py-4 flex justify-center items-center">
                <img class="w-auto h-16" src="{{ Vite::asset('resources/images/opensid_logo.png') }}">
                <div class="ml-2">
                    <h1 class="font-semibold text-base">OpenSID</h1>
                    <h2 class="text-sm">Desa Digital Terbuka</h2>
                </div>
            </div>
            <div class="flex justify-between items-center gap-x-8">
                <button id="dropdownDefault" data-dropdown-toggle="dropdown" class="font-medium rounded-lg text-md px-4 py-2.5 text-center inline-flex items-center" type="button">
                    Data Calon Pemilih
                    <svg class="ml-2 w-4 h-4" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
                <!-- Dropdown menu -->
                <div id="dropdown" class="hidden w-44 bg-white rounded divide-y divide-gray-100 shadow-md dark:bg-gray-700 border-t-2 border-indigo-600">
                    <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefault">
                        <li>
                            <a href="/populasi" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Populasi</a>
                        </li>
                        <li>
                            <a href="/golongandarah" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Golongan Darah</a>
                        </li>
                        <li>
                            <a href="#" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Jenis Kelamin</a>
                        </li>
                    </ul>
                </div>

                <form action="/logout" method="post">
                    <button type="submit" class="w-auto rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                        Keluar
                    </button>
                </form>
            </div>
        </div>
    </nav>

    <div class="rounded-md mt-5 mx-auto max-w-5xl">
        <ol class="list-reset flex">
            <li><a href="#" class="text-blue-600 hover:text-blue-700">Home</a></li>
            <li><span class="text-gray-500 mx-2">/</span></li>
            <li class="text-gray-500">Calon Pemilih</li>
        </ol>
    </div>

    <div class="mt-4 mx-auto max-w-5xl flex justify-between items-center">
        <div class="relative mt-1 rounded-md shadow-sm">
            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-3">
                <span class="text-gray-500 sm:text-sm">
                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="search" class="w-4" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path fill="currentColor" d="M505 442.7L405.3 343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7 44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7 0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128 57.2 128 128 0 70.7-57.2 128-128 128z"></path>
                    </svg>
                </span>
            </div>
            <input type="text" name="price" id="price" class="block w-full rounded-md border-gray-300 pl-7 pr-12 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" placeholder="Cari data">
        </div>
    </div>

    <section class="mt-2 mx-auto h-96 overflow-auto rounded-md max-w-5xl shadow-md">
        <div class="flex flex-col">
            <table>
                <thead class="bg-indigo-600 border-b sticky-top">
                    <tr>
                        <th scope="col" class="text-sm font-medium text-white px-6 py-4 text-left">
                            ID Dusun
                        </th>
                        <th scope="col" class="text-sm font-medium text-white px-6 py-4 text-left">
                            Nama Dusun
                        </th>
                        <th scope="col" class="text-sm font-medium text-white px-6 py-4 text-left">
                            RT
                        </th>
                        <th scope="col" class="text-sm font-medium text-white px-6 py-4 text-left">
                            RW
                        </th>
                        <th scope="col" class="text-sm font-medium text-white px-6 py-4 text-left">
                            Pria
                        </th>
                        <th scope="col" class="text-sm font-medium text-white px-6 py-4 text-left">
                            Wanita
                        </th>
                        <th scope="col" class="text-sm font-medium text-white px-6 py-4 text-left">
                            Total Jiwa
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($bodies->data as $body)
                    <tr class="bg-indigo-100 border-b">
                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                            {{ $body->DusunID }}
                        </td>
                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                            {{ $body->DusunName }}
                        </td>
                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                            {{ $body->RT }}
                        </td>
                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                            {{ $body->RW }}
                        </td>
                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                            {{ $body->Lk }}
                        </td>
                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                            {{ $body->Pr }}
                        </td>
                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                            {{ $body->Jiwa }}
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>
</body>

</html>