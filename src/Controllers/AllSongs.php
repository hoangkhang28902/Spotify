<?php
class AllSongs extends Controller
{
    public function __construct()
    {
        $this->SongModel = $this->model('Song');
    }

    public function index()
    {
        $arrSong = $this->SongModel->getSongs();
        $song = $this->SongModel->getSongs();

        $this->view('Listener/AllSongs', [
            'song' => $song,
            'Page' => 'ContentHome',
            'arrSong' => $arrSong,
        ]);
    }
}
