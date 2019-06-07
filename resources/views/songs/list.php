<h1>List of Songs</h1>



<?php foreach ($songs as $song) : ?>

<p class="text-left"><?=$song->name?></p>
<p class="text-left"><?='by ' .$song->author?></p>

<a href="#" class="btn btn-success">play</a>
<a href="/songs/add?id=<?=$song->id?>" class="btn btn-primary">edit</a>
<a href="songs/add?id=<?=$song->id?>" class="btn btn-danger">delete</a>

<?php endforeach ; ?>