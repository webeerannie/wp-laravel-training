<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
</head>
<body>
    <div>
        @foreach($posts as $post)
            <div>ID: {{ $post->id }}</div>
            <div>Title: {{ $post->title }}</div>
            <div>Description: {{ $post->description }}</div>
            <div>Created At: {{ $post->created_at }}</div>
        @endforeach
    </div>
</body>
</html>
