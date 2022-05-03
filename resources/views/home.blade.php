<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Primi Passi</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <style>

        body{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Roboto', sans-serif;
        }
        header{
            width: 65%;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        ul{
            display: flex;
            list-style: none;
            padding: 0;
        }

        li{
            font-size: 1.3rem;
            margin-left: 2rem;
        }

        a{
            text-decoration: none;
            color: rgb(100, 100, 100);
        }

        a:hover{
            color: black
        }
    </style>
</head>
<body>
    <header>
        <h1>
            <a href="{{ url('/') }}">{{ $title }} </a> 
        </h1>
        <ul>
            @foreach ($links as $link)
            <li>
                <a href="{{ route($link['url']) }}">{{ $link['link'] }}</a>
            </li> 
            @endforeach
        </ul>
    </header>
</body>
</html>