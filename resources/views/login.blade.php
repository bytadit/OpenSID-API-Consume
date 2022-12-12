<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>

<body class="bg-slate-100">
    <div class="flex min-h-full items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
        <div class="w-full max-w-md space-y-8">
            <div>
                <img class="mx-auto h-28 w-auto" src="{{ Vite::asset('resources/images/opensid_logo.png') }}" alt="Your Company">
                <h2 class="mt-6 text-center text-3xl font-bold tracking-tight text-gray-900">Desa Digital Terbuka</h2>
                <p class="mt-2 text-center text-sm text-gray-600">
                    OpenSID
                    <span class="font-medium text-indigo-600">Menuju Desa Cerdas</span>
                </p>
            </div>
            <form class="mt-8 space-y-6" action="/login" method="POST">
                @csrf
                <input type="hidden" name="remember" value="true">
                <div class="-space-y-px rounded-md shadow-sm">
                    <div>
                        <label for="email-address" class="sr-only">Email</label>
                        <input id="email-address" name="email" type="email" autocomplete="email" required class="relative block w-full appearance-none rounded-none rounded-t-md border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm" placeholder="Email">
                    </div>
                    <div>
                        <label for="password" class="sr-only">Kata sandi</label>
                        <input id="password" name="password" type="password" autocomplete="current-password" required class="relative block w-full appearance-none rounded-none rounded-b-md border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm" placeholder="Kata sandi">
                    </div>
                </div>

                <div class="flex items-center justify-between">
                    <div class="flex items-center">
                        <input id="remember-me" name="remember-me" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                        <label for="remember-me" class="ml-2 block text-sm text-gray-900">Ingat saya</label>
                    </div>

                    <div class="text-sm flex gap-1">
                        <p>Belum punya akun?</p>
                        <a href="/register" class="font-medium text-indigo-600 hover:text-indigo-500">Daftar</a>
                    </div>
                </div>

                <div>
                    <button type="submit" class="group relative flex w-full justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                        Masuk
                    </button>
                </div>
            </form>
        </div>
    </div>

</body>

</html>