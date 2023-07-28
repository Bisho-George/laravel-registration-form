<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Registration Form</title>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">

</head>

<body>
  @include('includes.header')
  <main>
    @yield('form')
  </main>
  @include('includes.footer')
  <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

  <script></script>
</body>

</html>
