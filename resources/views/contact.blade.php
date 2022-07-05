<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset ('/css/mycss.css')}}">
    <title>Contact</title>
</head>
<body>
    <nav class="nav">
        <a class="nav-link active" aria-current="page" href="{{route ('landing')}}">Home</a>
        <a class="nav-link" href="{{url ('/about')}}">Sobre nosotros</a>
        <a class="nav-link" href="{{url ('/contact')}}">Contacto</a>
    </nav>
    <form class="mx-5 px-5">
        <h2 class="text-center">Contacta con nosotros</h2>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Email</label>
            <input type="email" class="form-control" id="exampleFormControlInput1">
            <p class="text-secondary">No será compartido</p>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Mensaje</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault">
                Autorizo recibir anuncios
            </label>
        </div>
        <div class="text-center">
            <button type="button" class="btn btn-dark mx-auto">Enviar</button>
        </div>
    </form>
    
    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>