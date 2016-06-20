<?php
/**
 * Created by PhpStorm.
 * User: Erlan
 * Date: 19.06.2016
 * Time: 15:41
 */

$allItems = database::GetAllSliderItems();
if(!isset($_REQUEST['function'])) {
?>
<table class="table table-striped">
    <thead>
    <tr>
        <td>Item ID</td>
        <td>Image</td>
        <td>Title</td>
        <td>Content</td>
        <td>Link</td>
        <td colspan="2">Functions</td>
    </tr>
    </thead>
    <tbody>
    <?php if(!empty($allItems)): ?>
        <?php foreach($allItems as $item) : ?>
            <tr>
                <td><?php echo($item['id']); ?></td>
                <td><img src="<?php echo($item['image']); ?>" width="100px" /></td>
                <td><?php echo($item['title']);?></td>
                <td><?php echo(substr($item['content'], 0, 30).'...'); ?></td>
                <td><a href="<?php echo($item['link']); ?>"><?php echo($item['link']); ?></td>
                <td><a href="/<?php echo(URL_PREFIX); ?>admin/?action=slider&function=edit&id=<?php echo($item['id']); ?>" class="btn btn-primary">Edit</a></td>
                <td><a href="/<?php echo(URL_PREFIX); ?>admin/?action=removeItemFromSlider&id=<?php echo($item['id']); ?>" class="btn btn-primary">Remove</a></td>
            </tr>
        <?php endforeach; ?>
    <?php else: ?>
        <tr>
            <td colspan="6">No items are found. Please add one</td>
            <td><a href="/<?php echo(URL_PREFIX); ?>admin/?action=slider&function=add" class="btn btn-primary">Add item</a></td>
        </tr>
    <?php endif; ?>
    <tr>
        <td colspan="7"><a href="/<?php echo(URL_PREFIX); ?>admin/?action=slider&function=add" class="btn btn-primary">Add item</a> </td>
    </tr>
    </tbody>
</table>
<?php
}
else if($_REQUEST['function'] == 'edit') {
    $item = database::GetSliderItemByID($_REQUEST['id']);
?>
    <form class="form-horizontal" role="form" method="post" action="/<?php echo(URL_PREFIX); ?>admin/?action=editItemInSlider">
        <label class="col-sm-2 control-label">ID</label>
        <div class="col-sm-10">
            <input name="id" type="text" class="form-control" id="inputPassword3" placeholder="someImage.jpg" value="<?php echo($_REQUEST['id']); ?>" >
        </div>
        <label class="col-sm-2 control-label">Image</label>
        <div class="col-sm-10">
            /<?php echo(URL_PREFIX); ?>resources/images/<input name="image" type="text" class="form-control" id="inputPassword3" placeholder="someImage.jpg" value="<?php  echo(array_pop(preg_split('/\//', $item['image']))); ?>">
        </div>
        <br />
        <label class="col-sm-2 control-label">Title</label>
        <div class="col-sm-10">
            <input name="title" type="text" class="form-control" id="inputPassword3" placeholder="title" value="<?php echo($item['title']); ?>">
        </div>
        <br />
        <label class="col-sm-2 control-label">Content</label>
        <div class="col-sm-10">
            <textarea name="content" class="form-control" rows="3"><?php echo($item['content']); ?></textarea>
        </div>
        <br />
        <label for="inputPassword3" class="col-sm-2 control-label">Link</label>
        <div class="col-sm-10">
            <input name="link" type="text" class="form-control" id="inputPassword3" placeholder="/<?php echo(URL_PREFIX); ?>?action=feedback" value="<?php echo($item['link']); ?>" />
        </div>
        <br />
        <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-default">Edit</button>
        </div>
    </form>
<?php
}
else if($_REQUEST['function'] == 'add') {
?>
    <form class="form-horizontal" role="form" method="post" action="/<?php echo(URL_PREFIX); ?>admin/?action=addNewItemToSlider">
        <label class="col-sm-2 control-label">Image</label>
        <div class="col-sm-10">
            /<?php echo(URL_PREFIX); ?>resources/images/<input name="image" type="text" class="form-control" id="inputPassword3" placeholder="someImage.jpg" >
        </div>
        <br />
        <label class="col-sm-2 control-label">Title</label>
        <div class="col-sm-10">
            <input name="title" type="text" class="form-control" id="inputPassword3" placeholder="title">
        </div>
        <br />
        <label class="col-sm-2 control-label">Content</label>
        <div class="col-sm-10">
            <textarea name="content" class="form-control" rows="3">content</textarea>
        </div>
        <br />
        <label for="inputPassword3" class="col-sm-2 control-label">Link</label>
        <div class="col-sm-10">
            <input name="link" type="text" class="form-control" id="inputPassword3" placeholder="/<?php echo(URL_PREFIX); ?>?action=feedback" />
        </div>
        <br />
        <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-default">Add</button>
        </div>
    </form>
<?php
}
?>

