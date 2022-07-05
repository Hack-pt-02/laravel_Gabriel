<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset ('/css/mycss.css')}}">
    <title>Home</title>
</head>
<body>
    <nav class="nav">
        <a class="nav-link active" aria-current="page" href="{{route ('landing')}}">Home</a>
        <a class="nav-link" href="{{url ('/about')}}">Sobre nosotros</a>
        <a class="nav-link" href="{{url ('/contact')}}">Contacto</a>
    </nav>
    
    <h2>Indice</h2>
    
    @isset($texto)
    <h2>Mensaje</h2>
    <h3>{{$texto}}</h3>
    @endisset
    
    <table class="table table-striped mx-5">
        @foreach ($breweries as $brewerie)
        <tr><td><a href="/brewerie/{{$brewerie[0]}}">{{$brewerie[1]}}</a></td></tr>
        @endforeach
        
    </table>
    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>