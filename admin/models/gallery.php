<?php
/**
 * Created by PhpStorm.
 * User: Erlan
 * Date: 19.06.2016
 * Time: 22:55
 */

$images = database::GetAllImages();
if(!isset($_REQUEST['function'])) {
    ?>
    <table class="table table-striped">
        <thead>
        <tr>
            <td>Image ID</td>
            <td>Image Link</td>
            <td>Description</td>
            <td colspan="2">Functions</td>
        </tr>
        </thead>
        <tbody>
        <?php if(!empty($images)): ?>
            <?php foreach($images as $item) : ?>
                <tr>
                    <td><?php echo($item['id']); ?></td>
                    <td><img src="<?php echo($item['image']); ?>" width="100px" /></td>
                    <td><?php echo($item['description']);?></td>
                    <td><a href="/<?php echo(URL_PREFIX); ?>admin/?action=gallery&function=edit&id=<?php echo($item['id']); ?>" class="btn btn-primary">Edit</a></td>
                    <td><a href="/<?php echo(URL_PREFIX); ?>admin/?action=removeImageFromGallery&id=<?php echo($item['id']); ?>" class="btn btn-primary">Remove</a></td>
                </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr>
                <td colspan="6">No images are found. Please add one</td>
                <td><a href="/<?php echo(URL_PREFIX); ?>admin/?action=gallery&function=add" class="btn btn-primary">Add image</a></td>
            </tr>
        <?php endif; ?>
        <tr>
            <td colspan="7"><a href="/<?php echo(URL_PREFIX); ?>admin/?action=gallery&function=add" class="btn btn-primary">Add image</a> </td>
        </tr>
        </tbody>
    </table>
    <?php
}
else if($_REQUEST['function'] == 'edit') {
    $item = database::GetImageByID($_REQUEST['id']);
    ?>
    <form class="form-horizontal" role="form" method="post" action="/<?php echo(URL_PREFIX); ?>admin/?action=editImageInGallery">

        <div class="col-sm-10">
            <input name="id" type="text" style="display: none;" id="inputPassword3" placeholder="someImage.jpg" value="<?php echo($_REQUEST['id']); ?>" >
        </div>
        <label class="col-sm-2 control-label">Image</label>
        <div class="col-sm-10">
            /<?php echo(URL_PREFIX); ?>resources/images/<input name="image" type="text" class="form-control" id="inputPassword3" placeholder="someImage.jpg" value="<?php  echo(array_pop(preg_split('/\//', $item['image']))); ?>">
        </div>
        <br />
        <label class="col-sm-2 control-label">Description</label>
        <div class="col-sm-10">
            <textarea name="description" class="form-control" rows="3"><?php echo($item['description']); ?></textarea>
        </div>
        <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-default">Edit</button>
        </div>
    </form>
    <?php
}
else if($_REQUEST['function'] == 'add') {
    ?>
    <form class="form-horizontal" role="form" method="post" action="/<?php echo(URL_PREFIX); ?>admin/?action=addNewImageIntoGallery">
        <div class="col-sm-10">
            </div>
        <label class="col-sm-2 control-label">Image</label>
        <div class="col-sm-10">
            /<?php echo(URL_PREFIX); ?>resources/images/<input name="image" type="text" class="form-control" id="inputPassword3" placeholder="someImage.jpg" >
        </div>
        <br />
        <label class="col-sm-2 control-label">Description</label>
        <div class="col-sm-10">
            <textarea name="description" class="form-control" rows="3">Description</textarea>
        </div>
        <br />
        <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-default">Add</button>
        </div>
    </form>
    <?php
}
?>