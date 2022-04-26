<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel</title>
</head>

<body>
    <select>
        @foreach ($languages as $language)
        <option :value="$language['id']"> {{$language['lang']}}</option>
        @endforeach
    </select>
    <ul>
        @foreach ($crypto as $coin)
        <li>
            <a href="/prices">
                {{ $coin['name']}}</li>
            </a>
        @endforeach
    </ul>
    
</body>
</html>
