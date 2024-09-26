<?php
require_once('DataBase.class.php');

class User
{
    public static function create_user($email, $name, $city, $telephone)
    {
        $database = new DataBase();
        $conn = $database->getConnection();

        $sql = $conn->prepare("INSERT INTO users (email, name, city, telephone) VALUES (:email, :name, :city, :telephone)");
        $sql->bindParam(':email', $email);
        $sql->bindParam(':name', $name);
        $sql->bindParam(':city', $city);
        $sql->bindParam(':telephone', $telephone);

        if ($sql->execute()) {
            header('HTTP/1.1 200 OK');
        } else {
            header('HTTP/1.1 500 Internal Server Error');
        }
    }
    public static function delete_user($id)
    {
        $database = new DataBase();
        $conn = $database->getConnection();

        $sql = $conn->prepare("DELETE FROM users WHERE id=:id");
        $sql->bindParam(':id', $id);

        if ($sql->execute()) {
            header('HTTP/1.1 200 OK');
        } else {
            header('HTTP/1.1 500 Internal Server Error');
        }
    }
    public static function get_users()
    {
        $database = new DataBase();
        $conn = $database->getConnection();

        $sql = $conn->prepare("SELECT * FROM users");

        if ($sql->execute()) {
            $res = $sql->fetchAll();
            echo json_encode($res);
            header('HTTP/1.1 200 OK');
        } else {
            header('HTTP/1.1 500 Internal Server Error');
        }
    }
    public static function update_user($id, $email, $name, $city, $telephone)
    {
        $database = new DataBase();
        $conn = $database->getConnection();

        $sql = $conn->prepare("UPDATE users set email=:email, name=:name, city=:city,telephone=:telephone WHERE id=:id");
        $sql->bindParam(':id', $id);
        $sql->bindParam(':email', $email);
        $sql->bindParam(':name', $name);
        $sql->bindParam(':city', $city);
        $sql->bindParam(':telephone', $telephone);

        if ($sql->execute()) {
            header('HTTP/1.1 200 OK');
        } else {
            header('HTTP/1.1 500 Internal Server Error');
        }
    }
}
