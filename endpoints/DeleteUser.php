<?php
require_once('../clases/User.class.php');

if($_SERVER['REQUEST_METHOD'] == 'DELETE' && isset($_GET['id'])){
    User::delete_user($_GET['id']);
}
?>