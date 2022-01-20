<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Home</title>
</head>
<body>
    <header class="d-flex justify-content-end bg-secondary">
        <ul class="nav ">
            <li class="nav-item">
              <a class="nav-link text-light" href="/">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-light" href="/about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-light" href="/projects">Projects</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-light" href="/contacts">Contacts</a>
            </li>            
          </ul>
    </header>
    <div class="container">
        <div class="bg-dark text-light p-2">
            <h1>Home</h1>
            <ul class="d-flex justify-content-between">
                @foreach ($activities as $activitiy)
                    @if ($loop->first || $loop->last)
                        <strong>
                    @endif
                        <li>{{$activitiy}}</li>
                    @if ($loop->first || $loop->last)
                        </strong>
                    @endif    
                @endforeach
            </ul>
        </div>

        //link immagine passato con data
        <img src="{{$jumboImg}}" alt="jumboImg" class="w-100">
    </div>
    
</body>
</html>