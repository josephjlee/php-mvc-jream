<h1>Edit User</h1>
<?php
    print_r($this->user);
?>
<form class="user-control" method="post" action="<?=URL;?>user/edit">
    <label for="">Login</label>
    <input type="text" name="login"><br>
    <label for="">Password</label>
    <input type="text" name="pass"><br>
    <label for="">Role</label>
    <select name="role">
        <option value="default">Default</option>
        <option value="owner">Owner</option>
        <option value="admin">Admin</option>
    </select><br>
    <label for="">&nbsp;</label><input type="submit"/>
</form>