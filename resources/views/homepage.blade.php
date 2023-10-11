<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <div class="text-center p-5">
        <h2>{{ $message }}</h2>
        <h3>{{$message2 }}</h3>
    </div>


    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container text-center">

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('products') }}">Prodotti</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Extra</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>


</body>

</html>