<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>I miei film</h1>

    <div class="container">

        @foreach ($movies as $movie)
            <div class="card">
                <h3>
                    {{ $movie->title }}
                </h3>

                <div class="date">
                    Data di produzione: {{ $movie->date }}
                </div>

                <div class="nationality">
                    Nazionalità: {{ $movie->nationality }}
                </div>

                <div class="info">
                    <span>Titolo originale: {{ $movie->original_title }}</span>
                    <span>Voto: {{ $movie->vote }}</span>
                </div>
            </div>
        @endforeach
        
    </div>
</body>
</html>