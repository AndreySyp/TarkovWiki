<?php
$title = 'Ammo 556';
$description = 'Патроны 5.56';
$ammo = 'a556';
require_once($_SERVER['DOCUMENT_ROOT'] . '/tarkovWiki/layouts/header.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '/tarkovWiki/classes/CDataBase.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '/tarkovWiki/function/tableCreate.php');
?>

<h1>Патроны 5.56x39</h1>

<h2>Что стреляет?</h2><hr>
<div>На данный момент только M4A1 и HK416.</div>

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





