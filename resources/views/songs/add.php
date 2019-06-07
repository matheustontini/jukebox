<form action="" method="post">
    <?=csrf_field();?>
    <label for="">Hash</label>
    <input type="text" name="hash" value="<?=$region['hash']?>"><br>
    <label for="">Author</label>
    <input type="text" name="author" value="<?=$region['author']?>"><br>
    <label for="">Name</label>
    <input type="text" name="name" value="<?=$region['name']?>"><br>
    <label for="">Description</label><br>
    <textarea name="description" id="" cols="30" rows="10"><?=$region['description']?>"</textarea>

    <input type="submit" value="Submit">
</form>

<?=$delete?>


