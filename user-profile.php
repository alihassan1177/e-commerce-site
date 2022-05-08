<?php

require "./Inc/Header.php";

if (!$app->user->getAuth()) {
    header("location:./login.php");
}

$app->helpers->print_array($app->user->getLoggedUser());

if (isset($_POST['logout'])) {
    $app->user->logout();
}

?>

<form method="post">
    <button name="logout" type="submit">Logout</button>
</form>