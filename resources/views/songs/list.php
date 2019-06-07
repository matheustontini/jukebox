<h1>List of Songs</h1>


<?php foreach ($songs as $song) : ?>

<h2 class="text-left"><?=$song->name?></h2>
<p class="text-left"><?='by ' .$song->author?></p>

<a href="/songs/play?id=<?=$song->id?>" class="btn btn-success">play</a>
<a href="/songs/add?id=<?=$song->id?>" class="btn btn-primary">edit</a>
<a href="/songs/delete?id=<?=$song->id?>" class="btn btn-danger">delete</a>


<?php endforeach ; ?>