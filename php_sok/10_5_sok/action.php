<?php

if(!empty($_POST)){
    print_r($_POST);
    echo "<div>Данные:</div>";
    echo $_POST['FIO'] . '<br>';
    echo $_POST['message'] . '<br>';
    if (isset($_POST['subscribe'])) {
    }    echo $_POST['subscribe'] . '<br>';
};
if(!empty($_GET)){
    print_r($_GET);
}

