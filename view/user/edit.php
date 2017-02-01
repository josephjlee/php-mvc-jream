<h1>Edit User</h1>

<form class="user-control form-horizontal" method="post" action="<?=URL;?>user/editSave/<?=$this->user['id'];?>">
    <div class="form-group">
        <label class="control-label col-xs-2" for="">Login</label>
        <div class="col-xs-10">
            <input type="text" name="login" value="<?=$this->user['name'];?>">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-2" for="">Password</label>
        <div class="col-xs-10">
            <input type="text" name="pass">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-2" for="role">Role</label>
        <div class="col-xs-10">
            <select class = "user-form" name="role">
                <option value="default"<?php if($this->user['role'] == 'default') echo 'selected';?> >Default</option>
                <option value="owner" <?php if($this->user['role'] == 'owner') echo 'selected';?>>Owner</option>
                <option value="admin" <?php if($this->user['role'] == 'admin') echo 'selected';?>>Admin</option>
            </select></div>
    </div>
    <div class="form-group">
        <div class="col-xs-2"></div>
        <div class="col-xs-10">
            <input type="submit"/>
        </div>
    </div>
</form>


<hr>