<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Hello Job</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
            href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:wght@400;500;600&display=swap"
            rel="stylesheet">
</head>
<body class="bg-black text-white font-hanken-grotesk">
    <div class="px-10">
        <nav class="flex justify-between items-center py-4 border-b border-white/15">
            <div>
                <a href="/">
                    <img src="{{ Vite::asset('resources/images/logo.svg')}}" alt="Logo of the company"/>
                </a>
            </div>

            <div class="space-x-6 font-bold">
                <a href="/">Jobs</a>
                <a href="/">Career</a>
                <a href="/">Salaries</a>
                <a href="/">Companies</a>
            </div>
            @auth()

                <div class="flex space-x-6 font-bold">
                    <a href="/jobs/create">Post a Job</a>
                    <form method='POST' action="/logout">
                        @csrf
                        @method('DELETE')
                        <button>Logout</button>
                    </form>
                </div>
            @endauth

            @guest()
                <div class="space-x-6 font-bold">
                    <a href="/register">Register</a>
                    <a href="/login">LogIn</a>
                </div>
            @endguest
        </nav>

        <main class="mt-10 max-w-[986px] mx-auto">
            {{ $slot }}
        </main>
    </div>
</body>
</html>