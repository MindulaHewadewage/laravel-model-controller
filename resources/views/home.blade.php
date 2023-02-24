<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/js/app.js')

</head>
<body>
    <header>
        <div class="container">
            <h1 class="text-center">Movies</h1>
        </div>
    </header>

    <div class="main">
        <div class="container">
            <div class="row">
                <div class="col d-flex flex-wrap mt-3">
                    @foreach ($movies as $movie)
                    <div class="card me-2 mb-2" style="width: 18rem;">
                        <div class="card-body">
                          <h5 class="card-title">{{$movie->title}}</h5>
                          <h6 class="card-text">{{$movie->original_title}}</h6>
                          <p class="card-text">{{$movie->nationality}}</p>
                          <p class="card-text">{{$movie->date}}</p>
                          <p class="card-text">{{$movie->vote}}</p>

                        </div>
                      </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</body>
</html>