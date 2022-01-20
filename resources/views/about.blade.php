<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>About</title>
</head>
<body>
    <header class="d-flex justify-content-end">
        <ul class="nav">
            <li class="nav-item">
              <a class="nav-link" href="/">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/projects">Projects</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/contacts">Contacts</a>
            </li>            
          </ul>
    </header>
    <div class="container">
        <h1>About</h1>
        <ol>
            @foreach ($activities as $activity)
                @if ($loop->odd)
                    <strong>
                @endif
                    <li>{{$activity}}</li>
                @if ($loop->odd)
                    </strong>
                @endif
            @endforeach
        </ol>
    </div>
    
</body>
</html>