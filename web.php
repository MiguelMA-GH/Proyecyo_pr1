<?php


include(dirname(__FILE__)."/includes/header.php");
include(dirname(__FILE__)."/includes/menu.php");
$central = "";


if (isset($_REQUEST['action'])) $action = $_REQUEST["action"];
else $action = "home";

switch($action) {
    case "home":
        $central = "/web.php";
        break;
    case "login":
        $central = "/login.php";
        break;
    case "registro":
            $central = "/web.php";
            break;
    case "productos":
            $central = "/productos.php";
            break;
    case "carrito":
            $central = "/web.php";
            break;
    default:
        $data["error"] = "Accion no permitida";
        $central = "/includes/home.php";

}

include(dirname(__FILE__)."/includes/footer.php");
?>