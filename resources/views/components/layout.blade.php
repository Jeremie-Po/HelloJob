<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Document</title>
</head>
<body class="bg-black text-white ">
    <div class="px-10">
        <nav class="flex justify-between items-center py-4 border-b border-white/15">
            <div>
                <a href="">
                    <img src="{{ Vite::asset('resources/images/logo.svg')}}" alt="Logo of the company"/>
                </a>

            </div>

            <div class="space-x-6 font-bold">
                <a href="/">Jobs</a>
                <a href="/">Career</a>
                <a href="/">Salaries</a>
                <a href="/">Companies</a>
            </div>

            <div>
                Post a Job
            </div>
        </nav>

        <main class="mt-10 max-w-[986px] mx-auto">
            {{ $slot }}
        </main>
    </div>
</body>
</html>