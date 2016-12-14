<?php

/**
* Modelo ActiveRecord User
*/
namespace Mvc\Model;

require_once '../app/Model.php';

class User extends \Mvc\App\Model
{
    const PAGE_SIZE = 3;
    
    public function __construct()
    {
        parent::__construct();
        # code...
    }
    public function get($page)
    {
        $offset = ($page - 1) * $this::PAGE_SIZE;
        $size = $this::PAGE_SIZE;

        $sql = "select * from cliente limit $size offset $offset";
        $stmt = $this->_pdo->prepare($sql);
        $stmt->execute();
        $rows = $stmt->fetchAll(\PDO::FETCH_ASSOC);
        //var_dump($rows);
        return $rows;
    }

    public function insert()
    {
        $sql = "insert into client(name, address, phone, credit) values(:name, :address, :phone, :credit)";
        $stmt = $this->_pdo->prepare($sql);
        $stmt->bindValue(':name', $_POST['name']);
        $stmt->bindValue(':address', $_POST['address']);
        $stmt->bindValue(':phone', $_POST['phone']);
        $stmt->bindValue(':credit', $_POST['credit']);

        $stmt->execute();
    } 
}
