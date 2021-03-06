<?php

$jf = file_get_contents(CONFIG.'/configs.json');

$data = json_decode($jf);
var_dump($data);




echo "<h2>_REQUEST:</h2>";
var_dump($_REQUEST);
echo "<h2>GET:</h2>";
var_dump($_GET);
echo "<h2>POST:</h2>";
var_dump($_POST);
?>
<h1>Test Controller</h1>
<form action="/test" method="GET">
    <label for="">Name:</label>
    <input type="text" name="Username" value="My name">
    <input type="submit" name="submit" value="Bla-bla-bla">
</form>
