<h1>List of Songs</h1><?php foreach ($songs as $song) : ?><p class="text-left"><?=$song->name?></p>

<p class="text-left"><?='by ' .$song->author?></p><a href="/songs/play?id=<?=$song->id?>" class="btn btn-success">play</a>

<<<<<<< HEAD
<a href="/songs/add?id=<?=$song->id?>" class="btn btn-primary">edit</a>
=======

<?php foreach ($songs as $song) : ?>

<p class="text-left"><?=$song->name?></p>
<p class="text-left"><?='by ' .$song->author?></p>

<a href="/songs/play?id=<?=$song->id?>" class="btn btn-success">play</a>
<a href="/songs/add?id=<?=$song->id?>" class="btn btn-primary">edit</a>
<a href="/songs/delete?id=<?=$song->id?>" class="btn btn-danger">delete</a>
>>>>>>> 860166718e2375aa8e7b38e6988e878e5c417bc1

<a href="/songs/delete?id=<?=$song->id?>" class="btn btn-danger">delete</a><?php endforeach ; ?>