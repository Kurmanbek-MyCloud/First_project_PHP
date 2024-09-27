<?php
    $title = 'Главная страница';
    require_once "blocks/headers.php";
?>

<h1>Главная страница</h1>

<?php
    echo date("m-d H:i:s", strtotime("-10 Week"));
    echo "<br><br>";
    echo date("m-d H:i:s", strtotime("Last Monday"));
    echo "<br><br>";

    require_once "blocks/footers.php"
?>
