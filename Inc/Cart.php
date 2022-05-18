<?php

session_start();

if (isset($_SESSION["cart"])) {
    # code...
    echo json_encode($_SESSION['cart']);
}
