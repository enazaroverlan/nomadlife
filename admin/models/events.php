<?php
/**
 * Created by PhpStorm.
 * User: Erlan
 * Date: 19.06.2016
 * Time: 22:55
 */
$events = database::GetAllEvents();
if(!isset($_REQUEST['function'])) {
    ?>
    <table class="table table-striped">
        <thead>
        <tr>
            <td>Event ID</td>
            <td>Event Title</td>
            <td>Event Content</td>
            <td colspan="2">Functions</td>
        </tr>
        </thead>
        <tbody>
        <?php if(!empty($events)): ?>
            <?php foreach($events as $item) : ?>
                <tr>
                    <td><?php echo($item['id']); ?></td>
                    <td><?php echo($item['title']); ?></td>
                    <td><?php echo(substr($item['description'], 0, 30).'...');?></td>
                    <td><a href="/<?php echo(URL_PREFIX); ?>admin/?action=events&function=edit&id=<?php echo($item['id']); ?>">Edit</a></td>
                    <td><a href="/<?php echo(URL_PREFIX); ?>admin/?action=removeEventInEvents&id=<?php echo($item['id']); ?>">Remove</a></td>
                </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr>
                <td colspan="6">No events are found. Please add one</td>
                <td><a href="/<?php echo(URL_PREFIX); ?>admin/?action=events&function=add">Add event</a></td>
            </tr>
        <?php endif; ?>
        <tr>
            <td colspan="7"><a href="/<?php echo(URL_PREFIX); ?>admin/?action=events&function=add">Add event</a> </td>
        </tr>
        </tbody>
    </table>
    <?php
}
else if($_REQUEST['function'] == 'edit') {
    $item = database::GetEventByID($_REQUEST['id']);
    ?>
    <form class="form-horizontal" role="form" method="post" action="/<?php echo(URL_PREFIX); ?>admin/?action=editEventInEvents">
        <div class="col-sm-10">
            <input name="id" type="text" style="display:none;" id="inputPassword3" placeholder="ID" value="<?php echo($_REQUEST['id']); ?>" >
        </div>
        <br />
        <label class="col-sm-2 control-label">Title</label>
        <div class="col-sm-10">
            <input name="title" type="text" class="form-control" id="inputPassword3" placeholder="title" value="<?php  echo($item['title']); ?>">
        </div>
        <br />
        <label class="col-sm-2 control-label">Content</label>
        <div class="col-sm-10">
            <textarea name="description" class="form-control" rows="3"><?php echo($item['description']); ?></textarea>
        </div>
        <br />
        <label class="col-sm-2 control-label">Date</label>
        <div class="col-sm-10">
            <input type="date" name="date" class="form-control" placeholder="YY-MM-DD" value="<?php echo($item['date']); ?>" />
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
    <form class="form-horizontal" role="form" method="post" action="/<?php echo(URL_PREFIX); ?>admin/?action=addNewEventToEvents">
        <label class="col-sm-2 control-label">Title</label>
        <div class="col-sm-10">
            <input name="title" type="text" class="form-control" id="inputPassword3" placeholder="Title" value="">
        </div>
        <br />
        <label class="col-sm-2 control-label">Content</label>
        <div class="col-sm-10">
            <textarea name="description" class="form-control" rows="3"></textarea>
        </div>
        <br />
        <label class="col-sm-2 control-label">Date</label>
        <div class="col-sm-10">
            <input type="date" name="date" class="form-control" placeholder="YY-MM-DD" value="" />
        </div>
        <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-default">Add</button>
        </div>
    </form>
    <?php
}
?>