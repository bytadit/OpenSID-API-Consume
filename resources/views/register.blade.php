<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>

<body class="bg-slate-100">
    <section class="mt-6 mx-auto rounded-xl max-w-sm bg-slate-50 shadow-md border-t-4 border-indigo-600">
        <div class="p-10">
            <div class="flex justify-center items-center">
                <img class="w-auto h-16" src="{{ Vite::asset('resources/images/opensid_logo.png') }}">
                <div class="ml-2">
                    <h1 class="font-semibold text-base">OpenSID</h1>
                    <h2 class="text-sm">Desa Digital Terbuka</h2>
                </div>
            </div>

            <form class="space-y-6" action="/register" method="POST">
                @csrf
                <input type="hidden" name="remember" value="true">
                <div class="rounded-md shadow-sm">
                    <div>
                        <label for="name" class="text-slate-700 text-sm">Nama Lengkap</label>
                        <input id="name" name="name" type="text" required class="relative block w-full appearance-none rounded border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm">
                    </div>
                    <div class="mt-2">
                        <label for="email" class="text-slate-700 text-sm">Email</label>
                        <input id="email" name="email" type="email" required class="relative block w-full appearance-none rounded border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm">
                    </div>
                    <div class="mt-2">
                        <label for="password" class="text-slate-700 text-sm">Kata Sandi</label>
                        <input id="password" name="password" type="password" required class="relative block w-full appearance-none rounded border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm">
                    </div>
                    <div class="mt-2">
                        <label for="password_confirmation" class="text-slate-700 text-sm">Konfirmasi Kata Sandi</label>
                        <input id="password_confirmation" name="password_confirmation" type="password" required class="relative block w-full appearance-none rounded border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm">
                    </div>
                </div>

                <div>
                    <button type="submit" class="group relative flex w-full justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                        Buat Akun
                    </button>
                </div>

                <div class="flex items-center justify-center">
                    <div class="text-sm flex gap-1">
                        <p>Sudah punya akun?</p>
                        <a href="/login" class="font-medium text-indigo-600 hover:text-indigo-500">Masuk</a>
                    </div>
                </div>
            </form>
        </div>
    </section>
</body>

</html>