<?php 

require_once './src/core/Database.php';

class PodcastModel{

    private $db;

    public function __construct() {
        $this->db = new Database();
    }

    // Get All Songs
    public function getPodcast()
    {
        $sql = "SELECT * FROM podcast";
        $result = $this->db->select($sql);
        return $result;
    }

    // Get All Songs
    // public function getPodcast()
    // {
    //     $sql = "SELECT * FROM podcast";
    //     $result = $this->db->select($sql);
    //     return $result;
    // }

    // Get Song By Id
    public function getPodcastById($id)
    {
        $sql = "SELECT * FROM podcast WHERE PodcastID = '$id'";
        $result = $this->db->execute($sql);
        return $result;
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
