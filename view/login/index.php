<?php
$title = "Login page";


?>
<body>

<div id="content">
    <h1>Welcome to <?=$title;?> page!</h1>
    <p><?=$this->msg;?></p>
</div>
<h3>Login</h3>

<form action="login/loginDo" method="post" >
    <p>
        <lable>Login</lable><br>
        <input type="text" name="login">
    </p>
    <p>
        <lable>Password</lable><br>
        <input type="password" name="pass">
    </p>
    <input type="submit" value="login" name="submit">
</form>

