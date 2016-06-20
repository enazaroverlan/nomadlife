<?php
/**
 * Created by PhpStorm.
 * User: Erlan
 * Date: 19.06.2016
 * Time: 15:41
 */

$users = database::GetAllUsers();
if(!isset($_REQUEST['function'])) {
    ?>
    <?php if(isset($_REQUEST['error'])): ?>
        <span style="width: 200px; height: 15px; border: 1px solid red; border-radius: 3px 3px 3px 3px; color:white; background: red;"><?php echo($_REQUEST['error']); ?></span>
    <?php endif; ?>
    <table class="table table-striped">
        <thead>
        <tr>
            <td>ID</td>
            <td>Login</td>
            <td>Password</td>
            <td>Type</td>
            <td colspan="2">Functions</td>
        </tr>
        </thead>
        <tbody>
        <?php if(!empty($users)): ?>
            <?php foreach($users as $item) : ?>
                <tr>
                    <td><?php echo($item['id']); ?></td>
                    <td><?php echo($item['login']); ?></td>
                    <td>hidden</td>
                    <td><?php echo($item['user_type']); ?></td>
                    <td><a href="/<?php echo(URL_PREFIX); ?>admin/?action=users&function=edit&id=<?php echo($item['id']); ?>" class="btn btn-primary">Edit</a></td>
                    <td><a href="/<?php echo(URL_PREFIX); ?>admin/?action=removeUser&id=<?php echo($item['id']); ?>" class="btn btn-primary">Remove</a></td>
                </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr>
                <td colspan="6">No events are found. Please add one</td>
                <td><a href="/<?php echo(URL_PREFIX); ?>admin/?action=users&function=add" class="btn btn-primary">Add User</a></td>
            </tr>
        <?php endif; ?>
        <tr>
            <td colspan="7"><a href="/<?php echo(URL_PREFIX); ?>admin/?action=users&function=add" class="btn btn-primary">Add User</a> </td>
        </tr>
        </tbody>
    </table>
    <?php
}
else if($_REQUEST['function'] == 'edit') {
    $item = database::GetUserByID($_REQUEST['login']);
    ?>
    <form class="form-horizontal" role="form" method="post" action="/<?php echo(URL_PREFIX); ?>admin/?action=editUser">
        <div class="col-sm-10">
            <input name="id" type="text" style="display:none;" id="inputPassword3" placeholder="ID" value="<?php echo($_REQUEST['id']); ?>" >
        </div>
        <br />
        <label class="col-sm-2 control-label">Login</label>
        <div class="col-sm-10">
            <input name="login" type="text" class="form-control" id="inputPassword3" placeholder="title" value="<?php  echo($item['login']); ?>">
        </div>
        <br />
        <label class="col-sm-2 control-label">Password</label>
        <div class="col-sm-10">
            <input name="password" type="password" class="form-control" id="inputPassword3" placeholder="title" value="<?php  echo($item['password']); ?>">
        </div>
        <br />
        <label class="col-sm-2 control-label">Type</label>
        <div class="col-sm-10">
            <input type="text" name="type" class="form-control" value="<?php echo($item['user_type']); ?>" />
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
    <form class="form-horizontal" role="form" method="post" action="/<?php echo(URL_PREFIX); ?>admin/?action=addNewUser">
        <br />
        <label class="col-sm-2 control-label">Login</label>
        <div class="col-sm-10">
            <input name="login" type="text" class="form-control" id="inputPassword3" placeholder="title" value="">
        </div>
        <br />
        <label class="col-sm-2 control-label">Password</label>
        <div class="col-sm-10">
            <input name="password" type="password" class="form-control" id="inputPassword3" placeholder="title" value="">
        </div>
        <br />
        <label class="col-sm-2 control-label">Type</label>
        <div class="col-sm-10">
            (admin - супер админ / user - обычный пользователь)<input type="text" name="type" class="form-control" placeholder="YY-MM-DD" value="" />
        </div>
        <br />
        <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-default">Add</button>
        </div>
    </form>
    <?php
}
?>