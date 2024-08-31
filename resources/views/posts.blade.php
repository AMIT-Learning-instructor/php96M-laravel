<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @foreach ($posts as $post)
        <div class="container">
            <h1>Title : {{ $post->title }}</h1>
            <p>{{ $post->description }}</p>
        </div>
    @endforeach
    
</body>
</html>