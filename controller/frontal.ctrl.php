<?php

switch ($s) {
    case 'item':
        require_once "view/item.ctrl.php";
        break;

    default:
        require_once "controller/index.ctrl.php";
        break;
}

 ?>
