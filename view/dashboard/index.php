<?php
$title = "Dashboard";


?>
<body>

<div id="content">
    <h1>Welcome to <?=$title;?> page!</h1>

    <form id ="randomInsert" action="<?=URL;?>dashboard/xhrInsert" method="POST">
        <input type="text" name="text">
        <input type="submit" value="ok">
    </form>
</div>

<div id="listInsert">

</div>

