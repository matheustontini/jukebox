<form action="" method="post">
    <?=csrf_field();?>
    <label for="">Hash</label>
    <input type="text" name="hash" value="<?=$region['hash']?>" class="form-control"><br>
    <label for="">Author</label>
    <input type="text" name="author" value="<?=$region['author']?>" class="form-control"><br>
    <label for="">Name</label>
    <input type="text" name="name" value="<?=$region['name']?>" class="form-control"><br>
    <label for="">Description</label><br>
    <textarea name="description" id="" cols="30" rows="10" class="form-control"><?=$region['description']?></textarea><br>

    <input type="submit" value="Submit" class="btn btn-success" style="margin-bottom:10px;">
</form>

<?=$delete?>


