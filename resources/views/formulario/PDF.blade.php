<!DOCTYPE html>
<html>
<head>
    <title>PDF</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <h1>{{ $title }}</h1>
    <p>{{ $date }}</p>
    <p></p>
  
    @foreach($info as $informacion)
    <h5>Total Personas</h5>
    <span>{{ $informacion->NumePersonas }}</span>
    <br>
    <h5>Fecha Salida</h5>
    <span>{{ $informacion->FechaSalida }}</span><br>
    <h5>Fecha Regreso</h5>
    <span>{{ $informacion->FechaRegreso }}</span><br>
    <h5>Hora de salida</h5>
    <span>{{ $informacion->HoraS }}</span><br>
    <h5>Hora de regreso</h5>
    <span>{{ $informacion->HoraR }}</span><br>
    <h5>Lugar</h5>
    <span>{{ $informacion->Lugar }}</span><br>
    <h5>Itinerario</h5>
    <span>{{ $informacion->Itinerario }}</span>
    <br>
    @endforeach
  
</body>
</html>