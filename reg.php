<?php $title = "Регистрация";
require "blocks/html.php"; ?>
<body>

<?php require "blocks/header.php"?>

<form method="post" class="Reg_Form">
    <center>Введите почту</center>
    <center><input type="email" name="SignUp" value="" required=""></center>
    <center>Введите логин</center>
    <center><input name="SignUp" value=""></center>
    <center>Введите пароль</center>
    <center><input type="password" name="SignUp" value="" required=""></center>
    <center>Подтвердите пароль</center>
    <center><input type="password" name="SignUp" value="" required=""></center>
    <center><button>Ввести</button></center>
</form>

</body>
</html>
