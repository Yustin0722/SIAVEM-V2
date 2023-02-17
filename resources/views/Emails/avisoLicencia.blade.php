<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Aviso de licencias</title>
  </head>
  <body>
    <style>
      .container_principal {
        display: flex;
        justify-content: center;
      }
      .container {
        display: flex;
        flex-direction: column;
        align-items: center;
        width: 50%;
        background: #f1f0f0;
      }
    </style>
    <div class="container_principal">
      <div class="container">
        <div class="title">
            <h1>{{ $details ['tittle']}}</h1>
        </div>
        <div class="message">
            <p>{{ $details ['body']}}</p>
        </div>
        <span>Saludos!</span>
      </div>
    </div>
  </body>
</html>
