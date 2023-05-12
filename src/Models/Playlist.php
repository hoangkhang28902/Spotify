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
    public function getPlaylists()
    {
        $sql = "SELECT * FROM playlist";
        $result = mysqli_query($this->db->conn, $sql);
        return $result;
    }
    

    function getPlaylist($id)
    {
        $sql = "SELECT * FROM Playlist, Song, Album, Artist, PlaylistSong, SongArtist WHERE (Playlist.PlaylistID = PlaylistSong.PlaylistID) && (Song.SongID = PlaylistSong.SongID && PlaylistSong.PlaylistID = $id) && (Song.AlbumID = Album.AlbumID) && (Song.SongID = SongArtist.SongID && SongArtist.ArtistID = Artist.ArtistID)";
        $result = $this->db->select($sql);
        return $result;
    }

    public function getLike($userId)    
    {
        $sql = "SELECT * from likesong WHERE likesong.UserID = '$userId'";
        $result = $this->db->select($sql);
        return $result;
    }

    public function reactLike($userId, $songId, $Date)
    {
        $sql = "INSERT INTO likesong (UserId, SongId, LikeDate) VALUES ('$userId', '$songId', '$Date')";
        $result = $this->db->execute($sql);
        return $result;
    }

    public function unLike($userId, $songId)
    {
        $sql = "DELETE FROM `likesong` WHERE userID = '$userId' and SongID = '$songID'";
        $result = false;
        if(mysqli_query($this->db->conn, $sql)){
            $result = true;
        }
        return json_encode($result);
    }
    
    // CRUD OPERATIONS
    public function create(array $data)
    {
        $PlaylistName = $data['PlaylistName'];
        $PlaylistDescription = $data['PlaylistDescription'];
        $AmountLike = $data['AmountLike'];
        $AmountSong = $data['AmountSong'];
        $PlaylistLength = $data['PlaylistLength'];
        $CreateDate = $data['CreateDate'];
        $PlaylistImage = $data['PlaylistImage'];
        
        $sql = "INSERT INTO playlist (PlaylistName, PlaylistDescription, AmountLike, AmountSong,PlaylistLength,CreateDate,PlaylistImage) 
                VALUES ('$PlaylistName', '$PlaylistDescription', '$AmountLike', '$AmountSong', '$PlaylistLength', '$CreateDate', '$PlaylistImage')";
        $result = $this->db->execute($sql);
        return $result;
    }
    public function edit($id){
        $sql = "SELECT * FROM playlist WHERE PlaylistID = $id";
        $result = mysqli_query($this->db->conn, $sql);
        return $result;
    }


    public function update(int $id, array $data)
    {
        $PlaylistName = $data['PlaylistName'];
        $PlaylistDescription = $data['PlaylistDescription'];
        $AmountLike = $data['AmountLike'];
        $AmountSong = $data['AmountSong'];
        $PlaylistLength = $data['PlaylistLength'];
        $CreateDate = $data['CreateDate'];
        $PlaylistImage = $data['PlaylistImage'];
    
        $sql = "UPDATE `playlist` 
            SET 
                `PlaylistName`='$PlaylistName',
                `PlaylistDescription`='$PlaylistDescription',
                `AmountLike`='$AmountLike',
                `AmountSong`='$AmountSong',
                `PlaylistLength`='$PlaylistLength',
                `CreateDate`='$CreateDate',
                `PlaylistImage`='$PlaylistImage'
            WHERE PlaylistID=$id";
        $result = false;
        if(mysqli_query($this->db->conn, $sql)){
            $result = true;
        }
        return json_encode($result);
    }

    public function delete(int $id)
    {
        {
            $sql = "DELETE FROM `playlist` WHERE PlaylistID = $id";
            $result = false;
            if(mysqli_query($this->db->conn, $sql)){
                $result = true;
            }
            return json_encode($result);
        }
    }
        // Phân trang
    public function getPlaylistsLimit($offsetPlaylist, $limitPlaylist)
    {
        $sql = "SELECT * FROM playlist ORDER BY PlaylistID DESC LIMIT $offsetPlaylist, $limitPlaylist";
        $result = mysqli_query($this->db->conn, $sql);
        return $result;
    }
    
}
