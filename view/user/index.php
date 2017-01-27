<h1>User</h1>

<form class="user-control" method="post" action="<?=URL;?>user/create">
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
