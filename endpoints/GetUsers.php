<?php
require_once('../clases/User.class.php');

if($_SERVER['REQUEST_METHOD'] == 'GET' ){
    User::get_users();
}
?>