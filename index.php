<?php
$title = 'Tarkov Wiki';
$description = 'Главная страница вики, где можно узнать мого чего интересного о таркове';
require_once($_SERVER['DOCUMENT_ROOT'] . '/tarkovWiki/layouts/header.php');
?>

<h2>Информация о сайте</h2><hr>
<div>
    Сайт был создан в качестве учебного проекта. Мною была выбрана теме по игре, а именно тарков.<br>
    На сайте показаны 2 типа патронов, именно 5.56 и 5.45, и различные типы этих боеприпасов.<br>
    Во время создания сайта, я пользовался js (jquery), less.<br>
    <br>
    Так как я не знаю чем еще заполнить эту страницу, то ниже можно увидеть парочку мемов по игре<br>
</div>

<h2>Мемы</h2><hr>
<div class="all">
    <input checked type="radio" name="respond" id="desktop">
    <article id="slider">
        <input checked type="radio" name="slider" id="switch1">
        <input type="radio" name="slider" id="switch2">
        <input type="radio" name="slider" id="switch3">
        <input type="radio" name="slider" id="switch4">
        <input type="radio" name="slider" id="switch5">
        <div id="slides">
            <div id="overflow">
                <div class="image">
                    <article><img src="images/meme1.png" alt="meme"></article>
                    <article><img src="images/meme2.jpg" alt="meme"></article>
                    <article><img src="images/meme3.png" alt="meme"></article>
                    <article><img src="images/meme4.jpg" alt="meme"></article>
                    <article><img src="images/meme5.jpg" alt="meme"></article>
                </div>
            </div>
        </div>
        <div id="controls">
            <label for="switch1"></label>
            <label for="switch2"></label>
            <label for="switch3"></label>
            <label for="switch4"></label>
            <label for="switch5"></label>
        </div>
        <div id="active">
            <label for="switch1"></label>
            <label for="switch2"></label>
            <label for="switch3"></label>
            <label for="switch4"></label>
            <label for="switch5"></label>
        </div>
    </article>
</div>

<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '/tarkovWiki/layouts/footer.php');
?>