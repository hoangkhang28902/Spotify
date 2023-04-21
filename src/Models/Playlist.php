<?php
require_once "./src/core/Database.php";

class PlaylistModel
{
    private $db;

    function __construct()
    {
        $this->db = new Database();
    }

    // Get All Songs
    public function getPlaylist()
    {
        $sql = "SELECT * FROM playlist";
        $result = $this->db->select($sql);
        return $result;
    }
    

    // function getPlaylist($id)
    // {
    //     $sql = "SELECT * FROM Playlist, Song, Album, Artist, PlaylistSong, SongArtist WHERE (Playlist.PlaylistID = PlaylistSong.PlaylistID) && (Song.SongID = PlaylistSong.SongID && PlaylistSong.PlaylistID = $id) && (Song.AlbumID = Album.AlbumID) && (Song.SongID = SongArtist.SongID && SongArtist.ArtistID = Artist.ArtistID)";
    //     $result = $this->db->select($sql);
    //     return $result;
    // }
}
