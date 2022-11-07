<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('titre')</title>
</head>
<body>
    <!-- Mettre navbar/header avant le yield -->

    @yield('contenu')

    <!-- Mettre footer après le yield -->
</body>
</html>