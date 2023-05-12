<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<style type="text/css">
body { background-image: url(/immagini/sfondo.jpg);height: 100}

</style> 
</head>
  <body > 

    <!--navbar-->
   
    <nav class="navbar navbar-expand-lg navbar-primary-subtle bg-primary static-top">
  <div class="container">
    <a class="navbar-brand" href="#">
      <img src="/immagini/logoa.jpg" alt="..." class="rounded float-start" height="36">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{route('homepage')}}">Home</a>  <!--IMPORTANTE-->
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>

<section class="banner-section">
</section>
<section class="post-content-section">
    <div class="container" style="background-color: rgba(9, 180, 210, 0.264)">

        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 post-title-block">
               
                <h1 class="text-center" style="color: rgb(11, 3, 71)">Buon viaggio</h1>
                
            </div>

<!--card-->


 <div class="container">
        <div class="card border-0 shadow my-5"">
            <div class="card-body p-5">
                <h1 class="fw-light"><img class="position-absolute top-0 start-50 translate-middle-x" src="/immagini/redblui.png" alt=""></h1>
                <div class="row">
                    <div class="col-6">
                        <h2 class="text-center">PARTENZE</h2>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">COMPAGNIA</th>
                                    <th scope="col">VOLO</th>
                                    <th scope="col">DESTINAZIONE</th>
                                    <th scope="col">ORARIO</th>
                                    <th scope="col">GATE</th>
                                    <th scope="col">INFO</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($voli['departure'] as $volo)
                                    <tr>
                                        <th scope="row">{{ $volo['company'] }}</th>
                                        <td>{{ $volo['id'] }}</td>
                                        <td>{{ $volo['city'] }}</td>
                                        <td>{{ $volo['time'] }}</td>
                                        <td>{{ $volo['gate'] }}</td>
                                        <td><i class="bi bi-info-circle-fill"></i></td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="col-6">
                        <h2 class="text-center">ARRIVI</h2>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">COMPAGNIA</th>
                                    <th scope="col">VOLO</th>
                                    <th scope="col">DESTINAZIONE</th>
                                    <th scope="col">ORARIO</th>
                                    <th scope="col">GATE</th>
                                    <th scope="col">INFO</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($voli['arrival'] as $volo)
                                    <tr>
                                        <th scope="row">{{ $volo['company'] }}</th>
                                        <td>{{ $volo['id'] }}</td>
                                        <td>{{ $volo['city'] }}</td>
                                        <td>{{ $volo['time'] }}</td>
                                        <td>{{ $volo['gate'] }}</td>
                                        <td><i class="bi bi-info-circle-fill"></i></td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>