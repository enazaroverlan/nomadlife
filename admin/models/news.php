<?php
/**
 * Created by PhpStorm.
 * User: Erlan
 * Date: 19.06.2016
 * Time: 22:55
 */

$allNews = database::GetAllNews();
if(!isset($_REQUEST['function'])) {
    ?>
    <table class="table table-striped">
        <thead>
        <tr>
            <td>#</td>
            <td>Post Poster</td>
            <td>Post Title</td>
            <td>Post Subject</td>
            <td>Post Content</td>
            <td>Post Date</td>
            <td colspan="2">Functions</td>
        </tr>
        </thead>
        <tbody>
        <?php if(!empty($allNews)): ?>
            <?php foreach($allNews as $item) : ?>
                <tr>
                    <td><?php echo($item['id']); ?></td>
                    <td><img src="<?php echo($item['image']);?>" width="120px" /></td>
                    <td><?php echo($item['title']); ?></td>
                    <td><?php echo($item['subject']); ?></td>
                    <td><?php echo(substr($item['content'], 0, 30).'...');?></td>
                    <td><?php echo($item['date']); ?></td>
                    <td><a href="/<?php echo(URL_PREFIX); ?>admin/?action=news&function=edit&id=<?php echo($item['id']); ?>" class="btn btn-primary">Edit</a></td>
                    <td><a href="/<?php echo(URL_PREFIX); ?>admin/?action=removeNewFromNews&id=<?php echo($item['id']); ?>" class="btn btn-primary">Remove</a></td>
                </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr>
                <td colspan="6">No news are found. Please add one</td>
                <td><a href="/<?php echo(URL_PREFIX); ?>admin/?action=news&function=add" class="btn btn-primary">Add new</a></td>
            </tr>
        <?php endif; ?>
        <tr>
            <td colspan="7"><a href="/<?php echo(URL_PREFIX); ?>admin/?action=news&function=add" class="btn btn-primary">Add new</a> </td>
        </tr>
        </tbody>
    </table>
    <?php
}
else if($_REQUEST['function'] == 'edit') {
    $item = database::GetNewsByID($_REQUEST['id']);
    ?>
    <form class="form-horizontal" role="form" method="post" action="/<?php echo(URL_PREFIX); ?>admin/?action=editNewInNews">
        <div class="col-sm-10">
            <input name="id" type="text" style="display:none;" id="inputPassword3" placeholder="ID" value="<?php echo($_REQUEST['id']); ?>" >
        </div>
        <br />
        <label class="col-sm-2 control-label">image</label>
        <div class="col-sm-10">
            /<?php echo(URL_PREFIX); ?>resources/images/<input name="image" type="text" class="form-control" id="inputPassword3" placeholder="title" value="<?php  echo(array_pop(preg_split('/\//' ,$item['image']))); ?>">
        </div>
        <br />
        <label class="col-sm-2 control-label">Title</label>
        <div class="col-sm-10">
            <input name="title" type="text" class="form-control" id="inputPassword3" placeholder="title" value="<?php  echo($item['title']); ?>">
        </div>
        <label class="col-sm-2 control-label">Subject</label>
        <div class="col-sm-10">
            <input name="subject" type="text" class="form-control" id="inputPassword3" placeholder="title" value="<?php  echo($item['subject']); ?>">
        </div>
        <br />
        <label class="col-sm-2 control-label">Content</label>
        <div class="col-sm-10">
            <textarea name="content" class="form-control" rows="3"><?php echo($item['content']); ?></textarea>
        </div>
        <br />
        <br />
        <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-default">Edit</button>
        </div>
    </form>
    <?php
}
else if($_REQUEST['function'] == 'add') {
    ?>
    <form class="form-horizontal" role="form" method="post" action="/<?php echo(URL_PREFIX); ?>admin/?action=addNewToNews">
        <label class="col-sm-2 control-label">image</label>
        <div class="col-sm-10">
            /<?php echo(URL_PREFIX); ?>resources/images/<input name="image" type="text" class="form-control" id="inputPassword3" placeholder="image.jpg" value="">
        </div>
        <br />
        <label class="col-sm-2 control-label">Title</label>
        <div class="col-sm-10">
            <input name="title" type="text" class="form-control" id="inputPassword3" placeholder="title" value="">
        </div>
        <label class="col-sm-2 control-label">Subject</label>
        <div class="col-sm-10">
            <input name="subject" type="text" class="form-control" id="inputPassword3" placeholder="title" value="">
        </div>
        <br />
        <label class="col-sm-2 control-label">Content</label>
        <div class="col-sm-10">
            <textarea name="content" class="form-control" rows="3"></textarea>
        </div>
        <br />
        <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-default">Add</button>
        </div>
    </form>
    <?php
}
?>