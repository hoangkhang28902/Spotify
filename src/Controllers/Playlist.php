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

        $this->view('Listener/index', [
            'listsong' => $arrPlaylist,
            'Page' => 'SongList',
            'type' => 'Playlist'
        ]);
    }
}
