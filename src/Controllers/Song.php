<?php
class Song extends Controller
{
    private $songModel;
    private $HistorySong;
    private $albumModel;

    function __construct()
    {
        $this->songModel = $this->model('Song');
        $this->HistorySong = $this->model('HistorySong');
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

    function like()
    {
        if (isset($_POST['songId'])) {
            $songId = $_POST['songId'];
            $likeSong = $this->albumModel->reactLike(2, $songId, date('Y-m-d'));
        }
    }

    function unLike()
    {
        if (isset($_POST['songId'])) {
            $songId = $_POST['songId'];
            $unLikeSong = $this->albumModel->unLike(2, $songId);
        }
    }

    function playSong()
    {
        if (isset($_POST['songId'])) {
            $songId = $_POST['songId'];
            $playSong = $this->albumModel->countOfSong($songId);
        }
    }

    function songHistory()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = $_POST['name'];
            $arrSong = $this->songModel->getIdSong($name);
            $array = [
                'UserID'    => 5,
                'SongID'    => $arrSong['SongID'],
            ];
            $data = $this->songModel->getIdSong($arrSong['SongID'], 5); // 1 => userId
            if ($data == NULL) {
                $results = $this->HistorySong->add($array);
            }
        }
    }
}
