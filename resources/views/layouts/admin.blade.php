<!DOCTYPE html>
<html lang="pt_BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') - Laravel</title>
</head>

<body>
    <header>
        <h1>Header</h1>
    </header>

    <hr>

    <section>
        @yield('content')

        <br>
        <br>
    </section>

    <hr>

    <footer>
        Rodapé
    </footer>
</body>

</html>
