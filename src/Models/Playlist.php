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
        $sql = "DELETE FROM `likesong` WHERE userID = '$userId' and SongID = '$songId'";
        $result = false;
        if(mysqli_query($this->db->conn, $sql)){
            $result = true;
        }
        return json_encode($result);
    
    }

    public function countOfSong($songId)
    {
        $sql = "INSERT INTO playsong(SongID, CountOfSong) VALUES('$songId', 1) ON DUPLICATE KEY UPDATE CountOfSong = CountOfSong + 1";
        $result = $this->db->execute($sql);
        return $result;
    }

    public function getPlaylistById($id)
    {
        $sql = "SELECT * FROM Playlist WHERE PlaylistID = '$id'";
        $result = $this->db->select($sql);
        return $result;
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
        if ($data['PlaylistImage'] != 'None'){
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
        } else {
            $sql = "UPDATE `playlist` 
            SET 
                `PlaylistName`='$PlaylistName',
                `PlaylistDescription`='$PlaylistDescription',
                `AmountLike`='$AmountLike',
                `AmountSong`='$AmountSong',
                `PlaylistLength`='$PlaylistLength',
                `CreateDate`='$CreateDate'
            WHERE PlaylistID=$id";
        }
        $result = false;
        if (mysqli_query($this->db->conn, $sql)) {
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
    // Tìm kiếm
    function search($name)
    {
        $sql = "SELECT * FROM playlist where PlaylistName LIKE '%".$name."%' ";
        $result = $this->db->select($sql);
        if ($result) {
            foreach($result as $key => $val) {
                $result[$key]['PlaylistImage'] = base64_encode($val['PlaylistImage']);
            }
        }
        return $result;
    }
    function getAll()
    {
        $sql = "SELECT * FROM playlist";
        $result = $this->db->select($sql);
        if ($result) {
            foreach($result as $key => $val) {
                $result[$key]['PlaylistImage'] = base64_encode($val['PlaylistImage']);
            }
        }
        return $result;
    }
    function listIdSong($idPlayList){
        $listId = count($idPlayList) > 0 ? implode(",", $idPlayList) : '';
        $sql = "SELECT * FROM playlistsong where  PlaylistID  IN($listId)";
        $result = $this->db->select($sql);
        return $result;

    }

    // Fix KhangProPlayer
    // Hàm lấy tổng só Playlist của User
    public function getCountUserplaylist($userID)
    {
    $sql = "SELECT COUNT(*) AS total FROM userplaylist WHERE UserID = $userID";
    $result = $this->db->select($sql);
    return $result[0]['total'];
    }
    // Hàm lấy chi tiết từng playlist của user
    public function getUserIDPlaylist($userID)
    {
    $sql = "SELECT PlaylistID FROM userplaylist WHERE UserID = $userID";
    $result = $this->db->select($sql);
    $playlistIDs = array();
    foreach ($result as $row) {
        $playlistIDs[] = $row['PlaylistID'];
    }
    return $playlistIDs;
    }
    //Hàm lấy SongID của User
    public function getUserSongID($id)
    {
    $sql = "SELECT SongID FROM likesong WHERE UserID = $id";
    $result = $this->db->select($sql);
    $songIDs = array();
    foreach ($result as $row) {
        $songIDs[] = $row['SongID'];
    }
    return $songIDs;
    }
    // Hàm lấy danh sách bài hát
    function getSongList() {
        $sql = "SELECT * FROM Song, Album, Artist, SongArtist WHERE (Song.AlbumID = Album.AlbumID) AND (Song.SongID = SongArtist.SongID AND SongArtist.ArtistID = Artist.ArtistID)";
        $result = $this->db->select($sql);
        return $result;
      }
    // Hàm tìm kiếm bài hát trong danh sách theo tên 
      function searchSongs($searchTerm) {
        $sql = "SELECT * FROM Song, Album, Artist, SongArtist WHERE (Song.AlbumID = Album.AlbumID) AND (Song.SongID = SongArtist.SongID AND SongArtist.ArtistID = Artist.ArtistID) AND Song.SongName LIKE '%{$searchTerm}%'";
        $result = $this->db->select($sql);
        return $result;
      }
    // Hàm thêm bài hát vào playlist
      function addSongToPlaylist($playlistID, $songID) {
        $date = date('Y-m-d');
        $sql = "INSERT INTO playlistsong (PlaylistID, SongID, AddDate) VALUES ('$playlistID', '$songID', '$date')";
        $result = mysqli_query($this->db->conn, $sql);
        return $result;
    }
    // Hàm lấy SongID của Playlist
    public function getPlaylistSongIDs($playlistID)
    {
    $sql = "SELECT SongID FROM playlistsong WHERE PlaylistID = $playlistID";
    $result = $this->db->select($sql);
    $songIDs = array();
    foreach ($result as $row) {
        $songIDs[] = $row['SongID'];
    }
    return $songIDs;
    }
    // Tạo Playlist mới trắng tt
    public function CreatePlaylist()
    {   
        $date = date('Y-m-d');
        $sql = "INSERT INTO playlist (PlaylistID, PlaylistName, PlaylistDescription, AmountLike, AmountSong, PlaylistLength, CreateDate, PlaylistImage) VALUES (NULL, 'Khang ProPlayer', 'Khang đẹp trai','10', '10', '1000', '$date', NULL)";
        $result = mysqli_query($this->db->conn, $sql);
        return $result;
    }

    // Hàm lấy PlaylistID của bảng playlist 

    public function getAllPlaylistIDs()
    {
    $sql = "SELECT PlaylistID FROM playlist";
    $result = $this->db->select($sql);
    $playlistIDs = array();
    foreach ($result as $row) {
        $playlistIDs[] = $row['PlaylistID'];
    }
    return $playlistIDs;
    }
    
    // Hàm tạo userplaylist

    public function createUserPlaylist($userID, $playlistID)
    {
    $date = date('Y-m-d');
    $sql = "INSERT INTO userplaylist (UserID, PlaylistID, CreateDate) VALUES ('$userID', '$playlistID', '$date')";
    $result = mysqli_query($this->db->conn, $sql);
    return $result;
    }

    // Hàm xóa userplaylist

    public function deleteUserPlaylist($userID, $playlistID)
    {
    $sql = "DELETE FROM userplaylist WHERE `userplaylist`.`UserID` = '$userID' AND `userplaylist`.`PlaylistID` = '$playlistID'";
    $result = mysqli_query($this->db->conn, $sql);
    return $result;
    }
    
}
