<?php
require_once('../clases/User.class.php');

if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_GET['email']) && isset($_GET['name']) && isset($_GET['city']) && isset($_GET['telephone'])){
    User::create_user($_GET['email'],$_GET['name'],$_GET['city'],$_GET['telephone']);
}
?>