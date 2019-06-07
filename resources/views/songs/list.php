<h1>List of Songs</h1>

<?php foreach ($songs as $song) : ?>

<p class="text-left"><?=$song->name?></p>
<p class="text-left"><?='by ' .$song->author?></p>

<a href="#" class="btn btn-success">play</a>
<button type="button" class="btn btn-primary">edit</button>
<button type="button" class="btn btn-danger">delete</button>

<?php endforeach ; ?>