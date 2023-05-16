<?php
class Song extends Controller
{
    private $songModel;
    private $HistorySong;

    function __construct()
    {
        $this->songModel = $this->model('Song');
        $this->HistorySong = $this->model('HistorySong');
    }

    function show($id)
    {
        $arrSong = $this->songModel->getSong($id);

        $this->view('Listener/index', [
            'listsong' => $arrSong,
            'Page' => 'SongList',
            'type' => 'Song'
        ]);
    }
    function songHistory(){
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $name = $_POST['name'];
            $arrSong = $this->songModel->getIdSong($name);
            $array = [
                'UserID'    => 5,
                'SongID'    => $arrSong['SongID'],
            ];
            $data = $this->songModel->getIdSong($arrSong['SongID'], 5); // 1 => userId
            if($data == NULL){
                $results = $this->HistorySong->add($array);
            }
        }
    }
}
