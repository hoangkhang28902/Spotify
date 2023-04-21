<?php 

require_once './src/core/Database.php';

class UserModel {

    private $db;

    public function __construct() {
        $this->db = new Database();
    }

    function getUserByUsername($username)
    {
        $sql = "SELECT * FROM User WHERE Username = '$username'";
        $result = $this->db->select($sql);
        return $result;
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
        $sql = "SELECT * FROM User WHERE UserID = '$id'";
        $result = $this->db->select($sql);
        return $result;
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

    // Update Username
    public function updateUsername($userId, $newUsername) {
        $sql = "UPDATE User SET Username = '$newUsername' WHERE UserID = '$userId'";
        $this->db->execute($sql);
    }

    public function delete(int $id)
    {

    }
    
}

// $user = new User();
// $rs = $user->getUsers();
// foreach ($rs as $v) {
//     print $v['Username'];
// }