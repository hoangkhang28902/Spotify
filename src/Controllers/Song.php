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

        $this->view('Listener/index', [
            'listsong' => $arrSong,
            'Page' => 'SongList',
            'type' => 'Song'
        ]);
    }
}
