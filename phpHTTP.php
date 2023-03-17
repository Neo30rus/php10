<?php
var_dump($_POST);
if (!empty($_POST['fio'])){
    $fio = $_POST['fio'];
}
?>
<form method="post">
    <input type="text"name="=fio[firstname]">
    <input type="text" name="fio[lastname]">
    <input type="submit">
    </form>


