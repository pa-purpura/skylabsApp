<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>
      @if (!empty($title))
        {{$title}}
      @else
        Skylabs
      @endif
    </title>
    {{-- bootstrap css  --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    {{-- Jquery --}}
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    {{-- bootrasp js files  --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

  </head>
  <body>

  <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd; min-height: 10vh;">
      <a class="navbar-brand" href="https://skylabs.it/">
        <img src="{{ asset('img/logo.svg') }}" width="30" height="30" alt="">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav ">
          <a class="nav-link " href="{{ route('home')}}">Home <span class="sr-only">(current)</span></a>
          <a class="nav-link" href="{{ route('records.esercizio_1')}}">esercizio 1</a>
          <a class="nav-link" href="{{ route('records.esercizio_2')}}">esercizio 2</a>
          <a class="nav-link" href="{{ route('create.csv')}}">esercizio 4</a>
          <a class="nav-link" href="{{ route('domande')}}">domande</a>
        </div>
      </div>
    </nav>
  <!-- End of Navbar -->

  <!-- Main Content -->
  <main style="min-height: 80vh;">
    @yield('content')
  </main>
  {{-- <!-- End of Main Content -->fixed-bottom --}}

  <!-- Footer -->
    <footer class=" sticky m-auto p-3 bg-dark" style="min-height: 10vh;">
      <div class="container my-auto">
        <div class="copyright text-center text-secondary my-auto">
          <span>Copyright &copy; Skylabs </span>
          <span><?php echo date('Y'); ?></span>
          <span> - Dev by</span>
          <a style="display: inline;" href="https://www.linkedin.com/in/paolo-purpura-90629249/">Paolo Purpura </a>
        </div>
      </div>
    </footer>
  <!-- End of Footer -->

  </body>
</html>
