
<form action="http://www.jukebox.test/songs/delete?id=<?=$song['id']?>" method="post">
    <?=csrf_field();?>
    <input type="submit" value="Delete" class="btn btn-danger">
</form>