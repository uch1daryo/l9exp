<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  @vite(['resources/sass/app.scss', 'resources/js/app.js'])
  <title>{{ config('app.name') }} - @yield('title')</title>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
      <a class="navbar-brand mb-0 h1">{{ config('app.name') }}</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="{{ url('') }}/home">Home</a>
          </li>
          @foreach($facilityArray as $facility)
          <li class="nav-item">
            <a class="nav-link" href="{{ url('') }}/facilities/{{ $facility['id'] }}">{{ $facility['name'] }}</a>
          </li>
          @endforeach
        </ul>
      </div>
    </div>
  </nav>
  <main class="container mt-4">
    @yield('content')
  </main>
</body>
</html>
