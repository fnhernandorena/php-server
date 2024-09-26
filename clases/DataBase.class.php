<?php
class DataBase{
    private     $host = 'localhost:3306';
    private $user = 'fran';
    private $password = '040214';
    private $dbname = 'test_db';

    public function getConnection(){
        $hostDB = 'mysql:host='.$this->host.';dbname='.$this->dbname.';';

        try{
            $dbConnection = new PDO($hostDB, $this->user, $this->password);
            $dbConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $dbConnection;
        } catch (PDOException $e){
            die($e->getMessage());
        }
    }
}
?>