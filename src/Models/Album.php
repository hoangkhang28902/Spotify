<?php
require_once "./src/core/Database.php";

class AlbumModel
{
    private $db;

    function __construct()
    {
        $this->db = new Database();
    }

    // Get All Songs
    public function getAlbum()
    {
        $sql = "SELECT * FROM album";
        $result = $this->db->select($sql);
        return $result;
    }
    

    // function getAlbum($id)
    // {
    //     $sql = "SELECT * FROM Song, Album, Artist, SongArtist WHERE (Song.AlbumID = $id && Song.AlbumID = Album.AlbumID) && (Song.SongID = SongArtist.SongID && SongArtist.ArtistID = Artist.ArtistID)";
    //     $result = $this->db->select($sql);
    //     return $result;
    // }

    function getArtist($id)
    {
        $sql = "SELECT * FROM Artist, AlbumArtist WHERE (AlbumArtist.AlbumID = $id && AlbumArtist.ArtistID = Artist.ArtistID)";
        $result = $this->db->select($sql);
        return $result;
    }

    // Get Song By Id
    public function getAlbumById($id)
    {
        $sql = "SELECT * FROM album WHERE AlbumID = '$id'";
        $result = $this->db->execute($sql);
        return $result;
    }
}
