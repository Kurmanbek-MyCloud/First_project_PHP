<?php
    $title = 'Про нас';
    require "blocks/headers.php";
?>
<div class="container mt-2">
    <h1>Про нас </h1>

    <form action="check_post.php" method="post">
        <input type="text" name="username" placeholder="Введите имя" class=form-control><br>
        <input type="email" name="email" placeholder="Введите email" class=form-control><br>
        <input type="password" name="password" placeholder="Введите пароль" class=form-control><br>
        <textarea name="message" class="form-control" placeholder="Введите сообщение"></textarea>
        <input type="submit" value="Отправить" class="btn btn-success">
    </form>
</div>


<?php
    require "blocks/footers.php"
?>