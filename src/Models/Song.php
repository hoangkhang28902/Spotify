<?php 

require_once './src/core/Database.php';

class SongModel {

    private $db;

    public function __construct() {
        $this->db = new Database();
    }

    function getSong($id)
    {
        $sql = "SELECT * FROM Song, Album, Artist, SongArtist WHERE (Song.SongID = $id) && (Song.AlbumID = Album.AlbumID) && (Song.SongID = SongArtist.SongID && SongArtist.ArtistID = Artist.ArtistID)";
        $result = $this->db->select($sql);
        return $result;
    }

    // Get All Songs
    public function getSongs()
    {
        $sql = "SELECT * FROM Song";
        $result = $this->db->select($sql);
        return $result;
    }

    // Get Song By Id
    public function getSongById($id)
    {
        $sql = "SELECT * FROM Song WHERE SongID = '$id'";
        $result = $this->db->select($sql);
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
