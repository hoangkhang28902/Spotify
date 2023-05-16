<?php
class Song extends Controller
{
    private $songModel;

    function __construct()
    {
        $this->songModel = $this->model('Song');
    }

    function show($id)
    {
        $arrSong = $this->songModel->getSong($id);
        $likeForUser = $this->songModel->getLike(2);

        $this->view('Listener/index', [
            'listsong' => $arrSong,
            'Page' => 'SongList',
            'like' => $likeForUser,
            'type' => 'Song'
        ]);
    }

    function like() {
        if (isset($_POST['songId'])) {
            $songId = $_POST['songId'];
            $likeSong = $this->albumModel->reactLike(2, $songId, date('Y-m-d'));
        }
    }

    function unLike() {
        if (isset($_POST['songId'])) {
            $songId = $_POST['songId'];
            $unLikeSong = $this->albumModel->unLike(2, $songId);
        }      
    }

    function playSong() {
        if (isset($_POST['songId'])) {
            $songId = $_POST['songId'];
            $playSong = $this->albumModel->countOfSong($songId);
        }
    }
}
