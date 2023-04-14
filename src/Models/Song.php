<?php 

require_once './src/core/Database.php';

class Song {

    private $db;

    public function __construct() {
        $this->db = new Database();
    }

    // Get All Songs
    public function getSongs()
    {
        $sql = "SELECT * FROM Song";
        $result = $this->db->select($sql);
        return $result;
    }

    // Get Song By Id
    public function getUserById($id)
    {
        $sql = "SELECT * FROM Song WHERE id = '$id'";
        $result = $this->db->execute($sql);
    }

    // CRUD OPERATIONS
    public function create(array $data)
    {

    }

    public function update(int $id, array $data)
    {

    }

    public function delete(int $id)
    {

    }
}
