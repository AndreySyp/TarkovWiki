<?php
$title = 'Ammo 545';
$description = 'Патроны 5.45';
$ammo = 'a545';
require_once($_SERVER['DOCUMENT_ROOT'] . '/tarkovWiki/layouts/header.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '/tarkovWiki/classes/CDataBase.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '/tarkovWiki/function/tableCreate.php');
?>

<h1>Патроны 5.45x39</h1>

<h2>Что стреляет?</h2><hr>
<div>Различные модификация АК, а также РПК.</div>

<h2>Таблица патронов</h2><hr>
<?php
$result = ($CDataBase->selectAll($ammo));
tCreate($result);
?>

<h2>Редактирование</h2><hr>
<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '/tarkovWiki/layouts/editForm.php');
?>

<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '/tarkovWiki/layouts/footer.php');
?>