<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Jukebox</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<nav class="nav">
    <a class="nav-link" href="/songs/list">Songs</a>
    <a class="nav-link" href="/songs/add">Add a song</a>
    <a class="nav-link" href="#">Authors</a>
    <a class="nav-link" href="#">Add an author</a>
</nav>

    <?= $content ?>

</body>
</html>