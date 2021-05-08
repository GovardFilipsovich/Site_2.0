<?php $title = "Главная";
require "blocks/html.php"; ?>
<body>

<?php require "blocks/header.php"?>

<form method="post" class="Profile_buttons">
    <input type="submit" name="SignUp" value="Регистрация" formaction="reg.php">
    <input type="submit" name="SignIn" value="Вход" formaction="auth.php">
</form>



<center>
    Привет, гость, на этом сайте вы можете найти много интереных для нас (разработчиков сайта) вещей. <br>
    Например, вы можете опробовать редактор блок-схем и конвертер их в паскаль <br>
    о для начала работы с этим инструментом вы должны войти или зарегистрироваться. <br>
    Для гостей не доступен функционал сайта.
</center>

<?php 
    require "blocks/menu.php";
    echo $open_string;
        menu(array("Редактор блок-схем", "Редактор блок-схем", "Редактор блок-схем"));
    echo $close_string;
?>

<script src="js/settings_button.js"></script>

</body>
</html>
