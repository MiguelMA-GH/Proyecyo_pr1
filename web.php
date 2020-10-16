<?php


include(dirname(__FILE__)."/includes/header.php");
include(dirname(__FILE__)."/includes/menu.php");
$central = "";
include(dirname(__FILE__)."/includes/footer.php");

if (isset($_REQUEST['action'])) $action = $_REQUEST["action"];
else $action = "home";

switch($action) {
    case "home":
        $central = "/includes/home.php";
        break;
    case "login":
        $central = "/login.php";
        break;
    default:
        $data["error"] = "Accion no permitida";
        $central = "/includes/home.php";

}


?>