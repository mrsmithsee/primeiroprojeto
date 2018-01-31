<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Saudação</title>
    <link rel="stylesheet" type="text/css" href="/css/app.css">
  </head>
  <body>
    <div class="container">
    @for($i = 0; $i < 100; $i++)
    <h1>Olá {{ $i }}</h1>
    @endfor
    <script type="text/javascript" src="/js/app.js">
  </body>
</html>
