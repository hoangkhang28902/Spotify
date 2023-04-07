<?php 

require_once '../core/Database.php';

class User {

    private $db;

    public function __construct() {
        $this->db = new Database();
    }

    // Get All Users
    public function getUsers()
    {
        $sql = "SELECT * FROM User";
        $result = $this->db->select($sql);
        return $result;
    }

    // Get User By Id
    public function getUserById($id)
    {
        $sql = "SELECT * FROM User WHERE id = '$id'";
        $result = $this->db->execute($sql);
    }

    // CRUD OPERATIONS
    public function create(array $data)
    {

    }

    public function read(int $id)
    {

    }

    public function update(int $id, array $data)
    {

    }

    public function delete(int $id)
    {

    }
}
