<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calificaciones</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        #mute {
      position: absolute;
    }
    #mute.on {
      opacity: 0.7;
      z-index: 1000;
      background: white;
      height: 100%;
      width: 100%;
    }
    </style>
</head>
<body>
    <div id="app">
      <app></app>
    </div>
    <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>