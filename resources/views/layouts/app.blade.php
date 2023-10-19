<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>{{ env('APP_NAME') }}</title>

  <!-- Styles -->
  @vite('resources/js/app.js')
  
  @yield('css')
</head>

<body data-bs-theme="dark">
  @include('partials._navbar')

  <main>
    @yield('main-content')
  </main>

</body>

</html>
