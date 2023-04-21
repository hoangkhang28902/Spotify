<?php
require_once "./src/core/Database.php";

class ArtistModel
{
    private $db;

    function __construct()
    {
        $this->db = new Database();
    }

    // Get All Songs
    public function getArtist()
    {
        $sql = "SELECT * FROM artist";
        $result = $this->db->select($sql);
        return $result;
    }

    // function getArtist($id)
    // {
    //     $sql = "SELECT * FROM Song, Artist, Album, SongArtist WHERE (Artist.ArtistID = $id) && (Song.SongID = SongArtist.SongID && SongArtist.ArtistID = Artist.ArtistID)  && (Song.AlbumID = Album.AlbumID)";
    //     $result = $this->db->select($sql);
    //     return $result;
    // }
}
