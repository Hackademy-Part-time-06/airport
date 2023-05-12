<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

<body style="background-color: rgba(1, 1, 184, 0.84)">

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
                <h1 class="fw-light"><img class="position-absolute top-0 start-50 translate-middle-x" style="width: 10%" src="/immagini/redblui.png" alt=""></h1>
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
                                    <th scope="col">NOTE</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($flights['departure'] as $volo)
                                    <tr>
                                        <th scope="row">{{ $volo['company'] }}</th>
                                        <td>{{ $volo['id'] }}</td>
                                        <td>{{ $volo['city'] }}</td>
                                        <td>{{ $volo['time'] }}</td>
                                        <td>{{ $volo['gate'] }}</td>
                                        <td><a href="{{route('detailfly')}}"> <svg  xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-info-circle-fill" viewBox="0 0 16 16">
  
                                          <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
</svg></a></td>
                                        
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
                                    <th scope="col">PROVENIENZA</th>
                                    <th scope="col">ORARIO</th>
                                    <th scope="col">GATE</th>
                                    <th scope="col">NOTE</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($flights['arrival'] as $volo)
                                    <tr>
                                        <th scope="row">{{ $volo['company'] }}</th>
                                        <td>{{ $volo['id'] }}</td>
                                        <td>{{ $volo['city'] }}</td>
                                        <td>{{ $volo['time'] }}</td>
                                        <td>{{ $volo['gate'] }}</td>
                                        <td><a href="{{route('detailfly')}}"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-info-circle-fill" viewBox="0 0 16 16">
  <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
</svg></a></td>
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