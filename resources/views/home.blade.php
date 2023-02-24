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
                <div class="col-4">
                    @foreach ($movies as $movie)
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                          <h5 class="card-title">{{$movie->title}}</h5>
                          <h6 class="card-subtitle mb-2 text-muted">{{$movie->original_title}}</h6>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          <a href="#" class="card-link">Card link</a>
                          <a href="#" class="card-link">Another link</a>
                        </div>
                      </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</body>
</html>