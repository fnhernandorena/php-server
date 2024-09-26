<?php
require_once('../clases/User.class.php');

if($_SERVER['REQUEST_METHOD'] == 'PUT' && isset($_GET['id']) && isset($_GET['email']) && isset($_GET['name']) && isset($_GET['city']) && isset($_GET['telephone'])){
    User::create_user($_GET['id'],$_GET['email'],$_GET['name'],$_GET['city'],$_GET['telephone']);
}
?>