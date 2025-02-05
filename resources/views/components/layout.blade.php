<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Document</title>
</head>
<body class="bg-black">
    <div>
        <div>
            <a href="">
                <img src="{{ Vite::asset('resources/images/logo.svg')}}" alt="Logo of the company"/>
            </a>

        </div>
        <nav>
            <a href="/">Link</a>
            <a href="/">Link</a>
            <a href="/">Link</a>
        </nav>
        <div>
            Post a Job
        </div>

        <main>
            {{ $slot }}
        </main>
    </div>
</body>
</html>