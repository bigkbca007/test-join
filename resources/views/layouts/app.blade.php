<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Teste Join</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style>
        body {
            font-family: 'Nunito';
        }

        .style-form {
            border: solid 1px #ccc;
            margin-top: 50px;
            padding: 20px;
        }

        .head-page {
            margin-top: 20px;
            color: #ababab;
        }
    </style>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</head>

<body class="antialiased">
    <div class="container">
        <div class="row">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">Join</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link" href="/produtos" class="btn btn-link text-success">Produtos</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/categorias" class="btn btn-link text-success">Categorias</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/produtos/add" class="btn btn-link text-success">Add Produto</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/categorias/add" class="btn btn-link text-success">Add Categorias</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div>
                @yield('content')
            </div>
        </div>
    </div>
</body>

</html>