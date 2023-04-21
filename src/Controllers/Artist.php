<?php
class Artist extends Controller
{
    private $artistModel;

    function __construct()
    {
        $this->artistModel = $this->model('Artist');
    }

    function show($id)
    {
        $arrArtist = $this->artistModel->getArtist($id);

        $this->view('Listener/index', [
            'listsong' => $arrArtist,
            'Page' => 'SongList',
            'type' => 'Artist'
        ]);
    }
}
