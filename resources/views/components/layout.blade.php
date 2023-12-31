<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $page ?? 'Genérico' }}</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Poppins&family=Rubik:wght@400;500&family=Ubuntu:wght@500&display=swap">
    <link rel="stylesheet" href="/assets/css/style.css">
</head>

<body>
    <div class="container">
        <div class="sidebar">
            <img class="sidebar-logo" src="/assets/img/laravel-logo.svg" alt="logo">
        </div>
        <div class="content">
            <nav>
                {{ $btn ?? null }}
            </nav>
            <main>
                {{ $slot }}
            </main>
        </div>
    </div>
</body>

</html>
