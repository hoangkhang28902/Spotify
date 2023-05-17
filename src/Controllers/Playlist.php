<?php
class Playlist extends Controller
{
    private $playlistModel;

    function __construct()
    {
        $this->playlistModel = $this->model('Playlist');
    }

    function show($id)
    {
        $arrPlaylist = $this->playlistModel->getPlaylist($id);
        $likeForUser = $this->playlistModel;

        $this->view('Listener/index', [
            'listsong' => $arrPlaylist,
            'like' => $likeForUser,
            'Page' => 'SongList',
            'type' => 'Playlist'
        ]);
    }

    // function getLikeSong() {
    //     if (isset($_POST['userId'])) {
    //         $userId = $_POST['userId'];
    //         $getLikeSong = $this->playlistModel->getLike($userId);

    //         echo json_encode($getLikeSong);

    //     }        
    // }

    function like() {
        if (isset($_POST['songId'])) {
            $songId = $_POST['songId'];
            $likeSong = $this->playlistModel->reactLike(2, $songId, date('Y-m-d'));
        }
    }

    function unLike() {
        if (isset($_POST['songId'])) {
            $songId = $_POST['songId'];
            $unLikeSong = $this->playlistModel->unLike(2, $songId);
        }      
    }

    function playSong() {
        if (isset($_POST['songId'])) {
            $songId = $_POST['songId'];
            $playSong = $this->playlistModel->countOfSong($songId);
        }
    }
}
