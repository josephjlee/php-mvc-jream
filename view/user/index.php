<h1>User</h1>

<form class="user-control form-horizontal" method="post" action="<?=URL;?>user/create">
    <div class="form-group">
        <label class="control-label col-xs-2" for="">Login</label>
        <div class="col-xs-10">
            <input type="text" name="login">
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
            <option value="default">Default</option>
            <option value="owner">Owner</option>
            <option value="admin">Admin</option>
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
<table>

<?php
    foreach($this->userList as $key => $val){
        echo "<tr>";
        echo "<td> ".$val['id']."</td>";
        echo "<td>".$val['role']." </td>";
        echo "<td>".$val['name']."</td>";
        echo '<td><a href="'.URL.'user/delete/'.$val['id'].'">Delete</a>&nbsp;';
        echo '<a href="'.URL.'user/edit/'.$val['id'].'">Edit</a></td>';
        echo "</tr>";
    }


?>
</table>
