<h1>Edit User</h1>
<?php
    print_r($this->user);
?>
<form class="user-control" method="post" action="<?=URL;?>user/editSave/<?=$this->user['id'];?>">
    <label for="">Login</label>
    <input type="text" name="login" value="<?=$this->user['name'];?>"><br>
    <label for="">Password</label>
    <input type="text" name="pass"><br>
    <label for="">Role</label>
    <select name="role">
        <option value="default"<?php if($this->user['role'] == 'default') echo 'selected';?> >Default</option>
        <option value="owner" <?php if($this->user['role'] == 'owner') echo 'selected';?>>Owner</option>
        <option value="admin" <?php if($this->user['role'] == 'admin') echo 'selected';?>>Admin</option>
    </select><br>
    <label for="">&nbsp;</label><input type="submit"/>
</form>