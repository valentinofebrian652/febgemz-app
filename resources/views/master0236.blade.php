<!DOCTYPE html>
<html lang="en">
<link rel="shortcut icon" href="{{ asset('img/favicon.png') }}">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar Laravel 1461900236</title>
    <link href=" {{ mix('css/app.css') }}" rel="stylesheet">
  </head>
  <body>
    <div id="app">
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
    <a class="navbar-brand" href="/">|   Framework Laravel</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
        <li class="nav-item active">
            <a class="nav-link" href="/">Home</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="/artikel0236">Artikel</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="/kontak0236">Contact Us</a>
          </li>
      </div>
    </nav>
    <script src="{{ mix('js/app.js') }}"></script>
	<hr/>

	<!-- bagian judul halaman blog -->
	<h3> @yield('judul_halaman') </h3>


	<!-- bagian konten blog -->
	@yield('konten')


	<br/>
	<br/>
	<hr/>
	<footer>
	<p><center> <a href="/">@Copyright Praktikum PTW</a> | 2021</center></p>
	</footer>
  </body>
</html>