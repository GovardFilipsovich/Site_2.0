<?php $title = "Редактор";
require "blocks/html.php"; ?>
<body>

<?php require "blocks/header.php"?>

<form method="post" class="Profile_buttons">
    <input type="submit" name="SignUp" value="Регистрация" formaction="reg.html">
    <input type="submit" name="SignIn" value="Вход" formaction="auth.html">
</form>

<canvas class="Drawer" id="Canvas">Привет</canvas>
<form method="post">
    <select id="Choise" name="List">
        <option value="src/start.png">Начало</option>
        <option value="Конец">Конец</option>
        <option value="Условие">Условие</option>
        <option value="Цикл">Цикл</option>
        <option value="Ввод/вывод">Ввод/вывод</option>
        <option value="Объявление">Объявление</option>
        <option value="Функция">Функция</option>
    </select>
    
</form>

<object class="Manager" width="10%" height="14%">
        <button id="but1" name="but1">1</button>
        <button id="but2" name="but2">2</button>
        <button id="but3" name="but3">3</button>
        <button id="but4" name="but4">4</button>
        <button id="but5" name="but5">5</button>
</object>


<?php 
    require "blocks/menu.php";
    echo $open_string;
        menu(array("Профиль"));
    echo $close_string;
?>

<script src="js/settings_button.js"></script>
<script type="text/javascript" src="js/drawer.js"></script>

</body>
</html>
